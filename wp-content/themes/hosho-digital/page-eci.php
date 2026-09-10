<?php get_header(); ?>
<main id="main-content">
  <?php
    $eci_partner_marks =
      '<span class="eci-hero-partner eci-hero-partner--microsoft" role="img" aria-label="Microsoft"></span>' .
      '<span class="eci-hero-partner eci-hero-partner--imda" role="img" aria-label="Infocomm Media Development Authority"></span>' .
      '<span class="eci-hero-partner eci-hero-partner--enterprise" role="img" aria-label="Enterprise Singapore"></span>' .
      '<span class="eci-hero-partner eci-hero-partner--edb" role="img" aria-label="Singapore Economic Development Board"></span>';
    hosho_render_hero('Innovate with<br>Intelligence.','hero-eci-lattice.png',array('class'=>'page-hero--eci','actions_html'=>$eci_partner_marks));
  ?>

  <section class="section"><div class="shell intro-grid motion"><div><h2>From AI ambition to operational value.</h2></div><div class="body-copy"><p class="lede">The Enterprise Compute Initiative is a Singapore Government programme enabling AI transformation.</p><p>It provides companies with AI tools and consultancy support to deliver AI MVPs and solutions that promote adoption beyond the initial project.</p></div></div></section>

  <section class="media-split media-split--reverse media-split--red"><div class="media-split__content motion"><h2>Funding, eligibility and delivery support.</h2><div class="feature"><h3>Up to $105,000</h3><p>Singapore Government funding under ECI.</p></div><div class="feature"><h3>Enterprise eligibility</h3><p>For Singapore-based businesses with 10 or more Singapore employees looking to adopt AI for growth.</p></div><div class="feature"><h3>HOSHŌ support</h3><p>From opportunity discovery through solution deployment and internal capability building.</p></div></div><div class="media-split__image" style="background-image:url('<?php echo esc_url(hosho_asset_url('eci-singapore-triangular-facade.jpg')); ?>')"></div></section>

  <section class="section section-mist eci-benefits"><div class="shell"><div class="intro-grid motion"><div><h2>Governed progress, not disconnected experiments.</h2></div><p>HOSHŌ DIGITAL combines programme support, enterprise architecture and implementation discipline to keep AI investment tied to measurable business outcomes.</p></div><div class="eci-benefit-grid"><article><span aria-hidden="true">↗</span><h3>Co-funding support</h3><p>Reduce upfront investment through eligible programme funding.</p></article><article><span aria-hidden="true">◎</span><h3>AI outcomes</h3><p>Design production-ready MVPs and agentic AI solutions around business value.</p></article><article><span aria-hidden="true">◇</span><h3>Lower risk, higher ROI</h3><p>Use structured delivery and expert guidance to support sustainable growth.</p></article></div></div></section>

  <section class="section section-navy"><div class="shell"><div class="intro-grid motion"><div><h2>From discovery to adoption.</h2></div><p>Each stage adds evidence, governance and internal capability so the solution can continue delivering value after launch.</p></div><div class="process process--arrow process--four"><article><h3>Discover</h3><p>Identify and validate high-impact use cases aligned with business priorities.</p></article><article><h3>Prepare</h3><p>Assess data readiness and define the target architecture.</p></article><article><h3>Deliver</h3><p>Build and pilot an AI MVP using Microsoft technologies.</p></article><article><h3>Embed</h3><p>Support change, capability building and an AI Centre of Excellence blueprint.</p></article></div></div></section>
  <?php hosho_render_cta('','<strong>Innovate with Intelligence.</strong>','','Register interest','https://hoshodigital.com/eci-form/','eci-singapore-night.jpg'); ?>
</main><?php get_footer(); ?>
