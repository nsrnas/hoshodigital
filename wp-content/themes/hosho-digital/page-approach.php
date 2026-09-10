<?php
/**
 * Template Name: Approach
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */

get_header();

/* =========================================================
   DATA: 8-STAGE DELIVERY FRAMEWORK
   ========================================================= */
$hosho_phases = array(
	array(
		'id'     => 'phase-1',
		'num'    => '01',
		'title'  => 'Foundation & Readiness',
		'range'  => 'Stages 01-02',
		'stages' => array(
			array(
				'num'          => '01',
				'title'        => 'Envision',
				'focus'        => 'Diagnose cross-industry business friction and map executive priorities.',
				'guarantee'    => 'Eliminates strategic misalignment before engineering begins.',
				'deliverables' => array( 'Strategic AI Opportunity Matrix', 'ROI Projection Model' ),
			),
			array(
				'num'          => '02',
				'title'        => 'Energise',
				'focus'        => 'Mobilize multi-disciplinary squads and audit existing data estates.',
				'guarantee'    => 'Removes compliance and security roadblocks early.',
				'deliverables' => array( 'Enterprise Readiness Scorecard', 'Data Governance Charter' ),
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
				'num'          => '03',
				'title'        => 'Synthesize',
				'focus'        => 'Harmonize data pipelines and engineer custom model architectures.',
				'guarantee'    => 'De-risks development by validating data viability prior to major investment.',
				'deliverables' => array( 'Validated Model Prototype', 'Production-Ready Blueprint' ),
			),
			array(
				'num'          => '04',
				'title'        => 'Launch',
				'focus'        => 'Deploy the initial high-priority AI application into production.',
				'guarantee'    => 'Proves immediate operational utility with real-world feedback loops.',
				'deliverables' => array( 'Live Production AI Solution', 'Success Metric Baselines' ),
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
				'num'          => '05',
				'title'        => 'Grow',
				'focus'        => 'Track user adoption and iteratively fine-tune model accuracy.',
				'guarantee'    => 'Secures early ROI by optimizing daily employee engagement.',
				'deliverables' => array( 'User Adoption Analytics Hub', 'Feedback Audits' ),
			),
			array(
				'num'          => '06',
				'title'        => 'Scale',
				'focus'        => 'Transition the AI capability to robust, enterprise-wide infrastructure.',
				'guarantee'    => 'Expands operational footprint across business units without performance loss.',
				'deliverables' => array( 'Auto-Scaling Infrastructure Blueprint', 'Deployment Plan' ),
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
				'num'          => '07',
				'title'        => 'Amplify',
				'focus'        => 'Overlay advanced automation, predictive analytics, and agentic workflows.',
				'guarantee'    => 'Multiplies business outcomes to turn tools into competitive advantages.',
				'deliverables' => array( 'Cross-System Automation Playbook', 'Value Matrix' ),
			),
			array(
				'num'          => '08',
				'title'        => 'Sustain',
				'focus'        => 'Monitor for model drift, update compliance, and run improvement cycles.',
				'guarantee'    => 'Locks in permanent, long-term value so the system evolves with your business.',
				'deliverables' => array( '24/7 Model Drift Guardrails', 'Value Improvement Log' ),
			),
		),
	),
);
$foundationText = isset($_GET['foundationText'])  ? $_GET['foundationText'] : "Text";
?>
<main id="main-content" class="approach-page">
	
	<!-- =========================================================
	HERO
	========================================================= -->

	<?php
	hosho_render_hero(
		"Don't Demolish<br>What's Working",
		'approach/main/hero.jpg',
		array( 'class' => 'page-hero--company' )
	);
	?>

	<!-- =========================================================
	WHY 80% OF ENTERPRISE AI FAILS
	========================================================= -->

	<section class="fail-section">
		<div class="fail-container">
			<div class="fail-intro">
				<div class="fail-intro__stat">
					<strong data-count-up data-count-end="80" data-count-suffix="%">80%</strong>
					<span>
						of enterprise AI <br>
						initiatives never <br>
						yield	a clear return
					</span>
				</div>

				<div class="fail-intro__copy">
					<h2>
						Why, and How We Fix It.
					</h2>
					<p>
						The gap between pilot and production is where value evaporates.
						We identify and neutralize the failure vectors inherent in
						standard transformation models.
					</p>
				</div>
			</div>


			<!-- CARDS -->
			<div class="solutions-cards">

				<article class="solutions-card solutions-card--red motion">
					<div class="solutions-card__icon">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FFF" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
							<path d="M12 3 3 8l9 5 9-5-9-5Z"/>
							<path d="M3 8v8l9 5 9-5V8"/>
							<path d="M12 13v8"/>
						</svg>
					</div>
					<h3>The Drift Problem</h3>
					<p>Most AI deployments lose value over time due to unmonitored model drift.</p>
				</article>

				<article class="solutions-card solutions-card--red motion">
					<div class="solutions-card__icon">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FFF" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
							<circle cx="12" cy="12" r="9"/>
							<path d="M4 12h16"/>
							<path d="M12 4v16"/>
						</svg>
					</div>
					<h3>The Scaling Wall</h3>
					<p>Point solutions routinely fail when migrating to enterprise infrastructure.</p>
				</article>

				<article class="solutions-card solutions-card--red motion">
					<div class="solutions-card__icon">
						<img src="<?php echo esc_url( hosho_asset_url( 'homepage/hosho-white-logo.png' ) ); ?>" alt="HOSHŌ logo">
					</div>
					<h3>The HOSHŌ Answer</h3>
					<p>A gated, 8-stage delivery architecture where every step is anchored to an explicit commercial guarantee.</p>
				</article>

			</div>
		</div>
	</section>

	<!-- =========================================================
	THE SEVEN NODES OF VALUE
	========================================================= -->

	<section class="nodes-section">

		<div class="approach-intro motion">
			<h2>Intelligent Digital Core</h2>
			<p>
				The Digital Core is the data and workflow layer that connects
				your existing systems so AI can act on real, current
				information. It sits underneath what you already run. It
				doesn't replace it.
			</p>
			<p style="color:red;">_______</p>
			<p>
				The intelligent Digital core links the 7 often disconnected elements of the enterprise digital core  into a single loop, unifying the enterprise. 
			</p>
		</div>

		<div class="nodes-right motion">
			<div class="nodes-diagram-image">
                <div class="nodes-diagram-svg">
                <svg viewBox="0 0 640 560" xmlns="http://www.w3.org/2000/svg" aria-label="The Seven Nodes of Unity diagram">
                  <defs>
                    <linearGradient id="nodeRingGradient" x1="100%" y1="75%" x2="50%" y2="0%">
                      <stop offset="0%" stop-color="#3a0606"/>
                      <stop offset="100%" stop-color="#ff1a1a"/>
                    </linearGradient>
                    <filter id="nodeShadow" x="-20%" y="-20%" width="140%" height="160%">
                      <feDropShadow dx="0" dy="2" stdDeviation="4" flood-color="rgba(0,0,0,0.13)"/>
                    </filter>
                  </defs>

                  <circle class="node-arc" cx="320" cy="280" r="210"
                        fill="none" stroke="url(#nodeRingGradient)" stroke-linecap="round"/>

                  <image class="node-logo" style="animation-delay: 1.6s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/salesforce.png' ) ); ?>" x="292" y="110" width="50" height="36" preserveAspectRatio="xMidYMid meet"/>

                  <image class="node-logo" style="animation-delay: 1.7s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/microsoft.png' ) ); ?>" x="225" y="160" width="25" height="25" preserveAspectRatio="xMidYMid meet"/>
                  <image class="node-logo" style="animation-delay: 1.8s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/dynamics.png' ) ); ?>" x="300" y="180" width="35" height="35" preserveAspectRatio="xMidYMid meet"/>
                  <image class="node-logo" style="animation-delay: 1.9s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/sap.png' ) ); ?>" x="370" y="160" width="40" height="20" preserveAspectRatio="xMidYMid meet"/>

				  <image class="node-logo" style="animation-delay: 1.9s;" href="<?php echo esc_url( hosho_asset_url( 'idc-logo.png' ) ); ?>" x="270" y="240" width="100" height="70" preserveAspectRatio="xMidYMid meet"/>

                  <image class="node-logo" style="animation-delay: 2.0s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/ibm.png' ) ); ?>" x="200" y="260" width="40" height="18" preserveAspectRatio="xMidYMid meet"/>
                  <image class="node-logo" style="animation-delay: 2.1s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/infor.png' ) ); ?>" x="285" y="335" width="70" height="20" preserveAspectRatio="xMidYMid meet"/>
                  <image class="node-logo" style="animation-delay: 2.2s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/workday.png' ) ); ?>" x="380" y="260" width="60" height="22" preserveAspectRatio="xMidYMid meet"/>

                  <image class="node-logo" style="animation-delay: 2.3s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/oracle.png' ) ); ?>" x="200" y="360" width="55" height="23" preserveAspectRatio="xMidYMid meet"/>
                  <image class="node-logo" style="animation-delay: 2.4s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/hubspot.png' ) ); ?>" x="370" y="360" width="55" height="25" preserveAspectRatio="xMidYMid meet"/>

                  <image class="node-logo" style="animation-delay: 2.5s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/service-now.png' ) ); ?>" x="260" y="390" width="120" height="20" preserveAspectRatio="xMidYMid meet"/>

                  <g class="node-box" data-detail="The compute, storage, and network foundation everything else runs on.">
                    <rect x="255" y="50" width="130" height="40" fill="white" stroke="#710E0A" stroke-width="4"/>
                    <text x="320" y="70" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Infrastructure</text>
                  </g>

                  <g class="node-box" data-detail="The structured and unstructured information every process and model relies on.">
                    <rect x="419" y="140" width="130" height="40" fill="white" stroke="#6F0E0A" stroke-width="4"/>
                    <text x="484" y="160" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Data</text>
                  </g>

                  <g class="node-box" data-detail="The business rules and decision criteria that turn data into action.">
                    <rect x="463" y="295" width="130" height="40" fill="white" stroke="#6C0C09" stroke-width="4"/>
                    <text x="527" y="315" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Logic</text>
                  </g>

                  <g class="node-box" data-detail="The connective layer that links disparate systems into one loop.">
                    <rect x="370" y="430" width="130" height="40" fill="white" stroke="#A81510" stroke-width="4"/>
                    <text x="435" y="450" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Integration</text>
                  </g>

                  <g class="node-box" data-detail="Workflows that execute repetitive tasks without manual intervention.">
                    <rect x="140" y="430" width="130" height="40" fill="white" stroke="#DA1A13" stroke-width="4"/>
                    <text x="205" y="450" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Automation</text>
                  </g>

                  <g class="node-box" data-detail="The intelligence layer that predicts outcomes and recommends or executes decisions.">
                    <rect x="50" y="295" width="130" height="40" fill="white" stroke="#DE1B15" stroke-width="4"/>
                    <text x="115" y="315" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">AI</text>
                  </g>

                  <g class="node-box" data-detail="The interface where people actually interact with the Digital Core.">
                    <rect x="86" y="140" width="130" height="40" fill="white" stroke="#E21C15" stroke-width="4"/>
                    <text x="151" y="160" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Experience</text>
                  </g>
                  <g transform="translate(230, 88) rotate(-28)">
                    <polygon class="node-arrowhead" points="27,0 -25,-25 -25,25" fill="#ff1a1a" />
                  </g>
                </svg>

                <div class="node-tooltip">
                  <p class="node-tooltip__text"></p>
                </div>

				<script>
				  document.addEventListener('DOMContentLoaded', function () {
					var svg         = document.querySelector('.nodes-right svg');
					var tooltip     = document.querySelector('.nodes-right .node-tooltip');
					var tooltipText = tooltip ? tooltip.querySelector('.node-tooltip__text') : null;
					var defaultText = tooltipText ? tooltipText.textContent : '';

					if (!svg) return;

					var boxes = svg.querySelectorAll('.node-box');
					boxes.forEach(function (box) {
					  // Bekukan animasi entrance setelah selesai (mencegah box "hilang" saat di-hover)
					  box.addEventListener('animationend', function () {
						box.style.animation = 'none';
						box.style.opacity = '1';
						box.style.transform = 'none';
					  });

					  function showDetail() {
						if (!tooltipText) return;
						tooltipText.textContent = box.getAttribute('data-detail') || defaultText;
						tooltip.classList.add('is-active');
					  }

					  function hideDetail() {
						if (!tooltipText) return;
						tooltipText.textContent = defaultText;
						tooltip.classList.remove('is-active');
					  }

					  box.addEventListener('mouseenter', showDetail);
					  box.addEventListener('mouseleave', hideDetail);
					  box.addEventListener('focus', showDetail);
					  box.addEventListener('blur', hideDetail);
					});
				  });
				</script>
			</div>
			</div>
	</section>

	<!-- =========================================================
	ARCHITECTURE OF SCALE
	========================================================= -->
	
	<section class="architecture-scale">
		<div class="container">
			<div class="architecture-header motion">
				<h3>Strength in the Structure</h3>
				<p>
					We treat your enterprise architecture like a building:
					some layers are structural and shouldn't be touched
					carelessly, others are meant to be renovated often.
				</p>
			</div>

			<div class="japanese-house-card motion">
				<div class="jh-layout">

					<div class="jh-image-col">
						<svg viewBox="0 0 460 365" xmlns="http://www.w3.org/2000/svg" class="jh-svg" aria-label="Japanese house structure diagram">

							<defs>
								<clipPath id="roofClip">
									<path d="M 210 45 L 250 45 L 420 155 L 40 155 Z"/>
								</clipPath>
							</defs>

							<!-- ROOF -->
							<g class="jh-part" data-key="roof" tabindex="0">
								<path d="M 210 45 L 250 45 L 420 155 L 40 155 Z"
									fill="#9aa5ad" stroke="#5c6570" stroke-width="2" stroke-linejoin="round"/>

								<g clip-path="url(#roofClip)" stroke="#5c6570" stroke-width="1.3" opacity="0.55">
									<line x1="0" y1="65"  x2="460" y2="65"/>
									<line x1="0" y1="80"  x2="460" y2="80"/>
									<line x1="0" y1="95"  x2="460" y2="95"/>
									<line x1="0" y1="110" x2="460" y2="110"/>
									<line x1="0" y1="125" x2="460" y2="125"/>
									<line x1="0" y1="140" x2="460" y2="140"/>
								</g>

								<path d="M 30 155 L 430 155 L 408 170 L 52 170 Z"
									fill="#7c8790" stroke="#5c6570" stroke-width="1.5"/>

								<rect x="195" y="38" width="70" height="10" rx="3" fill="#3a3a3f" stroke="#232326" stroke-width="1.5"/>

								<path d="M 30 155 C 12 147, 8 137, 18 127" fill="none" stroke="#5c6570" stroke-width="3" stroke-linecap="round"/>
								<path d="M 430 155 C 448 147, 452 137, 442 127" fill="none" stroke="#5c6570" stroke-width="3" stroke-linecap="round"/>

							</g>

							<!-- APPLICATIONS -->
							<g class="jh-part" data-key="applications" tabindex="0">
								<rect x="60" y="170" width="340" height="14" fill="#d2a94e" stroke="#8a6a26" stroke-width="2"/>

								<rect class="jh-hit" x="8" y="38" width="444" height="148" fill="transparent"/>
								<rect x="48" y="184" width="13" height="165" fill="#4a3822" stroke="#2c2013" stroke-width="1.5"/>
								<rect x="399" y="184" width="13" height="165" fill="#4a3822" stroke="#2c2013" stroke-width="1.5"/>

								<rect x="115" y="184" width="230" height="32" fill="#6b4a30" stroke="#3d2c1a" stroke-width="2"/>
								<line x1="130" y1="184" x2="130" y2="216" stroke="#4a3822" stroke-width="1.2" opacity="0.6"/>
								<line x1="160" y1="184" x2="160" y2="216" stroke="#4a3822" stroke-width="1.2" opacity="0.6"/>
								<line x1="300" y1="184" x2="300" y2="216" stroke="#4a3822" stroke-width="1.2" opacity="0.6"/>
								<line x1="330" y1="184" x2="330" y2="216" stroke="#4a3822" stroke-width="1.2" opacity="0.6"/>

								<rect class="jh-hit" x="40" y="180" width="380" height="40" fill="transparent"/>
							</g>

							<!-- PROCESS & LOGIC -->
							<g class="jh-part" data-key="process" tabindex="0">
								<rect x="75" y="216" width="310" height="84" fill="#8a6d4b" stroke="#3d2c1a" stroke-width="2"/>
								<rect x="90" y="230" width="85" height="54" fill="#e9e6df" stroke="#4a3822" stroke-width="2"/>
								<rect x="285" y="230" width="85" height="54" fill="#e9e6df" stroke="#4a3822" stroke-width="2"/>
								<rect x="192" y="224" width="76" height="76" fill="#f6da8c" stroke="#3d2c1a" stroke-width="2"/>
								<line x1="230" y1="224" x2="230" y2="300" stroke="#4a3822" stroke-width="1.5"/>
								<line x1="192" y1="248" x2="268" y2="248" stroke="#4a3822" stroke-width="1.5"/>
								<line x1="192" y1="272" x2="268" y2="272" stroke="#4a3822" stroke-width="1.5"/>

								<rect x="60"  y="270" width="105" height="7" fill="#c0392b"/>
								<rect x="60"  y="288" width="105" height="7" fill="#c0392b"/>
								<line x1="68"  y1="270" x2="68"  y2="295" stroke="#7a1f16" stroke-width="4"/>
								<line x1="95"  y1="270" x2="95"  y2="295" stroke="#7a1f16" stroke-width="4"/>
								<line x1="122" y1="270" x2="122" y2="295" stroke="#7a1f16" stroke-width="4"/>
								<line x1="155" y1="270" x2="155" y2="295" stroke="#7a1f16" stroke-width="4"/>

								<rect x="295" y="270" width="105" height="7" fill="#c0392b"/>
								<rect x="295" y="288" width="105" height="7" fill="#c0392b"/>
								<line x1="305" y1="270" x2="305" y2="295" stroke="#7a1f16" stroke-width="4"/>
								<line x1="338" y1="270" x2="338" y2="295" stroke="#7a1f16" stroke-width="4"/>
								<line x1="365" y1="270" x2="365" y2="295" stroke="#7a1f16" stroke-width="4"/>
								<line x1="392" y1="270" x2="392" y2="295" stroke="#7a1f16" stroke-width="4"/>

								<rect class="jh-hit" x="55" y="216" width="350" height="84" fill="transparent"/>
							</g>

							<!-- FOUNDATION -->
							<g class="jh-part" data-key="foundation" tabindex="0">
								<rect x="40" y="300" width="380" height="20" fill="#cfc9bb" stroke="#8a857a" stroke-width="2"/>

								<rect x="185" y="320" width="90"  height="10" fill="#bdb7a9" stroke="#8a857a" stroke-width="1.2"/>
								<rect x="170" y="330" width="120" height="10" fill="#b0a998" stroke="#8a857a" stroke-width="1.2"/>
								<rect x="155" y="340" width="150" height="10" fill="#a49d8a" stroke="#8a857a" stroke-width="1.2"/>

								<rect class="jh-hit" x="35" y="298" width="390" height="55" fill="transparent"/>
							</g>

						</svg>
					</div>

					<div class="jh-labels-col">
						<div class="jh-label-card" data-key="roof" tabindex="0">
							<span class="jh-label-title">Roof</span>
							<p class="jh-label-desc">The measurable outcomes every layer below is built to deliver.</p>
						</div>
						<div class="jh-label-card" data-key="applications" tabindex="0">
							<span class="jh-label-title">Applications</span>
							<p class="jh-label-desc">User experiences &amp; workflow tools</p>
						</div>
						<div class="jh-label-card" data-key="process" tabindex="0">
							<span class="jh-label-title">Process &amp; Logic</span>
							<p class="jh-label-desc">The business rules governing actions</p>
						</div>
						<div class="jh-label-card" data-key="foundation" tabindex="0">
							<span class="jh-label-title">Foundation</span>
							<p class="jh-label-desc">Existing systems and critical data</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	CORPORATE EXECUTION GAP
	========================================================= -->

	<section class="gap-section">
		<div class="container motion">
			<h2>The corporate execution gap, and<br>the managed-risk alternative</h2>

			<div class="gap-columns">
				<div class="gap-col gap-col-left">
					<span class="col-label">Execution Gap</span>

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
					<span class="col-label">HOSHŌ Architecture</span>

					<div class="gap-item">
						<h4>Gated Capital Allocation</h4>
						<p>Rigorous phase-gate milestones ensure that no budget is released without explicit engineering and business validation.</p>
					</div>
					<div class="gap-item">
						<h4>Compliance-First Inception</h4>
						<p>Security, regulatory compliance, and data lineage are engineered into the foundation, not patched on at the end.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	QUOTE
	========================================================= -->

	<?php hosho_render_quote( '<strong>Without continual growth and progress, such words as improvement, achievement, and success have no meaning.</strong>', 'Benjamin Franklin', 'approach/main/benjamin.png', 'quote-band--standard quote-band--red-soft quote-band--masayoshi' ); ?>

	<!-- =========================================================
	8-STAGE DELIVERY FRAMEWORK
	========================================================= -->

	<section class="framework-section">
		<div class="framework-container">

			<div class="framework-header">
				<h2>Eight Stages. <span class="highlight">One Guarantee.</span></h2>
				<p>
					A rigorous, disciplined approach to enterprise strategy.
					We eliminate ambiguity through a structured eight-stage
					framework designed for high-signal decision making.
				</p>
			</div>

			<div class="framework-s-layout">
				<div class="framework-s-visual">
				<svg class="framework-s-svg" viewBox="0 0 461 577" xmlns="http://www.w3.org/2000/svg" aria-label="Eight-stage reversed S delivery framework">
					<defs>
						<linearGradient id="sGradient" x1="0%" y1="0%" x2="100%" y2="100%">
							<stop offset="0%" stop-color="#E21C15"/>
							<stop offset="100%" stop-color="#071A2B"/>
						</linearGradient>
					</defs>

					<path class="s-segment s-segment--01" d="M 55 70 
						C 240 45, 385 75, 385 185 C 385 250, 300 285, 175 288 
						C 55 292, 50 355, 50 410 C 50 505, 215 530, 405 500"/>

					<path class="s-segment s-segment--02" d="M 55 70
						C 240 45, 385 75, 385 185 C 385 250, 300 285, 175 288
						C 55 292, 50 355, 50 410 C 50 505, 215 530, 405 500"/>

					<path class="s-segment s-segment--03" d="M 55 70
						C 240 45, 385 75, 385 185 C 385 250, 300 285, 175 288
						C 55 292, 50 355, 50 410 C 50 505, 215 530, 405 500"/>

					<path class="s-segment s-segment--04" d="M 55 70
						C 240 45, 385 75, 385 185 C 385 250, 300 285, 175 288
						C 55 292, 50 355, 50 410 C 50 505, 215 530, 405 500"/>

					<path class="s-segment s-segment--05" d="M 55 70
						C 240 45, 385 75, 385 185 C 385 250, 300 285, 175 288
						C 55 292, 50 355, 50 410 C 50 505, 215 530, 405 500"/>

					<path class="s-segment s-segment--06" d="M 55 70
						C 240 45, 385 75, 385 185 C 385 250, 300 285, 175 288
						C 55 292, 50 355, 50 410 C 50 505, 215 530, 405 500"/>

					<path class="s-segment s-segment--07" d="M 55 70
						C 240 45, 385 75, 385 185 C 385 250, 300 285, 175 288
						C 55 292, 50 355, 50 410 C 50 505, 215 530, 405 500"/>

					<path class="s-segment s-segment--08" d="M 55 70
						C 240 45, 385 75, 385 185 C 385 250, 300 285, 175 288
						C 55 292, 50 355, 50 410 C 50 505, 215 530, 405 500"
					/>

				</svg>

				<?php foreach ( $hosho_phases as $phase ) : ?>
					<?php foreach ( $phase['stages'] as $stage ) : ?>
						<button type="button" class="s-stage s-stage-<?php echo esc_attr( $stage['num'] ); ?>"
							data-stage="<?php echo esc_attr( $stage['num'] ); ?>" data-title="<?php echo esc_attr( $stage['title'] ); ?>"
							data-focus="<?php echo esc_attr( $stage['focus'] ); ?>" data-guarantee="<?php echo esc_attr( $stage['guarantee'] ); ?>"
							data-deliverables="<?php echo esc_attr( implode( '||', $stage['deliverables'] ) ); ?>">
								<span class="s-stage-number">
									<?php echo esc_html( $stage['num'] ); ?>
								</span>

								<span class="s-stage-title">
									<?php echo esc_html( $stage['title'] ); ?>
								</span>
							</button>
						<?php endforeach; ?>
					<?php endforeach; ?>

					<div class="s-stage-info">
						<div class="s-info-number">01</div>
						<h3>Envision</h3>
						<div class="s-info-block">
							<span>THE FOCUS</span>
							<p class="s-info-focus"> Diagnose cross-industry business friction and map executive priorities.</p>
						</div>

						<div class="s-info-block">
							<span>THE GUARANTEE</span>
							<p class="s-info-guarantee">Eliminates strategic misalignment before engineering begins.</p>
						</div>

						<div class="s-info-block s-info-deliverables">
							<span>DELIVERABLES</span>
							<div class="s-deliverable-list">
								<em>Strategic AI Opportunity Matrix</em>
								<em>ROI Projection Model</em>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	BUILT FOR CROSS-INDUSTRY RESILIENCE
	========================================================= -->

	<section class="resilience-section">
		<div class="resilience-card">
			<h2 style="font-size: clamp(36px, 5vw, 48px); margin-bottom: 30px;">Built for Cross-Industry Resilience</h2>
			<div class="resilience-divider"></div>

			<div class="resilience-grid motion">
				<div class="resilience-item">
					<h4>Gated Capital Milestones</h4>
					<p>Investment is released sequentially based on hard, provable metrics, protecting core capital.</p>
				</div>

				<div class="resilience-item">
					<h4>Cross-Industry Agility</h4>
					<p>Architectures designed to pivot seamlessly across regulatory environments and sector specificities.</p>
				</div>

				<div class="resilience-item">
					<h4>Continuous Accountability</h4>
					<p>Transparent telemetry tracking performance against predetermined strategic baselines.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	FINAL CTA
	========================================================= -->

	<?php hosho_render_cta( '', '<strong>Don\'t Wait for the Perfect AI Strategy</strong>', 'Start with the opportunity that matters most.', 'Find Your First Win', hosho_page_url( 'strategy-session' ), 'approach/main/cta.jpg' ); ?>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
	var card = document.querySelector('.japanese-house-card');
	if (!card) return;

	var parts  = card.querySelectorAll('.jh-part');
	var labels = card.querySelectorAll('.jh-label-card');

	function setActive(key) {
		parts.forEach(function (p) {
			p.classList.toggle('is-active', p.dataset.key === key);
			p.classList.toggle('is-dim', !!key && p.dataset.key !== key);
		});
		labels.forEach(function (l) {
			l.classList.toggle('is-active', l.dataset.key === key);
			l.classList.toggle('is-dim', !!key && l.dataset.key !== key);
		});
	}

	function clearActive() {
		parts.forEach(function (p) { p.classList.remove('is-active', 'is-dim'); });
		labels.forEach(function (l) { l.classList.remove('is-active', 'is-dim'); });
	}

	parts.forEach(function (p) {
		p.addEventListener('mouseenter', function () { setActive(p.dataset.key); });
		p.addEventListener('mouseleave', clearActive);
		p.addEventListener('focus', function () { setActive(p.dataset.key); });
		p.addEventListener('blur', clearActive);
	});

	labels.forEach(function (l) {
		l.addEventListener('mouseenter', function () { setActive(l.dataset.key); });
		l.addEventListener('mouseleave', clearActive);
		l.addEventListener('focus', function () { setActive(l.dataset.key); });
		l.addEventListener('blur', clearActive);
	});
});

