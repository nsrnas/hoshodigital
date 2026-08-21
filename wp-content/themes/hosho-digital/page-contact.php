<?php get_header(); ?>
<main id="main-content">
  <section class="contact-page contact-page--immersive" id="contact-form" style="--contact-bg:url('<?php echo esc_url(hosho_asset_url('hero-contact-connection.png')); ?>')">
    <div class="shell contact-page__canvas motion">
      <div class="contact-page__heading"><h1>Get in Touch.</h1><p>Tell us what you are working on and the right HOSHŌ DIGITAL team will respond.</p></div>
      <form class="contact-form contact-form--glass" action="#" method="post">
        <div class="field"><label for="first-name">First name *</label><input id="first-name" name="first_name" autocomplete="given-name" required></div>
        <div class="field"><label for="last-name">Last name *</label><input id="last-name" name="last_name" autocomplete="family-name" required></div>
        <div class="field"><label for="email">Email *</label><input id="email" name="email" type="email" autocomplete="email" required></div>
        <div class="field"><label for="phone">Phone *</label><input id="phone" name="phone" type="tel" autocomplete="tel" required></div>
        <div class="field"><label for="title">Title *</label><input id="title" name="title" autocomplete="organization-title" required></div>
        <div class="field"><label for="organization">Organisation *</label><input id="organization" name="organization" autocomplete="organization" required></div>
        <div class="field"><label for="service">Service interest *</label><select id="service" name="service" required><option value="">Select</option><option>AI</option><option>Automation</option><option>Applications</option><option>Data</option><option>Dynamics 365 Business Central</option></select></div>
        <div class="field"><label for="solution">Solution interest *</label><select id="solution" name="solution" required><option value="">Select</option><option>Customer Experience</option><option>Employee Experience</option><option>Operational Experience</option></select></div>
        <div class="field field-full"><label for="message">How can we help?</label><textarea id="message" name="message"></textarea></div>
        <div class="consent"><input id="consent" name="consent" type="checkbox" required><label for="consent">HOSHŌ DIGITAL will use your information in accordance with our privacy policy and handle it with care wherever it is processed.</label></div>
        <div class="field-full"><button class="button" type="submit">Submit enquiry</button></div>
      </form>
    </div>
  </section>
</main><?php get_footer(); ?>
