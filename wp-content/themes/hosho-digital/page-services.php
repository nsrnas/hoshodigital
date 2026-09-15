<?php
/**
 * Template Name: Services
 */

get_header();
?>

<main id="main-content" class="services-hub-page">

	<!-- =========================================================
	HERO
	========================================================= -->
	<?php hosho_render_hero( 'SERVICES BUILT <br>TO DELIVER', 'services/hero-main.jpg', array( 'class' => 'page-hero--services' ) ); ?>

	<!-- =========================================================
	INTRO
	========================================================= -->
	<section class="section svc-intro">
		<div class="shell">
			<div class="intro-grid motion">
				<div>
					<span class="small-title">What We Do</span>
					<h2>Two Services. One Standard of Delivery.</h2>
				</div>
				<div class="body-copy">
					<p>
						Strategy and diagrams don't move a business forward,
						deployed, adopted systems do. Our services take you
						from where you are today to a measurably better
						state, whether that means connecting AI to how your
						business actually runs, or finally getting the value
						you're already paying for out of your ERP.
					</p>
					<p>
						Every engagement is anchored to explicit business
						outcomes and delivered by the same team from
						discovery through go-live and beyond.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	SERVICES GRID
	========================================================= -->
	<section class="section section-mist svc-grid-section">
		<div class="shell">
			<div class="svc-grid">

				<article class="svc-card motion">
					<span class="small-title">Service</span>
					<h3>AI Transformation</h3>
					<p>
						AI creates value when it's connected to how your
						business actually works. We help you identify
						opportunities, connect data and systems, automate
						workflows, and build AI capabilities that continuously
						evolve with the business.
					</p>
					<ul class="capability-tags">
						<li class="capability-tag">Strategy &amp; Roadmap</li>
						<li class="capability-tag">Data &amp; Systems Integration</li>
						<li class="capability-tag">Agentic Workflows</li>
						<li class="capability-tag">Responsible AI</li>
					</ul>
					<a href="<?php echo esc_url( hosho_page_url( 'ai-transformation' ) ); ?>" class="button">
						Explore AI Transformation
						<span class="button-arrow"></span>
					</a>
				</article>

				<article class="svc-card motion">
					<span class="small-title">Service</span>
					<h3>ERP Optimization</h3>
					<p>
						Most organizations use less than 40% of the ERP
						they're already paying for. We audit your existing
						Business Central environment, eliminate technical
						debt, embed AI directly into your workflows, and
						build custom extensions that fit your industry,
						so your ERP finally earns its keep.
					</p>
					<ul class="capability-tags">
						<li class="capability-tag">ERP Audit &amp; Optimization</li>
						<li class="capability-tag">AI Integration</li>
						<li class="capability-tag">Custom Extensions</li>
						<li class="capability-tag">Managed Support</li>
					</ul>
					<a href="<?php echo esc_url( hosho_page_url( 'erp-optimization' ) ); ?>" class="button">
						Explore ERP Optimization
						<span class="button-arrow"></span>
					</a>
				</article>

			</div>
		</div>
	</section>

    <!-- =========================================================
	QUOTE
	========================================================= -->
	<?php hosho_render_quote( '<strong>The value of an idea <br>lies in the using <br>of it.</strong>', 'Thomas Edison', 'services\thomas-edison.png', 'quote-band--standard quote-band--red-soft' ); ?>

	<!-- =========================================================
	HOW WE DELIVER
	========================================================= -->
	<section class="section">
		<div class="shell">
			<div class="strategy-header-box motion" style="margin-bottom: 50px;">
				<span class="small-title" style="display:block; text-align:center;">How We Work</span>
				<h2 class="section-title" style="font-size: clamp(30px, 3.6vw, 44px);">Delivery, Not Just Design</h2>
			</div>

			<div class="capability-grid">
				<div class="capability-card motion">
					<div class="capability-card__top">
						<span class="cap-icon">
							<svg width="30" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
						</span>
						<h4>Outcome-Anchored</h4>
					</div>
					<p>Every engagement is tied to explicit KPIs and provable commercial value before capital is deployed.</p>
				</div>

				<div class="capability-card motion">
					<div class="capability-card__top">
						<span class="cap-icon">
							<svg width="30" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="10" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
						</span>
						<h4>Gated Governance</h4>
					</div>
					<p>Phase-gate milestones with embedded InfoSec and compliance checks mitigate risk before engineering begins.</p>
				</div>

				<div class="capability-card motion">
					<div class="capability-card__top">
						<span class="cap-icon">
							<svg width="30" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18 17V9M13 17V5M8 17v-3"/></svg>
						</span>
						<h4>Legacy-Preserving</h4>
					</div>
					<p>We build on top of your existing stack instead of forcing high-risk rip-and-replace projects.</p>
				</div>

				<div class="capability-card motion">
					<div class="capability-card__top">
						<span class="cap-icon">
							<svg width="30" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
						</span>
						<h4>Continuously Improved</h4>
					</div>
					<p>24/7 telemetry and drift guardrails mean the system gets better over time instead of decaying.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	FINAL CTA
	========================================================= -->
	<?php hosho_render_cta( '', '<strong>Ready to Put a Service to Work?</strong>', '', 'Talk to Our Team', hosho_page_url( 'company' ), 'services/cta-main.jpg' ); ?>

</main>

<?php
get_footer();