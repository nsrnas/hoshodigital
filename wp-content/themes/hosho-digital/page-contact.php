<?php get_header(); ?>
<main id="main-content">
  <section class="contact-page contact-page--immersive" id="contact-form" style="--contact-bg:url('<?php echo esc_url(hosho_asset_url('hero-contact-connection.png')); ?>')">
    <div class="shell contact-page__canvas motion">
      <div class="contact-page__heading"><h1>GET IN TOUCH</h1><p>Tell us what you are working on and the right HOSHŌ DIGITAL team will respond.</p></div>
      <style>
        .contact-form .field input,
        .contact-form .field select,
        .contact-form .field textarea {
          padding-left: 16px !important;
          background-color: rgba(0, 0, 0, 0.5) !important;
          border: 1px solid rgba(255, 255, 255, 0.5) !important;
          color: #ffffff !important;
          -webkit-text-fill-color: #ffffff !important;
        }
        .contact-form .field input::placeholder,
        .contact-form .field textarea::placeholder {
          color: rgba(255, 255, 255, 0.6) !important;
          -webkit-text-fill-color: rgba(255, 255, 255, 0.6) !important;
        }
        .contact-form .field label,
        .contact-form .consent label {
          color: #ffffff !important;
        }
        .contact-form .field select option {
          color: #071523 !important;
          background-color: #ffffff !important;
        }
        .contact-form input:-webkit-autofill,
        .contact-form input:-webkit-autofill:hover,
        .contact-form input:-webkit-autofill:focus,
        .contact-form textarea:-webkit-autofill,
        .contact-form textarea:-webkit-autofill:hover,
        .contact-form textarea:-webkit-autofill:focus,
        .contact-form select:-webkit-autofill,
        .contact-form select:-webkit-autofill:hover,
        .contact-form select:-webkit-autofill:focus {
          -webkit-text-fill-color: #ffffff !important;
          -webkit-box-shadow: 0 0 0 1000px rgba(7, 21, 35, 0.95) inset !important;
          box-shadow: 0 0 0 1000px rgba(7, 21, 35, 0.95) inset !important;
          transition: background-color 5000s ease-in-out 0s;
        }
      </style>
      <form class="contact-form contact-form--glass" action="#" method="post">
        <div class="field"><label for="first-name">First name *</label><input id="first-name" name="first_name" autocomplete="given-name" required></div>
        <div class="field"><label for="last-name">Last name *</label><input id="last-name" name="last_name" autocomplete="family-name" required></div>
        <div class="field"><label for="email">Email *</label><input id="email" name="email" type="email" autocomplete="email" required></div>
        <div class="field"><label for="phone">Phone *</label><input id="phone" name="phone" type="tel" autocomplete="tel" required></div>
        <div class="field"><label for="title">Title *</label><input id="title" name="title" autocomplete="organization-title" required></div>
        <div class="field"><label for="organization">Organisation *</label><input id="organization" name="organization" autocomplete="organization" required></div>
        <div class="field"><label for="service">Service interest *</label><select id="service" name="service" required><option value="">Select</option><option>AI</option><option>Automation</option><option>Applications</option><option>Data</option><option>Dynamics 365 Business Central</option></select></div>
        <div class="field"><label for="solution">Solution interest *</label><select id="solution" name="solution" required><option value="">Select</option><option>Customer Intelligence</option><option>Employee Intelligence</option><option>Operational Intelligence</option></select></div>
        <div class="field field-full"><label for="message">How can we help?</label><textarea id="message" name="message"></textarea></div>
        <div class="consent"><input id="consent" name="consent" type="checkbox" required><label for="consent">HOSHŌ DIGITAL will use your information in accordance with our privacy policy and handle it with care wherever it is processed.</label></div>
        <div class="field-full"><button class="button" type="submit">Submit enquiry</button></div>
      </form>
    </div>
  </section>
</main><?php get_footer(); ?>
