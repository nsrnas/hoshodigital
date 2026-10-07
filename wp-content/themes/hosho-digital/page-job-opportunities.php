<?php
/**
 * Template Name: Job Opportunities
 *
 * Halaman daftar lowongan. Saat ini memakai data dummy.
 * Nanti ganti hosho_get_jobs() agar mengambil data dari plugin job WordPress.
 */

require_once get_theme_file_path('jobs-dummy-data.php');

$jobs      = hosho_get_jobs();
$per_page  = 10;
$types     = array('full-time' => 'Full Time', 'internship' => 'Internship');
$cats      = array_values(array_unique(wp_list_pluck($jobs, 'category')));
$locations = array_values(array_unique(wp_list_pluck($jobs, 'location')));
sort($cats);
sort($locations);

$ico_pin   = '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s7-6.2 7-12a7 7 0 1 0-14 0c0 5.8 7 12 7 12z"/><circle cx="12" cy="10" r="2.6"/></svg>';
$ico_clock = '<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9.5"/><path d="M12 6.5V12l3.5 2"/></svg>';

get_header(); ?>
<main id="main-content" class="jobs-page">

  <section class="jobs-hero">
    <div class="shell">
      <h1>OPPORTUNITIES</h1>
    </div>
  </section>

  <div class="shell jobs-shell" data-jobs data-per-page="<?php echo (int) $per_page; ?>">

    <form class="jobs-filter motion" role="search" aria-label="Filter job opportunities" novalidate>
      <div class="jobs-filter__row">
        <label class="jobs-search">
          <span class="screen-reader-text">Search jobs</span>
          <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="m20 20-4.9-4.9"/></svg>
          <input type="search" data-jobs-q placeholder="Search by role, keyword, or technology" autocomplete="off">
        </label>

        <label class="jobs-select">
          <span class="screen-reader-text">Category</span>
          <select data-jobs-cat>
            <option value="">All Categories</option>
            <?php foreach ($cats as $c) : ?>
              <option value="<?php echo esc_attr(strtolower($c)); ?>"><?php echo esc_html($c); ?></option>
            <?php endforeach; ?>
          </select>
        </label>

        <label class="jobs-select">
          <span class="screen-reader-text">Job type</span>
          <select data-jobs-type>
            <option value="">All Types</option>
            <?php foreach ($types as $slug => $label) : ?>
              <option value="<?php echo esc_attr($slug); ?>"><?php echo esc_html($label); ?></option>
            <?php endforeach; ?>
          </select>
        </label>

        <label class="jobs-select">
          <span class="screen-reader-text">Location</span>
          <select data-jobs-loc>
            <option value="">All Locations</option>
            <?php foreach ($locations as $l) : ?>
              <option value="<?php echo esc_attr(strtolower($l)); ?>"><?php echo esc_html($l); ?></option>
            <?php endforeach; ?>
          </select>
        </label>

        <button type="button" class="jobs-filter__reset" data-jobs-reset>Reset</button>
      </div>

      <p class="jobs-filter__count" aria-live="polite">
        <span class="jobs-filter__dot" aria-hidden="true"></span>
        <span data-jobs-count><?php echo count($jobs); ?></span>
        <span data-jobs-count-label>open positions</span> available
      </p>
    </form>

    <ul class="jobs-list" data-jobs-list>
      <?php foreach ($jobs as $job) :
        $ts     = strtotime($job['posted']);
        $posted = $ts ? 'Posted ' . human_time_diff($ts, current_time('timestamp')) . ' ago' : '';
        $search = strtolower($job['title'] . ' ' . $job['category'] . ' ' . $job['location']);
      ?>
        <li class="job-row"
            data-job
            data-search="<?php echo esc_attr($search); ?>"
            data-category="<?php echo esc_attr(strtolower($job['category'])); ?>"
            data-type="<?php echo esc_attr($job['type']); ?>"
            data-location="<?php echo esc_attr(strtolower($job['location'])); ?>">
          <a class="job-row__link" href="<?php echo esc_url($job['url']); ?>">
            <span class="job-row__main">
              <h2 class="job-row__title"><?php echo esc_html($job['title']); ?></h2>
              <span class="job-badge job-badge--<?php echo esc_attr($job['type']); ?>"><?php echo esc_html($types[$job['type']] ?? $job['type']); ?></span>
            </span>
            <span class="job-row__meta">
              <span class="job-meta"><?php echo $ico_pin; ?><?php echo esc_html($job['location']); ?></span>
              <span class="job-meta"><?php echo $ico_clock; ?><?php echo esc_html($posted); ?></span>
            </span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <p class="jobs-empty" data-jobs-empty hidden>No positions match your search. Try a different keyword or reset the filters.</p>

    <div class="jobs-footer">
      <p class="jobs-footer__summary">Showing <strong data-jobs-from>1</strong>&ndash;<strong data-jobs-to><?php echo min($per_page, count($jobs)); ?></strong> of <strong data-jobs-total><?php echo count($jobs); ?></strong> positions</p>
      <nav class="jobs-pager" aria-label="Job listings pagination" data-jobs-pager></nav>
    </div>

  </div>
