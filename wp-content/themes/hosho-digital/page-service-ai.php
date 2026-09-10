<?php
/**
 * Template Name: AI Transformation
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content" class="ai-transformation-page">

	<!-- =========================================================
	HERO
	========================================================= -->

	<?php
	hosho_render_hero(
		'Transform How Business Evolves',
		'services/hero-ai.jpg',
		array( 'class' => 'page-hero--company' )
	);
	?>

	<section class="transformation-brief">
		<div class="container">
			<div class="transformation-brief__frame motion">
				<p class="transformation-brief__tag">AI Transformation</p>
				<div class="transformation-brief__copy">
					<p>
						AI creates value when it is connected to the way your
						business actually works. HOSHŌ helps organizations
						identify opportunities, connect data and systems,
						automate workflows, orchestrate intelligent solutions,
						and build AI capabilities that continuously evolve
						with the business.
					</p>
				</div>
			</div>
		</div>
	</section>

    <!-- =========================================================
	QUOTE
	========================================================= -->

	<?php hosho_render_quote(
		'<strong>“Artificial intelligence will be<br> the most transformative technology<br> of the 21st century.”</strong>',
		'Jensen Huang',
		'jensen-huang-editorial-v2.png',
		'quote-band--standard quote-band--red-soft quote-band--masayoshi'
	); ?>

	<!-- =========================================================
	05 — WHY AI TRANSFORMATION?
	========================================================= -->

	<section id="why-ai" class="beyond-the-model">
		<div class="container">
			<h2 class="tx-headline motion">AI transformation happens beyond the model.</h2>

			<div class="beyond-the-model__facets motion">
				<div class="facet" data-facet="business">
					<span class="facet__marker">Business</span>
					<p>Define priorities and identify where AI creates meaningful value.</p>
				</div>
				<div class="facet" data-facet="data">
					<span class="facet__marker">Data</span>
					<p>Build a trusted foundation for intelligent decision-making.</p>
				</div>
				<div class="facet" data-facet="systems">
					<span class="facet__marker">Systems</span>
					<p>Connect existing enterprise systems, applications, and APIs.</p>
				</div>
				<div class="facet" data-facet="automation">
					<span class="facet__marker">Automation</span>
					<p>Transform repetitive processes into AI-optimized workflows.</p>
				</div>
				<div class="facet" data-facet="people">
					<span class="facet__marker">People</span>
					<p>Empower employees and redesign experiences around higher-value work.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	06 — THREE TRANSFORMATION FRONTIERS
	========================================================= -->

	<section id="transformation" class="inside-out">
		<div class="container">
			<p class="tx-kicker motion">AI-Powered Enterprise</p>
			<h2 class="tx-headline motion">Transform the business from the inside out.</h2>

			<div class="inside-out__panels">
				<article class="frontier-panel motion">
					<h3>Intelligent Operations</h3>
					<p>
						Harness AI, automation, and connected enterprise
						systems to streamline operations, improve efficiency,
						and enable agile, data-driven decision-making across
						the business.
					</p>
				</article>

				<article class="frontier-panel motion">
					<h3>Retain and Delight Customers</h3>
					<p>
						Create AI-powered, personalized experiences that
						anticipate customer needs, simplify interactions, and
						build stronger, long-lasting relationships across
						every touchpoint.
					</p>
				</article>

				<article class="frontier-panel motion">
					<h3>Empower an Intelligent Workforce</h3>
					<p>
						Equip employees with AI-powered tools, automation, and
						intelligent applications that simplify work, enhance
						productivity, and enable people to focus on
						higher-value outcomes.
					</p>
				</article>
			</div>
		</div>
	</section>

	<!-- =========================================================
	09 — ORCHESTRATION ENGINE
	========================================================= -->

	<section id="orchestration" class="act-on-intelligence">
		<div class="container">
			<h2 class="tx-headline motion">Intelligence becomes powerful when it can act.</h2>

			<div class="act-on-intelligence__engines motion">
				<article class="opt-gap-card engine-panel">
					<div class="opt-gap-card__top">
						<div class="icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="6" height="6" rx="1"/><rect x="16" y="3" width="6" height="6" rx="1"/><rect x="9" y="15" width="6" height="6" rx="1"/><path d="M5 9v3a2 2 0 0 0 2 2h5m7-5v3a2 2 0 0 1-2 2h-5"/></svg>
						</div>
						<h3>Orchestration Engine</h3>
					</div>
					<ul>Task decomposition</ul>
					<ul>Parallel execution</ul>
					<ul>Retry / fallback</ul>
					<ul>Prompt pipelines</ul>
					<ul>Planning strategies</ul>
				</article>

				<article class="opt-gap-card engine-panel">
					<div class="opt-gap-card__top">
						<div class="icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 2v4m0 12v4M2 12h4m12 0h4m-3.17-6.83-2.83 2.83m-8 8-2.83 2.83m0-13.66 2.83 2.83m8 8 2.83 2.83"/></svg>
						</div>
						<h3>Reasoning Engine</h3>
					</div>
					<ul>Planning</ul>
                    <ul>Validation</ul>
                    <ul>Structured outputs</ul>  
                    <ul>Decision logic</ul>
				</article>

				<article class="opt-gap-card engine-panel">
					<div class="opt-gap-card__top">
						<div class="icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
						</div>
						<h3>Tool &amp; Integration Hub</h3>
					</div>
					<ul>APIs</ul>
                    <ul>Internal systems</ul>
					<ul>External SaaS</ul>
					<ul>Function calling</ul>
					<ul>Workflow engines</ul>
				</article>
			</div>
		</div>
	</section>

	<!-- =========================================================
	12 — RESPONSIBLE AI
	========================================================= -->

	<section id="responsible-ai" class="trusted-by-design">
		<div class="container">
			<h2 class="tx-headline motion">AI that is powerful because it is trusted.</h2>

			<div class="trusted-by-design__pillars motion">
				<article class="opt-gap-card governance-pillar">
					<div class="opt-gap-card__top">
						<div class="icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
						</div>
						<h3>Responsible AI</h3>
					</div>
					<ul>Bias detection &amp; mitigation</ul>
                    <ul>Hallucination monitoring</ul>
                    <ul>Output validation</ul>
                    <ul>Safety checks</ul>
                    <ul>Fairness &amp; transparency</ul>
				</article>

				<article class="opt-gap-card governance-pillar">
					<div class="opt-gap-card__top">
						<div class="icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
						</div>
						<h3>Data Governance</h3>
					</div>
					<ul>Data lineage</ul>
                    <ul>Data catalog</ul>
                    <ul>PII detection &amp; masking</ul>
                    <ul>Data quality</ul>
                    <ul>Retention &amp; deletion policies</ul>
				</article>

				<article class="opt-gap-card governance-pillar">
					<div class="opt-gap-card__top">
						<div class="icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
						</div>
						<h3>Model Management</h3>
					</div>
					<ul>Model versioning</ul>
                    <ul>Model registry</ul>
                    <ul>A/B testing</ul>
                    <ul>Canary releases</ul>
                    <ul>Fallback models</ul>
                    <ul>Performance evaluation</ul>
				</article>

				<article class="opt-gap-card governance-pillar">
					<div class="opt-gap-card__top">
						<div class="icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
						</div>
						<h3>Security &amp; Access</h3>
					</div>
					<ul>Identity &amp; access management</ul>
                    <ul>SSO</ul>
                    <ul>OAuth</ul>
                    <ul>RBAC / ABAC</ul>
                    <ul>Encryption in transit and at rest</ul>
				</article>

				<article class="opt-gap-card governance-pillar">
					<div class="opt-gap-card__top">
						<div class="icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
						</div>
						<h3>Compliance &amp; Audit</h3>
					</div>
					<ul>Regulatory compliance</ul>
                    <ul>Audit trails</ul>
                    <ul>Risk assessments</ul>
                    <ul>Policy management</ul>
				</article>

				<article class="opt-gap-card governance-pillar">
					<div class="opt-gap-card__top">
						<div class="icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
						</div>
						<h3>Organization &amp; Policies</h3>
					</div>
					<ul>AI usage policies</ul>
                    <ul>Training &amp; awareness</ul>
                    <ul>Change management</ul>
                    <ul>Incident response</ul>
				</article>
			</div>
		</div>
	</section>

	<!-- =========================================================
	13 — OBSERVABILITY
	========================================================= -->

	<section id="observability" class="measured-to-improve">
		<div class="container">
			<h2 class="tx-headline motion">What gets measured can continuously improve.</h2>

			<div class="measured-to-improve__signals motion">
				<article class="signal-tile">
					<h3>Logs</h3>
					<p>Prompts, responses, events</p>
				</article>
				<article class="signal-tile">
					<h3>Tracing</h3>
					<p>Agent steps, tool calls</p>
				</article>
				<article class="signal-tile">
					<h3>Metrics</h3>
					<p>Latency, throughput, token usage</p>
				</article>
				<article class="signal-tile">
					<h3>Dashboards</h3>
					<p>Monitoring, alerts, performance</p>
				</article>
			</div>
		</div>
	</section>

	<!-- =========================================================
	18 — FINAL CTA
	========================================================= -->

	<?php hosho_render_cta(
		'',
		'<strong>READY TO TRANSFORM WHAT\'S NEXT?</strong>',
		'Move from digital ambition to intelligent execution. Build AI capabilities that connect your people, processes, data, and technology — and evolve with your business.',
		'Start Your AI Transformation',
		home_url( '/contact' ),
		'services/cta-ai.jpg'
	); ?>

</main>

<?php
get_footer();
