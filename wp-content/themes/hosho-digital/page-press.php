<?php
/**
 * Template Name: Press
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
    <section class="hero hero-press">
      <img class="hero-image" src="<?php echo esc_url( hosho_v9_asset_url( 'press/assets/press-abstract-building.jpg' ) ); ?>" alt="Geometric modern architecture in Singapore">
      <div class="hero-overlay" aria-hidden="true"></div>
      <div class="hero-inner shell">
        <p class="hero-kicker">HOSHŌ DIGITAL</p>
        <h1>Press<br>Contact</h1>
      </div>
      <p class="hero-index" aria-hidden="true">03 / COMPANY</p>
    </section>

    <section class="press-section section-white">
      <div class="shell press-layout reveal">
        <div class="press-intro">
          <p class="eyebrow">Media inquiries</p>
          <h2>Press<br>Contact</h2>
        </div>
        <div class="press-copy">
          <p>Below you can find the media contact for your specific inquiry. We trust you will appreciate that this email is intended only for journalists. If you have any non-media inquiries, please use our contact form.</p>
        </div>
        <div class="press-contact">
          <img class="press-contact-media" src="<?php echo esc_url( hosho_v9_asset_url( 'recontent-assets/press-cta-singapore-cbd.jpg' ) ); ?>" alt="Singapore central business district and waterfront">
          <div class="press-contact-shade" aria-hidden="true"></div>
          <p class="contact-label">HOSHŌ DIGITAL corporate communication</p>
          <h3>HOSHŌ DIGITAL<br>Pte. Ltd.</h3>
          <address>
            60 Paya Lebar Road<br>
            #06-28 Paya Lebar Square<br>
            Singapore 409051
          </address>
          <a class="contact-email" href="mailto:media@hoshodigital.com">media@hoshodigital.com</a>
          <a class="press-action" href="mailto:media@hoshodigital.com"><span>Send an email</span><i aria-hidden="true">↗</i></a>
        </div>
        <figure class="press-editorial-art reveal">
          <img src="<?php echo esc_url( hosho_v9_asset_url( 'press/assets/press-media-office-singapore.jpg' ) ); ?>" alt="Geometric office facade in Singapore">
          <figcaption>Singapore · Corporate architecture</figcaption>
        </figure>
      </div>
    </section>
  </main>
<?php
get_footer();
