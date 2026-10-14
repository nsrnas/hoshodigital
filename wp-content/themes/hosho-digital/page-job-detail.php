<?php
/**
 * Template Name: Job Detail
 */

require_once __DIR__ . '/jobs-sjb-data.php';

// Data lowongan dari Simple Job Board. Dummy hanya dipakai bila SJB tidak aktif.
$is_dummy = !hosho_sjb_active();
$job      = $is_dummy
  ? hosho_get_job(isset($_GET['job']) ? sanitize_title(wp_unslash($_GET['job'])) : 'licensing-executive')
  : hosho_get_job();

if (!$job) {
  global $wp_query;
  $wp_query->set_404();
  status_header(404);
  nocache_headers();
  include get_404_template();
  exit;
}

$type_label = !empty($job['type_label']) ? $job['type_label'] : (hosho_job_types()[$job['type']] ?? $job['type']);
$ts         = strtotime($job['posted']);
$posted     = $ts ? 'Posted ' . human_time_diff($ts, time()) . ' ago' : '';

$features = array();
if (!empty($job['category'])) {
  $features['Job Category'] = $job['category'];
}
if (!empty($job['features']) && is_array($job['features'])) {
  $features = array_merge($features, $job['features']);
}

// Field form lamaran mengikuti pengaturan SJB (Settings > Application Form Fields).
$apply_fields = $is_dummy ? array() : hosho_job_apply_fields($job['id']);
if (!$apply_fields) {
  $pfx = $is_dummy ? '' : 'jobapp_'; // SJB hanya menyimpan field berawalan jobapp_
  $apply_fields = array(
    array('name' => $pfx . 'first_name', 'label' => 'First Name',       'type' => 'text',      'required' => true,  'options' => array()),
    array('name' => $pfx . 'last_name',  'label' => 'Last Name',        'type' => 'text',      'required' => true,  'options' => array()),
    array('name' => $pfx . 'email',      'label' => 'Email',            'type' => 'email',     'required' => true,  'options' => array()),
    array('name' => $pfx . 'phone',      'label' => 'Phone',            'type' => 'phone',     'required' => true,  'options' => array()),
    array('name' => $pfx . 'linkedin',   'label' => 'LinkedIn Profile', 'type' => 'text_area', 'required' => false, 'options' => array()),
  );
}

$countries = array(
  array('ID', '+62'), array('SG', '+65'), array('MY', '+60'), array('IN', '+91'),
  array('PH', '+63'), array('TH', '+66'), array('VN', '+84'), array('AU', '+61'),
  array('GB', '+44'), array('US', '+1'),
);

$svg = function ($inner) {
  return '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $inner . '</svg>';
};
$ico_case     = $svg('<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2M3 13h18M11 13v2h2v-2"/>');
$ico_pin      = $svg('<path d="M12 22s7-6.2 7-12a7 7 0 1 0-14 0c0 5.8 7 12 7 12z"/><circle cx="12" cy="10" r="2.6"/>');
$ico_cal      = $svg('<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/>');

