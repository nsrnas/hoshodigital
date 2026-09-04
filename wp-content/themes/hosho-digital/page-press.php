<?php get_header(); ?>
<main id="main-content">
  <section class="section press-contact">
    <div class="shell">
      <div class="press-contact__intro motion">
        <div>
          <h1>Media contact.</h1>
        </div>
        <p class="lede">For interview requests, company information and other media enquiries, contact Himari S.</p>
      </div>

      <div class="press-contact__profile motion">
        <?php
          $himari_portrait_file = '';
          foreach ( array( 'media-himari-s.png', 'media-himari-s.jpg', 'media-himari-s.jpeg', 'media-himari-s.webp' ) as $candidate ) {
            if ( file_exists( get_theme_file_path( 'assets/images/' . $candidate ) ) ) {
              $himari_portrait_file = $candidate;
              break;
            }
          }
        ?>
        <?php if ( $himari_portrait_file ) : ?>
          <figure class="press-contact__portrait">
            <img loading="eager" decoding="async" src="<?php echo esc_url( hosho_asset_url( $himari_portrait_file ) ); ?>" alt="Himari S, Communications Manager">
          </figure>
        <?php else : ?>
          <figure class="press-contact__portrait press-contact__portrait--placeholder" aria-label="Portrait of Himari S is awaiting the approved source file">
            <span aria-hidden="true">HS</span>
          </figure>
        <?php endif; ?>

        <div class="press-contact__person">
          <h2>Himari S</h2>
          <p class="press-contact__role">Communications Manager</p>
          <a class="press-contact__email" href="mailto:media@hoshodigital.com">media@hoshodigital.com</a>
        </div>

      </div>
    </div>
  </section>
</main><?php get_footer(); ?>
