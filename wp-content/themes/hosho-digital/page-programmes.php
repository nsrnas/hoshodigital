<?php
/**
 * Template Name: Programmes
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */
get_header();
?>
<main id="main-content" class="programmes-page">
	<?php hosho_render_hero( 'START SMART. SCALE WITH CONFIDENCE.', 'programmes/hero-main.jpg', array(
		'class'   => 'programmes-hero',
	) ); ?>

	<section class="programmes-options" aria-label="Explore our programmes">
		<div class="programmes-shell svc-grid programmes-options__grid">
			<article class="svc-card programme-card motion">
				<p class="small-title programmes-eyebrow">DLP</p>
				<h3>Digital Leader Program</h3>
				<p>Ready-to-deploy Generative AI packages for digitally ready SMEs.</p>
				<a class="button" href="<?php echo esc_url( hosho_page_url( 'digital-leader-program' ) ); ?>">Explore<span class="button-arrow" aria-hidden="true"></span></a>
			</article>
			<article class="svc-card programme-card motion">
				<p class="small-title programmes-eyebrow">ECI</p>
				<h3>Enterprise Compute Initiative</h3>
				<p>Funding and expert support to take AI from idea to real business value.</p>
				<a class="button" href="<?php echo esc_url( hosho_page_url( 'eci' ) ); ?>">Explore<span class="button-arrow" aria-hidden="true"></span></a>
			</article>
		</div>
	</section>

	<section class="programmes-process">
		<div class="programmes-shell">
			<header class="programmes-process__header">
				<p class="programmes-eyebrow">How it works</p>
				<h2>From first call to first result.</h2>
			</header>
			<div class="programmes-steps">
				<article class="programme-step">
					<p class="programme-step__number">01</p>
					<h3>Talk to us</h3>
					<p>Share your goals and we'll match you to the right programme.</p>
				</article>
				<article class="programme-step">
					<p class="programme-step__number">02</p>
					<h3>Scope it</h3>
					<p>We define a clear use case, plan and expected outcome.</p>
				</article>
				<article class="programme-step">
					<p class="programme-step__number">03</p>
					<h3>Deliver</h3>
					<p>We build, launch and support adoption with your team.</p>
				</article>
			</div>
		</div>
	</section>

	<?php hosho_render_cta( '', 'Find the right fit', '', 'Talk to us', hosho_page_url( 'contact' ), 'programmes/cta-main.jpg' ); ?>
</main>
<?php get_footer(); ?>
