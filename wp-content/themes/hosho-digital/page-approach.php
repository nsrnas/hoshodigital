<?php
/**
 * Template Name: Approach
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content" class="approach-page">
<!-- =========================================================
	HERO
	========================================================= -->

	<section class="approach-hero">
		<div class="approach-hero-image">
            <img src="<?php echo esc_url( hosho_asset_url('approach/main/hero.jpg' ) ); ?>" alt="Architectural steel structure, representing the foundations of the Digital Core">
		</div>
		<div class="approach-hero-overlay"></div>
		<div class="container">
			<div class="approach-hero-content motion">
				<h1>
					We Don't Demolish<br>
					What's Already<br>
					Working.
				</h1>
			</div>
		</div>
	</section>

	<!-- =========================================================
	INTRO
	========================================================= -->

	<section class="approach-intro">
		<div class="container motion">
			<h2><span class="highlight">Our Approach</span>: The Intelligent Digital Core</h2>
			<p>
				The Digital Core is the data and workflow layer that connects
				your existing systems so AI can act on real, current
				information. It sits underneath what you already run. It
				doesn't replace it.
			</p>
		</div>
	</section>

	<!-- =========================================================
	ARCHITECTURE OF SCALE
	========================================================= -->

	<section class="architecture-scale">
		<div class="container">
			<div class="architecture-header motion">
				<span class="small-title">Architecture of Scale</span>
				<h3>Strength in the Structure</h3>
				<p>
					We treat your enterprise architecture like a building:
					some layers are structural and shouldn't be touched
					carelessly, others are meant to be renovated often.
				</p>
			</div>

			<div class="building-frame motion">
				<div class="building-roof">The Roof: Measurable Outcomes</div>

				<div class="building-layer">
					<div class="layer-num">01</div>
					<div>
						<h4>Applications</h4>
						<p>User experiences &amp; workflow tools</p>
					</div>
				</div>

				<div class="building-layer">
					<div class="layer-num">02</div>
					<div>
						<h4>Process &amp; Logic</h4>
						<p>The business rules governing actions</p>
					</div>
				</div>

				<div class="building-layer">
					<div class="layer-num">03</div>
					<div>
						<h4>Foundation</h4>
						<p>Existing systems and critical data</p>
					</div>
				</div>

				<div class="building-quote">
					We don't demolish the house. We strengthen the foundation to support the future.
					<span></span>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	TRANSFORMATION
	========================================================= -->

	<section class="transformation-section">
		<div class="container motion">
			<h2>
				Transformation Begins With<br>
				What You Already Have.
			</h2>
			<p>
				We believe the next era of enterprise growth is not about
				finding the next "killer app," but about unlocking the
				intelligence latent within your current structure.
			</p>
			<div class="transformation-divider"></div>
		</div>
	</section>

	<!-- =========================================================
	QUOTE
	========================================================= -->

	<?php hosho_render_quote( 'Without continual growth and progress, such words as improvement, achievement, and success have no meaning.', 'Benjamin Franklin', 'approach/main/benjamin.png' ); ?>

	<!-- =========================================================
	PHILOSOPHY
	========================================================= -->

	<section class="philosophy-section">
		<div class="container motion" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
			<h2>The HOSHŌ AI Delivery Philosophy</h2>
			<p style="max-width: 800px; margin-bottom: 2rem;">
				Every HOSHŌ engagement is anchored to our 8-stage delivery
				philosophy—a rigorous framework designed to eliminate
				strategic drift and guarantee measurable enterprise value.
			</p>
			<a href="<?php echo esc_url(home_url('/philosophy')); ?>" class="btn-red">Explore the Philosophy</a>
		</div>
	</section>

	<!-- =========================================================
	THE SEVEN NODES OF UNITY
	========================================================= -->

	<section class="nodes-section">
		<div class="nodes-left motion">
			<h2>The Seven<br>Nodes of Unity.</h2>
			<p>
				Every enterprise runs these seven functions somewhere, often
				in disconnected tools. Our Digital Core links them into a
				single loop, so a change in one place is reflected everywhere
				else automatically.
			</p>
			<div class="nodes-tags">
				<div class="tag"><span></span>Integrated Ecosystem</div>
				<div class="tag"><span></span>Zero-Disruption Flow</div>
			</div>
		</div>

		<div class="nodes-right motion">
			<div class="nodes-diagram-image">
                <img src="<?php echo esc_url( hosho_asset_url('approach/main/diagram.png' ) ); ?>" alt="The Seven Nodes of Unity diagram: Infrastructure, Data, Logic, Integration, Automation, AI, and Experience arranged around the Digital Core">
			</div>
		</div>
	</section>

	<!-- =========================================================
	FINAL CTA
	========================================================= -->

	<section class="approach-cta">
		<div class="approach-cta-image">
            <img src="<?php echo esc_url( hosho_asset_url('approach/main/cta.jpg' ) ); ?>" alt="City skyline at dusk, representing the enterprise landscape">
		</div>
		<div class="approach-cta-overlay"></div>
		<div class="container">
			<div class="approach-cta-content motion">
				<span class="small-title">Partner With Us</span>
				<h2>
					Ready to Build Your<br>
					Intelligent Digital Core?
				</h2>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-red">
					Speak to Us
				</a>
			</div>
		</div>
	</section>

</main>
<?php
get_footer();