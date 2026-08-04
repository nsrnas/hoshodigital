<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * Generated from the approved V9 Recontent design. Re-run
 * tools/build-v9-wordpress.cjs after changing the source HTML.
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content">
    <section class="hero hero-contact">
      <img class="hero-image" src="<?php echo esc_url( hosho_v9_asset_url( 'recontent-assets/contact-singapore-aerial.jpg' ) ); ?>" alt="Panoramic aerial view of Singapore and Marina Bay">
      <div class="hero-red-field" aria-hidden="true"></div>
      <div class="hero-grid shell">
        <div class="hero-copy">
          <p class="hero-kicker">Contact · HOSHŌ DIGITAL</p>
          <h1>GET IN<br>TOUCH</h1>
        </div>
        <div class="contact-hero-mark" aria-hidden="true">
          <span class="contact-assurance-kanji" lang="ja">保証</span>
        </div>
      </div>
      <div class="hero-foot shell">
        <span>02 / CONTACT</span>
      </div>
    </section>

    <section class="contact-section section-navy" id="contact-form">
      <div class="shell contact-layout">
        <aside class="contact-aside reveal">
          <figure class="contact-v3-art">
            <img src="<?php echo esc_url( hosho_v9_asset_url( 'recontent-assets/contact-singapore-waterfront.jpg' ) ); ?>" alt="Singapore waterfront and the ArtScience Museum">
            <figcaption>Singapore · Marina Bay waterfront</figcaption>
          </figure>
          <div class="contact-art-detail" aria-hidden="true">
            <span>ASSURANCE</span>
            <i></i>
          </div>
        </aside>

        <div class="contact-form-wrap reveal" id="enquiry-form">
          <div class="contact-form-heading">
            <p class="eyebrow">Enquiry form</p>
            <h2>GET IN TOUCH</h2>
            <span>Fields marked * are required.</span>
          </div>
          <form class="contact-form" action="#" method="post">
            <div class="field-grid">
              <div class="field">
                <label for="first-name">FIRST NAME <em>*</em></label>
                <input id="first-name" name="first-name" type="text" autocomplete="given-name" required>
              </div>
              <div class="field">
                <label for="last-name">LAST NAME <em>*</em></label>
                <input id="last-name" name="last-name" type="text" autocomplete="family-name" required>
              </div>
              <div class="field">
                <label for="email">EMAIL <em>*</em></label>
                <input id="email" name="email" type="email" autocomplete="email" required>
              </div>
              <div class="field">
                <label for="title">TITLE <em>*</em></label>
                <input id="title" name="title" type="text" autocomplete="organization-title" required>
              </div>
              <div class="field">
                <label for="organization">ORGANIZATION <em>*</em></label>
                <input id="organization" name="organization" type="text" autocomplete="organization" required>
              </div>
              <div class="field">
                <label for="phone">PHONE <em>*</em></label>
                <input id="phone" name="phone" type="tel" autocomplete="tel" required>
              </div>
              <div class="field">
                <label for="service-interest">SERVICE INTEREST <em>*</em></label>
                <div class="select-wrap">
                  <select id="service-interest" name="service-interest" required>
                    <option value="" selected disabled>Select</option>
                    <option value="ARTIFICIAL-INTELLIGENCE">AI</option>
                    <option value="DATA-ANALYTICS">AUTOMATION</option>
                    <option value="DIGITAL-TRANSFORMATION">APPS</option>
                    <option value="APPLICATION-INNOVATION">DATA</option>
                    <option value="DYNAMIC">DYNAMICS 365 BUSINESS CENTRAL</option>
                  </select>
                </div>
              </div>
              <div class="field">
                <label for="solution-interest">SOLUTION INTEREST <em>*</em></label>
                <div class="select-wrap">
                  <select id="solution-interest" name="solution-interest" required>
                    <option value="" selected disabled>Select</option>
                    <option value="one">CUSTOMER EXPERIENCE</option>
                    <option value="two">EMPLOYEE EXPERIENCE</option>
                    <option value="DIGITAL-TRANSFORMATION">OPERATIONAL EXPERIENCE</option>
                  </select>
                </div>
              </div>
            </div>

            <label class="consent" id="privacy-consent">
              <input name="privacy-consent" type="checkbox" required>
              <span class="consent-box" aria-hidden="true"></span>
              <span>HOSHŌ DIGITAL is committed to protecting your information. Your information will be used in accordance with our <a href="#">privacy policy</a>. Your information may be stored and processed by HOSHŌ DIGITAL and its affiliates in countries outside your country of residence, but wherever your information is processed, we will handle it with the same care and respect for your privacy.</span>
            </label>

            <button class="submit-button" type="submit">SUBMIT <span aria-hidden="true">↗</span></button>
            <p class="form-status" aria-live="polite"></p>
          </form>
        </div>
      </div>
    </section>
  </main>
<?php
get_footer();
