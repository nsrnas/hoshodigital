<?php
/**
 * Template Name: Approach Philosophy
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */

get_header();

/* =========================================================
   DATA: 8-STAGE DELIVERY FRAMEWORK
   ========================================================= */
$hosho_phase_tabs = array(
	array( 'label' => 'Phase 1', 'title' => 'Align & Mobilise' ),
	array( 'label' => 'Phase 2', 'title' => 'Validate & Deploy' ),
	array( 'label' => 'Phase 3', 'title' => 'Adopt & Scale' ),
	array( 'label' => 'Phase 4', 'title' => 'Maximize & Defend' ),
);

$hosho_phases = array(
	array(
		'id'     => 'phase-1',
		'num'    => '01',
		'title'  => 'Foundation & Readiness',
		'range'  => 'Stages 01-02',
		'stages' => array(
			array(
				'num'         => '01',
				'title'       => 'Envision',
				'focus'       => 'Diagnose cross-industry business friction and map executive priorities.',
				'guarantee'   => 'Eliminates strategic misalignment before engineering begins.',
				'deliverables'=> array( 'Strategic AI Opportunity Matrix', 'ROI Projection Model' ),
			),
			array(
				'num'         => '02',
				'title'       => 'Energise',
				'focus'       => 'Mobilize multi-disciplinary squads and audit existing data estates.',
				'guarantee'   => 'Removes compliance and security roadblocks early.',
				'deliverables'=> array( 'Enterprise Readiness Scorecard', 'Data Governance Charter' ),
			),
		),
	),
	array(
		'id'     => 'phase-2',
		'num'    => '02',
		'title'  => 'Validation & Deployment',
		'range'  => 'Stages 03-04',
		'stages' => array(
			array(
				'num'         => '03',
				'title'       => 'Synthesize',
				'focus'       => 'Harmonize data pipelines and engineer custom model architectures.',
				'guarantee'   => 'De-risks development by validating data viability prior to major investment.',
				'deliverables'=> array( 'Validated Model Prototype', 'Production-Ready Blueprint' ),
			),
			array(
				'num'         => '04',
				'title'       => 'Launch',
				'focus'       => 'Deploy the initial high-priority AI application into production.',
				'guarantee'   => 'Proves immediate operational utility with real-world feedback loops.',
				'deliverables'=> array( 'Live Production AI Solution', 'Success Metric Baselines' ),
			),
		),
	),
	array(
		'id'     => 'phase-3',
		'num'    => '03',
		'title'  => 'Adoption & Expansion',
		'range'  => 'Stages 05-06',
		'stages' => array(
			array(
				'num'         => '05',
				'title'       => 'Grow',
				'focus'       => 'Track user adoption and iteratively fine-tune model accuracy.',
				'guarantee'   => 'Secures early ROI by optimizing daily employee engagement.',
				'deliverables'=> array( 'User Adoption Analytics Hub', 'Feedback Audits' ),
			),
			array(
				'num'         => '06',
				'title'       => 'Scale',
				'focus'       => 'Transition the AI capability to robust, enterprise-wide infrastructure.',
				'guarantee'   => 'Expands operational footprint across business units without performance loss.',
				'deliverables'=> array( 'Auto-Scaling Infrastructure Blueprint', 'Deployment Plan' ),
			),
		),
	),
	array(
		'id'     => 'phase-4',
		'num'    => '04',
		'title'  => 'Advantage & Longevity',
		'range'  => 'Stages 07-08',
		'stages' => array(
			array(
				'num'         => '07',
				'title'       => 'Amplify',
				'focus'       => 'Overlay advanced automation, predictive analytics, and agentic workflows.',
				'guarantee'   => 'Multiplies business outcomes to turn tools into competitive advantages.',
				'deliverables'=> array( 'Cross-System Automation Playbook', 'Value Matrix' ),
			),
			array(
				'num'         => '08',
				'title'       => 'Sustain',
				'focus'       => 'Monitor for model drift, update compliance, and run improvement cycles.',
				'guarantee'   => 'Locks in permanent, long-term value so the system evolves with your business.',
				'deliverables'=> array( '24/7 Model Drift Guardrails', 'Value Improvement Log' ),
			),
		),
	),
);
?>
<main id="main-content" class="philosophy-page">
	<style>
		:root {
			--red: #bf1e23;
			--red-dark: #8f0f14;
			--red-light: #fbe4e4;
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

		.philosophy-page {
			font-family: Inter, sans-serif;
			color: var(--text);
			background: #fff;
			overflow: hidden;
		}

		.philosophy-page section {
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

		svg {
			display: block;
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
			letter-spacing: .3px;
			text-transform: uppercase;
			border: 1px solid var(--red);
			cursor: pointer;
			transition: .25s;
		}

		.btn-red:hover {
			background: #a9181c;
		}

		.btn-outline {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			gap: 10px;
			background: transparent;
			color: #fff;
			padding: 16px 30px;
			font-weight: 700;
			font-size: 14px;
			letter-spacing: .3px;
			text-transform: uppercase;
			border: 1px solid rgba(255, 255, 255, .55);
			transition: .25s;
		}

		.btn-outline:hover {
			border-color: #fff;
			background: rgba(255, 255, 255, .08);
		}

		.small-title {
			display: block;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 2px;
			text-transform: uppercase;
			color: var(--red);
			margin-bottom: 14px;
		}

		/* =========================================================
		HERO
		========================================================= */

		.philosophy-hero {
			position: relative;
			min-height: 760px;
			display: flex;
			align-items: center;
			overflow: hidden;
			background: #3a0608;
		}

		.philosophy-hero-image {
			position: absolute;
			inset: 0;
		}

		.philosophy-hero-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.philosophy-hero-overlay {
			position: absolute;
			inset: 0;
			background:
				radial-gradient(circle at 30% 10%, rgba(220, 40, 35, .55), transparent 55%),
				linear-gradient(100deg, rgba(58, 6, 8, .95) 0%, rgba(90, 12, 15, .82) 45%, rgba(42, 5, 7, .6) 100%);
		}

		.philosophy-hero-content {
			position: relative;
			z-index: 2;
			max-width: 720px;
			color: #fff;
			padding: 140px 0;
            padding-top: 260px;
		}

		.philosophy-hero h1 {
			font-size: 52px;
			line-height: 1.08;
			font-weight: 900;
			letter-spacing: -1px;
			text-transform: uppercase;
			margin-bottom: 22px;
		}

		.philosophy-hero p {
			font-size: 17px;
			line-height: 1.7;
			color: rgba(255, 255, 255, .85);
			max-width: 560px;
			margin-bottom: 34px;
		}

		.philosophy-hero-actions {
			display: flex;
			flex-wrap: wrap;
			gap: 16px;
		}

		/* =========================================================
		WHY 80% FAILS
		========================================================= */

		.fail-section {
			padding: 90px 0 70px;
			text-align: center;
			background: #fff;
		}

		.fail-section h2 {
			font-size: 32px;
			font-weight: 800;
			color: #111;
			max-width: 780px;
			margin: 0 auto 18px;
			line-height: 1.25;
		}

		.fail-section > .container > p {
			max-width: 780px;
			margin: 0 auto 50px;
			font-size: 16px;
			line-height: 1.8;
			color: var(--gray);
		}

		.fail-grid {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 24px;
			text-align: left;
		}

		.fail-card {
			border: 1px solid var(--border);
			padding: 30px 26px;
			background: #fff;
		}

		.fail-card.highlight {
			border: 2px solid var(--red);
			box-shadow: 0 15px 35px rgba(191, 30, 35, .12);
		}

		.fail-card .icon {
			width: 42px;
			height: 42px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 18px;
			background: var(--red-light);
			color: var(--red);
		}

		.fail-card.highlight .icon {
			background: var(--red);
			color: #fff;
		}

		.fail-card h3 {
			font-size: 17px;
			font-weight: 800;
			color: var(--navy);
			margin-bottom: 10px;
		}

		.fail-card p {
			font-size: 14.5px;
			line-height: 1.7;
			color: var(--gray);
		}

		/* =========================================================
		EXECUTION GAP
		========================================================= */

		.gap-section {
			padding: 90px 0 100px;
			text-align: center;
			background: var(--light);
		}

		.gap-section h2 {
			font-size: 32px;
			font-weight: 800;
			color: var(--navy);
			line-height: 1.3;
			margin-bottom: 18px;
		}

		.gap-section > .container > p {
			max-width: 680px;
			margin: 0 auto 50px;
			color: var(--gray);
			font-size: 16px;
			line-height: 1.8;
		}

		.gap-columns {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 0;
			text-align: left;
			box-shadow: 0 25px 50px rgba(15, 41, 70, .08);
		}

		.gap-col {
			padding: 44px 44px;
		}

		.gap-col-left {
			background: var(--red-light);
		}

		.gap-col-right {
			background: var(--navy);
			color: #fff;
		}

		.gap-col .col-label {
			display: block;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			margin-bottom: 26px;
		}

		.gap-col-left .col-label { color: var(--red); }
		.gap-col-right .col-label { color: #f0b8ba; }

		.gap-item {
			padding-bottom: 22px;
			margin-bottom: 22px;
			border-bottom: 1px solid rgba(0, 0, 0, .06);
		}

		.gap-col-right .gap-item {
			border-bottom: 1px solid rgba(255, 255, 255, .12);
		}

		.gap-item:last-child {
			margin-bottom: 0;
			padding-bottom: 0;
			border-bottom: none;
		}

		.gap-item h4 {
			font-size: 18px;
			font-weight: 800;
			margin-bottom: 8px;
			color: var(--navy);
		}

		.gap-col-right .gap-item h4 {
			color: #fff;
		}

		.gap-item p {
			font-size: 14.5px;
			line-height: 1.75;
			color: #4a5561;
		}

		.gap-col-right .gap-item p {
			color: rgba(255, 255, 255, .78);
		}

		/* =========================================================
		8-STAGE FRAMEWORK
		========================================================= */

		.framework-section {
			padding: 90px 0 110px;
			background: #fff;
		}

		.framework-section .framework-header {
			margin-bottom: 40px;
		}

		.framework-section h2 {
			font-size: 30px;
			font-weight: 800;
			color: #111;
		}

		.phase-tabs {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			gap: 14px;
			margin-bottom: 40px;
		}

		.phase-tab {
			background: var(--navy);
			color: rgba(255, 255, 255, .8);
			text-align: center;
			padding: 16px 12px;
			font-size: 13px;
			border-top: 3px solid transparent;
		}

		.phase-tab.active {
			border-top-color: var(--red);
			color: #fff;
		}

		.phase-tab .tab-label {
			display: block;
			font-size: 11px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: #f0b8ba;
			margin-bottom: 4px;
		}

		.phase-tab .tab-title {
			font-weight: 700;
			font-size: 14px;
		}

		.framework-body {
			display: grid;
			grid-template-columns: 260px 1fr;
			gap: 50px;
			align-items: start;
		}

		.framework-nav {
			position: sticky;
			top: 30px;
			display: flex;
			flex-direction: column;
			gap: 22px;
		}

		.framework-nav-item {
			cursor: pointer;
			padding-left: 16px;
			border-left: 2px solid var(--border);
			transition: .2s;
		}

		.framework-nav-item .nav-eyebrow {
			display: block;
			font-size: 11px;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			color: var(--gray);
			margin-bottom: 4px;
		}

		.framework-nav-item .nav-title {
			font-size: 15px;
			font-weight: 700;
			color: var(--gray);
		}

		.framework-nav-item .nav-range {
			display: block;
			font-size: 11px;
			color: var(--gray);
			margin-top: 3px;
			text-transform: uppercase;
			letter-spacing: 1px;
		}

		.framework-nav-item:hover {
			border-left-color: var(--red);
		}

		.framework-nav-item.active {
			border-left-color: var(--red);
		}

		.framework-nav-item.active .nav-eyebrow,
		.framework-nav-item.active .nav-title {
			color: var(--red);
		}

		.phase-panel {
			border: 1px solid var(--border);
			margin-bottom: 20px;
			background: #fff;
		}

		.phase-panel-header {
			display: flex;
			align-items: center;
			gap: 18px;
			padding: 26px 30px;
			cursor: pointer;
			user-select: none;
		}

		.phase-panel-header .panel-num {
			font-size: 30px;
			font-weight: 800;
			color: var(--border);
			line-height: 1;
		}

		.phase-panel.is-open .phase-panel-header .panel-num {
			color: var(--red);
		}

		.phase-panel-header h3 {
			font-size: 22px;
			font-weight: 800;
			color: var(--gray);
			flex: 1;
		}

		.phase-panel.is-open .phase-panel-header h3 {
			color: #111;
		}

		.phase-panel-header .panel-toggle {
			width: 30px;
			height: 30px;
			border-radius: 50%;
			border: 1px solid var(--border);
			display: flex;
			align-items: center;
			justify-content: center;
			color: var(--gray);
			transition: .25s;
			flex: 0 0 auto;
		}

		.phase-panel.is-open .panel-toggle {
			background: var(--red);
			border-color: var(--red);
			color: #fff;
			transform: rotate(45deg);
		}

		.phase-panel-body {
			max-height: 0;
			overflow: hidden;
			transition: max-height .35s ease;
		}

		.phase-panel.is-open .phase-panel-body {
			max-height: 1400px;
		}

		.stage-grid {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 40px;
			padding: 0 30px 34px;
			border-top: 1px solid var(--border);
			padding-top: 30px;
		}

		.stage-card .stage-num {
			font-size: 34px;
			font-weight: 800;
			color: var(--red);
			line-height: 1;
			margin-bottom: 6px;
		}

		.stage-card h4 {
			font-size: 22px;
			font-weight: 800;
			color: var(--navy);
			margin-bottom: 18px;
		}

		.stage-card .stage-label {
			display: block;
			font-size: 11px;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			color: var(--red);
			margin-bottom: 8px;
		}

		.stage-card .stage-focus {
			font-size: 14.5px;
			line-height: 1.7;
			color: #333;
			margin-bottom: 20px;
		}

		.stage-card .stage-guarantee {
			background: var(--light);
			border-left: 3px solid var(--red);
			padding: 14px 18px;
			margin-bottom: 20px;
		}

		.stage-card .stage-guarantee p {
			font-size: 14px;
			font-weight: 700;
			line-height: 1.6;
			color: var(--navy);
		}

		.stage-card .deliverables {
			display: flex;
			flex-wrap: wrap;
			gap: 10px;
		}

		.stage-card .deliverables span {
			background: var(--light);
			border: 1px solid var(--border);
			padding: 7px 14px;
			font-size: 12.5px;
			color: var(--text);
			border-radius: 3px;
		}

		/* =========================================================
		RESILIENCE
		========================================================= */

		.resilience-section {
			background: #fff;
			padding: 90px 0;
			text-align: center;
		}

		.resilience-card {
			background: var(--navy);
			padding: 54px 54px 50px;
			color: #fff;
		}

		.resilience-card h2 {
			font-size: 30px;
			font-weight: 800;
			margin-bottom: 18px;
		}

		.resilience-divider {
			width: 60px;
			height: 3px;
			background: var(--red);
			margin: 0 auto 38px;
		}

		.resilience-image {
			width: 100%;
			max-height: 320px;
			overflow: hidden;
			margin-bottom: 40px;
		}

		.resilience-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.resilience-grid {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 20px;
			text-align: left;
		}

		.resilience-item {
			padding: 26px 24px;
			background: rgba(255, 255, 255, .04);
			border: 1px solid rgba(255, 255, 255, .12);
		}

		.resilience-item .icon {
			color: var(--red);
			margin-bottom: 14px;
		}

		.resilience-item h4 {
			font-size: 15px;
			font-weight: 800;
			line-height: 1.3;
			margin-bottom: 8px;
		}

		.resilience-item p {
			font-size: 13.5px;
			line-height: 1.7;
			color: rgba(255, 255, 255, .7);
		}

		/* =========================================================
		FINAL CTA
		========================================================= */

		.philosophy-cta {
			position: relative;
			overflow: hidden;
			background: var(--navy);
			padding: 110px 0;
		}

		.philosophy-cta-image {
			position: absolute;
			inset: 0;
		}

		.philosophy-cta-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			opacity: .4;
		}

		.philosophy-cta-overlay {
			position: absolute;
			inset: 0;
			background: linear-gradient(rgba(58, 6, 8, .55), rgba(15, 41, 70, .85));
		}

		.philosophy-cta-card {
			position: relative;
			z-index: 2;
			max-width: 540px;
			margin: auto;
			background: rgba(247, 247, 247, .96);
			text-align: center;
			padding: 54px 50px;
			box-shadow: 0 30px 60px rgba(0, 0, 0, .25);
		}

		.philosophy-cta-card .icon {
			width: 46px;
			height: 46px;
			border-radius: 50%;
			background: var(--red);
			color: #fff;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 auto 20px;
		}

		.philosophy-cta-card h2 {
			font-size: 28px;
			font-weight: 800;
			color: var(--navy);
			margin-bottom: 14px;
		}

		.philosophy-cta-card p {
			color: var(--gray);
			font-size: 15px;
			line-height: 1.7;
			margin-bottom: 30px;
		}

		.cta-form {
			text-align: left;
		}

		.cta-form label {
			display: block;
			font-size: 11px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: var(--gray);
			margin-bottom: 8px;
		}

		.cta-form input,
		.cta-form select {
			width: 100%;
			border: 1px solid var(--border);
			background: #fff;
			padding: 14px 16px;
			font-size: 14px;
			margin-bottom: 18px;
			font-family: inherit;
			color: var(--text);
		}

		.cta-form select {
			appearance: none;
			-webkit-appearance: none;
			-moz-appearance: none;
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%236b7787' d='M1 1l5 5 5-5'/%3E%3C/svg%3E");
			background-repeat: no-repeat;
			background-position: right 16px center;
			padding-right: 40px;
		}

		.cta-form select:invalid {
			color: var(--gray);
		}

		.cta-form .btn-red {
			width: 100%;
		}

		/* =========================================================
		RESPONSIVE
		========================================================= */

		@media (max-width: 900px) {
			.philosophy-hero h1 { font-size: 36px; }
			.fail-grid { grid-template-columns: 1fr; }
			.gap-columns { grid-template-columns: 1fr; }
			.framework-body { grid-template-columns: 1fr; }
			.framework-nav { position: static; flex-direction: row; flex-wrap: wrap; }
			.stage-grid { grid-template-columns: 1fr; }
			.resilience-grid { grid-template-columns: 1fr; }
			.resilience-card { padding: 34px 24px; }
			.phase-tabs { grid-template-columns: repeat(2, 1fr); }
		}
	</style>

	<!-- =========================================================
	HERO
	========================================================= -->

	<section class="philosophy-hero">
		<div class="philosophy-hero-image">
			<img src="<?php echo esc_url( hosho_asset_url( 'images/approach/philosophy/hero.jpg' ) ); ?>" alt="Architectural steel structure, representing the Enterprise AI Delivery Philosophy">
		</div>
		<div class="philosophy-hero-overlay"></div>
		<div class="container">
			<div class="philosophy-hero-content">
				<h1>Your Success.<br>Our Guarantee.</h1>
				<p>
					The Enterprise AI Delivery Philosophy designed to
					eliminate risk and bridge the gap between vision and
					sustained commercial value.
				</p>
				<div class="philosophy-hero-actions">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-red">Schedule an Enterprise Audit</a>
					<a href="#" class="btn-outline">Watch the 2-Min Philosophy Breakdown</a>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	WHY 80% OF ENTERPRISE AI FAILS
	========================================================= -->

	<section class="fail-section">
		<div class="container">
			<h2>Why 80% of Enterprise AI Fails&mdash;And How We Fix It.</h2>
			<p>
				The gap between pilot and production is where value evaporates. We identify and neutralize the failure vectors
				inherent in standard transformation models.
			</p>

			<div class="fail-grid">
				<div class="fail-card">
					<div class="icon">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
					</div>
					<h3>The Drift Problem</h3>
					<p>Most AI deployments lose value over time due to unmonitored model drift.</p>
				</div>

				<div class="fail-card">
					<div class="icon">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg>
					</div>
					<h3>The Scaling Wall</h3>
					<p>Point solutions routinely fail when migrating to enterprise infrastructure.</p>
				</div>

				<div class="fail-card highlight">
					<div class="icon">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 3 7v6c0 5.25 3.75 9.5 9 11 5.25-1.5 9-5.75 9-11V7z"/></svg>
					</div>
					<h3>The HOSHŌ Answer</h3>
					<p>A gated, 8-stage delivery architecture where every step is anchored to an explicit commercial guarantee.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	CORPORATE EXECUTION GAP
	========================================================= -->

	<section class="gap-section">
		<div class="container">
			<h2>The corporate execution gap, and<br>the managed-risk alternative</h2>
			<p>
				Four out of five enterprise AI initiatives never yield a clear return. We treat AI as a
				disciplined engineering framework, not a science project.
			</p>

			<div class="gap-columns">
				<div class="gap-col gap-col-left">
					<span class="col-label">The Execution Gap</span>

					<div class="gap-item">
						<h4>80% Failure Rate</h4>
						<p>The vast majority of enterprise AI investments remain trapped in permanent proof-of-concept limbo.</p>
					</div>
					<div class="gap-item">
						<h4>The Compliance Wall</h4>
						<p>Initiatives routinely stall out late in the cycle due to unvetted data governance or unforeseen InfoSec objections.</p>
					</div>
					<div class="gap-item">
						<h4>The Value Decay</h4>
						<p>Deployments that make it to production often degrade rapidly due to unmonitored model drift and lack of user adoption.</p>
					</div>
				</div>

				<div class="gap-col gap-col-right">
					<span class="col-label">The HOSHŌ Architecture</span>

					<div class="gap-item">
						<h4>Gated Capital Allocation</h4>
						<p>Rigorous phase-gate milestones ensure that no budget is released without explicit engineering and business validation.</p>
					</div>
					<div class="gap-item">
						<h4>Compliance-First Inception</h4>
						<p>Security, regulatory compliance, and data lineage are engineered into the foundation, not patched on at the end.</p>
					</div>
					<div class="gap-item">
						<h4>Commercial Indexing</h4>
						<p>Every line of code written and every data pipeline built is mapped directly to a quantified, measurable corporate KPI.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	8-STAGE DELIVERY FRAMEWORK
	========================================================= -->

	<section class="framework-section">
		<div class="container">
			<div class="framework-header">
				<span class="small-title">Delivery Architecture</span>
				<h2>The 8-Stage Delivery Framework</h2>
			</div>

			<div class="framework-body">
				<!-- Sidebar navigation -->
				<div class="framework-nav">
					<?php foreach ( $hosho_phases as $index => $phase ) : ?>
						<div class="framework-nav-item<?php echo 0 === $index ? ' active' : ''; ?>" data-phase="<?php echo esc_attr( $phase['id'] ); ?>">
							<span class="nav-eyebrow">Phase <?php echo esc_html( $phase['num'] ); ?></span>
							<span class="nav-title"><?php echo esc_html( $phase['num'] . '. ' . $phase['title'] ); ?></span>
							<span class="nav-range"><?php echo esc_html( $phase['range'] ); ?></span>
						</div>
					<?php endforeach; ?>
				</div>

				<!-- Accordion content -->
				<div class="framework-content">
					<?php foreach ( $hosho_phases as $index => $phase ) : ?>
						<div class="phase-panel<?php echo 0 === $index ? ' is-open' : ''; ?>" data-phase="<?php echo esc_attr( $phase['id'] ); ?>">
							<div class="phase-panel-header" data-phase="<?php echo esc_attr( $phase['id'] ); ?>">
								<span class="panel-num"><?php echo esc_html( $phase['num'] ); ?></span>
								<h3><?php echo esc_html( $phase['title'] ); ?></h3>
								<span class="panel-toggle">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
								</span>
							</div>

							<div class="phase-panel-body">
								<div class="stage-grid">
									<?php foreach ( $phase['stages'] as $stage ) : ?>
										<div class="stage-card">
											<div class="stage-num"><?php echo esc_html( $stage['num'] ); ?></div>
											<h4><?php echo esc_html( $stage['title'] ); ?></h4>

											<span class="stage-label">The Focus</span>
											<p class="stage-focus"><?php echo esc_html( $stage['focus'] ); ?></p>

											<div class="stage-guarantee">
												<span class="stage-label">The Guarantee</span>
												<p><?php echo esc_html( $stage['guarantee'] ); ?></p>
											</div>

											<span class="stage-label">Deliverables</span>
											<div class="deliverables">
												<?php foreach ( $stage['deliverables'] as $deliverable ) : ?>
													<span><?php echo esc_html( $deliverable ); ?></span>
												<?php endforeach; ?>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	BUILT FOR CROSS-INDUSTRY RESILIENCE
	========================================================= -->

	<section class="resilience-section">
		<div class="resilience-card">
			<h2>Built for Cross-Industry Resilience</h2>
			<div class="resilience-divider"></div>

			<div class="resilience-image">
				<img src="<?php echo esc_url( hosho_asset_url( 'images/approach/philosophy/built.jpg' ) ); ?>" alt="Abstract network of connected nodes, representing cross-industry resilience">
			</div>

			<div class="resilience-grid">
				<div class="resilience-item">
					<div class="icon">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 9h1"/><path d="M14 9h1"/><path d="M9 13h1"/><path d="M14 13h1"/><path d="M9 21v-4h6v4"/></svg>
					</div>
					<h4>Gated Capital Milestones</h4>
					<p>Investment is released sequentially based on hard, provable metrics, protecting core capital.</p>
				</div>

				<div class="resilience-item">
					<div class="icon">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><circle cx="5" cy="6" r="2"/><circle cx="19" cy="6" r="2"/><circle cx="5" cy="18" r="2"/><circle cx="19" cy="18" r="2"/><line x1="9.8" y1="10.2" x2="6.4" y2="7.4"/><line x1="14.2" y1="10.2" x2="17.6" y2="7.4"/><line x1="9.8" y1="13.8" x2="6.4" y2="16.6"/><line x1="14.2" y1="13.8" x2="17.6" y2="16.6"/></svg>
					</div>
					<h4>Cross-Industry Agility</h4>
					<p>Architectures designed to pivot seamlessly across regulatory environments and sector specificities.</p>
				</div>

				<div class="resilience-item">
					<div class="icon">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 4v6h-6"/><path d="M1 20v-6h6"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10"/><path d="M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>
					</div>
					<h4>Continuous Accountability</h4>
					<p>Transparent telemetry tracking performance against predetermined strategic baselines.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	FINAL CTA
	========================================================= -->

	<section class="philosophy-cta">
		<div class="philosophy-cta-image">
			<img src="<?php echo esc_url( hosho_asset_url( 'images/approach/philosophy/cta.jpg' ) ); ?>" alt="City skyline, representing the enterprise landscape">
		</div>
		<div class="philosophy-cta-overlay"></div>

		<div class="container">
			<div class="philosophy-cta-card">
				<div class="icon">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
				</div>
				<h2>Ready to Guarantee<br>Your AI Success?</h2>
				<p>Let&rsquo;s map your enterprise infrastructure to the 8-stage philosophy.</p>

				<form class="cta-form" action="<?php echo esc_url( home_url( '/contact' ) ); ?>" method="post">
					<label for="hosho-work-email">Work Email</label>
					<input type="email" id="hosho-work-email" name="work_email" placeholder="executive@enterprise.com" required>

					<label for="hosho-company-name">Company Name</label>
					<input type="text" id="hosho-company-name" name="company_name" placeholder="Acme Enterprises Inc." required>

					<label for="hosho-ai-objective">Primary AI Objective</label>
					<select id="hosho-ai-objective" name="ai_objective" required>
						<option value="" disabled selected>Select your primary objective</option>
						<option value="reduce-costs">Reduce Operational Costs</option>
						<option value="customer-experience">Improve Customer Experience</option>
						<option value="time-to-market">Accelerate Time-to-Market</option>
						<option value="compliance">Ensure Regulatory Compliance</option>
						<option value="other">Other</option>
					</select>

					<button type="submit" class="btn-red">Initiate Strategy Session</button>
				</form>
			</div>
		</div>
	</section>

</main>

<script>
	( function () {
		var triggers = document.querySelectorAll( '.framework-nav-item, .phase-panel-header' );

		function openPhase( phaseId ) {
			document.querySelectorAll( '.phase-panel' ).forEach( function ( panel ) {
				panel.classList.toggle( 'is-open', panel.getAttribute( 'data-phase' ) === phaseId );
			} );
			document.querySelectorAll( '.framework-nav-item' ).forEach( function ( item ) {
				item.classList.toggle( 'active', item.getAttribute( 'data-phase' ) === phaseId );
			} );
		}

		triggers.forEach( function ( el ) {
			el.addEventListener( 'click', function () {
				var phaseId = this.getAttribute( 'data-phase' );
				var panel   = document.querySelector( '.phase-panel[data-phase="' + phaseId + '"]' );

				// Clicking an already-open panel header collapses it; otherwise open it.
				if ( panel && panel.classList.contains( 'is-open' ) && this.classList.contains( 'phase-panel-header' ) ) {
					panel.classList.remove( 'is-open' );
					document.querySelectorAll( '.framework-nav-item[data-phase="' + phaseId + '"]' ).forEach( function ( item ) {
						item.classList.remove( 'active' );
					} );
					return;
				}

				openPhase( phaseId );
			} );
		} );
	} )();
</script>
<?php
get_footer();