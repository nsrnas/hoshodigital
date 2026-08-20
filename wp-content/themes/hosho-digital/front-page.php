<?php
/**
 * Homepage template.
 *
 * @package Hosho_Digital
 */

get_header();
$hg_stamp_img = hosho_asset_url( 'homepage/stamp.png' );
$hg_cards     = array(
	array(
		'eyebrow'  => 'Outcome',
		'body'     => 'Measurable enterprise value through audited operational efficiency and radical innovation.',
	),
	array(
		'eyebrow'  => 'Capability',
		'body'     => 'Knowledge transfer that ensures your leadership can master the AI frontier independently.',
	),
	array(
		'eyebrow'  => 'Integrity',
		'body'     => 'Strategic alliances built on radical transparency and aligned long-term business goals.',
	),
);

?>
<main id="main-content" class="home-page">
<!-- =========================================================
	HERO SECTION
	========================================================= -->
	<?php hosho_render_hero( 'Lead with AI<br>Or Get Left<br>Behind', 'homepage/hero.jpg', array( 'class' => 'page-hero--company' ) ); ?>

	<!-- =========================================================
	YOUR SUCCESS. OUR GUARANTEE.
	========================================================= -->
	<section class="intro-section">
		<div class="hg-section" aria-label="Our Guarantee">
			<div class="hg-layout">
				<div class="hg-brand-box">
					<p class="hg-tagline">Your Success<br>Our Guarantee</p>
					<div class="hg-stamp-stage" id="hgStampStage">
						<img class="hg-stamp-img" src="<?php echo esc_url( $hg_stamp_img ); ?>" alt="HOSHO ä¿è¨¼ (guarantee) stamp seal">
					</div>
				</div>

				<div class="hg-guarantee-col">
					<h2 class="hg-heading">Our Guarantee</h2>
					<div class="hg-cards-col">
						<?php foreach ( $hg_cards as $hg_card ) : ?>
							<button type="button" class="hg-flip-card" aria-pressed="false" aria-label="Tap to reveal <?php echo esc_attr( $hg_card['eyebrow'] ); ?> guarantee">
								<img class="hg-corner-stamp" src="<?php echo esc_url( $hg_stamp_img ); ?>" alt="">
								<div class="hg-card-head">
									<div class="hg-card-title-wrap">
										<h3 class="hg-card-title"><?php echo esc_html( $hg_card['eyebrow'] ); ?></h3>
									</div>
								</div>
								<div class="hg-card-body-wrap">
									<span class="hg-body"><?php echo esc_html( $hg_card['body'] ); ?></span>
								</div>
							</button>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	TRANSFORMATION WITHOUT DISRUPTION
	========================================================= -->

	<section class="digital-core" id="approach">
		<div class="container">
			<div class="digital-core-heading motion">
				<h2>
					Transformation without Disruption
				</h2>
				<p>
					We transform disconnected systems into one Intelligent Digital
					Core, connecting data, applications, automation, and AI so your
					business can continuously evolve and scale.
				</p>
			</div>

			<div class="idc-card motion">
				<div class="idc-card-header">
					<div class="idc-logo-wrapper">
						<img src="<?php echo esc_url( hosho_asset_url( 'idc-logo.png' ) ); ?>" alt="Intelligent Digital Core Logo" class="idc-logo">
					</div>
					<div class="idc-card-title-group">
						<span class="idc-card-label">Core Architectural Platform</span>
						<h3>Intelligent Digital Core</h3>
					</div>
				</div>
			</div>

			<div class="digital-core-process">
				<div class="core-step">
					<div class="step-label">Understanding</div>
					<h3>Deep Discovery</h3>
					<p>
						We begin by auditing your existing data architecture and
						identifying the high-impact nodes where intelligence can
						drive immediate operational leverage.
					</p>
				</div>

				<div class="core-step">
					<div class="step-label">Architecting</div>
					<h3>The Digital Core</h3>
					<p>
						We build a unified, self-evolving infrastructure that
						connects disparate data streams into a single,
						high-fidelity intelligence loop.
					</p>
				</div>

				<div class="core-step">
					<div class="step-label">Scaling</div>
					<h3>Exponential Growth</h3>
					<p>
						We deploy adaptive AI solutions that don't just automate
						tasks, but autonomously optimize for business outcomes
						as your data grows.
					</p>
				</div>
			</div>

			<div class="motion" style="text-align:center;">
				<a href="<?php echo esc_url(home_url('/approach')); ?>" class="button">
					Find Out More <span></span>
				</a>
			</div>
		</div>
	</section>

	<!-- =========================================================
	THE COGNITIVE SHIFT
	========================================================= -->

	<section class="cognitive-shift">
		<div class="container">
			<div class="cognitive-header motion">
				<h2 class="section-title">
					Redefining Enterprise Software
				</h2>
				<p class="section-desc">
					Artificial Intelligence is redefining enterprise software.
					Organizations no longer need static applications, but they
					need intelligent solutions that continuously adapt, improve,
					and create measurable business value.
				</p>
			</div>

			<div class="compare-flow">
				<div class="compare-card old">
					<div class="compare-label">Traditional Model</div>
					<h3>Software as a Service</h3>
					<p>
						Static tools, manual workflows, and high maintenance
						overhead.
					</p>
				</div>

				<div class="compare-arrow">
					<div class="arrow-glyph">→</div>
					<div class="arrow-label">The Transformation</div>
				</div>

				<div class="compare-card new">
					<div class="compare-label">The New Standard</div>
					<h3>Solution as a Service</h3>
					<p>
						Continuous evolution combining business expertise and
						intelligent technology.
					</p>
				</div>
			</div>
	</section>

	<!-- =========================================================
	FROM STRATEGY TO CONTINUOUS VALUE
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
						<svg viewBox="0 0 600 560" class="venn-svg" xmlns="http://www.w3.org/2000/svg" aria-label="Interactive Solution Venn Diagram">
							<defs>
								<path id="arc-top" d="M 145,165 A 152,152 0 0,1 455,165" fill="none" />
								<path id="arc-right" d="M 390,492 A 162,162 0 0,0 552,330" fill="none" />
								<path id="arc-left" d="M 48,330 A 162,162 0 0,0 210,492" fill="none" />

								<clipPath id="clip-circle-1">
									<circle cx="300" cy="165" r="135" />
								</clipPath>
								<clipPath id="clip-circle-2">
									<circle cx="390" cy="330" r="135" />
								</clipPath>
								<clipPath id="clip-circle-3">
									<circle cx="210" cy="330" r="135" />
								</clipPath>

								<filter id="vennGlow" x="-20%" y="-20%" width="140%" height="140%">
									<feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#a81c1c" flood-opacity="0.3" />
								</filter>
							</defs>

							<text class="venn-arc-label advisory-label" data-venn-id="advisory">
								<textPath href="#arc-top" startOffset="50%" text-anchor="middle">VALUE INNOVATION</textPath>
							</text>
							<text class="venn-arc-label consulting-label" data-venn-id="consulting">
								<textPath href="#arc-right" startOffset="50%" text-anchor="middle">OPERATIONAL EFFICIENCY</textPath>
							</text>
							<text class="venn-arc-label engineering-label" data-venn-id="engineering">
								<textPath href="#arc-left" startOffset="50%" text-anchor="middle">ENGINEERING EXCELLENCE</textPath>
							</text>

							<circle class="venn-circle venn-circle-advisory" data-venn-id="advisory" cx="300" cy="165" r="135" tabindex="0" role="button" aria-label="Solution Advisory" />
							<circle class="venn-circle venn-circle-consulting" data-venn-id="consulting" cx="390" cy="330" r="135" tabindex="0" role="button" aria-label="Functional Consulting" />
							<circle class="venn-circle venn-circle-engineering" data-venn-id="engineering" cx="210" cy="330" r="135" tabindex="0" role="button" aria-label="Software Engineering" />

							<g class="venn-overlap-group">
								<circle cx="210" cy="330" r="135" clip-path="url(#clip-circle-1)" class="venn-petal petal-3" />
								<circle cx="300" cy="165" r="135" clip-path="url(#clip-circle-3)" class="venn-petal petal-1" />
								<text x="245" y="235" class="venn-petal-text" transform="rotate(30, 240, 215)">Innovation</text>
							</g>

							<g class="venn-overlap-group">
								<circle cx="300" cy="165" r="135" clip-path="url(#clip-circle-2)" class="venn-petal petal-1" />
								<circle cx="390" cy="330" r="135" clip-path="url(#clip-circle-1)" class="venn-petal petal-2" />
								<text x="355" y="235" class="venn-petal-text" transform="rotate(-30, 360, 215)">Alignment</text>
							</g>

							<g class="venn-overlap-group">
								<circle cx="390" cy="330" r="135" clip-path="url(#clip-circle-3)" class="venn-petal petal-2" />
								<circle cx="210" cy="330" r="135" clip-path="url(#clip-circle-2)" class="venn-petal petal-3" />
								<text x="280" y="330" class="venn-petal-text" transform="rotate(-90, 300, 330)">Execution</text>
							</g>

							<g class="venn-center" aria-hidden="true">
								<image href="<?php echo esc_url( hosho_asset_url( 'homepage/hosho-white-logo.png' ) ); ?>" x="310" y="283" width="30" height="30" transform="translate(-25, -25)" />
							</g>

							<g class="venn-label-group advisory-label" data-venn-id="advisory">
								<text x="300" y="120" class="venn-circle-title">Solution</text>
								<text x="300" y="146" class="venn-circle-title">Advisory</text>
							</g>

							<g class="venn-label-group consulting-label" data-venn-id="consulting">
								<text x="430" y="330" class="venn-circle-title">Functional</text>
								<text x="430" y="356" class="venn-circle-title">Consulting</text>
							</g>

							<g class="venn-label-group engineering-label" data-venn-id="engineering">
								<text x="170" y="330" class="venn-circle-title">Software</text>
								<text x="170" y="356" class="venn-circle-title">Engineering</text>
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
					Every engagement sits somewhere on this
					<strong>spectrum</strong>, we'll help you find where
				</h2>
			</div>

			<!-- Process -->
			<div class="rapid-process motion">
				<div class="process-layer process-data">
					<span>DATA</span>
				</div>
				<div class="process-layer process-automation">
					<span>AUTOMATION</span>
				</div>
				<div class="process-layer process-ai">
					<span>ARTIFICIAL<br>INTELLIGENCE</span>
				</div>
				<div class="process-layer process-ux">
					<span>USER<br>EXPERIENCE</span>
				</div>
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
						<h3>Integrated AI Layer<</h3>
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
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/tech-partners/openai.jpg' ) ); ?>" alt="OpenAI"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/tech-partners/microsoft.jpg' ) ); ?>" alt="Microsoft"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/tech-partners/google-cloud.jpg' ) ); ?>" alt="Google Cloud"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/tech-partners/anthropic.jpg' ) ); ?>" alt="Anthropic"></div>
						<!-- duplicated for a seamless infinite loop -->
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/tech-partners/openai.jpg' ) ); ?>" alt="OpenAI"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/tech-partners/microsoft.jpg' ) ); ?>" alt="Microsoft"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/tech-partners/google-cloud.jpg' ) ); ?>" alt="Google Cloud"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/tech-partners/anthropic.jpg' ) ); ?>" alt="Anthropic"></div>
					</div>
				</div>
			</div>

			<!-- Business Partners -->
			<div class="partner-category-section">
				<span class="partner-category-title">Business Partners</span>
				<div class="partner-logos-wrap">
					<div class="partner-logos-track">
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/buss-partners/ingram.png' ) ); ?>" alt="Ingram Micro"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/buss-partners/sbf.png' ) ); ?>" alt="SBF"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/buss-partners/sg-tech.png' ) ); ?>" alt="SG Tech"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/buss-partners/pax8.png' ) ); ?>" alt="Pax8"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/buss-partners/crayon.png' ) ); ?>" alt="Partner"></div>
						<!-- duplicated for a seamless infinite loop -->
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/buss-partners/ingram.png' ) ); ?>" alt="Ingram Micro"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/buss-partners/sbf.png' ) ); ?>" alt="SBF"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/buss-partners/sg-tech.png' ) ); ?>" alt="SG Tech"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/buss-partners/pax8.png' ) ); ?>" alt="Pax8"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url('homepage/buss-partners/crayon.png' ) ); ?>" alt="Partner"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	FINAL CTA
	=========================================== -->

	<?php hosho_render_cta( '', 'Painless Transformation?', '', 'Speak to Us', 'page-consult-our-experts', 'homepage/cta.jpg' ); ?>

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
</script>

<?php
get_footer();

