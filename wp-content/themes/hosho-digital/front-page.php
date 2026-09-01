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

		<div class="cs-split">
			<div class="cs-panel cs-saas">
				<div class="cs-panel-content">
					<p class="cs-panel-eyebrow">Traditional Model</p>
					<h3>Software<br>as a Service</h3>
					<div class="cs-verb-wrapper">
						<span class="cs-verb cs-verb-saas">Ships.</span>
					</div>

					<div class="cs-lines">
						<p>Built around the product</p>
						<p>Progress gated by versions</p>
						<p>One roadmap for every client</p>
						<p>You adapt to the software</p>
					</div>
				</div>
			</div>

			<div class="cs-divider">
				<div class="cs-divider-node">
					<svg width="20" height="20" viewBox="0 0 14 14" fill="none" aria-hidden="true">
						<path d="M2 7h10M8 3l4 4-4 4" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
			</div>

			<div class="cs-panel cs-solution">
				<div class="cs-panel-content">
					<p class="cs-panel-eyebrow">Evolved Model</p>
					<h3>Solution<br>as a Service</h3>
					<div class="cs-verb-wrapper">
						<span class="cs-verb cs-verb-solution">Evolves.</span>
					</div>

					<div class="cs-lines">
						<p>Built around your outcomes</p>
						<p>Continuous, contextual growth</p>
						<p>Shaped by your specific needs</p>
						<p>The solution adapts to you</p>
					</div>

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
								<path id="arc-top" d="M 155,200 A 172,172 0 0,1 525,200" fill="none" />
								<path id="arc-right" d="M 436,495 A 182,182 0 0,0 618,360" fill="none" />
								<path id="arc-left" d="M 62,360 A 182,182 0 0,0 244,495" fill="none" />

								<clipPath id="clip-circle-1">
									<circle cx="340" cy="180" r="190" />
									</clipPath>
									<clipPath id="clip-circle-2">
										<circle cx="442" cy="350" r="190" />
									</clipPath>
									<clipPath id="clip-circle-3">
										<circle cx="238" cy="350" r="190" />
								</clipPath>

								<filter id="vennGlow" x="-20%" y="-20%" width="140%" height="140%">
									<feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#a81c1c" flood-opacity="0.3" />
								</filter>
							</defs>

							<circle class="venn-circle venn-circle-advisory" data-venn-id="advisory" cx="340" cy="180" r="140" tabindex="0" role="button" aria-label="Solution Advisory" />
							<circle class="venn-circle venn-circle-consulting" data-venn-id="consulting" cx="442" cy="350" r="140" tabindex="0" role="button" aria-label="Functional Consulting" />
							<circle class="venn-circle venn-circle-engineering" data-venn-id="engineering" cx="238" cy="350" r="140" tabindex="0" role="button" aria-label="Software Engineering" />

							<g class="venn-overlap-group">
								<text x="292" y="255" class="venn-petal-text" transform="rotate(30, 280, 225)">Innovation</text>
							</g>

							<g class="venn-overlap-group">
								<text x="390" y="255" class="venn-petal-text" transform="rotate(-30, 400, 232)">Alignment</text>
							</g>

							<g class="venn-overlap-group">
								<text x="320" y="350" class="venn-petal-text" transform="rotate(-90, 340, 350)">Execution</text>
							</g>

							<g class="venn-center" aria-hidden="true">
								<image href="<?php echo esc_url( hosho_asset_url( 'homepage/logo-white-nobg.png' ) ); ?>" x="350" y="307" width="30" height="30" transform="translate(-25, -25)" />
							</g>

							<g class="venn-label-group advisory-label" data-venn-id="advisory">
								<text x="340" y="140" class="venn-circle-title">Solution</text>
								<text x="340" y="166" class="venn-circle-title">Advisory</text>
							</g>

							<g class="venn-label-group consulting-label" data-venn-id="consulting">
								<text x="472" y="352" class="venn-circle-title">Functional</text>
								<text x="472" y="378" class="venn-circle-title">Consulting</text>
							</g>

							<g class="venn-label-group engineering-label" data-venn-id="engineering">
								<text x="208" y="352" class="venn-circle-title">Software</text>
								<text x="208" y="378" class="venn-circle-title">Engineering</text>
							</g>
						</svg>
					</div>

					<!-- Dynamic Details Card Column -->
					<div class="venn-details-card" id="vennDetailsCard">
						<h3 class="details-title" id="vennTitle">Solution Advisory</h3>
						<div class="details-card-head">
							<span class="details-badge" id="vennCategory">Value Innovation</span>
						</div>
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

	<?php hosho_render_quote('<strong>Innovation is the ability <br>to see changeas <br>an opportunity, <br>not a threat.</strong>','Steve Jobs','homepage/steve-jobs.png','quote-band--standard quote-band--red-soft quote-band--masayoshi'); ?>

	<!-- ==========================================
	RAPID TO BE SPOKE
	=========================================== -->

	<section class="section">
		<div class="shell">
			<div class="intro-grid motion">
				<div>
					<h2>Covering the Transformation Spectrum</h2>
				</div>
				<div class="body-copy">
					<p>Every organization sits at a different point on the AI maturity curve. HOSHŌ Digital meets you where you are with three implementation models — from rapid deployment to fully bespoke platforms.</p>
				</div>
			</div>

			<div class="solutions-cards solutions-cards--timeline">
				<article class="solutions-card solutions-card--red motion">
					<h3>Rapid Deployment</h3>
					<p>Rapid integration of ready-to-use AI modules to solve immediate business bottlenecks.</p>
				</article>

				<div class="timeline-arrow" aria-hidden="true">
					<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#E21C15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
				</div>

				<article class="solutions-card solutions-card--red motion">
					<h3>Custom Solutions</h3>
					<p>A middleware approach that connects existing legacy systems with a unified intelligent orchestration layer.</p>
				</article>

				<div class="timeline-arrow" aria-hidden="true">
					<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#E21C15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
				</div>

				<article class="solutions-card solutions-card--red motion">
					<h3>Bespoke Platforms</h3>
					<p>Custom-engineered AI infrastructure designed from the ground up to redefine your competitive advantage.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ==========================================
	PARTNERS
	=========================================== -->

	<section class="partners-section">
		<div class="container">
			<div class="partner-category-section">
				<span class="partner-category-title">Technology Partners</span>
				<div class="partner-logos-wrap">
					<div class="partner-logos-track">
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/openai.jpg' ) ); ?>" alt="OpenAI"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/microsoft.jpg' ) ); ?>" alt="Microsoft"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/google-cloud.jpg' ) ); ?>" alt="Google Cloud"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/anthropic.jpg' ) ); ?>" alt="Anthropic"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/openai.jpg' ) ); ?>" alt="OpenAI"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/microsoft.jpg' ) ); ?>" alt="Microsoft"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/google-cloud.jpg' ) ); ?>" alt="Google Cloud"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'homepage/tech-partners/anthropic.jpg' ) ); ?>" alt="Anthropic"></div>
					</div>
				</div>
			</div>

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
	<?php hosho_render_cta( '', '<strong>Ready to Turn AI Into Value?</strong>', 'Let\'s identify where intelligence can make the biggest difference to your business.', 'Discover The Opportunity', hosho_page_url('consult-our-experts'), 'homepage/cta.jpg' ); ?>

