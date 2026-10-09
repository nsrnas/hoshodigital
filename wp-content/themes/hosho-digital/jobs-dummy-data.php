<?php
/**
 * Dummy data lowongan — dipakai oleh page-job-opportunities.php dan page-job-detail.php.
 *
 * SAAT MENYAMBUNG KE PLUGIN: ganti isi hosho_get_jobs() dan hosho_get_job()
 * (atau hapus file ini dan definisikan fungsi yang sama dari plugin).
 * Kontrak data per job:
 *   id, title, slug, category, type (full-time|internship), location,
 *   posted (string tanggal untuk strtotime), url (halaman detail),
 *   content (HTML deskripsi, setara the_content())
 */

if (!function_exists('hosho_dummy_job_content')) {
  function hosho_dummy_job_content($job) {
    $about = '<h4>About Hoshō Digital</h4><p>At HOSHŌ DIGITAL, we believe AI has the potential to transform industries, redefine customer experiences, and unlock new opportunities for businesses. Guided by our vision to empower businesses to innovate and grow in a hyper-connected intelligent world, and our mission to embed intelligence at the heart of the enterprise digital core, we help organizations harness AI to reimagine operations, accelerate innovation, and create lasting business value. Turning AI innovation into practical, scalable, and business-ready solutions.</p>';

    $eoe = '<h4>Equal Opportunity &amp; Selection Notice</h4><ul>'
      . '<li><strong>Equal Opportunity Employer:</strong> HOSHŌ DIGITAL is an Equal Opportunity Employer. We celebrate diversity and are committed to creating an inclusive environment for all employees regardless of race, religion, gender, identity, national origin, or disability status.</li>'
      . '<li><strong>Selection Process:</strong> Due to the high volume of applications, <strong>only successful candidates will be contacted</strong>. We truly appreciate your time and interest in joining HOSHŌ DIGITAL!</li></ul>';

    $type = ($job['type'] === 'internship') ? 'Internship' : 'Full-Time';
    $head = '<p><strong>Location: ' . esc_html($job['location']) . '</strong></p><p><strong>Employment Type: ' . $type . '</strong></p>';

    if ($job['slug'] === 'licensing-executive') {
      return '<p><strong>Location: Bandung, West Java, Indonesia / On-site</strong></p><p><strong>Employment Type: Full-Time</strong></p>'
        . $about
        . '<h4>About the Role</h4><p>We are seeking a detail-oriented and proactive <strong>Licensing Executive</strong> to support HOSHŌ DIGITAL’s licensing, regulatory, and administrative requirements in Indonesia. In this role, you will be responsible for researching applicable regulations, coordinating licensing processes, maintaining documentation, and working closely with government authorities, legal advisors, and Singapore HQ.</p>'
        . '<h4>Key Responsibilities &amp; Expectations:</h4><ul>'
        . '<li><strong>Regulatory Research:</strong> Research Indonesian licensing, regulatory, and compliance requirements relevant to HOSHŌ DIGITAL’s operations.</li>'
        . '<li><strong>Licensing Coordination:</strong> Coordinate business licensing, registrations, permits, and related processes with relevant authorities and external advisors.</li>'
        . '<li><strong>Documentation:</strong> Prepare, organise, and maintain corporate, licensing, and regulatory documents.</li>'
        . '<li><strong>Compliance Tracking:</strong> Maintain trackers for applications, renewals, deadlines, and compliance requirements.</li>'
        . '<li><strong>Stakeholder Liaison:</strong> Coordinate with government agencies, legal consultants, notaries, and other relevant stakeholders.</li>'
        . '<li><strong>Regulatory Updates:</strong> Monitor regulatory developments and communicate relevant updates to management and Singapore HQ.</li>'
        . '<li><strong>Process Support:</strong> Support company registration, office establishment, and other administrative or regulatory projects.</li>'
        . '<li><strong>Reporting:</strong> Prepare regular updates on licensing status, pending requirements, and regulatory matters.</li></ul>'
        . '<p class="job-detail__tag"><strong>FULL-TIME</strong></p>'
        . '<h4>Requirements &amp; Qualifications:</h4><ul>'
        . '<li><strong>Location / Residency:</strong> Must be based/residing in <strong>Bandung, Indonesia</strong> and able to work on-site.</li>'
        . '<li><strong>English Proficiency:</strong> Professional working proficiency (written and spoken).</li>'
        . '<li><strong>Experience:</strong> Minimum <strong>1–3 years</strong> of professional experience in licensing, regulatory affairs, legal administration, compliance, corporate administration, or a related field.</li>'
        . '<li><strong>Education:</strong> Bachelor’s degree in Law, Business Administration, Public Administration, International Relations, or a related field.</li>'
        . '<li><strong>Core Skills:</strong> Strong research, documentation, analytical, organisational, communication, and regulatory coordination skills.</li>'
        . '<li><strong>Software &amp; Tools:</strong> Proficiency in <strong>Microsoft Office / Google Workspace</strong>, document management systems, and relevant government or licensing platforms.</li>'
        . '<li><strong>Additional Advantage:</strong> Familiarity with <strong>OSS (Online Single Submission)</strong> and Indonesian business licensing processes is preferred.</li></ul>'
        . $eoe;
    }

    return $head . $about
      . '<h4>About the Role</h4><p>We are looking for a motivated <strong>' . esc_html($job['title']) . '</strong> to join our team in ' . esc_html($job['location']) . '. You will work with cross-functional teams to deliver practical, business-ready outcomes for our clients.</p>'
      . '<h4>Key Responsibilities &amp; Expectations:</h4><ul>'
      . '<li><strong>Delivery:</strong> Own your deliverables end to end and keep stakeholders informed on progress.</li>'
      . '<li><strong>Collaboration:</strong> Work closely with colleagues across teams and regions, including Singapore HQ.</li>'
      . '<li><strong>Quality:</strong> Maintain high standards of accuracy, documentation, and professionalism.</li>'
      . '<li><strong>Growth:</strong> Continuously learn and share knowledge within the team.</li></ul>'
      . '<h4>Requirements &amp; Qualifications:</h4><ul>'
      . '<li><strong>English Proficiency:</strong> Professional working proficiency (written and spoken).</li>'
      . '<li><strong>Education:</strong> Relevant degree or equivalent practical experience.</li>'
      . '<li><strong>Core Skills:</strong> Strong communication, organisation, and problem-solving skills.</li></ul>'
      . $eoe;
  }
}

