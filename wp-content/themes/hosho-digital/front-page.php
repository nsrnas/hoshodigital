<?php
/**
 * Homepage template.
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content" class="home-page">
<!-- =========================================================
	HERO SECTION
	========================================================= -->

	<section class="hero">
		<div class="hero-image">
			<img src="<?php echo esc_url( hosho_asset_url('homepage/hero.jpg' ) ); ?>" alt="Abstract red digital core visual">
		</div>
		<div class="hero-overlay"></div>
		<div class="container">
			<div class="hero-content">
				<h1>
					Lead with AI —<br>
					Or Get Left<br>
					Behind.
				</h1>
				<div class="hero-buttons">
					<a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-red">
						Contact Us
					</a>
					<a href="#approach" class="btn-outline">
						Explore Our Approach
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	YOUR SUCCESS. OUR GUARANTEE.
	========================================================= -->

	<section class="success-guarantee">
		<div class="container">

			<div class="success-card motion">
				<h2>
					Your Success<br>
					Our Guarantee
				</h2>
				<img class="success-seal" src="<?php echo esc_url( hosho_asset_url('homepage/stamp.png' ) ); ?>" alt="Guarantee seal">
			</div>

			<div class="guarantee-body">
				<div class="guarantee-left motion">
					<h3>
						Our<br>
						Guarantee
					</h3>
					<span class="guarantee-underline"></span>
				</div>

				<div class="pillars-grid">
					<div class="pillar-card outcome">
						<div class="pillar-label">Outcome</div>
						<h4>Precision Value</h4>
						<p>
							Measurable enterprise value through audited
							operational efficiency and radical innovation.
						</p>
					</div>

					<div class="pillar-card capability">
						<div class="pillar-label">Capability</div>
						<h4>Empowered Teams</h4>
						<p>
							Knowledge transfer that ensures your leadership
							can master the AI frontier independently.
						</p>
					</div>

					<div class="pillar-card integrity">
						<div class="pillar-label">Integrity</div>
						<h4>Principled Partnership</h4>
						<p>
							Strategic alliances built on radical transparency
							and aligned long-term business goals.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	THE INTELLIGENT DIGITAL CORE
	========================================================= -->

	<section class="digital-core" id="approach">
		<div class="container">
			<div class="digital-core-heading motion">
				<span class="small-title">
					Our Approach
				</span>
				<h2>
					The Intelligent Digital Core
				</h2>
				<p>
					We transform disconnected systems into one Intelligent Digital
					Core, connecting data, applications, automation, and AI so your
					business can continuously evolve and scale.
				</p>
			</div>

			<div class="digital-core-process">
				<div class="core-step">
					<div class="step-label">01 / Understanding</div>
					<h3>Deep Discovery</h3>
					<p>
						We begin by auditing your existing data architecture and
						identifying the high-impact nodes where intelligence can
						drive immediate operational leverage.
					</p>
				</div>

				<div class="core-step">
					<div class="step-label">02 / Architecting</div>
					<h3>The Digital Core</h3>
					<p>
						We build a unified, self-evolving infrastructure that
						connects disparate data streams into a single,
						high-fidelity intelligence loop.
					</p>
				</div>

				<div class="core-step">
					<div class="step-label">03 / Scaling</div>
					<h3>Exponential Growth</h3>
					<p>
						We deploy adaptive AI solutions that don't just automate
						tasks, but autonomously optimize for business outcomes
						as your data grows.
					</p>
				</div>
			</div>

			<div class="motion" style="text-align:center;">
				<a href="<?php echo esc_url(home_url('/approach')); ?>" class="btn-outline-dark">
					Find Out More
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
				<span class="small-title">
					The Cognitive Shift
				</span>
				<h2 class="section-title">
					Redefining Enterprise Software.
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
		</div>
	</section>

	<!-- =========================================================
	FROM STRATEGY TO CONTINUOUS VALUE
	========================================================= -->

	<section class="services-section">
		<div class="container">
			<div class="motion">
				<h2 class="strategy-heading">
					From Strategy to Continuous Value
				</h2>
				<p class="strategy-desc">
					Unlike traditional software projects that end at delivery,
					Solution as a Service combines <strong>advisory</strong>,
					<strong>consulting</strong>, and <strong>engineering</strong>
					into one continuous partnership that evolves with your business.
				</p>
			</div>

			<div class="services-grid">
				<!-- CARD 1 -->
				<div class="service-card advisory">
					<div class="service-card-head">
						<span class="service-icon">💡</span>
						<h3>Solution Advisory</h3>
					</div>
					<div class="service-category">Value Innovation</div>
					<p class="service-desc">
						Help organizations identify opportunities, define
						business priorities, and design AI-driven solutions
						aligned with strategic goals.
					</p>
					<span class="service-divider"></span>
					<div class="capabilities-label">Capabilities</div>
					<div class="capability-tags">
						<span class="capability-tag">AI Strategy</span>
						<span class="capability-tag">Business Re-engineering</span>
						<span class="capability-tag">Low-Code</span>
					</div>
				</div>

				<!-- CARD 2 -->
				<div class="service-card consulting">
					<div class="service-card-head">
						<span class="service-icon">🧩</span>
						<h3>Functional Consulting</h3>
					</div>
					<div class="service-category">Operational Efficiency</div>
					<p class="service-desc">
						Bridge business strategy with execution through
						process optimization, governance, and organizational
						change.
					</p>
					<span class="service-divider"></span>
					<div class="capabilities-label">Capabilities</div>
					<div class="capability-tags">
						<span class="capability-tag">Process Design</span>
						<span class="capability-tag">Governance</span>
						<span class="capability-tag">Change Mgmt</span>
					</div>
				</div>

				<!-- CARD 3 -->
				<div class="service-card engineering">
					<div class="service-card-head">
						<span class="service-icon">&lt;/&gt;</span>
						<h3>Software Engineering</h3>
					</div>
					<div class="service-category">Engineering Excellence</div>
					<p class="service-desc">
						Design, build, integrate, and continuously optimize
						enterprise-grade digital solutions powered by AI.
					</p>
					<span class="service-divider"></span>
					<div class="capabilities-label">Capabilities</div>
					<div class="capability-tags">
						<span class="capability-tag">Cloud Engineering</span>
						<span class="capability-tag">DevOps</span>
						<span class="capability-tag">Custom Dev</span>
					</div>
				</div>
			</div>

			<div class="business-value-box motion">
				<span class="small-title white">
					Convergence of Disciplines
				</span>
				<h2>
					Continuous Business Value
				</h2>
				<div class="value-items">
					<div class="value-item">
						<span></span>
						End-to-End Delivery
					</div>
					<div class="value-item">
						<span></span>
						Industry Accelerators
					</div>
					<div class="value-item">
						<span></span>
						Risk Mitigation
					</div>
					<div class="value-item">
						<span></span>
						User Satisfaction
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
				<span class="small-title">
					Rapid to Be Spoke
				</span>
				<h2>
					Every engagement sits somewhere on this
					<strong>spectrum</strong>, we'll help you find where.
				</h2>
			</div>

			<!-- Process -->
			<div class="rapid-process motion">
				<div class="process-item">
					Data
				</div>
				<div class="process-item">
					Automation
				</div>
				<div class="process-item">
					AI
				</div>
				<div class="process-item">
					UX
				</div>
			</div>

			<!-- Cards -->
			<div class="rapid-grid">
				<article class="rapid-card">
					<div class="rapid-card-head">
						<span class="rapid-icon">🚀</span>
						<h3>Quick-Deploy AI</h3>
					</div>
					<p class="rapid-desc">
						Rapid integration of ready-to-use AI modules to solve
						immediate business bottlenecks.
					</p>
					<div class="rapid-usecases-label">Ideal Use Cases</div>
					<ul>
						<li>Customer Support Bots</li>
						<li>Automated Data Entry</li>
					</ul>
				</article>

				<article class="rapid-card featured">
					<div class="rapid-card-head">
						<span class="rapid-icon">🧬</span>
						<h3>Integrated AI Layer</h3>
					</div>
					<p class="rapid-desc">
						A middleware approach that connects existing legacy
						systems with a unified intelligent orchestration layer.
					</p>
					<div class="rapid-usecases-label">Ideal Use Cases</div>
					<ul>
						<li>ERP/CRM Intelligence</li>
						<li>Cross-Dept Workflows</li>
					</ul>
				</article>

				<article class="rapid-card">
					<div class="rapid-card-head">
						<span class="rapid-icon">📐</span>
						<h3>Bespoke AI Platform</h3>
					</div>
					<p class="rapid-desc">
						Custom-engineered AI infrastructure designed from the
						ground up to redefine your competitive advantage.
					</p>
					<div class="rapid-usecases-label">Ideal Use Cases</div>
					<ul>
						<li>Proprietary Models</li>
						<li>Industry-Specific Platforms</li>
					</ul>
				</article>
			</div>
		</div>
	</section>

	<!-- ==========================================
	AI BUDGET
	=========================================== -->

	<section class="ai-budget">
		<div class="container">
			<div class="budget-header motion">
				<h2>
					Treat your AI spend like a budget, not a blank check
				</h2>
				<p>
					AI costs scale with usage in ways traditional software
					licenses never did. We build in the controls to keep that
					spend predictable.
				</p>
			</div>

			<div class="budget-grid">
				<article class="budget-card">
					<div class="budget-icon">📦</div>
					<h3>Intelligent Token Management</h3>
					<p>
						Advanced prompt engineering to minimize payload while
						maximizing output accuracy.
					</p>
				</article>

				<article class="budget-card">
					<div class="budget-icon">📈</div>
					<h3>Cost Optimization</h3>
					<p>
						Dynamic routing to appropriate models based on task
						complexity and cost-efficiency.
					</p>
				</article>

				<article class="budget-card">
					<div class="budget-icon">🎚️</div>
					<h3>Usage Optimization</h3>
					<p>
						Real-time monitoring of AI consumption with granular
						control over organizational access.
					</p>
				</article>

				<article class="budget-card">
					<div class="budget-icon">🛡️</div>
					<h3>Responsible AI Deployment</h3>
					<p>
						Strict governance frameworks ensuring compliance and
						ethical AI utilization.
					</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ==========================================
	Solution Growth
	=========================================== -->

	<section class="solution-growth">
		<div class="container">
			<div class="growth-header motion">
				<h2>SOLUTIONS GROWTH</h2>
				<p>
					"Solutions" = distinct systems we've taken from design to
					live production
				</p>
			</div>
		</div>

		<div class="growth-timeline-wrap">
			<div class="growth-full-bleed">
				<div class="growth-riser r1"></div>
				<div class="growth-riser r2"></div>
				<div class="growth-box b1"><h3>8 Solutions</h3></div>
				<div class="growth-box b2"><h3>15 Solutions</h3></div>
				<div class="growth-box b3"><h3>30+ Solutions</h3></div>
			</div>

			<div class="growth-full-bleed growth-years-row">
				<div class="growth-year">2023 — 2024</div>
				<div class="growth-year">2025</div>
				<div class="growth-year">2026</div>
			</div>

			<div class="growth-divider d1"></div>
			<div class="growth-divider d2"></div>
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

	<section class="final-cta">
		<div class="cta-overlay"></div>
		<div class="container">
			<div class="cta-content motion">
				<span class="small-title white">
					Redefine Your Architecture
				</span>
				<h2>
					Ready to Build Your
					Intelligent Digital Core?
				</h2>
				<p>
					Discuss where you are in your AI journey and determine the
					most suitable path—from rapid deployment to fully bespoke
					enterprise AI platforms.
				</p>
				<a href="page-consult-our-experts" class="btn-red">
					Consult Our Experts
				</a>
			</div>
		</div>
	</section>

</main>
<?php
get_footer();