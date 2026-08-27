<?php
/**
 * Homepage template.
 *
 * @package Hosho_Digital
 */

get_header();
$hg_stamp_img = hosho_asset_url( 'homepage/stamp.png' );

?>
<main id="main-content" class="home-page">
<!-- =========================================================
	HERO SECTION
	========================================================= -->
	<?php hosho_render_hero( 'INTELLIGENT. <br>SOLUTIONS. <br>GUARANTEED.', 'homepage/hero.jpg', array( 'class' => 'page-hero--company' ) ); ?>

	<!-- =========================================================
	THE COGNITIVE SHIFT
	========================================================= -->

	<section class="cognitive-shift">
		<div class="container">
			<div class="cognitive-header motion">
				<h2 class="section-title">
					Software Was Built to Run. Solutions Are Built to Evolve.
				</h2>
				<p class="section-title2">
					From Software as a Service to Solution as a Service.
				</p>
				<p class="section-desc">
					Technology shouldn't become obsolete the moment it's deployed. HOSHŌ combines business expertise, AI, automation and continuous improvement to create solutions that evolve with your business.
				</p>
			</div>
			
			<div class="solution-transform__split">
				<div class="st-wrap solution-transform__split-inner">

			<div class="st-actions">
				<button type="button" class="st-btn is-active-saas" id="stBtnSaas">SaaS Model</button>
				<div class="st-divider-v"></div>
				<button type="button" class="st-btn" id="stBtnSol">Solution as a Service</button>
			</div>

			<div class="st-split-view" id="stSplitView">
				<div class="st-side st-side--saas" id="stSideSaas">
					<div>
						<p class="st-side-tag st-side-tag--saas">TRADITIONAL MODEL</p>
						<p class="st-side-heading st-side-heading--saas">Software as a Service</p>
					</div>
					<div>
						<p class="st-side-desc st-side-desc--saas" id="stSaasDesc">Static tools, manual workflows, and high maintenance overhead.</p>
						<div class="st-metrics">
							<div class="st-metric st-metric--saas"><span class="num" id="stSaasMetric1">99</span><span class="unit">% retention</span></div>
							<div class="st-metric st-metric--saas"><span class="num" id="stSaasMetric2">14</span><span class="unit">-day cycles</span></div>
						</div>
					</div>
				</div>

				<div class="st-center-divider" id="stCenterDivider">
					<div class="st-handle">
						<svg width="12" height="18" viewBox="0 0 12 18" fill="none">
							<path d="M3 2L1 9l2 7M9 2l2 7-2 7" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
						</svg>
					</div>
				</div>

				<div class="st-side st-side--sol" id="stSideSol">
					<div>
						<p class="st-side-tag st-side-tag--sol">THE NEW STANDARD</p>
						<p class="st-side-heading st-side-heading--sol">Solution as a Service</p>
					</div>
					<div>
						<p class="st-side-desc st-side-desc--sol" id="stSolDesc">Continuous evolution combining business expertise and intelligent technology.</p>
						<div class="st-metrics">
							<div class="st-metric st-metric--sol"><span class="num" id="stSolMetric1">85</span><span class="unit">% ROI</span></div>
							<div class="st-metric st-metric--sol"><span class="num" id="stSolMetric2">25</span><span class="unit">% outcomes met</span></div>
						</div>
					</div>
				</div>
			</div>

			<div class="st-progress-track">
				<div class="st-progress-saas" id="stProgressSaas"></div>
				<div class="st-progress-mid"></div>
				<div class="st-progress-sol" id="stProgressSol"></div>
			</div>
			<div class="st-progress-labels">
				<span class="st-label-saas" id="stLabelSaas">TRADITIONAL MODEL — 75%</span>
				<span class="st-label-sol" id="stLabelSol">SOLUTION AS A SERVICE — 25%</span>
			</div>

			</div>
		</div>
	</section>

	<!-- =========================================================
	READY FOR THE NEXT (SOLUTION VENN DIAGRAM)
	========================================================= -->

	<section class="services-section">
		<div class="container">
			<div class="strategy-header-box motion">
				<h2 class="strategy-heading">
					Ready for the Next
				</h2>
			</div>

			<div class="venn-interactive-container motion">
				<div class="venn-main-grid">
					<div class="venn-svg-wrapper">
						<svg viewBox="0 0 680 640" class="venn-svg" xmlns="http://www.w3.org/2000/svg" aria-label="Interactive Solution Venn Diagram">
							<defs>
								<path id="arc-top" d="M 155,178 A 172,172 0 0,1 525,178" fill="none" />
								<path id="arc-right" d="M 436,532 A 182,182 0 0,0 618,350" fill="none" />
								<path id="arc-left" d="M 62,350 A 182,182 0 0,0 244,532" fill="none" />

								<clipPath id="clip-circle-1">
									<circle cx="340" cy="180" r="165" />
								</clipPath>
								<clipPath id="clip-circle-2">
									<circle cx="442" cy="350" r="165" />
								</clipPath>
								<clipPath id="clip-circle-3">
									<circle cx="238" cy="350" r="165" />
								</clipPath>

								<filter id="vennGlow" x="-20%" y="-20%" width="140%" height="140%">
									<feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#a81c1c" flood-opacity="0.3" />
								</filter>
							</defs>

							<text class="venn-arc-label advisory-label" data-venn-id="advisory">
								<textPath href="#arc-top" startOffset="50%" text-anchor="middle" dy="12">VALUE INNOVATION</textPath>
							</text>
							<text class="venn-arc-label consulting-label" data-venn-id="consulting">
								<textPath href="#arc-right" startOffset="50%" text-anchor="middle" dy="16">OPERATIONAL EFFICIENCY</textPath>
							</text>
							<text class="venn-arc-label engineering-label" data-venn-id="engineering">
								<textPath href="#arc-left" startOffset="50%" text-anchor="middle" dy="16">ENGINEERING EXCELLENCE</textPath>
							</text>

							<circle class="venn-circle venn-circle-advisory" data-venn-id="advisory" cx="340" cy="180" r="165" tabindex="0" role="button" aria-label="Solution Advisory" />
							<circle class="venn-circle venn-circle-consulting" data-venn-id="consulting" cx="442" cy="350" r="165" tabindex="0" role="button" aria-label="Functional Consulting" />
							<circle class="venn-circle venn-circle-engineering" data-venn-id="engineering" cx="238" cy="350" r="165" tabindex="0" role="button" aria-label="Software Engineering" />

							<g class="venn-overlap-group">
								<circle cx="238" cy="350" r="165" clip-path="url(#clip-circle-1)" class="venn-petal petal-3" />
								<circle cx="340" cy="180" r="165" clip-path="url(#clip-circle-3)" class="venn-petal petal-1" />
								<text x="292" y="255" class="venn-petal-text" transform="rotate(30, 300, 232)">Innovation</text>
							</g>

							<g class="venn-overlap-group">
								<circle cx="340" cy="180" r="165" clip-path="url(#clip-circle-2)" class="venn-petal petal-1" />
								<circle cx="442" cy="350" r="165" clip-path="url(#clip-circle-1)" class="venn-petal petal-2" />
								<text x="390" y="255" class="venn-petal-text" transform="rotate(-30, 400, 232)">Alignment</text>
							</g>

							<g class="venn-overlap-group">
								<circle cx="442" cy="350" r="165" clip-path="url(#clip-circle-3)" class="venn-petal petal-2" />
								<circle cx="238" cy="350" r="165" clip-path="url(#clip-circle-2)" class="venn-petal petal-3" />
								<text x="322" y="350" class="venn-petal-text" transform="rotate(-90, 340, 350)">Execution</text>
							</g>

							<g class="venn-center" aria-hidden="true">
								<image href="<?php echo esc_url( hosho_asset_url( 'homepage/hosho-white-logo.png' ) ); ?>" x="350" y="307" width="38" height="38" transform="translate(-25, -25)" />
							</g>

							<g class="venn-label-group advisory-label" data-venn-id="advisory">
								<text x="340" y="114" class="venn-circle-title">Solution</text>
								<text x="340" y="140" class="venn-circle-title">Advisory</text>
							</g>

							<g class="venn-label-group consulting-label" data-venn-id="consulting">
								<text x="486" y="352" class="venn-circle-title">Functional</text>
								<text x="486" y="378" class="venn-circle-title">Consulting</text>
							</g>

							<g class="venn-label-group engineering-label" data-venn-id="engineering">
								<text x="194" y="352" class="venn-circle-title">Software</text>
								<text x="194" y="378" class="venn-circle-title">Engineering</text>
							</g>
						</svg>
					</div>

					<!-- Dynamic Details Card Column -->
					<div class="venn-details-card" id="vennDetailsCard">
						<div class="details-card-head">
							<span class="details-badge" id="vennCategory">Value Innovation</span>
						</div>
						<h3 class="details-title" id="vennTitle">Solution Advisory</h3>
						<p class="details-desc" id="vennDesc">
							Helps organizations identify high-impact opportunities, define business priorities, and architect AI-driven solutions aligned with strategic goals.
						</p>

						<div class="details-divider"></div>

						<div class="details-capabilities">
							<span class="capabilities-title">Key Capabilities &amp; Outcomes</span>
							<div class="capabilities-tags-list" id="vennCapabilities">
								<span class="capability-tag">AI Strategy &amp; Roadmap</span>
								<span class="capability-tag">Business Re-engineering</span>
								<span class="capability-tag">Low-Code Architecture</span>
								<span class="capability-tag">ROI Modeling</span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- =========================================================
	STEVE JOBS QUOTE
	========================================================= -->

	<?php hosho_render_quote( 'Innovation is the ability to see change as an opportunity, not a threat.', 'Steve Jobs', 'homepage/steve-jobs.png' ); ?>

	<!-- ==========================================
	RAPID TO BE SPOKE
	=========================================== -->

	<section class="rapid-spectrum">
		<div class="container">
			<div class="rapid-header motion">
				<h2>
					Covering the transformation spectrum
				</h2>
			</div>

			<!-- Cards -->
			<div class="rapid-grid">
				<article class="rapid-card">
					<div class="rapid-card-head">
						<span class="rapid-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 14l-1 5 5-1 8-8a8 8 0 0 0-4-4Z"/><path d="M14 5c2-2 5-3 5-3s-1 3-3 5"/><path d="M9 15l-2 2"/></svg></span>
						<h3>Quick-Deploy AI</h3>
					</div>
					<p class="rapid-desc">
						Rapid integration of ready-to-use AI modules to solve
						immediate business bottlenecks.
					</p>
				</article>

				<article class="rapid-card">
					<div class="rapid-card-head">
						<span class="rapid-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M7 21V7l5-4v10l4-2v10"/></svg></span>
						<h3>Integrated AI Layer</h3>
					</div>
					<p class="rapid-desc">
						A middleware approach that connects existing legacy
						systems with a unified intelligent orchestration layer.
					</p>
				</article>

				<article class="rapid-card">
					<div class="rapid-card-head">
						<span class="rapid-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M7 21V7l5-4v10l4-2v10"/></svg></span>
						<h3>Bespoke AI Platform</h3>
					</div>
					<p class="rapid-desc">
						Custom-engineered AI infrastructure designed from the
						ground up to redefine your competitive advantage.
					</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ==========================================
	PARTNERS
	=========================================== -->

	<section class="partners-section">
		<div class="container">
			<!-- Technology Partners -->
			<div class="partner-category-section">
				<span class="partner-category-title">Technology Partners</span>
				<div class="partner-logos-wrap">
					<div class="partner-logos-track">
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/openai.jpg' ) ); ?>" alt="OpenAI"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/microsoft.jpg' ) ); ?>" alt="Microsoft"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/google-cloud.jpg' ) ); ?>" alt="Google Cloud"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/anthropic.jpg' ) ); ?>" alt="Anthropic"></div>
						<!-- duplicated for a seamless infinite loop -->
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/openai.jpg' ) ); ?>" alt="OpenAI"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/microsoft.jpg' ) ); ?>" alt="Microsoft"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/google-cloud.jpg' ) ); ?>" alt="Google Cloud"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/anthropic.jpg' ) ); ?>" alt="Anthropic"></div>
					</div>
				</div>
			</div>

			<!-- Business Partners -->
			<div class="partner-category-section">
				<span class="partner-category-title">Business Partners</span>
				<div class="partner-logos-wrap">
					<div class="partner-logos-track">
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/buss-partners/ingram.png' ) ); ?>" alt="Ingram Micro"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/buss-partners/sbf.png' ) ); ?>" alt="SBF"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/buss-partners/sg-tech.png' ) ); ?>" alt="SG Tech"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/buss-partners/pax8.png' ) ); ?>" alt="Pax8"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/buss-partners/crayon.png' ) ); ?>" alt="Partner"></div>
						<!-- duplicated for a seamless infinite loop -->
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/buss-partners/ingram.png' ) ); ?>" alt="Ingram Micro"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/buss-partners/sbf.png' ) ); ?>" alt="SBF"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/buss-partners/sg-tech.png' ) ); ?>" alt="SG Tech"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/buss-partners/pax8.png' ) ); ?>" alt="Pax8"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/buss-partners/crayon.png' ) ); ?>" alt="Partner"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	FINAL CTA
	=========================================== -->

	<?php hosho_render_cta( '', 'Ready to Turn AI Into Value?', 'Let\'s identify where intelligence can make the biggest difference to your business.', 'Discover The Opportunity', 'page-consult-our-experts', 'homepage/cta.jpg' ); ?>

