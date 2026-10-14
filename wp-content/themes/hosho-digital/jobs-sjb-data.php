<?php
/**
 * Adapter data lowongan: Simple Job Board (SJB) -> kontrak data tema HOSHŌ.
 *
 * Dipakai oleh page-job-opportunities.php dan page-job-detail.php.
 * Jika plugin SJB tidak aktif, otomatis jatuh ke data dummy (jobs-dummy-data.php)
 * sehingga halaman tidak error.
 *
 * Kontrak data per job:
 *   id, title, slug, category, type (slug term, mis. full-time|internship),
 *   type_label, location, posted (string tanggal), url (permalink SJB),
 *   content (HTML deskripsi), features (label => value dari Job Features SJB)
 *
 * CRUD:
 *   - Read   : fungsi di file ini (WP_Query ke post type "jobpost")
 *   - Create/Update/Delete lowongan : lewat WP-Admin > Job Board (SJB), otomatis tampil di sini
 *   - Create lamaran : form di page-job-detail.php -> admin-ajax "process_applicant_form" (SJB)
 */

if (!defined('ABSPATH')) {
  exit;
}

if (!function_exists('hosho_job_title_case')) {
  function hosho_job_title_case($title) {
    $title = trim((string) $title);
    if (function_exists('mb_convert_case') && defined('MB_CASE_TITLE')) {
      return mb_convert_case(mb_strtolower($title, 'UTF-8'), MB_CASE_TITLE, 'UTF-8');
    }
    return ucwords(strtolower($title));
  }
}

if (!function_exists('hosho_sjb_active')) {
  function hosho_sjb_active() {
    // Preview router tidak memuat WordPress penuh, sehingga fungsi CPT bisa
    // belum tersedia. Dalam kondisi itu gunakan data dummy.
    return function_exists('post_type_exists') && post_type_exists('jobpost');
  }
}

/* ---------- Fallback: SJB tidak aktif -> data dummy ---------- */
if (!hosho_sjb_active()) {
  require_once __DIR__ . '/jobs-dummy-data.php';
  if (!function_exists('hosho_job_types')) {
    function hosho_job_types() {
      return array('full-time' => 'Full Time', 'internship' => 'Internship');
    }
  }
  if (!function_exists('hosho_job_apply_fields')) {
    function hosho_job_apply_fields($job_id = 0) {
      return array();
    }
  }
  return;
}

/* ---------- Mode SJB ---------- */

/** Unserialize berlapis (SJB menyimpan meta dalam bentuk serialize ganda). */
if (!function_exists('hosho_sjb_unserialize')) {
  function hosho_sjb_unserialize($v) {
    $guard = 0;
    while (is_string($v) && is_serialized($v) && $guard++ < 3) {
      $v = maybe_unserialize($v);
    }
    return $v;
  }
}

if (!function_exists('hosho_job_types')) {
  /** slug => nama dari taxonomy jobpost_job_type (dinamis, ikut yang dibuat di admin). */
  function hosho_job_types() {
    $out = array();
    try {
      $terms = get_terms(array('taxonomy' => 'jobpost_job_type', 'hide_empty' => true));
      if (!is_wp_error($terms)) {
        foreach ($terms as $t) {
          $out[$t->slug] = $t->name;
        }
      }
    } catch (Throwable $e) {
      error_log('[HOSHO job types] ' . $e->getMessage());
    }
    return $out;
  }
}