</main>

<script>
(function () {

	/* =====================================================
	 * HACHIDAN / HG FLIP CARDS
	 * ===================================================== */

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

					var otherHint =
						other.querySelector('.hg-tap-hint');

					if (otherHint) {
						otherHint.textContent = 'Tap to see more';
					}

				});

				if (!wasOpen) {

					card.classList.add('is-open');
					card.setAttribute('aria-pressed', 'true');

					if (hint) {
						hint.textContent = 'Tap to close';
					}

				}

			});

		});

	}


	/* =====================================================
	 * HACHIDAN STAMP ANIMATION
	 * ===================================================== */

	var stage = document.getElementById('hgStampStage');

	if (stage) {

		if ('IntersectionObserver' in window) {

			var io = new IntersectionObserver(
				function (entries) {

					entries.forEach(function (entry) {

						if (entry.isIntersecting) {

							stage.classList.add('is-stamped');

							io.unobserve(stage);

						}

					});

				},
				{
					threshold: 0.4
				}
			);

			io.observe(stage);

		} else {

			stage.classList.add('is-stamped');

		}

	}


	/* =====================================================
	 * COGNITIVE SHIFT
	 * SaaS → Solution as a Service
	 * ===================================================== */

	var cognitiveShift =
		document.querySelector('.cognitive-shift');

	if (!cognitiveShift) {
		return;
	}


	/* =====================================================
	 * HERO ANIMATION
	 * ===================================================== */

	var heroElements =
		cognitiveShift.querySelectorAll('.cs-hero-animate');

	if (heroElements.length) {

		setTimeout(function () {

			heroElements.forEach(function (element) {

				element.classList.add('cs-visible');

			});

		}, 80);

	}


	/* =====================================================
	 * VERB ROTATION
	 * ===================================================== */

	var pairs = [

		{
			saas: 'Ships.',
			sol: 'Evolves.'
		},

		{
			saas: 'Scales.',
			sol: 'Adapts.'
		},

		{
			saas: 'Runs.',
			sol: 'Transforms.'
		},

		{
			saas: 'Deploys.',
			sol: 'Compounds.'
		},

		{
			saas: 'Repeats.',
			sol: 'Grows.'
		}

	];


	var saasVerb =
		cognitiveShift.querySelector('.cs-verb-saas');

	var solutionVerb =
		cognitiveShift.querySelector('.cs-verb-solution');


	var pairIndex = 0;


	if (saasVerb && solutionVerb) {

		setInterval(function () {

			/*
			 * Fade out
			 */

			saasVerb.style.opacity = '0';
			saasVerb.style.transform =
				'translateY(-16px)';

			solutionVerb.style.opacity = '0';
			solutionVerb.style.transform =
				'translateY(16px)';


			/*
			 * Change words
			 */

			setTimeout(function () {

				pairIndex =
					(pairIndex + 1) % pairs.length;


				saasVerb.textContent =
					pairs[pairIndex].saas;

				solutionVerb.textContent =
					pairs[pairIndex].sol;


				/*
				 * Fade in
				 */

				saasVerb.style.opacity = '1';

				saasVerb.style.transform =
					'translateY(0)';


				solutionVerb.style.opacity = '1';

				solutionVerb.style.transform =
					'translateY(0)';

			}, 460);

		}, 2700);

	}

})();
</script>

<?php
get_footer();