</main>

<script>
(function () {
  var root = document.querySelector('[data-jobs]');
  if (!root) return;

  var rows   = [].slice.call(root.querySelectorAll('[data-job]'));
  var q      = root.querySelector('[data-jobs-q]');
  var cat    = root.querySelector('[data-jobs-cat]');
  var type   = root.querySelector('[data-jobs-type]');
  var loc    = root.querySelector('[data-jobs-loc]');
  var reset  = root.querySelector('[data-jobs-reset]');
  var pager  = root.querySelector('[data-jobs-pager]');
  var empty  = root.querySelector('[data-jobs-empty]');
  var footer = root.querySelector('.jobs-footer');
  var out = {
    count: root.querySelector('[data-jobs-count]'),
    label: root.querySelector('[data-jobs-count-label]'),
    from:  root.querySelector('[data-jobs-from]'),
    to:    root.querySelector('[data-jobs-to]'),
    total: root.querySelector('[data-jobs-total]')
  };
  var per  = parseInt(root.getAttribute('data-per-page'), 10) || 6;
  var page = 1;

  function matches(r) {
    var term = q.value.trim().toLowerCase();
    return (!term || r.dataset.search.indexOf(term) > -1) &&
           (!cat.value  || r.dataset.category === cat.value) &&
           (!type.value || r.dataset.type === type.value) &&
           (!loc.value  || r.dataset.location === loc.value);
  }

  function btn(label, opts) {
    var b = document.createElement('button');
    b.type = 'button';
    b.className = 'jobs-pager__btn' + (opts.active ? ' is-active' : '');
    b.innerHTML = label;
    if (opts.aria) b.setAttribute('aria-label', opts.aria);
    if (opts.active) b.setAttribute('aria-current', 'page');
    if (opts.disabled) b.disabled = true;
    else b.addEventListener('click', function () { page = opts.go; render(true); });
    return b;
  }

  function render(scroll) {
    var m = rows.filter(matches);
    var pages = Math.max(1, Math.ceil(m.length / per));
    if (page > pages) page = pages;
    var start = (page - 1) * per;

    rows.forEach(function (r) { r.hidden = true; });
    m.slice(start, start + per).forEach(function (r) { r.hidden = false; });

    out.count.textContent = m.length;
    out.label.textContent = m.length === 1 ? 'open position' : 'open positions';
    out.from.textContent  = m.length ? start + 1 : 0;
    out.to.textContent    = Math.min(start + per, m.length);
    out.total.textContent = m.length;
    empty.hidden  = m.length > 0;
    footer.hidden = m.length === 0;

    pager.innerHTML = '';
    pager.hidden = pages <= 1;
    if (pages > 1) {
      var chev = function (d) {
        return '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="' + d + '"/></svg>';
      };
      pager.appendChild(btn(chev('m15 6-6 6 6 6'), { aria: 'Previous page', disabled: page === 1, go: page - 1 }));
      for (var i = 1; i <= pages; i++) {
        pager.appendChild(btn(String(i), { aria: 'Page ' + i, active: i === page, go: i }));
      }
      pager.appendChild(btn(chev('m9 6 6 6-6 6'), { aria: 'Next page', disabled: page === pages, go: page + 1 }));
    }

    if (scroll) {
      var top = root.querySelector('[data-jobs-list]').getBoundingClientRect().top + window.pageYOffset - 140;
      window.scrollTo({ top: top, behavior: 'smooth' });
    }
  }

  function onFilter() { page = 1; render(false); }

  q.addEventListener('input', onFilter);
  [cat, type, loc].forEach(function (el) { el.addEventListener('change', onFilter); });
  reset.addEventListener('click', function () {
    q.value = ''; cat.value = ''; type.value = ''; loc.value = '';
    onFilter();
  });
  root.querySelector('form').addEventListener('submit', function (e) { e.preventDefault(); });

  render(false);
})();
</script>
<?php get_footer(); ?>