</main>

<script>
	(function () {
		var section = document.querySelector('.hg-section');
		if (section) {
			var cards = section.querySelectorAll('.hg-flip-card');
			cards.forEach(function (card) {
				var hint = card.querySelector('.hg-tap-hint');
				card.addEventListener('click', function () {
					var wasOpen = card.classList.contains('is-open');
					cards.forEach(function (other) {
						other.classList.remove('is-open');
						other.setAttribute('aria-pressed', 'false');
						var otherHint = other.querySelector('.hg-tap-hint');
						if (otherHint) otherHint.textContent = 'Tap to see more';
					});

					if (!wasOpen) {
						card.classList.add('is-open');
						card.setAttribute('aria-pressed', 'true');
						if (hint) hint.textContent = 'Tap to close';
					}
				});
			});
		}

		var stage = document.getElementById('hgStampStage');
		if (stage) {
			if ('IntersectionObserver' in window) {
				var io = new IntersectionObserver(function (entries) {
					entries.forEach(function (entry) {
						if (entry.isIntersecting) {
							stage.classList.add('is-stamped');
							io.unobserve(stage);
						}
					});
				}, { threshold: 0.4 });
				io.observe(stage);
			} else {
				stage.classList.add('is-stamped');
			}
		}
	})();

	/* ===================== SOLUTION TRANSFORM INTERACTIVE PANEL ===================== */
	(function () {
		var ST_DIMENSIONS = [
			{
				label: "BUSINESS MODEL",
				saas: { heading: "Subscription License", body: "Pay monthly for software access, regardless of whether the technology delivers any measurable business value.", stat: "$99 / seat / mo" },
				solution: { heading: "Outcome-Based Partnership", body: "Investment is tied directly to business results. We only grow when you do. Risk and reward are shared.", stat: "Value-aligned pricing" },
			},
			{
				label: "DELIVERY",
				saas: { heading: "Feature Release Cycles", body: "Quarterly roadmap drops and changelog updates. What ships is what the vendor decides — not what you need.", stat: "14-day sprint cycles" },
				solution: { heading: "Continuous Co-Evolution", body: "Embedded teams that adapt in real time. Automation and AI continuously improve around your operational reality.", stat: "Real-time adaptation" },
			},
			{
				label: "RELATIONSHIP",
				saas: { heading: "Vendor & Customer", body: "Ticket-based support, SLA guarantees, and account managers whose incentive is renewal, not your transformation.", stat: "NPS target: 40+" },
				solution: { heading: "Strategic Partner", body: "Shared accountability. Co-investment in outcomes. Joint KPIs that keep both sides focused on the same goals.", stat: "Shared P&L exposure" },
			},
			{
				label: "FOCUS",
				saas: { heading: "Software Adoption", body: "Success is measured in DAU, feature usage, and retention curves — metrics that tell you about the product, not your business.", stat: "MAU: 12,400 users" },
				solution: { heading: "Business Transformation", body: "Success is measured in revenue impact, operational efficiency, and strategic advantage — metrics that actually matter.", stat: "ROI: 340% in Year 1" },
			},
			{
				label: "INTEGRATION",
				saas: { heading: "API & Webhooks", body: "Self-serve docs, REST endpoints, and sandbox environments. Integration is your problem to solve, forever.", stat: "99.9% uptime SLA" },
				solution: { heading: "Deep System Fusion", body: "Full-stack integration across your processes, people, and technology. No gaps, no maintenance debt, no silos.", stat: "Zero integration gaps" },
			},
		];

		var stProgress = 0.75;
		var stDragging = false;
		var stRafId = null;

		var stSplitView = document.getElementById('stSplitView');
		if (stSplitView) {
			var stSideSaas    = document.getElementById('stSideSaas');
			var stSideSol     = document.getElementById('stSideSol');
			var stSaasDesc    = document.getElementById('stSaasDesc');
			var stSolDesc     = document.getElementById('stSolDesc');
			var stSaasMetric1 = document.getElementById('stSaasMetric1');
			var stSaasMetric2 = document.getElementById('stSaasMetric2');
			var stSolMetric1  = document.getElementById('stSolMetric1');
			var stSolMetric2  = document.getElementById('stSolMetric2');
			var stProgressSaas= document.getElementById('stProgressSaas');
			var stLabelSaas   = document.getElementById('stLabelSaas');
			var stLabelSol    = document.getElementById('stLabelSol');
			var stBtnSaas     = document.getElementById('stBtnSaas');
			var stBtnSol      = document.getElementById('stBtnSol');
			var stSummaryNum  = document.getElementById('stSummaryNumber');

			function stClamp(v, lo, hi) { return Math.max(lo, Math.min(hi, v)); }

			function stRender() {
				var p     = stClamp(stProgress, 0.18, 0.82);
				var saasPct = Math.round(p * 100);
				var solPct = 100 - saasPct;

				stSideSaas.style.width   = (p * 100) + '%';
				stSideSaas.style.opacity = 0.5 + p * 0.5;
				stSideSol.style.opacity  = 0.4 + (1 - p) * 0.6;

				if (stSaasDesc) stSaasDesc.style.display = p > 0.4 ? 'block' : 'none';
				if (stSolDesc)  stSolDesc.style.display  = p < 0.6 ? 'block' : 'none';

				if (stSaasMetric1) stSaasMetric1.textContent = Math.round(99 - (1 - p) * 60);
				if (stSaasMetric2) stSaasMetric2.textContent = Math.round(14 - (1 - p) * 8);
				if (stSolMetric1)  stSolMetric1.textContent  = Math.round((1 - p) * 340);
				if (stSolMetric2)  stSolMetric2.textContent  = Math.round((1 - p) * 98);

				if (stProgressSaas) stProgressSaas.style.width = (p * 100) + '%';

				if (stLabelSaas) stLabelSaas.textContent = 'TRADITIONAL MODEL — ' + saasPct + '%';
				if (stLabelSol)  stLabelSol.textContent  = 'SOLUTION AS A SERVICE — ' + solPct + '%';

				if (stBtnSaas) {
					stBtnSaas.classList.toggle('is-active-saas', p > 0.6);
					stBtnSaas.classList.toggle('is-active-sol',  false);
				}
				if (stBtnSol) {
					stBtnSol.classList.toggle('is-active-sol',  p < 0.4);
					stBtnSol.classList.toggle('is-active-saas', false);
				}
				if (stSummaryNum)   stSummaryNum.textContent   = solPct + '%';
			}
			stRender();

			function stPointerToProgress(clientX) {
				var rect = stSplitView.getBoundingClientRect();
				return stClamp((clientX - rect.left) / rect.width, 0.18, 0.82);
			}

			stSplitView.addEventListener('pointerdown', function (e) {
				stDragging = true;
				if (e.target.setPointerCapture && e.pointerId !== undefined) {
					stSplitView.setPointerCapture(e.pointerId);
				}
			});
			stSplitView.addEventListener('pointermove', function (e) {
				if (!stDragging) return;
				stProgress = stPointerToProgress(e.clientX);
				stRender();
			});
			stSplitView.addEventListener('pointerup',    function () { stDragging = false; });
			stSplitView.addEventListener('pointerleave', function () { stDragging = false; });

			function stAnimateTo(target) {
				if (stRafId) cancelAnimationFrame(stRafId);
				var from = stProgress;
				var t0 = performance.now();
				var duration = 900;
				(function tick(now) {
					var t = stClamp((now - t0) / duration, 0, 1);
					var ease = 1 - Math.pow(1 - t, 4);
					stProgress = from + (target - from) * ease;
					stRender();
					if (t < 1) stRafId = requestAnimationFrame(tick);
				})(performance.now());
			}

			if (stBtnSaas)     stBtnSaas.addEventListener('click',     function () { stAnimateTo(0.82); });
			if (stBtnSol)      stBtnSol.addEventListener('click',      function () { stAnimateTo(0.18); });
		}

		/* Build dimension strip rows */
		var stStripsContainer = document.getElementById('stStrips');
		if (stStripsContainer) {
			ST_DIMENSIONS.forEach(function (dim) {
				var row = document.createElement('div');
				row.className = 'st-strip-row';
				row.innerHTML =
					'<div class="st-strip-grid">' +
						'<div class="st-strip-col">' +
							'<p class="st-strip-label st-strip-label--left">' + dim.label + '</p>' +
							'<p class="st-strip-heading st-strip-heading--left">' + dim.saas.heading + '</p>' +
							'<p class="st-strip-body">' + dim.saas.body + '</p>' +
							'<span class="st-strip-stat st-strip-stat--left">' + dim.saas.stat + '</span>' +
						'</div>' +
						'<div class="st-strip-arrow-col">' +
							'<div class="st-arrow-line"></div>' +
							'<div class="st-arrow-box">' +
								'<svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2 6h8M7 3l3 3-3 3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>' +
							'</div>' +
							'<div class="st-arrow-line"></div>' +
						'</div>' +
						'<div class="st-strip-col st-right-col">' +
							'<p class="st-strip-label st-strip-label--right">THE NEW WAY</p>' +
							'<p class="st-strip-heading st-strip-heading--right">' + dim.solution.heading + '</p>' +
							'<p class="st-strip-body st-strip-body--right">' + dim.solution.body + '</p>' +
							'<span class="st-strip-stat st-strip-stat--right">' + dim.solution.stat + '</span>' +
						'</div>' +
					'</div>';
				row.addEventListener('mouseenter', function () { row.classList.add('is-active'); });
				row.addEventListener('mouseleave', function () { row.classList.remove('is-active'); });
				stStripsContainer.appendChild(row);
			});
		}
	})();
</script>

<?php
get_footer();
