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
			<div class="rapid-grid">

				<div class="fail-card">
					<div class="fail-card__top">
						<div class="fail-card__icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
								<line x1="12" y1="9" x2="12" y2="13"/>
								<line x1="12" y1="17" x2="12.01" y2="17"/>
							</svg>
						</div>
						<h3>
							The Drift Problem
						</h3>
					</div>

					<p>
						Most AI deployments lose value over time due to unmonitored
						model drift.
					</p>
				</div>

				<div class="fail-card">
					<div class="fail-card__top">
						<div class="fail-card__icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<circle cx="12" cy="12" r="10"/>
								<line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/>
							</svg>
						</div>

						<h3>
							The Scaling Wall
						</h3>
					</div>

					<p>
						Point solutions routinely fail when migrating to enterprise
						infrastructure.
					</p>
				</div>


				<div class="fail-card fail-card--highlight">
					<div class="fail-card__top">
						<div class="fail-card__icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<path d="M8 12l2.5-2.5a2.1 2.1 0 0 1 3 0l.5.5"/>
								<path d="M16 12l-2.5 2.5a2.1 2.1 0 0 1-3 0l-.5-.5"/>
								<path d="M7.5 14.5 6 13a2.1 2.1 0 0 1 3-3l1 1"/>
								<path d="M16.5 9.5 18 11a2.1 2.1 0 0 1-3 3l-1-1"/>
							</svg>
						</div>
						<h3> The HOSHŌ Answer </h3>
					</div>
					<p>
						A gated, 8-stage delivery architecture where every step is
						anchored to an explicit commercial guarantee.
					</p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- =========================================================
	INTRO
	========================================================= -->

	<section class="approach-intro">
		<div class="container motion">
			<h2>Intelligent Digital Core</h2>
			<p>
				The Digital Core is the data and workflow layer that connects
				your existing systems so AI can act on real, current
				information. It sits underneath what you already run. It
				doesn't replace it.
			</p>
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
                <div class="nodes-diagram-svg">
                <svg viewBox="0 0 640 560" xmlns="http://www.w3.org/2000/svg" aria-label="The Seven Nodes of Unity diagram">
                  <defs>
                    <linearGradient id="nodeRingGradient" x1="100%" y1="50%" x2="0%" y2="50%">
                      <stop offset="0%" stop-color="#3a0606"/>
                      <stop offset="100%" stop-color="#ff1a1a"/>
                    </linearGradient>
                    <filter id="nodeShadow" x="-20%" y="-20%" width="140%" height="160%">
                      <feDropShadow dx="0" dy="2" stdDeviation="4" flood-color="rgba(0,0,0,0.13)"/>
                    </filter>
                  </defs>

                  <circle class="node-arc" cx="320" cy="280" r="210"
                        fill="none" stroke="url(#nodeRingGradient)" stroke-linecap="round"/>

                  <image class="node-logo" style="animation-delay: 1.6s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/salesforce.png' ) ); ?>" x="288" y="110" width="64" height="40" preserveAspectRatio="xMidYMid meet"/>

                  <image class="node-logo" style="animation-delay: 1.7s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/microsoft.png' ) ); ?>" x="225" y="175" width="25" height="25" preserveAspectRatio="xMidYMid meet"/>
                  <image class="node-logo" style="animation-delay: 1.8s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/dynamics.png' ) ); ?>" x="295" y="180" width="44" height="44" preserveAspectRatio="xMidYMid meet"/>
                  <image class="node-logo" style="animation-delay: 1.9s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/sap.png' ) ); ?>" x="380" y="175" width="44" height="22" preserveAspectRatio="xMidYMid meet"/>

				  <image class="node-logo" style="animation-delay: 1.9s;" href="<?php echo esc_url( hosho_asset_url( 'idc-logo.png' ) ); ?>" x="270" y="250" width="100" height="70" preserveAspectRatio="xMidYMid meet"/>

                  <image class="node-logo" style="animation-delay: 2.0s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/ibm.png' ) ); ?>" x="180" y="260" width="64" height="28" preserveAspectRatio="xMidYMid meet"/>
                  <image class="node-logo" style="animation-delay: 2.1s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/infor.png' ) ); ?>" x="275" y="340" width="92" height="28" preserveAspectRatio="xMidYMid meet"/>
                  <image class="node-logo" style="animation-delay: 2.2s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/workday.png' ) ); ?>" x="396" y="260" width="80" height="28" preserveAspectRatio="xMidYMid meet"/>

                  <image class="node-logo" style="animation-delay: 2.3s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/oracle.png' ) ); ?>" x="195" y="370" width="74" height="26" preserveAspectRatio="xMidYMid meet"/>
                  <image class="node-logo" style="animation-delay: 2.4s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/hubspot.png' ) ); ?>" x="370" y="370" width="74" height="28" preserveAspectRatio="xMidYMid meet"/>

                  <image class="node-logo" style="animation-delay: 2.5s;" href="<?php echo esc_url( hosho_asset_url( 'approach/main/logo/service-now.png' ) ); ?>" x="248" y="412" width="144" height="24" preserveAspectRatio="xMidYMid meet"/>

                  <g class="node-box" filter="url(#nodeShadow)">
                    <rect x="255" y="50" width="130" height="40" rx="6" ry="6" fill="white" stroke="#710E0A" stroke-width="4"/>
                    <text x="320" y="70" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Infrastructure</text>
                  </g>

                  <g class="node-box" filter="url(#nodeShadow)">
                    <rect x="419" y="129" width="130" height="40" rx="6" ry="6" fill="white" stroke="#6F0E0A" stroke-width="4"/>
                    <text x="484" y="149" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Data</text>
                  </g>

                  <g class="node-box" filter="url(#nodeShadow)">
                    <rect x="460" y="307" width="130" height="40" rx="6" ry="6" fill="white" stroke="#6C0C09" stroke-width="4"/>
                    <text x="525" y="327" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Logic</text>
                  </g>

                  <g class="node-box" filter="url(#nodeShadow)">
                    <rect x="346" y="449" width="130" height="40" rx="6" ry="6" fill="white" stroke="#A81510" stroke-width="4"/>
                    <text x="411" y="469" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Integration</text>
                  </g>

                  <g class="node-box" filter="url(#nodeShadow)">
                    <rect x="164" y="449" width="130" height="40" rx="6" ry="6" fill="white" stroke="#DA1A13" stroke-width="4"/>
                    <text x="229" y="469" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Automation</text>
                  </g>

                  <g class="node-box" filter="url(#nodeShadow)">
                    <rect x="50" y="307" width="130" height="40" rx="6" ry="6" fill="white" stroke="#DE1B15" stroke-width="4"/>
                    <text x="115" y="327" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">AI</text>
                  </g>

                  <g class="node-box" filter="url(#nodeShadow)">
                    <rect x="91" y="129" width="130" height="40" rx="6" ry="6" fill="white" stroke="#E21C15" stroke-width="4"/>
                    <text x="156" y="149" text-anchor="middle" dominant-baseline="central" font-family="Arial,sans-serif" font-size="13.5" font-weight="700" fill="#1a1c1d">Experience</text>
                  </g>
                  <g transform="translate(240, 85) rotate(-22)">
                    <polygon class="node-arrowhead" points="36,0 -18,-18 -18,18" fill="#ff1a1a" />
                  </g>
                </svg>
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

		<div class="container">
			<div class="aos-frame motion">
				<div class="aos-roof">
					<div class="aos-roof-border"></div>
					<h2 class="aos-roof-title">THE ROOF: MEASURABLE OUTCOMES</h2>
				</div>
				
				<div class="aos-content">
					<div class="aos-layer aos-layer--1">
						<div class="aos-layer-num">01</div>
						<div class="aos-layer-text">
							<h3>Applications</h3>
							<p>User experiences &amp; workflow tools</p>
						</div>
					</div>
					<div class="aos-layer aos-layer--2">
						<div class="aos-layer-num">02</div>
						<div class="aos-layer-text">
							<h3>Process &amp; Logic</h3>
							<p>The business rules governing actions</p>
						</div>
					</div>
					<div class="aos-layer aos-layer--3">
						<div class="aos-layer-num">03</div>
						<div class="aos-layer-text">
							<h3>Foundation</h3>
							<p>Existing systems and critical data</p>
						</div>
					</div>
					
					<div class="aos-quote">
						<p>"We don't demolish the house. We strengthen the foundation to support the future."</p>
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

	<?php hosho_render_quote( 'Without continual growth and progress, such words as improvement, achievement, and success have no meaning.', 'Benjamin Franklin', 'approach/main/benjamin.png', 'quote-band--blue' ); ?>

	<!-- =========================================================
	8-STAGE DELIVERY FRAMEWORK
	========================================================= -->

    <section class="framework-section">
        <div class="framework-container">
            <div class="framework-header">
                <h2>Eight Stages.<span class="highlight">One Guarantee.</span></h2>
                <p>
                    A rigorous, disciplined approach to enterprise strategy. We eliminate ambiguity
                    through a structured eight-stage framework designed for high-signal decision making.
                </p>
            </div>

            <div class="phase-tabs">
                <?php if ( ! empty( $hosho_phases ) ) : ?>
                    <?php foreach ( $hosho_phases as $index => $phase ) : ?>
                        <button type="button" class="phase-tab<?php echo 0 === $index ? ' active' : ''; ?>" data-phase="<?php echo esc_attr( $phase['id'] ); ?>">
                            <span class="phase-number">Phase <?php echo esc_html( $phase['num'] ); ?></span>
                            <span class="phase-title"><?php echo esc_html( $phase['title'] ); ?></span>
                            <span class="phase-range"><?php echo esc_html( $phase['range'] ); ?></span>
                        </button>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="framework-content">
                <?php if ( ! empty( $hosho_phases ) ) : ?>
                    <?php foreach ( $hosho_phases as $index => $phase ) : ?>
                        <div class="phase-panel<?php echo 0 === $index ? ' active' : ''; ?>" data-phase="<?php echo esc_attr( $phase['id'] ); ?>">
                            <div class="phase-panel-heading">
                                <span class="phase-panel-number"><?php echo esc_html( $phase['num'] ); ?></span>
                                <h3><?php echo esc_html( $phase['title'] ); ?></h3>
                            </div>

                            <div class="stage-grid">
                                <?php foreach ( $phase['stages'] as $stage_idx => $stage ) : ?>
                                    <article class="stage-card<?php echo 0 === $stage_idx ? ' stage-card--first' : ' stage-card--hover'; ?>">
                                        <div class="stage-number"><?php echo esc_html( $stage['num'] ); ?></div>
                                        <h4><?php echo esc_html( $stage['title'] ); ?></h4>
                                        <p class="stage-body"><?php echo esc_html( $stage['focus'] ); ?></p>

                                        <div class="stage-reveal-blocks">
                                            <div class="stage-reveal<?php echo 0 === $stage_idx ? ' is-open' : ''; ?>">
                                                <button type="button" class="stage-reveal-label" aria-expanded="<?php echo 0 === $stage_idx ? 'true' : 'false'; ?>">
                                                    <span>The Focus</span>
                                                    <svg class="stage-reveal-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                                                </button>
                                                <div class="stage-reveal-content">
                                                    <p><?php echo esc_html( $stage['focus'] ); ?></p>
                                                </div>
                                            </div>

                                            <div class="stage-reveal">
                                                <button type="button" class="stage-reveal-label" aria-expanded="false">
                                                    <span>The Guarantee</span>
                                                    <svg class="stage-reveal-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                                                </button>
                                                <div class="stage-reveal-content">
                                                    <p><?php echo esc_html( $stage['guarantee'] ); ?></p>
                                                </div>
                                            </div>

                                            <div class="stage-reveal">
                                                <button type="button" class="stage-reveal-label" aria-expanded="false">
                                                    <span>Deliverables</span>
                                                    <svg class="stage-reveal-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
                                                </button>
                                                <div class="stage-reveal-content">
                                                    <div class="capability-tags">
                                                        <?php foreach ( $stage['deliverables'] as $deliverable ) : ?>
                                                            <span class="capability-tag"><?php echo esc_html( $deliverable ); ?></span>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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

			<div class="resilience-grid motion">
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

	<?php hosho_render_cta( '', 'Don\'t Wait for the Perfect AI Strategy', 'Start with the opportunity that matters most.', 'Find Your First Win', hosho_page_url( 'strategy-session' ), 'approach/main/cta.jpg' ); ?>

</main>

<script>
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
</script>

<?php
get_footer();
