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
	<style>
		:root {
			--red: #bf1e23;
			--red-dark: #8f0f14;
			--navy: #0f2946;
			--navy-light: #132e4d;
			--light: #f7f7f7;
			--text: #18314e;
			--gray: #6b7787;
			--border: #ececec;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.approach-page {
			font-family: Inter, sans-serif;
			color: var(--text);
			background: #fff;
			overflow: hidden;
		}

		.approach-page section:not(.nodes-section) {
			display: block;
			width: 100%;
			float: none;
			clear: both;
		}

		.container {
			max-width: 1200px;
			width: calc(100% - 80px);
			margin: auto;
		}

		img {
			display: block;
			width: 100%;
		}

		a {
			text-decoration: none;
		}

		.btn-red {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			gap: 10px;
			background: var(--red);
			color: #fff;
			padding: 16px 30px;
			font-weight: 700;
			font-size: 14px;
			transition: .25s;
		}

		.btn-red:hover {
			background: #a9181c;
		}

		/* =========================================================
		HERO
		========================================================= */

		.approach-hero {
			position: relative;
			min-height: 760px;
			display: flex;
			align-items: center;
			overflow: hidden;
			background: #3a0608;
		}

		.approach-hero-image {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.approach-hero-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			display: block;
		}

		.approach-hero-overlay {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background:
				radial-gradient(circle at 50% 0%, rgba(220, 40, 35, .45), transparent 55%),
				linear-gradient(90deg, rgba(58, 6, 8, .92) 0%, rgba(90, 12, 15, .78) 45%, rgba(42, 5, 7, .55) 100%);
		}

		.approach-hero-content {
			position: relative;
			z-index: 2;
			max-width: 760px;
			color: #fff;
			padding: 60px 0;
            padding-top: 260px;
		}

		.approach-hero h1 {
			font-size: 56px;
			line-height: 1.05;
			font-weight: 900;
			letter-spacing: -1px;
			text-transform: uppercase;
			margin-bottom: 26px;
		}

		.approach-hero p {
			font-size: 18px;
			line-height: 1.7;
			color: rgba(255, 255, 255, .88);
			max-width: 620px;
		}

		/* =========================================================
		INTRO
		========================================================= */

		.approach-intro {
			padding: 90px 0 70px;
			text-align: center;
			background: #fff;
		}

		.approach-intro h2 {
			font-size: 34px;
			font-weight: 800;
			color: #111;
			text-transform: uppercase;
			letter-spacing: .5px;
			margin-bottom: 22px;
		}

		.approach-intro h2 .highlight {
			color: var(--red);
		}

		.approach-intro p {
			max-width: 900px;
			margin: auto;
			font-size: 17px;
			line-height: 1.8;
			color: #333;
		}

		/* =========================================================
		ARCHITECTURE OF SCALE
		========================================================= */

		.architecture-scale {
			padding: 80px 0 110px;
			background: linear-gradient(180deg, #fbe4e4 0%, #f7f7f8 45%);
		}

		.architecture-header {
			text-align: center;
			max-width: 720px;
			margin: 0 auto 55px;
		}

		.architecture-header .small-title {
			display: block;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 2px;
			text-transform: uppercase;
			color: var(--red);
			margin-bottom: 14px;
		}

		.architecture-header h3 {
			font-size: 32px;
			font-weight: 800;
			color: var(--navy);
			margin-bottom: 16px;
		}

		.architecture-header p {
			color: #4a5561;
			line-height: 1.7;
			font-size: 16px;
		}

		.building-frame {
			position: relative;
			max-width: 940px;
			margin: auto;
			border: 3px solid var(--red);
			background: #fff;
			padding: 40px 40px 40px;
			box-shadow: 0 25px 50px rgba(0, 0, 0, .08);
		}

		.building-roof {
			text-align: center;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: var(--navy);
			border: 1px solid var(--border);
			background: #fdf1f1;
			padding: 14px;
			margin-bottom: 25px;
		}

		.building-layer {
			display: flex;
			align-items: center;
			gap: 22px;
			border: 1px solid var(--border);
			padding: 22px 26px;
			margin-bottom: 20px;
		}

		.building-layer:last-child {
			margin-bottom: 0;
		}

		.building-layer .layer-num {
			flex: 0 0 auto;
			width: 46px;
			height: 46px;
			background: var(--navy);
			color: #fff;
			font-weight: 700;
			font-size: 16px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.building-layer h4 {
			font-size: 24px;
			font-weight: 800;
			color: var(--navy);
			margin-bottom: 4px;
		}

		.building-layer p {
			color: var(--gray);
			font-size: 15px;
		}

		.building-tab {
			position: absolute;
			right: -28px;
			top: 190px;
			bottom: 60px;
			width: 30px;
			background: var(--red);
			color: #fff;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 11px;
			font-weight: 800;
			letter-spacing: 2px;
			writing-mode: vertical-rl;
			text-transform: uppercase;
		}

		.building-quote {
			position: absolute;
			right: -60px;
			bottom: -60px;
			width: 340px;
			background: var(--navy);
			color: #fff;
			padding: 26px 30px;
			font-size: 15px;
			line-height: 1.6;
			box-shadow: 0 20px 40px rgba(0, 0, 0, .18);
		}

		.building-quote span {
			display: block;
			width: 34px;
			height: 2px;
			background: var(--red);
			margin-top: 14px;
		}

		/* =========================================================
		TRANSFORMATION
		========================================================= */

		.transformation-section {
			padding: 190px 0 90px;
			text-align: center;
			background: #f7f7f8;
		}

		.transformation-section h2 {
			font-size: 42px;
			font-weight: 800;
			color: var(--navy);
			line-height: 1.15;
			margin-bottom: 26px;
		}

		.transformation-section p {
			max-width: 680px;
			margin: auto;
			color: var(--gray);
			line-height: 1.8;
			font-size: 16px;
		}

		.transformation-divider {
			width: 90px;
			height: 4px;
			background: var(--red);
			margin: 40px auto 0;
		}

		/* =========================================================
		PHILOSOPHY
		========================================================= */

		.philosophy-section {
			padding: 90px 0 100px;
			background: #f7f7f8;
		}

		.philosophy-section h2 {
			font-size: 38px;
			font-weight: 800;
			color: #111;
			margin-bottom: 24px;
			max-width: 700px;
		}

		.philosophy-section p {
			max-width: 700px;
			color: #444f5c;
			line-height: 1.8;
			font-size: 16px;
			margin-bottom: 35px;
		}

		/* =========================================================
		SEVEN NODES
		========================================================= */

		.nodes-section {
			display: grid;
			grid-template-columns: 420px 1fr;
			background: #f7f7f8;
			width: 100%;
			float: none;
			clear: both;
		}

		.nodes-left {
			background: var(--navy);
			color: #fff;
			padding: 90px 60px;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.nodes-left h2 {
			font-size: 38px;
			font-weight: 800;
			color: #f6c7c9;
			margin-bottom: 22px;
			line-height: 1.15;
		}

		.nodes-left p {
			color: rgba(255, 255, 255, .75);
			line-height: 1.8;
			font-size: 15px;
			margin-bottom: 26px;
		}

		.nodes-tags {
			display: flex;
			flex-direction: column;
			gap: 12px;
		}

		.nodes-tags .tag {
			display: flex;
			align-items: center;
			gap: 12px;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: rgba(255, 255, 255, .85);
		}

		.nodes-tags .tag span {
			width: 8px;
			height: 8px;
			border-radius: 50%;
			background: var(--red);
		}

		.nodes-right {
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 60px 20px;
		}

		.nodes-diagram-image {
			width: 100%;
			max-width: 560px;
		}

		.nodes-diagram-image img {
			width: 100%;
			height: auto;
			display: block;
		}

		/* =========================================================
		QUOTE
		========================================================= */

		.approach-quote {
			position: relative;
			overflow: hidden;
			background: linear-gradient(100deg, #8c1114 0%, #6a0d10 30%, var(--navy) 75%);
			min-height: 380px;
			display: flex;
			align-items: center;
		}

		.approach-quote-inner {
			position: relative;
			z-index: 2;
			max-width: 640px;
			color: #fff;
			padding: 70px 0;
		}

		.approach-quote .quote-mark {
			font-size: 70px;
			color: rgba(255, 255, 255, .35);
			line-height: 1;
			margin-bottom: 10px;
		}

		.approach-quote h2 {
			font-size: 28px;
			font-weight: 700;
			line-height: 1.4;
			margin-bottom: 26px;
		}

		.approach-quote .quote-author {
			font-size: 13px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
		}

		.approach-quote .quote-role {
			font-size: 14px;
			color: rgba(255, 255, 255, .7);
			margin-top: 4px;
			font-weight: 400;
		}

		.approach-quote-photo {
			position: absolute;
			right: 0;
			top: 0;
			bottom: 0;
			width: 42%;
			overflow: hidden;
		}

		.approach-quote-photo img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			filter: grayscale(100%);
		}

		/* =========================================================
		FINAL CTA
		========================================================= */

		.approach-cta {
			position: relative;
			overflow: hidden;
			background: var(--navy);
			padding: 130px 0;
		}

		.approach-cta-image {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.approach-cta-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			opacity: .35;
		}

		.approach-cta-overlay {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background: linear-gradient(rgba(15, 41, 70, .3), rgba(15, 41, 70, .9));
		}

		.approach-cta-content {
			position: relative;
			z-index: 2;
			max-width: 720px;
			margin: auto;
			text-align: center;
			color: #fff;
		}

		.approach-cta-content .small-title {
			display: block;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 3px;
			text-transform: uppercase;
			color: #f0b8ba;
			margin-bottom: 20px;
		}

		.approach-cta-content h2 {
			font-size: 44px;
			font-weight: 800;
			line-height: 1.2;
			margin-bottom: 22px;
		}

		.approach-cta-content p {
			color: rgba(255, 255, 255, .75);
			line-height: 1.8;
			margin-bottom: 36px;
		}
	</style>

	<!-- =========================================================
	HERO
	========================================================= -->

	<section class="approach-hero">
		<div class="approach-hero-image">
            <img src="<?php echo esc_url( hosho_asset_url( 'images/approach/main/hero.jpg' ) ); ?>" alt="Architectural steel structure, representing the foundations of the Digital Core">
		</div>
		<div class="approach-hero-overlay"></div>
		<div class="container">
			<div class="approach-hero-content">
				<h1>
					We Don't Demolish<br>
					What's Already<br>
					Working.
				</h1>
				<p>
					Most transformation projects fail because they try to
					replace everything at once. We work with the systems you
					already have and build the connective layer they're
					missing.
				</p>
			</div>
		</div>
	</section>

	<!-- =========================================================
	INTRO
	========================================================= -->

	<section class="approach-intro">
		<div class="container">
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
			<div class="architecture-header">
				<span class="small-title">Architecture of Scale</span>
				<h3>Strength in the Structure</h3>
				<p>
					We treat your enterprise architecture like a building:
					some layers are structural and shouldn't be touched
					carelessly, others are meant to be renovated often.
				</p>
			</div>

			<div class="building-frame">
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
					"We don't demolish the house. We strengthen the foundation
					to support the future."
					<span></span>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	TRANSFORMATION
	========================================================= -->

	<section class="transformation-section">
		<div class="container">
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
	PHILOSOPHY
	========================================================= -->

	<section class="philosophy-section">
		<div class="container">
			<h2>The HOSHŌ AI Delivery Philosophy</h2>
			<p>
				Every HOSHŌ engagement is anchored to our 8-stage delivery
				philosophy—a rigorous framework designed to eliminate
				strategic drift and guarantee measurable enterprise value.
			</p>
			<a href="#" class="btn-red">Explore the Philosophy</a>
		</div>
	</section>

	<!-- =========================================================
	THE SEVEN NODES OF UNITY
	========================================================= -->

	<section class="nodes-section">
		<div class="nodes-left">
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

		<div class="nodes-right">
			<div class="nodes-diagram-image">
                <img src="<?php echo esc_url( hosho_asset_url( 'images/approach/main/diagram.png' ) ); ?>" alt="The Seven Nodes of Unity diagram: Infrastructure, Data, Logic, Integration, Automation, AI, and Experience arranged around the Digital Core">
			</div>
		</div>
	</section>

	<!-- =========================================================
	QUOTE
	========================================================= -->

	<section class="approach-quote">
		<div class="container">
			<div class="approach-quote-inner">
				<div class="quote-mark">"</div>
				<h2>
					"Without continual growth and progress, such words as
					improvement, achievement, and success have no meaning."
				</h2>
				<div class="quote-author">Benjamin Franklin</div>
				<div class="quote-role">American polymath</div>
			</div>
		</div>
		<div class="approach-quote-photo">
            <img src="<?php echo esc_url( hosho_asset_url( 'images/approach/main/benjamin.png' ) ); ?>" alt="Benjamin Franklin portrait">
		</div>
	</section>

	<!-- =========================================================
	FINAL CTA
	========================================================= -->

	<section class="approach-cta">
		<div class="approach-cta-image">
            <img src="<?php echo esc_url( hosho_asset_url( 'images/approach/main/cta.jpg' ) ); ?>" alt="City skyline at dusk, representing the enterprise landscape">
		</div>
		<div class="approach-cta-overlay"></div>
		<div class="container">
			<div class="approach-cta-content">
				<span class="small-title">Partner With Us</span>
				<h2>
					Ready to Build Your<br>
					Intelligent Digital Core?
				</h2>
				<p>
					Connect with our principals to begin architecting your
					organization's future in the intelligence economy.
				</p>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-red">
					Contact Our Experts
				</a>
			</div>
		</div>
	</section>

</main>
<?php
get_footer();