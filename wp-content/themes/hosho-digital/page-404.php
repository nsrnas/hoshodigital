<?php get_header(); ?>

<main id="main-content" class="not-found-page">
  <section class="not-found-page__hero" aria-labelledby="not-found-title">
    <div class="shell not-found-page__inner">
      <div class="not-found-page__code" aria-hidden="true">404</div>
      <div class="not-found-page__content">
        <h1 id="not-found-title">The page you're looking for isn't here.</h1>
        <p class="not-found-page__body">It may have moved, or the link may be out of date. Let's get you back to something useful.</p>
        <a class="button not-found-page__cta" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          Back to homepage<span class="button-arrow" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