if (!function_exists('hosho_job_from_post')) {
  function hosho_job_from_post($p) {
    $p = get_post($p);
    if (!$p || 'jobpost' !== $p->post_type) {
      return null;
    }

    $cat  = wp_get_post_terms($p->ID, 'jobpost_category', array('fields' => 'names'));
    $type = wp_get_post_terms($p->ID, 'jobpost_job_type');
    $loc  = wp_get_post_terms($p->ID, 'jobpost_location', array('fields' => 'names'));

    // Job Features (label/value) dari meta jobfeature_*
    $features = array();
    foreach ((array) get_post_custom_keys($p->ID) as $key) {
      if (0 !== strpos($key, 'jobfeature_')) {
        continue;
      }
      $val   = hosho_sjb_unserialize(get_post_meta($p->ID, $key, true));
      $label = is_array($val) && isset($val['label']) ? $val['label'] : ucwords(str_replace('_', ' ', substr($key, 11)));
      $value = is_array($val) ? (isset($val['value']) ? $val['value'] : '') : $val;
      if ('' !== trim((string) $value)) {
        $features[$label] = wp_strip_all_tags((string) $value);
      }
    }

    return array(
      'id'         => (int) $p->ID,
      'title'      => hosho_job_title_case(get_the_title($p)),
      'slug'       => $p->post_name,
      'category'   => (!is_wp_error($cat) && $cat) ? $cat[0] : '',
      'type'       => (!is_wp_error($type) && $type) ? $type[0]->slug : '',
      'type_label' => (!is_wp_error($type) && $type) ? $type[0]->name : '',
      'location'   => (!is_wp_error($loc) && $loc) ? implode(', ', $loc) : '',
      'posted'     => get_post_time('c', true, $p), // ISO 8601 (GMT) agar strtotime akurat
      'url'        => get_permalink($p),
      'content'    => wpautop(do_shortcode($p->post_content)),
      'features'   => $features,
    );
  }
}

if (!function_exists('hosho_get_jobs')) {
  function hosho_get_jobs() {
    $jobs = array();
    try {
      $q = new WP_Query(array(
        'post_type'      => 'jobpost',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'no_found_rows'  => true,
      ));
      foreach ($q->posts as $p) {
        $job = hosho_job_from_post($p);
        if ($job) {
          $jobs[] = $job;
        }
      }
      wp_reset_postdata();
    } catch (Throwable $e) {
      error_log('[HOSHO jobs] ' . $e->getMessage());
    }
    return $jobs;
  }
}

if (!function_exists('hosho_get_job')) {
  /** Ambil satu job: prioritas post SJB yang sedang dibuka, lalu ?job=slug, lalu slug argumen. */
  function hosho_get_job($slug = '') {
    try {
      if (is_singular('jobpost')) {
        return hosho_job_from_post(get_queried_object());
      }
      $slug = $slug ? sanitize_title($slug) : (isset($_GET['job']) ? sanitize_title(wp_unslash($_GET['job'])) : '');
      if (!$slug) {
        return null;
      }
      $found = get_posts(array('post_type' => 'jobpost', 'name' => $slug, 'post_status' => 'publish', 'numberposts' => 1));
      return $found ? hosho_job_from_post($found[0]) : null;
    } catch (Throwable $e) {
      error_log('[HOSHO job] ' . $e->getMessage());
      return null;
    }
  }
}

if (!function_exists('hosho_job_apply_fields')) {
  /**
   * Field form lamaran sesuai pengaturan SJB (per job, fallback ke setting global).
   * Return: array of array(name, label, type, required, options[])
   */
  function hosho_job_apply_fields($job_id = 0) {
    $fields = array();
    try {
      $raw = array();
      foreach ((array) get_post_custom_keys($job_id) as $key) {
        if (0 === strpos($key, 'jobapp_')) {
          $raw[$key] = hosho_sjb_unserialize(get_post_meta($job_id, $key, true));
        }
      }
      if (!$raw) {
        $opt = hosho_sjb_unserialize(get_option('jobapp_settings_options'));
        foreach ((array) $opt as $key => $val) {
          if (0 === strpos($key, 'jobapp_')) {
            $raw[$key] = hosho_sjb_unserialize($val);
          }
        }
      }

      foreach ($raw as $key => $val) {
        if (!is_array($val)) {
          continue;
        }
        $fields[] = array(
          'name'     => preg_replace('/[^\p{L}\p{N}\_]/u', '_', $key),
          'label'    => isset($val['label']) ? $val['label'] : ucwords(str_replace('_', ' ', substr($key, 7))),
          'type'     => isset($val['type']) ? $val['type'] : 'text',
          // SJB: "optional" = "checked" berarti WAJIB; kalau tidak ada, dianggap wajib.
          'required' => isset($val['optional']) ? ('checked' === $val['optional']) : true,
          'options'  => !empty($val['options']) ? array_map('trim', explode(',', $val['options'])) : array(),
        );
      }
    } catch (Throwable $e) {
      error_log('[HOSHO apply fields] ' . $e->getMessage());
      return array();
    }
    return $fields;
  }
}