// Selalu pakai header/footer dari plugin ini (bukan header tema/Elementor).
load_template(__DIR__ . '/header.php', true); ?>
<main id="main-content" class="job-detail-page">
  <div class="shell job-detail">

    <header class="job-detail__header">
      <h1 class="job-detail__title"><?php echo esc_html($job['title']); ?></h1>
      <div class="job-detail__meta">
        <span class="job-detail__logo"><img src="<?php echo esc_url(hosho_asset_url('logo.webp')); ?>" alt="Hosho Digital"></span>
        <span class="job-detail__chip"><?php echo $ico_case; ?><span class="job-badge job-badge--<?php echo esc_attr($job['type'] ? $job['type'] : 'default'); ?>"><?php echo esc_html($type_label); ?></span></span>
        <?php if (!empty($job['location'])) : ?>
          <span class="job-detail__chip"><?php echo $ico_pin; ?><?php echo esc_html($job['location']); ?></span>
        <?php endif; ?>
        <?php if ($posted) : ?>
          <span class="job-detail__chip"><?php echo $ico_cal; ?><?php echo esc_html($posted); ?></span>
        <?php endif; ?>
      </div>
    </header>

    <div class="job-detail__content">
      <?php echo wp_kses_post($job['content']); ?>
    </div>

    <section class="job-detail__features" aria-labelledby="job-features-title">
      <h2 id="job-features-title" class="job-detail__heading">Job Features</h2>
      <dl class="job-features">
        <?php foreach ($features as $label => $value) : ?>
          <div class="job-features__row">
            <dt><?php echo esc_html($label); ?></dt>
            <dd><?php echo esc_html($value); ?></dd>
          </div>
        <?php endforeach; ?>
      </dl>
    </section>

    <section class="job-apply" id="apply" aria-labelledby="job-apply-title">
      <h2 id="job-apply-title" class="job-detail__heading">Apply For This Job</h2>

      <form class="job-apply__form" method="post" enctype="multipart/form-data"
            action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>"
            <?php echo $is_dummy ? 'data-dummy' : ''; ?> novalidate>
        <?php /* Handler lamaran bawaan Simple Job Board: tersimpan sebagai "Applicant" di WP-Admin. */ ?>
        <input type="hidden" name="action" value="process_applicant_form">
        <input type="hidden" name="job_id" value="<?php echo (int) $job['id']; ?>">
        <input type="hidden" name="wp_nonce" value="<?php echo esc_attr(wp_create_nonce('jobpost_security_nonce')); ?>">

        <?php foreach ($apply_fields as $f) :
          $fid  = 'ja-' . $f['name'];
          $req  = !empty($f['required']);
          $reqa = $req ? ' required' : '';
          $star = $req ? '<span class="req">*</span>' : '';
        ?>
          <div class="job-field">
            <?php if ('radio' === $f['type'] || 'checkbox' === $f['type']) : ?>
              <span class="job-privacy__title"><?php echo esc_html($f['label']); ?><?php echo $star; ?></span>
              <?php foreach ($f['options'] as $i => $opt) : ?>
                <label class="job-privacy__label">
                  <input type="<?php echo esc_attr($f['type']); ?>" name="<?php echo esc_attr($f['name'] . ('checkbox' === $f['type'] ? '[]' : '')); ?>" value="<?php echo esc_attr($opt); ?>"<?php echo ('radio' === $f['type'] && 0 === $i) ? ' checked' : ''; ?><?php echo ('radio' === $f['type']) ? $reqa : ''; ?>>
                  <span><?php echo esc_html($opt); ?></span>
                </label>
              <?php endforeach; ?>
            <?php else : ?>
              <label for="<?php echo esc_attr($fid); ?>"><?php echo esc_html($f['label']); ?><?php echo $star; ?></label>
              <?php if ('text_area' === $f['type']) : ?>
                <textarea id="<?php echo esc_attr($fid); ?>" name="<?php echo esc_attr($f['name']); ?>" rows="5"<?php echo $reqa; ?>></textarea>
              <?php elseif ('email' === $f['type']) : ?>
                <input type="email" id="<?php echo esc_attr($fid); ?>" name="<?php echo esc_attr($f['name']); ?>" autocomplete="email"<?php echo $reqa; ?>>
              <?php elseif ('phone' === $f['type']) : ?>
                <div class="job-phone">
                  <select name="<?php echo esc_attr($f['name']); ?>_country" aria-label="Country code" data-phone-country>
                    <?php foreach ($countries as $c) : ?>
                      <option value="<?php echo esc_attr($c[1]); ?>"><?php echo esc_html($c[0] . ' ' . $c[1]); ?></option>
                    <?php endforeach; ?>
                  </select>
                  <input type="tel" id="<?php echo esc_attr($fid); ?>" name="<?php echo esc_attr($f['name']); ?>" autocomplete="tel-national" inputmode="numeric" pattern="[0-9]*"<?php echo $reqa; ?>>
                </div>
              <?php elseif ('dropdown' === $f['type']) : ?>
                <select id="<?php echo esc_attr($fid); ?>" name="<?php echo esc_attr($f['name']); ?>"<?php echo $reqa; ?>>
                  <?php foreach ($f['options'] as $opt) : ?>
                    <option value="<?php echo esc_attr($opt); ?>"><?php echo esc_html($opt); ?></option>
                  <?php endforeach; ?>
                </select>
              <?php elseif ('date' === $f['type']) : ?>
                <input type="date" id="<?php echo esc_attr($fid); ?>" name="<?php echo esc_attr($f['name']); ?>"<?php echo $reqa; ?>>
              <?php else : ?>
                <input type="text" id="<?php echo esc_attr($fid); ?>" name="<?php echo esc_attr($f['name']); ?>"<?php echo $reqa; ?>>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>

        <div class="job-field">
          <label for="ja-resume">Attach Resume<span class="req">*</span></label>
          <label class="job-file" for="ja-resume">
            <input type="file" id="ja-resume" name="applicant_resume" accept=".pdf,.doc,.docx" required>
            <span class="job-file__name" data-file-name>No file chosen</span>
            <span class="job-file__btn" aria-hidden="true">Browse</span>
          </label>
          <p class="job-field__hint">PDF, DOC or DOCX, max 5 MB.</p>
        </div>

        <div class="job-field job-privacy">
          <span class="job-privacy__title">Privacy Policy</span>
          <label class="job-privacy__label">
            <input type="checkbox" name="privacy" value="1" required>
            <span>HOSHŌ DIGITAL is committed to protecting your information. Your information will be used in accordance with our privacy policy. Your information may be stored and processed by HOSHŌ DIGITAL and its affiliates in countries outside your country of residence, but wherever your information is processed, we will handle it with the same care and respect for your privacy. <span class="req">*</span></span>
          </label>
        </div>

        <p class="job-apply__notice" data-apply-notice role="status" aria-live="polite" hidden></p>

        <div class="job-apply__actions">
          <button type="submit" class="job-apply__submit">Submit</button>
        </div>
      </form>
    </section>

  </div>
