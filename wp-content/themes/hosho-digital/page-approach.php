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
	<?php hosho_render_hero(
		"We Don't Demolish<br>What's Already<br>Working",
		'approach/main/hero.jpg',
		array( 'class' => 'page-hero--approach' )
	); ?>

	<!-- =========================================================
	WHY 80% OF ENTERPRISE AI FAILS
	========================================================= -->

	<section class="fail-section">
		<div class="fail-container">
			<div class="fail-intro">
				<div class="fail-intro__stat">
					<strong>80%</strong>
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
			<div class="fail-grid">

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
					<div class="fail-card__watermark" aria-hidden="true">
						<svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" >
							<path d="M35 48L47 36C50 33 55 33 58 36L67 45" stroke="currentColor" stroke-width="9" stroke-linecap="round" />
							<path d="M65 48L53 60C50 63 45 63 42 60L33 51" stroke="currentColor" stroke-width="9" stroke-linecap="round" />
							<path d="M43 43L58 58" stroke="currentColor" stroke-width="9" stroke-linecap="round" />
							<path d="M57 43L42 58" stroke="currentColor" stroke-width="9" stroke-linecap="round"/>
						</svg>
					</div>
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
	CORPORATE EXECUTION GAP
	========================================================= -->

	<section class="gap-section">
		<div class="container motion">
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
	8-STAGE DELIVERY FRAMEWORK
	========================================================= -->

    <section class="framework-section">
        <div class="framework-container">
            <div class="framework-header">
                <h2>The 8-Stage Delivery Framework</h2>
                <p>
                    Every HOSHŌ engagement is anchored to this delivery philosophy, a spiral framework designed to eliminate strategic drift and
                    guarantee measurable enterprise value, stage by stage. It runs
                    in one continuous loop: what you learn defending an outcome
                    feeds straight back into envisioning the next one.
                </p>
            </div>

            <div class="framework-visual">
                <div class="framework-watermark">HACHIDAN</div>
                <img src="<?php echo esc_url( hosho_asset_url( 'approach/main/hachidan.png' ) ); ?>" alt="HOSHŌ 8-Stage Delivery Framework" class="framework-spiral-image">
            </div>

            <div class="phase-tabs">
                <?php if ( ! empty( $hosho_phases ) ) : ?>
                    <?php foreach ( $hosho_phases as $index => $phase ) : ?>
                        <button type="button" class="phase-tab<?php echo 0 === $index ? ' active' : ''; ?>" data-phase="<?php echo esc_attr( $phase['id'] ); ?>">
                            <span class="phase-number">Phase <?php echo esc_html( $phase['num'] ); ?></span>
                            <span class="phase-title"><?php echo esc_html( $phase['title'] ); ?></span>
                            <span class="phase-range">Stages <?php echo esc_html( $phase['range'] ); ?></span>
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
                                <?php foreach ( $phase['stages'] as $stage ) : ?>
                                    <article class="stage-card">
                                        <div class="stage-number"><?php echo esc_html( $stage['num'] ); ?></div>
                                        <h4><?php echo esc_html( $stage['title'] ); ?></h4>

                                        <div class="stage-focus-block">
                                            <span class="stage-label">The Focus</span>
                                            <p><?php echo esc_html( $stage['focus'] ); ?></p>
                                        </div>

                                        <div class="stage-guarantee">
                                            <span class="stage-label">The Guarantee</span>
                                            <p><?php echo esc_html( $stage['guarantee'] ); ?></p>
                                        </div>

                                        <div class="stage-deliverables">
                                            <span class="stage-label">Deliverables</span>
                                            <div class="capability-tags">
                                                <?php foreach ( $stage['deliverables'] as $deliverable ) : ?>
                                                    <span class="capability-tag"><?php echo esc_html( $deliverable ); ?></span>
                                                <?php endforeach; ?>
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

	<section class="philosophy-cta">
		<div class="philosophy-cta-image">
			<img src="<?php echo esc_url( hosho_asset_url('approach/philosophy/cta.jpg' ) ); ?>" alt="City skyline, representing the enterprise landscape">
		</div>
		<div class="philosophy-cta-overlay"></div>

		<div class="container motion">
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
document.addEventListener('DOMContentLoaded', function () {

    const phaseTabs = document.querySelectorAll('.phase-tab');
    const phasePanels = document.querySelectorAll('.phase-panel');

    if (!phaseTabs.length || !phasePanels.length) {
        return;
    }

    phaseTabs.forEach(function (tab) {

        tab.addEventListener('click', function () {

            const targetPhase = this.dataset.phase;

            /* Remove active from tabs */
            phaseTabs.forEach(function (item) {
                item.classList.remove('active');
            });

            /* Remove active from panels */
            phasePanels.forEach(function (panel) {
                panel.classList.remove('active');
            });

            /* Activate selected */
            this.classList.add('active');

            const targetPanel = document.querySelector(
                '.phase-panel[data-phase="' + targetPhase + '"]'
            );

            if (targetPanel) {
                targetPanel.classList.add('active');
            }

        });

    });

});
</script>

<?php
get_footer();
