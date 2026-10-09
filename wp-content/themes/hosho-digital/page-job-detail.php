<?php
/**
 * Template Name: Job Detail
 */

require_once get_theme_file_path('jobs-dummy-data.php');

$is_dummy = true;
$slug     = isset($_GET['job']) ? sanitize_title(wp_unslash($_GET['job'])) : 'licensing-executive';
$job      = hosho_get_job($slug);

if (!$job) {
  global $wp_query;
  $wp_query->set_404();
  status_header(404);
  nocache_headers();
  include get_404_template();
  exit;
}

$types  = array('full-time' => 'Full Time', 'internship' => 'Internship');
$ts     = strtotime($job['posted']);
$posted = $ts ? 'Posted ' . human_time_diff($ts, current_time('timestamp')) . ' ago' : '';

$features = array(
  'Job Category' => $job['category'],
);

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

get_header(); ?>
<main id="main-content" class="job-detail-page">
  <div class="shell job-detail">

    <header class="job-detail__header">
      <h1 class="job-detail__title"><?php echo esc_html($job['title']); ?></h1>
      <div class="job-detail__meta">
        <span class="job-detail__logo"><img src="<?php echo esc_url(hosho_asset_url('logo.webp')); ?>" alt="Hosho Digital"></span>
        <span class="job-detail__chip"><?php echo $ico_case; ?><?php echo esc_html($types[$job['type']] ?? $job['type']); ?></span>
        <span class="job-detail__chip"><?php echo $ico_pin; ?><?php echo esc_html($job['location']); ?></span>
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
            action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
            <?php echo $is_dummy ? 'data-dummy' : ''; ?> novalidate>
        <input type="hidden" name="action" value="hosho_job_apply">
        <input type="hidden" name="job_id" value="<?php echo (int) $job['id']; ?>">
        <input type="hidden" name="job_title" value="<?php echo esc_attr($job['title']); ?>">
        <?php wp_nonce_field('hosho_job_apply', 'hosho_job_apply_nonce'); ?>

        <div class="job-field">
          <label for="ja-first">First Name<span class="req">*</span></label>
          <input type="text" id="ja-first" name="first_name" autocomplete="given-name" required>
        </div>

        <div class="job-field">
          <label for="ja-last">Last Name<span class="req">*</span></label>
          <input type="text" id="ja-last" name="last_name" autocomplete="family-name" required>
        </div>

        <div class="job-field">
          <label for="ja-email">Email<span class="req">*</span></label>
          <input type="email" id="ja-email" name="email" autocomplete="email" required>
        </div>

        <div class="job-field">
          <label for="ja-phone">Phone<span class="req">*</span></label>
          <div class="job-phone">
            <select name="phone_country" aria-label="Country code">
              <?php foreach ($countries as $c) : ?>
                <option value="<?php echo esc_attr($c[1]); ?>"><?php echo esc_html($c[0] . ' ' . $c[1]); ?></option>
              <?php endforeach; ?>
            </select>
            <input type="tel" id="ja-phone" name="phone" autocomplete="tel-national" inputmode="numeric" pattern="[0-9]*" required>
          </div>
        </div>

        <div class="job-field">
          <label for="ja-linkedin">LinkedIn Profile</label>
          <textarea id="ja-linkedin" name="linkedin" rows="5"></textarea>
        </div>

        <div class="job-field">
          <label for="ja-resume">Attach Resume<span class="req">*</span></label>
          <label class="job-file" for="ja-resume">
            <input type="file" id="ja-resume" name="resume" accept=".pdf,.doc,.docx" required>
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
  var phone  = form.querySelector('input[name="phone"]');
  var name   = form.querySelector('[data-file-name]');
  var notice = form.querySelector('[data-apply-notice]');
  var MAX    = 5 * 1024 * 1024;

  phone.addEventListener('input', function () {
    phone.value = phone.value.replace(/\D/g, '');
  });

  function show(msg, ok) {
    notice.textContent = msg;
    notice.className = 'job-apply__notice ' + (ok ? 'is-ok' : 'is-error');
    notice.hidden = false;
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
    if (!form.checkValidity()) {
      e.preventDefault();
      form.reportValidity();
      return;
    }
    if (form.hasAttribute('data-dummy')) {
      e.preventDefault();
      form.reset();
      name.textContent = 'No file chosen';
      show('Thank you! This is a preview: your application was not sent.', true);
    }
  });
})();
</script>
<?php get_footer(); ?>
