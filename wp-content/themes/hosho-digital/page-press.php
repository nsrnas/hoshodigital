<?php get_header(); ?>
<main id="main-content">
  <section class="section press-contact">
    <div class="shell">
      <div class="press-contact__intro motion">
        <div>
          <h1 style="font-size: clamp(72px, 9vw, 140px);">Media Contact</h1>
        </div>
        <p class="lede" style="font-size: 16px !important;">For interview requests, company information and other media enquiries, contact Himari S.</p>
      </div>

      <div class="press-contact__profile motion">
        <?php
          $himari_portrait_file = 'media-himari.png';
        ?>
        <?php if ( $himari_portrait_file ) : ?>
          <figure class="press-contact__portrait">
            <img loading="eager" decoding="async" src="<?php echo esc_url( hosho_asset_url( $himari_portrait_file ) ); ?>" alt="Himari S, Communications Manager" style="width: 100%; height: 100%; object-fit: cover;">
          </figure>
        <?php else : ?>
          <figure class="press-contact__portrait press-contact__portrait--placeholder" aria-label="Portrait of Himari S is awaiting the approved source file" style="background: #f4f4f4; display: flex; align-items: center; justify-content: center; font-size: 48px; color: #ccc;">
            <span aria-hidden="true">HS</span>
          </figure>
        <?php endif; ?>

        <div class="press-contact__person">
          <p class="press-contact__role" style="white-space: nowrap;">Communications Manager</p>
          <h2>Himari S.</h2>
          
          <div class="press-contact__actions">
            <a class="press-contact__email-box" href="mailto:media@hoshodigital.com">
              media@hoshodigital.com
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
</main><?php get_footer(); ?>
