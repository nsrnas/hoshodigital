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
<!-- =========================================================
	HERO
	========================================================= -->

	<section class="philosophy-hero">
		<div class="philosophy-hero-image">
			<img src="<?php echo esc_url( hosho_asset_url('approach/philosophy/hero.jpg' ) ); ?>" alt="Architectural steel structure, representing the Enterprise AI Delivery Philosophy">
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
				<img src="<?php echo esc_url( hosho_asset_url('approach/philosophy/built.jpg' ) ); ?>" alt="Abstract network of connected nodes, representing cross-industry resilience">
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
			<img src="<?php echo esc_url( hosho_asset_url('approach/philosophy/cta.jpg' ) ); ?>" alt="City skyline, representing the enterprise landscape">
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