</main>

<script>
(function () {
  var form = document.querySelector('.job-apply__form');
  if (!form) return;

  var file   = form.querySelector('input[type="file"]');
  var name   = form.querySelector('[data-file-name]');
  var notice = form.querySelector('[data-apply-notice]');
  var submit = form.querySelector('.job-apply__submit');
  var MAX    = 5 * 1024 * 1024;

  [].forEach.call(form.querySelectorAll('input[type="tel"]'), function (tel) {
    tel.addEventListener('input', function () { tel.value = tel.value.replace(/\D/g, ''); });
  });

  function show(msg, ok) {
    notice.textContent = msg;
    notice.className = 'job-apply__notice ' + (ok ? 'is-ok' : 'is-error');
    notice.hidden = false;
  }

  function plain(html) {
    var d = document.createElement('div');
    d.innerHTML = html || '';
    return (d.textContent || '').trim();
  }

  file.addEventListener('change', function () {
    var f = file.files && file.files[0];
    if (f && f.size > MAX) {
      file.value = '';
      name.textContent = 'No file chosen';
      show('File is too large. Please upload a file under 5 MB.', false);
      return;
    }
    notice.hidden = true;
    name.textContent = f ? f.name : 'No file chosen';
  });

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }
    if (form.hasAttribute('data-dummy')) {
      form.reset();
      name.textContent = 'No file chosen';
      show('Thank you! This is a preview: your application was not sent.', true);
      return;
    }

    var fd = new FormData(form);
    // Gabungkan kode negara + nomor telepon menjadi satu nilai untuk SJB.
    [].forEach.call(form.querySelectorAll('input[type="tel"]'), function (tel) {
      var wrap = tel.closest('.job-phone');
      var code = wrap ? wrap.querySelector('[data-phone-country]').value : '';
      fd.set(tel.name, code + ' ' + tel.value);
    });

    var url = form.getAttribute('action');
    submit.disabled = true;

    // Nonce segar (halaman bisa ter-cache sehingga nonce di HTML sudah kedaluwarsa).
    var freshNonce = fetch(url + '?action=hosho_job_nonce', { credentials: 'same-origin' })
      .then(function (r) { return r.json(); })
      .then(function (j) { if (j && j.success && j.data) { fd.set('wp_nonce', j.data); } })
      .catch(function () { /* pakai nonce bawaan form */ });

    freshNonce
      .then(function () { return fetch(url, { method: 'POST', body: fd, credentials: 'same-origin' }); })
      .then(function (r) { return r.text(); })
      .then(function (txt) {
        var res = null;
        // Toleran terhadap notice/warning PHP yang tercetak sebelum JSON.
        var i = txt.indexOf('{');
        if (i > -1) { try { res = JSON.parse(txt.slice(i)); } catch (err) { res = null; } }
        if (res && res.success) {
          form.reset();
          name.textContent = 'No file chosen';
          show(plain(res.success_alert) || 'Your application has been received.', true);
        } else if (res) {
          show(plain(res.error) || 'Something went wrong. Please try again.', false);
        } else {
          show('Your session expired or the server did not respond. Please refresh the page and try again.', false);
        }
      })
      .catch(function () { show('Network error. Please try again.', false); })
      .then(function () { submit.disabled = false; });
  });
})();
</script>
<?php load_template(__DIR__ . '/footer.php', true); ?>
