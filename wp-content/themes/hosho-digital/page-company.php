<?php get_header(); ?>
<main id="main-content">
  <?php hosho_render_hero( 'Evolving technology. Guaranteed outcomes.', 'hero-company.png', array( 'class' => 'page-hero--company' ) ); ?>

  <section class="section company-why">
    <div class="company-why__inner">
      <!-- Left column -->
      <div class="company-why__left motion">
        <h2 class="company-why__hero-title">Your business outcomes are our commitment.<br>Delivering on them is our promise.</h2>
        <div class="company-why__definition">
          <strong>HOSHŌ</strong>
          <span lang="ja">保証</span>
          <span>"guarantee" in Japanese.</span>
        </div>
      </div>

      <!-- Right column: principle cards -->
      <div class="company-why__right">
        <img src="<?php echo esc_url( hosho_asset_url( 'stamp-white.png' ) ); ?>" alt="HOSHŌ guarantee stamp" class="company-why__stamp" loading="lazy" decoding="async">
        <div class="company-why__principles motion">
          <div class="company-why__card" tabindex="0" role="button" aria-expanded="false">
            <span class="company-why__card-title">Understand Your Business</span>
            <span class="company-why__card-description">We start by understanding your challenges, ambitions, and business needs to identify where AI can deliver the greatest value.</span>
          </div>
          <div class="company-why__card" tabindex="0" role="button" aria-expanded="false">
            <span class="company-why__card-title">Define What Matters</span>
            <span class="company-why__card-description">We establish clear objectives and measurable outcomes to ensure every solution delivers meaningful business impact.</span>
          </div>
          <div class="company-why__card" tabindex="0" role="button" aria-expanded="false">
            <span class="company-why__card-title">Build with Intelligence</span>
            <span class="company-why__card-description">We design and deliver tailored AI solutions that integrate with your existing systems, scale with your needs, and turn possibilities into performance.</span>
          </div>
          <div class="company-why__card company-why__card--tall" tabindex="0" role="button" aria-expanded="false">
            <span class="company-why__card-title">Evolve with You</span>
            <span class="company-why__card-description">We provide ongoing support, optimisation, and guidance to ensure your solutions continue to deliver value as your business and technology evolve.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="company-why__definition company-why__definition--bottom motion" aria-label="HOSHŌ guarantee">
      <strong>HOSHŌ </strong>
      <span aria-hidden="true"> • </span>
      <span lang="ja">保証</span>
      <span aria-hidden="true"> • </span>
      <span lang="ja">ホショウ</span>
      <span aria-hidden="true"> • </span>
      <span>Guarantee</span>
    </div>
  </section>

  <section class="section section-mist company-direction">
    <div class="shell">
      <div class="company-direction__grid">
        <article class="company-direction__item motion">
          <p class="eyebrow">Vision</p>
          <h3>To amplify human potential and elevate business performance.</h3>
        </article>
        <article class="company-direction__item motion">
          <p class="eyebrow">Mission</p>
          <h3>To turn business challenges into measurable outcomes through intelligent technology.</h3>
        </article>
      </div>
    </div>
  </section>

  <section class="section company-beliefs">
    <div class="shell">
      <div class="section-heading motion"><h2>What We Believe</h2></div>
      <dl class="company-beliefs__list">
        <div class="company-belief motion"><dt>Outcomes Over Technology</dt><dd>Technology is not the outcome.<br>Business value is.</dd></div>
        <div class="company-belief motion"><dt>Build on What Works</dt><dd>Transformation doesn't require starting again.<br>Make what you have smarter.</dd></div>
        <div class="company-belief motion"><dt>Trust Is Earned</dt><dd>We don't hide complexity, oversell possibilities or promise what we cannot deliver.<br>We tell you what we believe.</dd></div>
        <div class="company-belief motion"><dt>Intelligence Should Empower People</dt><dd>AI should make people better at what they do, not simply automate for automation's sake.<br>Technology amplifies human potential.</dd></div>
        <div class="company-belief motion"><dt>The Work Doesn't End at Go-Live</dt><dd>The best solutions evolve.<br>Build. Improve. Evolve.</dd></div>
      </dl>
    </div>
  </section>

  <section id="our-values" class="section company-values company-values--director company-values--quotes" data-carousel data-carousel-interval="5000" aria-roledescription="carousel" aria-label="HOSHŌ values">
    <div class="shell">
      <div class="company-values__header motion">
        <div><h2>Values</h2></div>
        <div class="carousel-controls" aria-label="Values carousel controls">
          <p class="screen-reader-text"><span data-current>01</span> of 05</p>
          <button type="button" data-prev aria-label="Previous value">←</button>
          <button type="button" data-next aria-label="Next value">→</button>
        </div>
      </div>
      <div class="company-values__window">
        <div class="company-values__track" data-track>
          <article class="company-value company-value--statement company-value--courageous" data-slide aria-label="Courageous value">
            <figure class="company-value__media company-value__portrait"><img src="<?php echo esc_url( hosho_asset_url( 'company-values/aristotle.png' ) ); ?>" alt="Portrait of Aristotle" loading="lazy" decoding="async" draggable="false"></figure>
            <div class="company-value__copy"><h3>Courageous</h3><blockquote>&ldquo;Moral excellence comes about as a result of habit. We become just by doing just acts, temperate by doing temperate acts, brave by doing brave acts.&rdquo;</blockquote><cite>Aristotle</cite></div>
          </article>
          <article class="company-value company-value--statement company-value--curious" data-slide aria-label="Curious value">
            <figure class="company-value__media company-value__portrait"><img src="<?php echo esc_url( hosho_asset_url( 'company-values/voltaire.png' ) ); ?>" alt="Portrait of Voltaire" loading="lazy" decoding="async" draggable="false"></figure>
            <div class="company-value__copy"><h3>Curious</h3><blockquote>&ldquo;Judge a man by his questions rather than by his answers.&rdquo;</blockquote><cite>Voltaire</cite></div>
          </article>
          <article class="company-value company-value--statement company-value--accountable" data-slide aria-label="Accountable value">
            <figure class="company-value__media company-value__portrait"><img src="<?php echo esc_url( hosho_asset_url( 'company-values/moliere.png' ) ); ?>" alt="Portrait of Molière" loading="lazy" decoding="async" draggable="false"></figure>
            <div class="company-value__copy"><h3>Accountable</h3><blockquote>&ldquo;It is not only what we do, but also what we do not do, for which we are accountable.&rdquo;</blockquote><cite>Molière</cite></div>
          </article>
          <article class="company-value company-value--statement company-value--human" data-slide aria-label="Humanity value">
            <figure class="company-value__media company-value__portrait"><img src="<?php echo esc_url( hosho_asset_url( 'company-values/kenzaburo.png' ) ); ?>" alt="Portrait of Leo Tolstoy" loading="lazy" decoding="async" draggable="false"></figure>
            <div class="company-value__copy"><h3>Humanity</h3><blockquote>&ldquo;To understand the world, one must look at it from the perspective of the individual, not the crowd.&rdquo;</blockquote><cite>Kenzabur&#333; &#332;e</cite></div>
          </article>
          <article class="company-value company-value--statement company-value--kaizen" data-slide aria-label="Kaizen value">
            <figure class="company-value__media company-value__portrait"><img src="<?php echo esc_url( hosho_asset_url( 'company-values/van-gogh.png' ) ); ?>" alt="Self-portrait of Vincent van Gogh" loading="lazy" decoding="async" draggable="false"></figure>
            <div class="company-value__copy"><h3>Kaizen</h3><blockquote>&ldquo;For the great doesn't happen through impulse alone, and is a succession of little things that are brought together.&rdquo;</blockquote><cite>Vincent van Gogh</cite></div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="section company-standard">
    <div class="shell">
      <div class="intro-grid motion">
        <div><h2>We don't promise everything.<br>We promise what matters.</h2></div>
      </div>
      <dl class="company-standard__grid">
        <div class="company-standard__item motion"><dt>Outcome Guarantee</dt><dd>We create measurable business results.</dd></div>
        <div class="company-standard__item motion"><dt>Capability Guarantee</dt><dd>Your organisation will be able to perform better when our work is complete.</dd></div>
        <div class="company-standard__item motion"><dt>Continuity Guarantee</dt><dd>The value we create will continue to grow after implementation.</dd></div>
      </dl>
    </div>
  </section>

  <section class="section section-mist company-exists">
    <div class="shell">
      <div class="company-exists__heading motion">
        <h2>Technology got easier.<br>Transformation didn't.</h2>
      </div>
      <div class="company-exists__content motion">
        <div class="company-exists__message">
          <p class="company-exists__lead">Access to technology doesn't equate to knowledge</p>
          <div class="company-exists__closing">
            <p>That's where HOSHŌ comes in.</p>
            <p>We bring strategy, technology and execution together to help organisations move from possibility → implementation → impact.</p>
          </div>
        </div>
        <ul class="company-exists__questions">
          <li><span>01</span><span>Where to start?</span></li>
          <li><span>02</span><span>What to build?</span></li>
          <li><span>03</span><span>What to integrate?</span></li>
          <li><span>04</span><span>How to manage risk?</span></li>
          <li><span>05</span><span>How to get people to adopt it?</span></li>
          <li><span>06</span><span>How to turn it into measurable value?</span></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section company-journey">
    <div class="shell">
      <div class="section-heading motion"><h2>The HOSHŌ Mindset</h2></div>
      <ol class="company-journey__stages">
        <li class="company-journey__stage motion"><span>Possibility</span><strong>Discover</strong></li>
        <li class="company-journey__stage motion"><span>Potential</span><strong>Design</strong></li>
        <li class="company-journey__stage motion"><span>Proof</span><strong>Deploy</strong></li>
        <li class="company-journey__stage motion"><span>Performance</span><strong>Improve</strong></li>
        <li class="company-journey__stage motion"><span>Advantage</span><strong>Evolve</strong></li>
      </ol>
    </div>
  </section>

  <?php hosho_render_cta( 'Your digital guarantee', '<strong>TURN POTENTIAL INTO PROGRESS.</strong>', '', 'Get in touch', hosho_page_url( 'contact' ), 'quickwin-digital-landscape.jpg' ); ?>
</main>
<script>
(function () {
  var cards = document.querySelectorAll('.company-why__card');
  if (!cards.length) return;

  cards.forEach(function (card) {
    function toggle() {
      var expanded = card.getAttribute('aria-expanded') === 'true';
      card.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      card.classList.toggle('is-expanded', !expanded);
    }

    card.addEventListener('click', toggle);
    card.addEventListener('keydown', function (event) {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        toggle();
      }
    });
  });
})();
</script>
<?php get_footer(); ?>