document.addEventListener('DOMContentLoaded', function () {
    var phaseTabs   = document.querySelectorAll('.phase-tab');
    var phasePanels = document.querySelectorAll('.phase-panel');

    /* Open first reveal of first card when a panel becomes active */
    function openFirstReveal(panel) {
        var firstCard   = panel.querySelector('.stage-card--first');
        if (!firstCard) return;
        var firstReveal = firstCard.querySelector('.stage-reveal');
        if (!firstReveal) return;
        /* Ensure it's open */
        firstReveal.classList.add('is-open');
        var btn = firstReveal.querySelector('.stage-reveal-label');
        if (btn) btn.setAttribute('aria-expanded', 'true');
    }

    /* Close all reveals inside a panel */
    function closeAllReveals(panel) {
        panel.querySelectorAll('.stage-reveal.is-open').forEach(function (r) {
            r.classList.remove('is-open');
            var btn = r.querySelector('.stage-reveal-label');
            if (btn) btn.setAttribute('aria-expanded', 'false');
        });
    }

    if (phaseTabs.length) {
        phaseTabs.forEach(function (tab) {
            tab.addEventListener('click', function () {
                var targetPhase = this.dataset.phase;
                phaseTabs.forEach(function (t) { t.classList.remove('active'); });
                phasePanels.forEach(function (p) {
                    p.classList.remove('active');
                    closeAllReveals(p);
                });
                this.classList.add('active');
                var targetPanel = document.querySelector('.phase-panel[data-phase="' + targetPhase + '"]');
                if (targetPanel) {
                    targetPanel.classList.add('active');
                    openFirstReveal(targetPanel);
                }
            });
        });
        /* Auto-open first reveal on load for the active panel */
        var activePanel = document.querySelector('.phase-panel.active');
        if (activePanel) openFirstReveal(activePanel);
    }

    /* Click toggle for all reveal buttons */
    document.querySelectorAll('.stage-reveal-label').forEach(function (button) {
        button.addEventListener('click', function () {
            var reveal = this.closest('.stage-reveal');
            if (!reveal) return;
            var isOpen = reveal.classList.contains('is-open');
            reveal.classList.toggle('is-open', !isOpen);
            this.setAttribute('aria-expanded', String(!isOpen));
        });
    });

    document.querySelectorAll('.stage-card--hover').forEach(function (card) {
        card.addEventListener('mouseenter', function () {
            card.querySelectorAll('.stage-reveal').forEach(function (r) {
                r.classList.add('is-open--hover');
            });
        });
        card.addEventListener('mouseleave', function () {
            card.querySelectorAll('.stage-reveal').forEach(function (r) {
                r.classList.remove('is-open--hover');
            });
        });
    });
});

(function () {

    const visual = document.querySelector('.framework-s-visual');

    if (!visual) return;

    const stages = visual.querySelectorAll('.s-stage');

    const number = visual.querySelector('.s-info-number');
    const title = visual.querySelector('.s-stage-info h3');
    const focus = visual.querySelector('.s-info-focus');
    const guarantee = visual.querySelector('.s-info-guarantee');
    const deliverables = visual.querySelector('.s-deliverable-list');


    function updateStage(stage) {

        number.textContent = stage.dataset.stage;

        title.textContent = stage.dataset.title;

        focus.textContent = stage.dataset.focus;

        guarantee.textContent = stage.dataset.guarantee;


        const items = stage.dataset.deliverables
            .split('||')
            .filter(Boolean);


        deliverables.innerHTML = items
            .map(function (item) {
                return '<em>' + item + '</em>';
            })
            .join('');
    }


    stages.forEach(function (stage) {

        stage.addEventListener('mouseenter', function () {
            updateStage(this);
        });


        stage.addEventListener('focus', function () {
            updateStage(this);
        });


        stage.addEventListener('click', function () {
            updateStage(this);
        });

    });

})();
</script>

<?php
get_footer();