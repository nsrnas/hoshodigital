<?php
/**
 * Template Name: AMS
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content" class="ams-page">
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
			--pink: #f8d3d4;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.ams-page {
			font-family: Inter, sans-serif;
			color: var(--text);
			background: #fff;
			overflow: hidden;
		}

		.ams-page section:not(.ams-quote) {
			display: block;
			width: 100%;
			float: none;
			clear: both;
		}

		.ams-page section.ams-quote {
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
			font-size: 13px;
			letter-spacing: .5px;
			transition: .25s;
		}

		.btn-red:hover {
			background: #a9181c;
		}

		/* =========================================================
		HERO
		========================================================= */

		.ams-hero {
			position: relative;
			min-height: 760px;
			display: flex;
			align-items: center;
			overflow: hidden;
			background: #3a0608;
		}

		.ams-hero-image {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.ams-hero-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			display: block;
		}

		.ams-hero-overlay {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background:
				radial-gradient(circle at 20% 20%, rgba(80, 80, 80, .55), transparent 45%),
				linear-gradient(100deg, rgba(58, 6, 8, .55) 0%, rgba(90, 12, 15, .78) 45%, rgba(150, 20, 22, .55) 100%);
		}

		.ams-hero .container {
			position: relative;
			z-index: 2;
		}

		.ams-hero-content {
			max-width: 760px;
			color: #fff;
			padding: 55px 0;
			padding-top: 260px;
		}

		.ams-hero h1 {
			font-size: 46px;
			line-height: 1.15;
			font-weight: 900;
			letter-spacing: -.5px;
			text-transform: uppercase;
			margin-bottom: 24px;
		}

		.ams-hero p {
			font-size: 17px;
			line-height: 1.7;
			color: rgba(255, 255, 255, .88);
			max-width: 620px;
		}

		/* =========================================================
		INTRO
		========================================================= */

		.ams-intro {
			padding: 75px 0 60px;
			text-align: center;
			background: #fff;
		}

		.ams-intro h2 {
			font-size: 32px;
			font-weight: 800;
			color: #111;
			text-transform: uppercase;
			letter-spacing: .5px;
		}

		.ams-intro h2 .highlight {
			color: var(--red);
		}

		/* =========================================================
		STATEMENT BANNER
		========================================================= */

		.ams-statement {
			background: #ececed;
			padding: 45px 0;
		}

		.ams-statement h3 {
			font-size: 26px;
			font-weight: 800;
			color: var(--red);
			line-height: 1.3;
			margin-bottom: 18px;
		}

		.ams-statement p {
			max-width: 800px;
			color: #333;
			line-height: 1.7;
			font-size: 16px;
		}

		/* =========================================================
		CONTINUITY FRAMEWORK
		========================================================= */

		.continuity-section {
			padding: 90px 0;
			background: #fff;
		}

		.continuity-grid {
			display: grid;
			grid-template-columns: 1.1fr .9fr;
			gap: 40px;
			align-items: center;
		}

		.continuity-left .small-title {
			display: block;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			color: var(--red);
			margin-bottom: 12px;
		}

		.continuity-left h3 {
			font-size: 30px;
			font-weight: 800;
			color: var(--navy);
			line-height: 1.25;
			margin-bottom: 22px;
		}

		.continuity-left > p {
			color: #444f5c;
			line-height: 1.8;
			font-size: 16px;
			margin-bottom: 35px;
		}

		.continuity-item {
			display: flex;
			gap: 18px;
			margin-bottom: 26px;
		}

		.continuity-item:last-child {
			margin-bottom: 0;
		}

		.continuity-item .icon-box {
			flex: 0 0 auto;
			width: 46px;
			height: 46px;
			background: #fbe1e2;
			color: var(--red);
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 18px;
			border-radius: 4px;
		}

		.continuity-item.final .icon-box {
			background: var(--red);
			color: #fff;
		}

		.continuity-item h4 {
			font-size: 19px;
			font-weight: 700;
			color: var(--navy);
			margin-bottom: 4px;
		}

		.continuity-item p {
			color: var(--gray);
			font-size: 15px;
			line-height: 1.6;
		}

		.continuity-item.final p {
			color: var(--red);
			font-weight: 700;
		}

		.continuity-right {
			display: flex;
			align-items: center;
			justify-content: flex-end;
			width: 100%;
		}

		.continuity-right img {
			width: 100%;
			max-width: 80%;
			height: auto;
			display: block;
			object-fit: contain;
		}

		/* =========================================================
		STAY WITH YOU
		========================================================= */

		.stay-section {
			background: var(--navy);
			color: #fff;
			padding: 70px 0 60px;
			text-align: center;
		}

		.stay-section h2 {
			font-size: 36px;
			font-weight: 800;
			margin-bottom: 14px;
		}

		.stay-section > .container > p {
			color: rgba(255, 255, 255, .7);
			margin-bottom: 55px;
			font-size: 16px;
		}

		.timeline-row {
			display: grid;
			grid-template-columns: repeat(6, 1fr);
			gap: 20px;
			position: relative;
		}

		.timeline-step {
			text-align: center;
			position: relative;
		}

		.timeline-num {
			width: 54px;
			height: 54px;
			margin: 0 auto 20px;
			background: var(--navy-light);
			border: 1px solid rgba(255, 255, 255, .2);
			color: #fff;
			display: flex;
			align-items: center;
			justify-content: center;
			font-weight: 700;
			font-size: 15px;
			position: relative;
			z-index: 2;
		}

		.timeline-step.active .timeline-num {
			background: var(--red);
			border-color: var(--red);
		}

		.timeline-step:first-child .timeline-num {
			background: #fff;
			color: var(--navy);
		}

		.timeline-step h4 {
			font-size: 18px;
			font-weight: 700;
			margin-bottom: 10px;
		}

		.timeline-step.active h4 {
			color: #f0b8ba;
		}

		.timeline-step p {
			font-size: 13.5px;
			color: rgba(255, 255, 255, .6);
			line-height: 1.6;
		}

		/* =========================================================
		AMS ENGINE
		========================================================= */

		.engine-section {
			padding: 90px 0 80px;
			background: #f7f7f8;
		}

		.engine-header {
			text-align: center;
			max-width: 760px;
			margin: 0 auto 45px;
		}

		.engine-header h2 {
			font-size: 34px;
			font-weight: 800;
			color: var(--navy);
			margin-bottom: 16px;
		}

		.engine-header p {
			color: var(--gray);
			line-height: 1.7;
			font-size: 15.5px;
		}

		.engine-chevrons {
			display: flex;
			margin-bottom: 45px;
		}

		.engine-chevron {
			flex: 1;
			display: flex;
			align-items: center;
			justify-content: center;
			color: #fff;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			padding: 18px 10px;
			clip-path: polygon(0 0, 88% 0, 100% 50%, 88% 100%, 0 100%, 10% 50%);
			margin-left: -14px;
		}

		.engine-chevron:first-child {
			margin-left: 0;
			padding-left: 20px;
		}

		.engine-note {
			text-align: center;
			max-width: 760px;
			margin: 0 auto 50px;
			color: var(--gray);
			line-height: 1.7;
			font-size: 15px;
		}

		.capability-grid {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			gap: 24px;
		}

		.capability-card {
			background: #fff;
			border: 1px solid var(--border);
			border-radius: 6px;
			padding: 30px 26px;
		}

		.capability-card .cap-icon {
			font-size: 22px;
			color: var(--red);
			margin-bottom: 16px;
		}

		.capability-card h4 {
			font-size: 19px;
			font-weight: 700;
			color: #111;
			margin-bottom: 12px;
			line-height: 1.25;
		}

		.capability-card p {
			font-size: 14.5px;
			color: var(--gray);
			line-height: 1.65;
		}

		/* =========================================================
		STATS BAR
		========================================================= */

		.stats-bar {
			background: #2b2b2e;
			color: #fff;
			padding: 40px 45px;
			margin: 55px auto 0;
			max-width: 1200px;
			width: calc(100% - 80px);
		}

		.stats-row {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			gap: 20px;
			margin-bottom: 30px;
			text-align: center;
		}

		.stats-row .stat span.label {
			display: block;
			font-size: 16px;
			font-weight: 600;
			margin-bottom: 4px;
		}

		.stats-row .stat span.tag {
			display: block;
			font-size: 12px;
			font-weight: 700;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: var(--red);
		}

		.stats-quote {
			font-style: italic;
			color: rgba(255, 255, 255, .75);
			font-size: 15px;
			border-top: 1px solid rgba(255, 255, 255, .12);
			padding-top: 22px;
		}

		/* =========================================================
		QUOTE
		========================================================= */

		.ams-quote {
			position: relative;
			overflow: hidden;
			background: linear-gradient(100deg, var(--navy) 0%, #6a0d10 65%, #8c1114 100%);
			min-height: 340px;
			display: flex;
			align-items: center;
			margin-top: 70px;
		}

		.ams-quote-content {
			position: relative;
			z-index: 2;
			display: grid;
			grid-template-columns: 340px 1fr;
			align-items: center;
			gap: 50px;
		}

		.ams-quote-photo {
			width: 100%;
			border-radius: 4px;
			overflow: hidden;
		}

		.ams-quote-photo img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			filter: grayscale(100%);
		}

		.ams-quote-text .quote-mark {
			font-size: 60px;
			color: rgba(255, 255, 255, .35);
			line-height: 1;
			margin-bottom: 8px;
		}

		.ams-quote-text h2 {
			font-size: 30px;
			font-weight: 700;
			color: #fff;
			line-height: 1.35;
			margin-bottom: 22px;
		}

		.ams-quote-text .quote-author {
			font-size: 13px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: #fff;
		}

		.ams-quote-text .quote-role {
			font-size: 14px;
			color: rgba(255, 255, 255, .7);
			margin-top: 4px;
		}

		/* =========================================================
		CORE COMPETENCIES
		========================================================= */

		.competencies-section {
			padding: 90px 0 80px;
			background: #f7f7f8;
		}

		.competencies-header {
			margin-bottom: 45px;
		}

		.competencies-header .small-title {
			display: block;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			color: var(--red);
			margin-bottom: 10px;
		}

		.competencies-header h2 {
			font-size: 32px;
			font-weight: 800;
			color: var(--navy);
		}

		.competencies-grid {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 22px;
		}

		.competency-card {
			padding: 30px 28px;
			border: 1px solid var(--border);
		}

		.competency-card.pink {
			background: var(--pink);
			border-color: var(--pink);
		}

		.competency-card.gray {
			background: #f2f2f3;
		}

		.competency-card h4 {
			display: flex;
			align-items: center;
			gap: 12px;
			font-size: 20px;
			font-weight: 700;
			color: var(--navy);
			margin-bottom: 14px;
		}

		.competency-card h4 .comp-icon {
			font-size: 18px;
			color: var(--navy);
		}

		.competency-card p {
			font-size: 14.5px;
			line-height: 1.7;
			color: #4a5561;
		}

		/* =========================================================
		HOSHO ADVANTAGE
		========================================================= */

		.advantage-section {
			padding: 90px 0 100px;
			background: #f7f7f8;
		}

		.advantage-header {
			display: grid;
			grid-template-columns: 1fr 420px;
			gap: 40px;
			align-items: end;
			margin-bottom: 50px;
		}

		.advantage-header .small-title {
			display: block;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			color: var(--red);
			margin-bottom: 10px;
		}

		.advantage-header h2 {
			font-size: 32px;
			font-weight: 800;
			color: var(--navy);
			line-height: 1.25;
		}

		.advantage-header p {
			color: #4a5561;
			line-height: 1.7;
			font-size: 15.5px;
		}

		.advantage-grid {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 40px 40px;
		}

		.advantage-item {
			border-top: 2px solid var(--navy);
			padding-top: 20px;
		}

		.advantage-item.accent {
			border-top-color: var(--red);
		}

		.advantage-item h4 {
			font-size: 21px;
			font-weight: 700;
			color: var(--navy);
			margin-bottom: 10px;
		}

		.advantage-item h4.red-text {
			color: var(--red);
		}

		.advantage-item p {
			font-size: 15px;
			color: #4a5561;
			line-height: 1.7;
		}

		/* =========================================================
		FINAL CTA
		========================================================= */

		.ams-cta {
			position: relative;
			overflow: hidden;
			padding: 110px 0;
			background: #1a1a1a;
		}

		.ams-cta-image {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.ams-cta-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.ams-cta-overlay {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background: linear-gradient(100deg, rgba(255, 255, 255, .55), rgba(190, 60, 55, .35));
		}

		.ams-cta-content {
			position: relative;
			z-index: 2;
			max-width: 780px;
			margin: auto;
			text-align: center;
		}

		.ams-cta-content h2 {
			font-size: 42px;
			font-weight: 800;
			color: #111;
			line-height: 1.2;
			margin-bottom: 20px;
		}

		.ams-cta-content p {
			color: #333;
			line-height: 1.7;
			margin-bottom: 34px;
			font-size: 16px;
		}
	</style>

	<!-- =========================================================
	HERO
	========================================================= -->

	<section class="ams-hero">
		<div class="ams-hero-image">
			<img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ams/hero.jpg' ) ); ?>" alt="Abstract dark red architectural texture">
		</div>
		<div class="ams-hero-overlay"></div>
		<div class="container">
			<div class="ams-hero-content">
				<h1>
					Our AMS Framework Is<br>
					Designed for the Modern<br>
					Enterprise
				</h1>
				<p>
					AMS is the partnership that runs after implementation:
					monitoring, maintaining, and improving the applications
					and AI systems we build together, for as long as you need
					us to.
				</p>
			</div>
		</div>
	</section>

	<!-- =========================================================
	INTRO
	========================================================= -->

	<section class="ams-intro">
		<div class="container">
			<h2>Application <span class="highlight">Management Services</span></h2>
		</div>
	</section>

	<!-- =========================================================
	STATEMENT BANNER
	========================================================= -->

	<section class="ams-statement">
		<div class="container">
			<h3>
				Applications aren't static anymore, so support can't be either.
			</h3>
			<p>
				An AI-powered system needs more than a maintenance contract:
				models drift, data pipelines break, and dependencies update
				weekly. AMS is our dedicated team watching that complexity so
				your internal team doesn't have to.
			</p>
		</div>
	</section>

	<!-- =========================================================
	CONTINUITY FRAMEWORK
	========================================================= -->

	<section class="continuity-section">
		<div class="container">
			<div class="continuity-grid">
				<div class="continuity-left">
					<span class="small-title">The Continuity Framework</span>
					<h3>
						Beyond Service Level Agreements:<br>
						A Strategic Lifecycle
					</h3>
					<p>
						Application Management Services (AMS) at HOSHŌ is more
						than maintenance. It is a continuous operational
						partnership designed to mitigate risk, optimize
						performance, and drive architectural innovation in
						real-time. We don't just keep the lights on; we
						modernize the grid while it's running.
					</p>

					<div class="continuity-item">
						<div class="icon-box"></div>
						<div>
							<h4>Implementation</h4>
							<p>The rigorous build and validation phase.</p>
						</div>
					</div>

					<div class="continuity-item">
						<div class="icon-box">📡</div>
						<div>
							<h4>Go Live</h4>
							<p>Transitioning from project mode to live operations.</p>
						</div>
					</div>

					<div class="continuity-item final">
						<div class="icon-box">🤝</div>
						<div>
							<h4>Continuous Partnership</h4>
							<p>Our long-term commitment to your excellence.</p>
						</div>
					</div>
				</div>

				<div class="continuity-right">
					<img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ams/cycle.png' ) ); ?>" alt="Abstract decorative graphic of layered discs">
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	WE STAY WITH YOU BEYOND GO-LIVE
	========================================================= -->

	<section class="stay-section">
		<div class="container">
			<h2>We Stay With You Beyond Go-Live</h2>
			<p>Our roadmap doesn't end at deployment. We engineer for the infinite horizon.</p>

			<div class="timeline-row">
				<div class="timeline-step">
					<div class="timeline-num">01</div>
					<h4>Discovery</h4>
					<p>Understanding architectural debt and future goals.</p>
				</div>
				<div class="timeline-step">
					<div class="timeline-num">02</div>
					<h4>Development</h4>
					<p>Agile sprints with quality-first engineering.</p>
				</div>
				<div class="timeline-step">
					<div class="timeline-num">03</div>
					<h4>Deployment</h4>
					<p>Seamless CI/CD orchestration and validation.</p>
				</div>
				<div class="timeline-step active">
					<div class="timeline-num">04</div>
					<h4>Optimization</h4>
					<p>Fine-tuning for scale and resource efficiency.</p>
				</div>
				<div class="timeline-step">
					<div class="timeline-num">05</div>
					<h4>Support</h4>
					<p>24/7 dedicated engineering expertise.</p>
				</div>
				<div class="timeline-step">
					<div class="timeline-num">06</div>
					<h4>Innovation</h4>
					<p>AI-driven updates and next-gen feature sets.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	THE AMS ENGINE
	========================================================= -->

	<section class="engine-section">
		<div class="container">
			<div class="engine-header">
				<h2>The AMS Engine</h2>
				<p>
					Where the framework above shows the three phases of an
					engagement, this is the operating rhythm we run
					continuously once Continuous Partnership begins.
				</p>
			</div>

			<div class="engine-chevrons">
				<div class="engine-chevron" style="background:#c31f24;">Transition</div>
				<div class="engine-chevron" style="background:#b81c21;">Knowledge</div>
				<div class="engine-chevron" style="background:#a8181d;">Transfer</div>
				<div class="engine-chevron" style="background:#96151a;">Monitor</div>
				<div class="engine-chevron" style="background:#831116;">Support</div>
				<div class="engine-chevron" style="background:#6f0e12;">Maintain</div>
				<div class="engine-chevron" style="background:#5a0a0d;">Improve</div>
			</div>

			<p class="engine-note">
				Everything the engine does rolls up into four capability
				groups, each one staffed by the specific competencies covered
				in the Core Competencies section below.
			</p>

			<div class="capability-grid">
				<div class="capability-card">
					<div class="cap-icon">📈</div>
					<h4>Application Monitoring</h4>
					<p>
						Monitor for seamless operations, analysing performance
						and availability in real-time.
					</p>
				</div>
				<div class="capability-card">
					<div class="cap-icon">🛠️</div>
					<h4>Application Management</h4>
					<p>
						Maximizing efficiency through continuous application
						performance optimization and resource scaling.
					</p>
				</div>
				<div class="capability-card">
					<div class="cap-icon">🩹</div>
					<h4>Maintanance &amp; Support</h4>
					<p>
						Ensuring smooth functional availability via proactive
						updates, bug fixes and technical expert support.
					</p>
				</div>
				<div class="capability-card">
					<div class="cap-icon">✅</div>
					<h4>Security &amp; Complience</h4>
					<p>
						Implementing pertinent measures for data protection,
						threat mitigation and regulatory adherence.
					</p>
				</div>
			</div>

			<div class="stats-bar">
				<div class="stats-row">
					<div class="stat">
						<span class="label">Efficient</span>
						<span class="tag">Agile</span>
					</div>
					<div class="stat">
						<span class="label">Scalable</span>
						<span class="tag">Reliable</span>
					</div>
					<div class="stat">
						<span class="label">Predictable</span>
						<span class="tag">Frictionless</span>
					</div>
					<div class="stat">
						<span class="label">Resilient</span>
						<span class="tag">Compliant</span>
					</div>
				</div>
				<p class="stats-quote">
					"Our AMS framework is designed for the modern enterprise,
					ensuring that legacy reliability meets AI-driven
					innovation."
				</p>
			</div>
		</div>
	</section>

	<!-- =========================================================
	QUOTE
	========================================================= -->

	<section class="ams-quote">
		<div class="container">
			<div class="ams-quote-content">
				<div class="ams-quote-photo">
					<img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ams/drucker.png' ) ); ?>" alt="Peter Drucker portrait">
				</div>
				<div class="ams-quote-text">
					<div class="quote-mark">"</div>
					<h2>
						"The best way to predict the future is to create it."
					</h2>
					<div class="quote-author">Peter Drucker</div>
					<div class="quote-role">Management consultant, educator, and author</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	CORE COMPETENCIES
	========================================================= -->

	<section class="competencies-section">
		<div class="container">
			<div class="competencies-header">
				<span class="small-title">Service Portfolio</span>
				<h2>Core Competencies</h2>
			</div>

			<div class="competencies-grid">
				<div class="competency-card pink">
					<h4><span class="comp-icon">📊</span>Monitoring</h4>
					<p>
						Real-time observability and predictive analytics to
						identify bottlenecks before they impact your users.
					</p>
				</div>
				<div class="competency-card gray">
					<h4><span class="comp-icon">🔧</span>Maintenance</h4>
					<p>
						Continuous technical health checks, dependency
						updates, and platform performance tuning.
					</p>
				</div>
				<div class="competency-card pink">
					<h4><span class="comp-icon">🐞</span>Bug Fixing</h4>
					<p>
						Rapid identification and resolution of regressions
						with a zero-backlog philosophy for critical issues.
					</p>
				</div>
				<div class="competency-card gray">
					<h4><span class="comp-icon">🎧</span>Technical Support</h4>
					<p>
						Tier 3 engineering support embedded within your team
						to resolve complex architectural challenges.
					</p>
				</div>
				<div class="competency-card pink">
					<h4><span class="comp-icon">🛡️</span>Security</h4>
					<p>
						Ongoing threat modeling, vulnerability patching, and
						compliance monitoring (SOC2, HIPAA, GDPR).
					</p>
				</div>
				<div class="competency-card gray">
					<h4><span class="comp-icon">✳️</span>Incident Response</h4>
					<p>
						Defined RTO/RPO metrics and a battle-tested protocol
						for system-wide failure recovery.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	THE HOSHO ADVANTAGE
	========================================================= -->

	<section class="advantage-section">
		<div class="container">
			<div class="advantage-header">
				<div>
					<span class="small-title">The HOSHŌ Advantage</span>
					<h2>Why Choose Our Partnership Model</h2>
				</div>
				<p>
					We provide the rigorous governance of a tier-one
					consultancy with the speed of a digital native.
				</p>
			</div>

			<div class="advantage-grid">
				<div class="advantage-item">
					<h4>Proactive</h4>
					<p>
						We solve problems before they reach your dashboard.
						Our AI-driven anomaly detection works 24/7.
					</p>
				</div>
				<div class="advantage-item accent">
					<h4>Reliable</h4>
					<p>
						99.9% uptime is our baseline. Our infrastructure is
						engineered for resilience and high-availability.
					</p>
				</div>
				<div class="advantage-item">
					<h4>Secure</h4>
					<p>
						Security is not an afterthought. It's woven into
						every ticket, update, and architectural decision.
					</p>
				</div>
				<div class="advantage-item">
					<h4>Scalable</h4>
					<p>
						Our AMS frameworks grow with you. We handle traffic
						spikes and market expansions without friction.
					</p>
				</div>
				<div class="advantage-item accent">
					<h4>Responsive</h4>
					<p>
						No tickets in the void. Direct Slack/Teams access to
						lead engineers who know your stack intimately.
					</p>
				</div>
				<div class="advantage-item">
					<h4 class="red-text">Partnership</h4>
					<p>
						We align our KPIs with your business outcomes. Your
						success is our primary delivery metric.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	FINAL CTA
	========================================================= -->

	<section class="ams-cta">
		<div class="ams-cta-image">
			<img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ams/cta.jpg' ) ); ?>" alt="Person planning on a project board">
		</div>
		<div class="ams-cta-overlay"></div>
		<div class="container">
			<div class="ams-cta-content">
				<h2>Build Once. Improve Continuously.</h2>
				<p>Start your long-term partnership with our dedicated AMS team.</p>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-red">
					Start Your Long-Term Partnership
				</a>
			</div>
		</div>
	</section>

</main>
<?php
get_footer();