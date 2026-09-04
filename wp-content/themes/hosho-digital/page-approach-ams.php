<?php
/**
 * Template Name: AMS
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content" class="ams-page">
<!-- =========================================================
	HERO
	========================================================= -->

	<?php
	hosho_render_hero(
		'BUILD ONCE. <br>IMPROVE CONTINUOUSLY.',
		'approach/ams/hero.jpg',
		array( 'class' => 'page-hero--company' )
	);
	?>

	<!-- =========================================================
	STATEMENT BANNER
	========================================================= -->

	<section class="ams-statement">
		<div class="container motion">
			<h3>
				Applications aren't static. Support can't be either.
			</h3>
			<p>
				An AI-powered system needs more than a maintenance contract: models drift, data pipelines break, and dependencies update weekly. AMS is our dedicated team watching that complexity so your internal team doesn't have to.
			</p>
		</div>
	</section>

	<!-- =========================================================
	CONTINUITY FRAMEWORK
	========================================================= -->

	<section class="continuity-section">
		<div class="container motion">
			<div class="continuity-grid">
				<div class="continuity-left">
					<h3>
						Beyond Service Level Agreements:<br>
						A Strategic Lifecycle
					</h3>
					<p>
						Application Management Services (AMS) at HOSHŌ is more
						than maintenance. It is a continuous operational
						partnership designed to mitigate risk, optimize
						performance, and drive architectural innovation in
						real-time. We don't just keep the lights on; we
						modernize the grid while it's running.
					</p>

					<div class="continuity-item">
						<div class="icon-box"><span class="icon-svg" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg></span></div>
						<div>
							<h4>Implementation</h4>
							<p>The rigorous build and validation phase.</p>
						</div>
					</div>

					<div class="continuity-item">
						<div class="icon-box"><span class="icon-svg" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 19.5a10 10 0 1 1 15 0"/><path d="M8 16a6 6 0 1 1 8 0"/><circle cx="12" cy="18" r="1"/></svg></span></div>
						<div>
							<h4>Go Live</h4>
							<p>Transitioning from project mode to live operations.</p>
						</div>
					</div>

					<div class="continuity-item">
						<div class="icon-box"><span class="icon-svg" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 12.5 4 9.5a3 3 0 0 1 4.2-4.2L12 9l3.8-3.7A3 3 0 1 1 20 9.5l-3 3"/><path d="M9 14l2 2 7-7"/></svg></span></div>
						<div>
							<h4>Continuous Partnership</h4>
							<p>Our long-term commitment to your excellence.</p>
						</div>
					</div>
				</div>

				<div class="continuity-right">
					<img src="<?php echo esc_url( hosho_asset_url('approach/ams/cycle.png' ) ); ?>" alt="Abstract decorative graphic of layered discs">
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	WE STAY WITH YOU BEYOND GO-LIVE
	========================================================= -->

	<section class="stay-section">
		<div class="container motion">
			<h2>We Stay With You Beyond Go-Live</h2>
			<p>Our roadmap doesn't end at deployment. We engineered for the infinite horizon.</p>

			<div class="timeline-row" style="display: flex; gap: 15px; align-items: stretch; overflow-x: auto; padding: 20px 0;">
				<div class="timeline-step">
					<h4>Discovery</h4>
					<p>Understanding architectural debt and future goals.</p>
				</div>
				<div class="timeline-arrow" aria-hidden="true" style="color: var(--red); display: flex; align-items: center;">
					<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#E21C15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
				</div>
				<div class="timeline-step">
					<h4>Development</h4>
					<p>Agile sprints with quality-first engineering.</p>
				</div>
				<div class="timeline-arrow" aria-hidden="true" style="color: var(--red); display: flex; align-items: center;">
					<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#E21C15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
				</div>
				<div class="timeline-step">
					<h4>Deployment</h4>
					<p>Seamless CI/CD orchestration and validation.</p>
				</div>
				<div class="timeline-arrow" aria-hidden="true" style="color: var(--red); display: flex; align-items: center;">
					<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#E21C15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
				</div>
				<div class="timeline-step">
					<h4>Optimization</h4>
					<p>Fine-tuning for scale and resource efficiency.</p>
				</div>
				<div class="timeline-arrow" aria-hidden="true" style="color: var(--red); display: flex; align-items: center;">
					<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#E21C15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
				</div>
				<div class="timeline-step">
					<h4>Support</h4>
					<p>24/7 dedicated engineering expertise.</p>
				</div>
				<div class="timeline-arrow" aria-hidden="true" style="color: var(--red); display: flex; align-items: center;">
					<svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#E21C15" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
				</div>
				<div class="timeline-step">
					<h4>Innovation</h4>
					<p>AI-driven updates and next-gen feature sets.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	THE AMS ENGINE
	========================================================= -->

	<section class="engine-section">
		<div class="container motion">
			<div class="engine-header">
				<h2>Design for The Modern Enterprise</h2>
				<p>
					Where the framework above shows the three phases of an
					engagement, this is the operating rhythm we run
					continuously once Continuous Partnership begins.
				</p>
			</div>

			<div class="engine-chevrons">
				<div class="engine-chevron" style="background:#c31f24;">Transition</div>
				<div class="engine-chevron" style="background:#b81c21;">Knowledge</div>
				<div class="engine-chevron" style="background:#a8181d;">Transfer</div>
				<div class="engine-chevron" style="background:#96151a;">Monitor</div>
				<div class="engine-chevron" style="background:#831116;">Support</div>
				<div class="engine-chevron" style="background:#6f0e12;">Maintain</div>
				<div class="engine-chevron" style="background:#5a0a0d;">Improve</div>
			</div>

			<p class="engine-note">
				Everything the engine does rolls up into four capability
				groups, each one staffed by the specific competencies covered
				in the Core Competencies section below.
			</p>

			<div class="capability-grid">
				<div class="capability-card">
					<div class="capability-card__top">
						<div class="cap-icon"><span class="icon-svg" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m7 14 3-3 3 2 5-6"/></svg></span></div>
						<h4>Application  <br> Monitoring</h4>
					</div>
					<p>
						Monitor for seamless operations, analysing performance
						and availability in real-time.
					</p>
				</div>
				<div class="capability-card">
					<div class="capability-card__top">
						<div class="cap-icon"><span class="icon-svg" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg></span></div>
						<h4>Application  <br> Management</h4>
					</div>
					<p>
						Maximizing efficiency through continuous application
						performance optimization and resource scaling.
					</p>
				</div>
				<div class="capability-card">
					<div class="capability-card__top">
						<div class="cap-icon"><span class="icon-svg" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="M2 12h20"/><path d="M7 7l10 10"/><path d="M17 7 7 17"/></svg></span></div>
						<h4>Maintanance <br> &amp; Support</h4>
					</div>
					<p>
						Ensuring smooth functional availability via proactive
						updates, bug fixes and technical expert support.
					</p>
				</div>
				<div class="capability-card">
					<div class="capability-card__top">
						<div class="cap-icon"><span class="icon-svg" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span></div>
						<h4>Security <br> &amp; Compliance</h4>
					</div>
					<p>
						Implementing pertinent measures for data protection,
						threat mitigation and regulatory adherence.
					</p>
				</div>
			</div>

			<div class="stats-bar">
				<div class="stats-row">
					<div class="stat">
						<span class="label">Efficient</span>
						<span class="tag">Agile</span>
					</div>
					<div class="stat">
						<span class="label">Scalable</span>
						<span class="tag">Reliable</span>
					</div>
					<div class="stat">
						<span class="label">Predictable</span>
						<span class="tag">Frictionless</span>
					</div>
					<div class="stat">
						<span class="label">Resilient</span>
						<span class="tag">Compliant</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	QUOTE
	========================================================= -->

	<?php hosho_render_quote( '<strong>Continuous improvement <br>is better than delayed <br>perfection.</strong>', 'Mark Twain', 'approach/ams/twain.png' ); ?>

	<!-- =========================================================
	CORE COMPETENCIES
	========================================================= -->

	<section class="competencies-section">
		<div class="container motion">
			<div class="competencies-header">
				<h2>Core Competencies</h2>
			</div>

			<div class="competencies-grid">
				<div class="competency-card">
					<h4><span class="comp-icon"><span class="icon-svg" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><rect x="7" y="13" width="3" height="5"/><rect x="12" y="9" width="3" height="9"/><rect x="17" y="5" width="3" height="13"/></svg></span></span>Monitoring</h4>
					<p>
						Real-time observability and predictive analytics to
						identify bottlenecks before they impact your users.
					</p>
				</div>
				<div class="competency-card">
					<h4><span class="comp-icon"><span class="icon-svg" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg></span></span>Maintenance</h4>
					<p>
						Continuous technical health checks, dependency
						updates, and platform performance tuning.
					</p>
				</div>
				<div class="competency-card">
					<h4><span class="comp-icon"><span class="icon-svg" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 9h6"/><path d="M12 3v4"/><path d="M7 7 5 5"/><path d="M17 7 19 5"/><path d="M5 12h14"/><path d="M9 20a3 3 0 0 0 6 0"/><path d="M7 12a5 5 0 1 1 10 0v1a5 5 0 1 1-10 0z"/></svg></span></span>Bug Fixing</h4>
					<p>
						Rapid identification and resolution of regressions
						with a zero-backlog philosophy for critical issues.
					</p>
				</div>
				<div class="competency-card">
					<h4><span class="comp-icon"><span class="icon-svg" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14a8 8 0 1 1 16 0"/><path d="M4 14v4a2 2 0 0 0 2 2h2v-6H4Z"/><path d="M20 14v4a2 2 0 0 1-2 2h-2v-6h4Z"/></svg></span></span>Technical Support</h4>
					<p>
						Tier 3 engineering support embedded within your team
						to resolve complex architectural challenges.
					</p>
				</div>
				<div class="competency-card">
					<h4><span class="comp-icon"><span class="icon-svg" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.5 9.5 8 11 4.5-1.5 8-6 8-11V5l-8-3Z"/></svg></span></span>Security</h4>
					<p>
						Ongoing threat modeling, vulnerability patching, and
						compliance monitoring (SOC2, HIPAA, GDPR).
					</p>
				</div>
				<div class="competency-card">
					<h4><span class="comp-icon"><span class="icon-svg" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a7.8 7.8 0 0 0 .1-6l2-1.2-2-3.4-2.3.9a8 8 0 0 0-5.2-3L11.6 0h-3.2l-.4 2.3a8 8 0 0 0-5.2 3L.5 4.4l-2 3.4 2 1.2a7.8 7.8 0 0 0 .1 6l-2 1.2 2 3.4 2.3-.9a8 8 0 0 0 5.2 3l.4 2.3h3.2l.4-2.3a8 8 0 0 0 5.2-3l2.3.9 2-3.4Z"/></svg></span></span>Incident Response</h4>
					<p>
						Defined RTO/RPO metrics and a battle-tested protocol
						for system-wide failure recovery.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	STATEMENT BANNER 2
	========================================================= -->

	<section class="ams-statement">
		<div class="container motion">
			<h3>
				AI systems evolve. Models drift. Data changes. Business needs change.
			</h3>
			<p>
				HOSHŌ stays with you to monitor, maintain, optimise and continuously improve what we've built.
			</p>
			<div class="ams-animated-text">
				<span>Build.</span>
				<span>Run.</span>
				<span>Improve.</span>
				<span>Repeat.</span>
			</div>
		</div>
	</section>

	<!-- =========================================================
	THE HOSHO ADVANTAGE
	========================================================= -->

	<section class="advantage-section">
		<div class="container motion">
			<div class="competencies-header">
				<h2>HOSHŌ Advantage</h2>
			</div>

			<div class="advantage-grid">
				<div class="advantage-item">
					<div class="adv-icon" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<circle cx="12" cy="12" r="10"/>
							<path d="M8 12l3 3 5-6"/>
						</svg>
					</div>
					<h4>Proactive</h4>
					<p>
						We solve problems before they reach your dashboard.
						Our AI-driven anomaly detection works 24/7.
					</p>
				</div>
				<div class="advantage-item">
					<div class="adv-icon" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M12 2l8 4v6c0 5-3.5 9.5-8 10-4.5-.5-8-5-8-10V6l8-4z"/>
						</svg>
					</div>
					<h4>Reliable</h4>
					<p>
						Our infrastructure is engineered
						for resilience and high-availability.
					</p>
				</div>
				<div class="advantage-item">
					<div class="adv-icon" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M12 22s8-4 8-10V6l-8-3-8 3v6c0 6 8 10 8 10z"/>
							<path d="M9 12l2 2 4-4"/>
						</svg>
					</div>
					<h4>Secure</h4>
					<p>
						Security is not an afterthought. It's woven into
						every ticket, update, and architectural decision.
					</p>
				</div>
				<div class="advantage-item">
					<div class="adv-icon" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M4 4h6v6H4z"/>
							<path d="M14 4h6v6h-6z"/>
							<path d="M4 14h6v6H4z"/>
							<path d="M14 14h6v6h-6z"/>
						</svg>
					</div>
					<h4>Scalable</h4>
					<p>
						Our AMS frameworks grow with you. We handle traffic
						spikes and market expansions without friction.
					</p>
				</div>
				<div class="advantage-item">
					<div class="adv-icon" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M13 2L4 14h6l-1 8 9-12h-6z"/>
						</svg>
					</div>
					<h4>Responsive</h4>
					<p>
						No tickets in the void. Direct Slack/Teams access to
						lead engineers who know your stack intimately.
					</p>
				</div>
				<div class="advantage-item">
					<div class="adv-icon" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M12 3c4.4 0 8 3.6 8 8 0 5.5-8 10-8 10s-8-4.5-8-10c0-4.4 3.6-8 8-8z"/>
							<path d="M9.5 11.5 11.5 13.5 14.5 9.5"/>
						</svg>
					</div>
					<h4>Partnership</h4>
					<p>
						We align our KPIs with your business outcomes. Your
						success is our primary delivery metric.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	FINAL CTA
	========================================================= -->

	<?php hosho_render_cta( '', '<strong>Go Live. Then Get Better.</strong>', 'Keep your AI working, improving and creating value.', 'Build Your Advantage', home_url( '/contact' ), 'approach/ams/cta.jpg' ); ?>

</main>
<?php
get_footer();

