<?php get_header(); ?>
<main id="main-content">
  <?php hosho_render_hero('We borrow the Earth<br>from our children.','hero-sustainability-earth.jpg',array('class'=>'page-hero--sustainability')); ?>
  <section class="section">
    <div class="shell" style="text-align: center; max-width: 860px; margin: 0 auto;">
      <div class="motion">
        <h2 style="font-size: clamp(2.4rem, 5vw, 4rem); font-weight: 800; line-height: 1.1; margin-bottom: 1.25rem;">Long-term resilience is part of our fabric.</h2>
        <p style="font-size: clamp(0.95rem, 1.4vw, 1.1rem); color: #505d69; max-width: 52ch; margin: 0 auto;">Our commitments are built around people, communities,<br>responsible business practices and a healthy planet.</p>
      </div>
    </div>
  </section>

  <section class="section section-mist" id="commitments"><div class="shell"><div class="intro-grid motion"><div><p class="eyebrow">Environment</p><h2>Operating with environmental responsibility.</h2></div><p>Explore the commitments below. Hover, focus or tap a card to reveal more.</p></div>
    <div class="esg-commitments" data-esg-cards>
      <article class="esg-card is-active" tabindex="0" aria-expanded="true"><img loading="lazy" decoding="async" src="<?php echo esc_url(hosho_asset_url('esg-singapore-gardens.jpg')); ?>" alt="Gardens by the Bay and Singapore's urban greenery"><div class="esg-card__overlay"><h3>Resource Management</h3><p>Recycling and the sustainable use of resources guide our environmental approach.</p></div></article>
      <article class="esg-card" tabindex="0" aria-expanded="false"><img loading="lazy" decoding="async" src="<?php echo esc_url(hosho_asset_url('sustainability-green-facade.jpg')); ?>" alt="Green building facade in Singapore"><div class="esg-card__overlay"><h3>Emissions &amp; Energy Efficiency</h3><p>We pursue energy-conscious ways of working.</p></div></article>
      <article class="esg-card" tabindex="0" aria-expanded="false"><img loading="lazy" decoding="async" src="<?php echo esc_url(hosho_asset_url('sustainability-cloud-forest.jpg')); ?>" alt="Singapore urban greenery"><div class="esg-card__overlay"><h3>Waste &amp; Pollution Control</h3><p>We consider environmental impact across business activities.</p></div></article>
    </div>
  </div></section>

  <section class="media-split"><div class="media-split__image" style="background-image:url('<?php echo esc_url(hosho_asset_url('sustainability-singapore.jpg')); ?>')"></div><div class="media-split__content motion"><p class="eyebrow">Social</p><h2>People and communities.</h2><p>We promote a working environment where diverse people can contribute, grow and work with confidence.</p><div class="feature"><h3>Human Capital</h3><p>We foster development, diversity, equity and inclusion.</p></div><div class="feature"><h3>Human Rights</h3><p>We respect the rights of employees, customers, partners and people across our value chain.</p></div><div class="feature"><h3>Social Contributions</h3><p>We build trusted relationships and support responsible procurement.</p></div></div></section>

  <?php hosho_render_quote('<strong>A company should not <br>pursue growth for its own <br>sake, but should create<br> value for the world <br>and for people, <br>and contribute to global prosperity.</strong>','Konosuke Matsushita','quote-konosuke-matsushita-cutout-v2.png','quote-band--standard quote-band--red-soft quote-band--masayoshi'); ?>

  <section class="section">
    <div class="shell">
      <div class="intro-grid motion" style="margin-bottom: 48px;">
        <div>
          <p class="eyebrow">Governance</p>
          <h2>Trust is sustained<br>through clear<br>standards.</h2>
        </div>
        <p>We work to strengthen corporate governance and comply with applicable laws and regulations under the HOSHŌ DIGITAL Code of Ethics and Business Conduct.</p>
      </div>
      <div class="resilience-grid motion" style="margin-top: 8px;">
          <div class="resilience-item">
            <h4>Internal Controls</h4>
            <p>Fair, transparent corporate behaviour and controls that reflect legal, social and management requirements.</p>
          </div>
          <div class="resilience-item">
            <h4>Compliance</h4>
            <p>High ethical standards and sincere dealings with stakeholders across the regions where we operate.</p>
          </div>
          <div class="resilience-item">
            <h4>Information Security</h4>
            <p>Continuous attention to current security measures and responsible handling of information.</p>
          </div>
        </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="shell">
      <div style="display: flex; align-items: center; justify-content: center; gap: clamp(2.5rem, 6vw, 5rem); flex-wrap: wrap; padding: 1.5rem 0;">
        <img loading="lazy" decoding="async" src="<?php echo esc_url(hosho_asset_url('credential-uob-finlab.png')); ?>" alt="UOB FinLab" style="height: 40px; width: auto; object-fit: contain;">
        <img loading="lazy" decoding="async" src="<?php echo esc_url(hosho_asset_url('credential-cfi.png')); ?>" alt="Corporate Finance Institute" style="height: 70px; width: auto; object-fit: contain;">
        <img loading="lazy" decoding="async" src="<?php echo esc_url(hosho_asset_url('credential-enterprise-singapore.png')); ?>" alt="Enterprise Singapore" style="height: 65px; width: auto; object-fit: contain;">
      </div>
    </div>
  </section>
</main><?php get_footer(); ?>