if (!function_exists('hosho_get_jobs')) {
  function hosho_get_jobs() {
    $d = array(
      array('Licensing Executive',         'Consulting',       'full-time',  'Bandung, Indonesia',          '-3 weeks'),
      array('Partner Management Executive','Consulting',       'full-time',  'Bandung, Indonesia',          '-3 weeks'),
      array('Creative Design Executive',   'Design',           'full-time',  'Bandung, Indonesia',          '-3 weeks'),
      array('Customer Success Executive',  'Customer Success', 'full-time',  'Bandung, Indonesia',          '-3 weeks'),
      array('Marketing Executive',         'Marketing',        'full-time',  'Bandung, Indonesia',          '-3 weeks'),
      array('HR & Office Manager',         'Operations',       'full-time',  'Bandung, Indonesia',          '-4 weeks'),
      array('Engineering Intern',          'Engineering',      'internship', 'Indore, India',               '-2 months'),
      array('Partner Manager',             'Consulting',       'full-time',  'Jakarta, Indonesia',          '-2 months'),
      array('.NET Developer',              'Engineering',      'full-time',  'Indore, India',               '-2 months'),
      array('Brand Designer Intern',       'Design',           'internship', 'Jakarta, Indonesia (Remote)', '-3 months'),
      array('Brand Executive',             'Marketing',        'full-time',  'Jakarta, Indonesia (Remote)', '-3 months'),
      array('Web Intern',                  'Engineering',      'internship', 'Jakarta, Indonesia (Remote)', '-3 months'),
      array('Web Engineer',                'Engineering',      'full-time',  'Jakarta, Indonesia (Remote)', '-3 months'),
      array('Digital Content Executive',   'Marketing',        'full-time',  'Jakarta, Indonesia (Remote)', '-3 months'),
    );
    $jobs = array();
    foreach ($d as $i => $row) {
      $slug = sanitize_title($row[0]);
      $job  = array(
        'id'       => $i + 1,
        'title'    => $row[0],
        'slug'     => $slug,
        'category' => $row[1],
        'type'     => $row[2],
        'location' => $row[3],
        'posted'   => $row[4],
        'url'      => add_query_arg('job', $slug, home_url('/job-detail/')),
      );
      $job['content'] = hosho_dummy_job_content($job);
      $jobs[] = $job;
    }
    return $jobs;
  }
}

if (!function_exists('hosho_get_job')) {
  function hosho_get_job($slug = '') {
    foreach (hosho_get_jobs() as $job) {
      if ($job['slug'] === $slug) {
        return $job;
      }
    }
    return null;
  }
}