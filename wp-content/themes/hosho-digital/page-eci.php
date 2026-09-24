<?php get_header(); ?>
<main id="main-content">
  <?php
    $dlp_partner_marks =
      '<img src="' . esc_url( hosho_asset_url( 'imda.webp' ) ) . '" alt="Infocomm Media Development Authority" class="eci-hero-partner-img eci-hero-partner-img--imda" loading="lazy" decoding="async">' .
      '<img src="' . esc_url( hosho_asset_url( 'esingapore.png' ) ) . '" alt="Enterprise Singapore" class="eci-hero-partner-img eci-hero-partner-img--enterprise" loading="lazy" decoding="async">' .
      '<img src="' . esc_url( hosho_asset_url( 'edbs.jpg' ) ) . '" alt="Singapore Economic Development Board" class="eci-hero-partner-img eci-hero-partner-img--edb" loading="lazy" decoding="async">';

    hosho_render_hero('Quick wins.<br>Guaranteed outcomes.', 'hero-quickwin-corridor-v2.png', array(
        'class'        => 'page-hero--quickwin',
        'actions_html' => $dlp_partner_marks,
      )
    );
  ?>

  <section class="section">
    <div class="shell intro-grid motion">
      <div>
        <h2>From AI ambition to operational value.</h2>
      </div>
      <div class="body-copy">
        <p class="lede">The Enterprise Compute Initiative is a Singapore Government programme enabling AI transformation.</p>
        <p>It provides companies with AI tools and consultancy support to deliver AI MVPs and solutions that promote adoption beyond the initial project.</p>
      </div>
    </div>
  </section>

  <section class="media-split media-split--reverse media-split--red">
    <div class="media-split__content motion">
      <h2>Funding, eligibility and delivery support.</h2>
      <div class="feature">
        <h3>Up to $105,000</h3>
        <p>Singapore Government funding under ECI.</p>
      </div>
      <div class="feature">
        <h3>Enterprise eligibility</h3>
        <p>For Singapore-based businesses with 10 or more Singapore employees looking to adopt AI for growth.</p>
      </div>
      <div class="feature">
        <h3>HOSHŌ support</h3>
        <p>From opportunity discovery through solution deployment and internal capability building.</p>
      </div>
    </div>
    <div class="media-split__image" style="background-image:url('<?php echo esc_url(hosho_asset_url('eci-singapore-triangular-facade.jpg')); ?>')"></div>
  </section>

  <section class="section section-mist eci-benefits">
    <div class="shell">
      <div class="intro-grid motion"> 
        <div>
          <h2>Governed progress, not disconnected experiments.</h2>
        </div>
        <p>HOSHŌ DIGITAL combines programme support, enterprise architecture and implementation discipline to keep AI investment tied to measurable business outcomes.</p>
      </div>
    </div>
    <div class="capability-grid capability-grid--3col">
      <div class="capability-card">
        <div class="capability-card__top">
          <div class="cap-icon">
            <span class="icon-svg" aria-hidden="true">↗</span>
          </div>
          <h4>Co-funding support</h4>
        </div>
        <p>Reduce upfront investment through eligible programme funding.</p>
      </div>
      <div class="capability-card">
        <div class="capability-card__top">
          <div class="cap-icon">
            <span class="icon-svg" aria-hidden="true">◎</span>
          </div>
          <h4>AI outcomes</h4>
        </div>
        <p>Design production-ready MVPs and agentic AI solutions around business value.</p>
      </div>
      <div class="capability-card">
        <div class="capability-card__top">
          <div class="cap-icon">
            <span class="icon-svg" aria-hidden="true">◇</span>
          </div>
          <h4>Lower risk, higher ROI</h4>
        </div>
        <p>Use structured delivery and expert guidance to support sustainable growth.</p>
      </div>
    </div>
  </section>


  <?php hosho_render_quote( '<strong>Change is the very essence of life. <br>The moment we cease to change, <br>to be able to adapt, to adjust, <br>to respond effectively to new situations, <br>then we have begun to die.</strong>', 'Lee Kuan Yew', 'lee-kuan-yew-editorial-v2.png', 'quote-band--standard quote-band--red-soft quote-band--masayoshi' ); ?>

  <section class="section section-navy">
    <div class="shell">
      <div class="intro-grid motion"> 
        <div>
          <h2>From discovery to adoption.</h2>
        </div>
        <p>Each stage adds evidence, governance and internal capability so the solution can continue delivering value after launch.</p>
      </div>
      <div class="timeline-row" style="display: flex; gap: 15px; align-items: stretch; overflow-x: auto; padding: 20px 0;">
        <div class="timeline-step"><h4>Discover</h4><p>Identify and validate high-impact use cases aligned with business priorities.</p></div>
        <div class="timeline-arrow" aria-hidden="true" style="color: var(--red); display: flex; align-items: center;"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#E21C15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></div>
        <div class="timeline-step"><h4>Prepare</h4><p>Assess data readiness and define the target architecture.</p></div>
        <div class="timeline-arrow" aria-hidden="true" style="color: var(--red); display: flex; align-items: center;"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#E21C15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></div>
        <div class="timeline-step"><h4>Deliver</h4><p>Build and pilot an AI MVP using Microsoft technologies.</p></div>
        <div class="timeline-arrow" aria-hidden="true" style="color: var(--red); display: flex; align-items: center;"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#E21C15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></div>
        <div class="timeline-step"><h4>Embed</h4><p>Support change, capability building and an AI Centre of Excellence blueprint.</p></div>
      </div>
    </div>
  </section>
  
  <?php hosho_render_cta('','<strong>Innovate with Intelligence.</strong>','','Register interest','https://hoshodigital.com/eci-form/','eci-singapore-night.jpg'); ?>
</main><?php get_footer(); ?>
