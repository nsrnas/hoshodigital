<?php
/**
 * Template Name: AI
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content" class="ai-page">
	<style>
		:root {
			--red: #bf1e23;
			--red-dark: #8f0f14;
			--navy: #0f2946;
			--navy-light: #132e4d;
			--light: #f7f7f7;
			--text: #18314e;
			--gray: #6b7787;
			--border: #ececec;
			--pink: #f8d3d4;
			--pink-soft: #fdf1f1;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.ai-page {
			font-family: Inter, sans-serif;
			color: var(--text);
			background: #fff;
			overflow: hidden;
		}

		.ai-page section {
			display: block;
			width: 100%;
			float: none;
			clear: both;
		}

		.container {
			max-width: 1200px;
			width: calc(100% - 80px);
			margin: auto;
		}

		img {
			display: block;
			width: 100%;
		}

		a {
			text-decoration: none;
		}

		.highlight {
			color: var(--red);
		}

		.btn-red {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			gap: 10px;
			background: var(--red);
			color: #fff;
			padding: 16px 30px;
			font-weight: 700;
			font-size: 13px;
			letter-spacing: .5px;
			transition: .25s;
		}

		.btn-red:hover {
			background: #a9181c;
		}

		.small-title {
			display: block;
			font-size: 12px;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			color: var(--red);
			margin-bottom: 10px;
		}

		/* =========================================================
		HERO
		========================================================= */

		.ai-hero {
			position: relative;
			min-height: 760px;
			display: flex;
			align-items: center;
			overflow: hidden;
			background: #3a0608;
		}

		.ai-hero-image {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.ai-hero-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			display: block;
		}

		.ai-hero-overlay {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background:
				radial-gradient(circle at 80% 10%, rgba(120, 20, 22, .5), transparent 45%),
				linear-gradient(100deg, rgba(20, 4, 5, .82) 0%, rgba(58, 6, 8, .8) 45%, rgba(150, 20, 22, .55) 100%);
		}

		.ai-hero .container {
			position: relative;
			z-index: 2;
		}

		.ai-hero-content {
			max-width: 760px;
			color: #fff;
			padding: 70px 0;
			padding-top: 260px;
		}

		.ai-hero h1 {
			font-size: 44px;
			line-height: 1.15;
			font-weight: 900;
			letter-spacing: -.5px;
			text-transform: uppercase;
			margin-bottom: 22px;
		}

		.ai-hero h1 .highlight {
			color: #ff5b5f;
		}

		.ai-hero p {
			font-size: 17px;
			line-height: 1.7;
			color: rgba(255, 255, 255, .88);
			max-width: 620px;
		}

		/* =========================================================
		INTRO
		========================================================= */

		.ai-intro-section {
			padding: 80px 0 90px;
			background: #fff;
		}

		.ai-intro-header {
			text-align: center;
			margin-bottom: 28px;
		}

		.ai-intro-header h2 {
			font-size: 32px;
			font-weight: 800;
			text-transform: uppercase;
			letter-spacing: .5px;
		}

		.ai-intro-header h2 .highlight {
			color: var(--red);
		}

		.ai-intro-header h2 .dark {
			color: #111;
		}

		.ai-intro-lead {
			color: #333c46;
			line-height: 1.8;
			font-size: 15.5px;
			max-width: 100%;
			margin: 0 0 40px;
		}

		.ai-intro-divider {
			height: 3px;
			background: var(--red);
			margin-bottom: 40px;
		}

		.ai-intro-panel {
			background: #f7f3f0;
			padding: 45px 50px;
		}

		.ai-intro-panel h3 {
			font-size: 24px;
			font-weight: 800;
			color: #111;
			line-height: 1.35;
			margin-bottom: 18px;
		}

		.ai-intro-panel h3 span {
			display: block;
		}

		.ai-intro-panel h3 .highlight {
			color: var(--red);
		}

		.ai-intro-panel > p {
			color: #444f5c;
			line-height: 1.8;
			font-size: 15.5px;
			max-width: 900px;
		}

		/* =========================================================
		OUR PRINCIPLES
		========================================================= */

		.ai-principles {
			padding: 80px 0 90px;
			background: #f7f7f8;
		}

		.principles-header {
			text-align: center;
			max-width: 640px;
			margin: 0 auto 45px;
		}

		.principles-header h2 {
			font-size: 32px;
			font-weight: 800;
			color: var(--navy);
			text-transform: uppercase;
			letter-spacing: .5px;
			margin-bottom: 12px;
		}

		.principles-header p {
			color: var(--gray);
			font-size: 15.5px;
		}

		.principles-grid {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			gap: 24px;
		}

		.principle-card {
			background: #fff;
			border: 1px solid var(--border);
			border-radius: 6px;
			padding: 28px 24px;
		}

		.principle-card .cap-icon {
			font-size: 22px;
			color: var(--red);
			margin-bottom: 14px;
		}

		.principle-card h4 {
			font-size: 17px;
			font-weight: 700;
			color: #111;
			margin-bottom: 10px;
		}

		.principle-card p {
			font-size: 14px;
			color: var(--gray);
			line-height: 1.6;
		}

		/* =========================================================
		THE AI AGENT FLOW
		========================================================= */

		.ai-flow-section {
			padding: 90px 0 100px;
			background: var(--navy);
			color: #fff;
		}

		.flow-header {
			max-width: 780px;
			margin: 0 auto 60px;
			text-align: center;
		}

		.flow-header h2 {
			font-size: 34px;
			font-weight: 800;
			margin-bottom: 16px;
		}

		.flow-header p {
			color: rgba(255, 255, 255, .65);
			font-size: 15.5px;
			line-height: 1.7;
		}

		.flow-timeline {
			max-width: 980px;
			margin: 0 auto;
		}

		.flow-step {
			display: flex;
			align-items: flex-start;
			gap: 40px;
			padding: 10px 0;
		}

		.flow-step.reverse {
			flex-direction: row-reverse;
			text-align: right;
		}

		.flow-num {
			flex: 0 0 auto;
			font-size: 46px;
			font-weight: 900;
			color: var(--red);
			line-height: 1;
			min-width: 70px;
		}

		.flow-step.reverse .flow-num {
			text-align: right;
		}

		.flow-content h3 {
			font-size: 21px;
			font-weight: 700;
			margin-bottom: 10px;
			color: #fff;
		}

		.flow-content p {
			font-size: 14.5px;
			line-height: 1.7;
			color: rgba(255, 255, 255, .6);
			max-width: 560px;
			margin-bottom: 16px;
		}

		.flow-step.reverse .flow-content p {
			margin-left: auto;
		}

		.flow-tags {
			display: flex;
			flex-wrap: wrap;
			gap: 8px;
		}

		.flow-step.reverse .flow-tags {
			justify-content: flex-end;
		}

		.flow-tags span {
			font-size: 11px;
			font-weight: 700;
			letter-spacing: .4px;
			text-transform: uppercase;
			color: #f0b8ba;
			background: rgba(191, 30, 35, .18);
			border: 1px solid rgba(191, 30, 35, .35);
			padding: 6px 12px;
			border-radius: 20px;
		}

		.flow-connector {
			display: flex;
			align-items: center;
			gap: 14px;
			padding: 6px 0 6px 33px;
		}

		.flow-step.reverse + .flow-connector {
			flex-direction: row-reverse;
			padding-left: 0;
			padding-right: 33px;
			justify-content: flex-end;
		}

		.flow-step.reverse + .flow-connector span.label {
			text-align: right;
		}

		.flow-connector .line {
			width: 1px;
			height: 34px;
			background: rgba(255, 255, 255, .18);
		}

		.flow-connector span.label {
			font-size: 11px;
			letter-spacing: .5px;
			text-transform: uppercase;
			font-weight: 700;
			color: rgba(255, 255, 255, .4);
		}

		/* =========================================================
		GOVERNANCE
		========================================================= */

		.governance-section {
			padding: 90px 0 100px;
			background: var(--pink-soft);
		}

		.governance-header {
			margin-bottom: 55px;
		}

		.governance-header h2 {
			font-size: 34px;
			font-weight: 800;
			color: #111;
			line-height: 1.25;
		}

		.governance-grid {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 60px 50px;
		}

		.gov-item {
			display: flex;
			align-items: center;
			gap: 26px;
		}

		.gov-item.reverse {
			flex-direction: row-reverse;
			text-align: right;
		}

		.gov-icon {
			flex: 0 0 auto;
			width: 76px;
			height: 76px;
			background: #fff;
			border: 1px solid var(--border);
			border-radius: 6px;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 28px;
		}

		.gov-text h4 {
			font-size: 20px;
			font-weight: 700;
			color: var(--navy);
			margin-bottom: 8px;
		}

		.gov-text p {
			font-size: 14.5px;
			line-height: 1.7;
			color: #4a5561;
			max-width: 380px;
		}

		.gov-item.reverse .gov-text p {
			margin-left: auto;
		}

		/* =========================================================
		QUOTE
		========================================================= */

		.ai-quote {
			position: relative;
			overflow: hidden;
			background: linear-gradient(100deg, var(--navy) 0%, #6a0d10 65%, #8c1114 100%);
			min-height: 340px;
			display: flex;
			align-items: center;
		}

		.ai-quote-content {
			position: relative;
			z-index: 2;
			display: grid;
			grid-template-columns: 340px 1fr;
			align-items: center;
			gap: 50px;
		}

		.ai-quote-photo {
			width: 100%;
			border-radius: 4px;
			overflow: hidden;
		}

		.ai-quote-photo img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			filter: grayscale(100%);
		}

		.ai-quote-text .quote-mark {
			font-size: 60px;
			color: rgba(255, 255, 255, .35);
			line-height: 1;
			margin-bottom: 8px;
		}

		.ai-quote-text h2 {
			font-size: 30px;
			font-weight: 700;
			color: #fff;
			line-height: 1.35;
			margin-bottom: 22px;
		}

		.ai-quote-text .quote-author {
			font-size: 13px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: #fff;
		}

		.ai-quote-text .quote-role {
			font-size: 14px;
			color: rgba(255, 255, 255, .7);
			margin-top: 4px;
		}

		/* =========================================================
		DESIGNED FOR OUTCOMES
		========================================================= */

		.outcomes-section {
			padding: 90px 0 60px;
			background: #fff;
			text-align: center;
		}

		.outcomes-header h2 {
			font-size: 36px;
			font-weight: 800;
			color: #111;
			margin-bottom: 50px;
		}

		.outcomes-grid {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			gap: 24px;
			text-align: left;
			margin-bottom: 24px;
		}

		.outcome-card {
			border: 1px solid var(--border);
			border-radius: 6px;
			padding: 30px 28px;
			display: flex;
			gap: 18px;
			align-items: flex-start;
		}

		.outcome-card.accent {
			background: var(--red);
			border-color: var(--red);
			color: #fff;
		}

		.outcome-card .out-icon {
			font-size: 22px;
			flex: 0 0 auto;
		}

		.outcome-card h4 {
			font-size: 18px;
			font-weight: 700;
			margin-bottom: 8px;
			color: var(--navy);
		}

		.outcome-card.accent h4 {
			color: #fff;
		}

		.outcome-card p {
			font-size: 14.5px;
			line-height: 1.65;
			color: var(--gray);
		}

		.outcome-card.accent p {
			color: rgba(255, 255, 255, .85);
		}

		.outcome-featured {
			border: 1px solid var(--border);
			border-radius: 6px;
			padding: 30px 28px;
			display: flex;
			gap: 18px;
			align-items: flex-start;
			text-align: left;
		}

		.outcome-featured .out-icon {
			font-size: 22px;
			color: var(--red);
			flex: 0 0 auto;
		}

		.outcome-featured h4 {
			font-size: 18px;
			font-weight: 700;
			margin-bottom: 8px;
			color: var(--navy);
		}

		.outcome-featured p {
			font-size: 14.5px;
			line-height: 1.65;
			color: var(--gray);
		}

		/* =========================================================
		LOGOS
		========================================================= */

		.logos-section {
			padding: 50px 0 90px;
			background: #fff;
			text-align: center;
		}

		.logos-title {
			font-size: 13px;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			color: var(--navy);
			margin-bottom: 34px;
		}

		.logos-track-wrap {
			overflow: hidden;
			max-width: 900px;
			margin: 0 auto;
			-webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
			mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
		}

		.logos-track {
			display: flex;
			align-items: center;
			width: max-content;
			animation: logos-scroll 22s linear infinite;
		}

		.logos-track:hover {
			animation-play-state: paused;
		}

		.logos-track .logo-item {
			flex: 0 0 auto;
			width: 180px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		@keyframes logos-scroll {
			from {
				transform: translateX(0);
			}
			to {
				transform: translateX(-50%);
			}
		}

		.logos-track img {
			height: 60px;
			width: auto;
			max-width: 130px;
			object-fit: contain;
			display: block;
		}

		/* =========================================================
		FINAL CTA
		========================================================= */

		.ai-cta {
			position: relative;
			overflow: hidden;
			padding: 110px 0;
			background: #1a1a1a;
		}

		.ai-cta-image {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.ai-cta-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.ai-cta-overlay {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background: linear-gradient(100deg, rgba(255, 255, 255, .55), rgba(190, 60, 55, .35));
		}

		.ai-cta-content {
			position: relative;
			z-index: 2;
			max-width: 780px;
			margin: auto;
			text-align: center;
		}

		.ai-cta-content h2 {
			font-size: 40px;
			font-weight: 800;
			color: #111;
			line-height: 1.2;
			margin-bottom: 20px;
		}

		.ai-cta-content p {
			color: #333;
			line-height: 1.7;
			margin-bottom: 34px;
			font-size: 16px;
		}
	</style>

	<!-- =========================================================
	HERO
	========================================================= -->

	<section class="ai-hero">
		<div class="ai-hero-image">
			<img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/hero.jpg' ) ); ?>" alt="Abstract red digital circuit texture">
		</div>
		<div class="ai-hero-overlay"></div>
		<div class="container">
			<div class="ai-hero-content">
				<h1>
					Architecting the<br>
					Autonomous Enterprise:<br>
					<span class="highlight">The AI Agent Flow</span>
				</h1>
				<p>
					How a request moves from your team's screen down to raw
					enterprise data, and how an autonomous agent acts on it —
					layer by layer, with a human able to step in at any point.
				</p>
			</div>
		</div>
	</section>

	<!-- =========================================================
	INTRO
	========================================================= -->

	<section class="ai-intro-section">
		<div class="container">
			<div class="ai-intro-header">
				<h2><span class="highlight">Artificial Intelligence</span> <span class="dark">Innovations</span></h2>
			</div>

			<p class="ai-intro-lead">
				Artificial Intelligence (AI) is revolutionizing the future of
				business. By automating repetitive tasks, AI allows
				businesses to focus on strategic decision-making. It enables
				predictive analytics, enhancing forecasting accuracy in all
				areas from sales and supply chain.
			</p>

			<div class="ai-intro-divider"></div>

			<div class="ai-intro-panel">
				<h3>
					Beyond AI Models.
					<span class="highlight">Build Intelligent Ecosystems.</span>
				</h3>
				<p>
					We view AI not as a standalone tool, but as a critical
					component of a complete enterprise ecosystem. True value
					is realized when AI is seamlessly integrated into your
					data fabric, operational workflows, and decision-making
					logic.
				</p>
			</div>
		</div>
	</section>

	<!-- =========================================================
	OUR PRINCIPLES
	========================================================= -->

	<section class="ai-principles">
		<div class="container">
			<div class="principles-header">
				<h2>Our Principles</h2>
				<p>What every layer is held to</p>
			</div>

			<div class="principles-grid">
				<div class="principle-card">
					<div class="cap-icon">🔒</div>
					<h4>Secure</h4>
					<p>Enterprise-grade security protocols embedded at every layer of the model lifecycle.</p>
				</div>
				<div class="principle-card">
					<div class="cap-icon">⚡</div>
					<h4>Efficient</h4>
					<p>Optimized for performance and resource utilization to ensure sustainable ROI.</p>
				</div>
				<div class="principle-card">
					<div class="cap-icon">🚀</div>
					<h4>Fast</h4>
					<p>Rapid deployment cycles powered by our modular implementation frameworks.</p>
				</div>
				<div class="principle-card">
					<div class="cap-icon">📈</div>
					<h4>Scalable</h4>
					<p>Architected to handle massive enterprise data volumes and global user bases.</p>
				</div>
				<div class="principle-card">
					<div class="cap-icon">🎛️</div>
					<h4>Customizable</h4>
					<p>Tailored specifically to your proprietary business logic and industry constraints.</p>
				</div>
				<div class="principle-card">
					<div class="cap-icon">🔄</div>
					<h4>Future-Proof</h4>
					<p>Designed to adapt seamlessly as underlying AI models and tech stacks evolve.</p>
				</div>
				<div class="principle-card">
					<div class="cap-icon">📜</div>
					<h4>Industry Standards</h4>
					<p>Strict adherence to global compliance, ISO standards, and ethical AI frameworks.</p>
				</div>
				<div class="principle-card">
					<div class="cap-icon">🔍</div>
					<h4>Auditable</h4>
					<p>Every reasoning step and tool call is logged, so any decision can be reconstructed.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	THE AI AGENT FLOW
	========================================================= -->

	<section class="ai-flow-section">
		<div class="container">
			<div class="flow-header">
				<h2>The AI Agent Flow</h2>
				<p>
					Seven layers, read top to bottom the way a request
					actually travels: it enters at the interface, gets
					planned and executed by agents, and only then touches
					your raw enterprise data.
				</p>
			</div>

			<div class="flow-timeline">

				<div class="flow-step">
					<div class="flow-num">01</div>
					<div class="flow-content">
						<h3>Interaction Layer</h3>
						<p>
							The interface people and other systems actually
							use to send a request, a chat window, an API
							call, a voice channel.
						</p>
						<div class="flow-tags">
							<span>APIs</span>
							<span>Web/Mobile</span>
							<span>Omni-Channel</span>
							<span>Voice &amp; Chat</span>
						</div>
					</div>
				</div>

				<div class="flow-step reverse">
					<div class="flow-num">02</div>
					<div class="flow-content">
						<h3>Agent Layer</h3>
						<p>
							The specialized agents that actually do the work,
							each one built for a narrow task, operating
							inside rules your team sets.
						</p>
						<div class="flow-tags">
							<span>Runtime Agents</span>
							<span>Multi-Agent</span>
							<span>Validators</span>
							<span>Task Solvers</span>
						</div>
					</div>
				</div>

				<div class="flow-step">
					<div class="flow-num">03</div>
					<div class="flow-content">
						<h3>MCP Backbone</h3>
						<p>
							MCP (Model Context Protocol) is the open standard
							that lets agents call your tools and data sources
							the same way regardless of which AI model is
							running underneath.
						</p>
						<div class="flow-tags">
							<span>Context Sharing</span>
							<span>Tool Abstraction</span>
							<span>Inter-Agent Comm</span>
						</div>
					</div>
				</div>

				<div class="flow-step reverse">
					<div class="flow-num">04</div>
					<div class="flow-content">
						<h3>Orchestration</h3>
						<p>
							The layer that breaks one request into smaller
							steps, decides what order to run them in, and
							runs independent steps at once to save time.
						</p>
						<div class="flow-tags">
							<span>Reasoning Engines</span>
							<span>Task Decomposition</span>
							<span>Parallel Logic</span>
						</div>
					</div>
				</div>

				<div class="flow-step">
					<div class="flow-num">05</div>
					<div class="flow-content">
						<h3>Workflow &amp; Human in the Loop</h3>
						<p>
							Approval checkpoints that pause an agent before
							high-stakes actions, a refund, a contract, an
							external email, until a human signs off.
						</p>
						<div class="flow-tags">
							<span>Approval Gates</span>
							<span>Human Loops</span>
							<span>Workflow Engines</span>
						</div>
					</div>
				</div>

				<div class="flow-step reverse">
					<div class="flow-num">06</div>
					<div class="flow-content">
						<h3>Memory &amp; Knowledge</h3>
						<p>
							Where an agent keeps track of what it already
							knows and has already done, so it doesn't ask
							your team the same question twice.
						</p>
						<div class="flow-tags">
							<span>Vector DB</span>
							<span>RAG Pipelines</span>
							<span>Semantic Graphs</span>
						</div>
					</div>
				</div>
				
				<div class="flow-step">
					<div class="flow-num">07</div>
					<div class="flow-content">
						<h3>Source Data Layer</h3>
						<p>
							Your existing warehouses, lakehouses, and live
							feature stores, the ground truth every layer
							above ultimately reads from.
						</p>
						<div class="flow-tags">
							<span>Warehouses</span>
							<span>Data Lakehouse</span>
							<span>Feature Stores</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- =========================================================
	GOVERNANCE
	========================================================= -->

	<section class="governance-section">
		<div class="container">
			<div class="governance-header">
				<h2>Governance is <span class="highlight">Built-In.</span></h2>
			</div>

			<div class="governance-grid">
				<div class="gov-item">
					<div class="gov-icon">🛡️</div>
					<div class="gov-text">
						<span class="small-title">Integrity</span>
						<h4>Data Governance</h4>
						<p>PII masking, data lineage cataloging, and automated retention policies across all agents.</p>
					</div>
				</div>

				<div class="gov-item reverse">
					<div class="gov-icon">💰</div>
					<div class="gov-text">
						<span class="small-title">Control</span>
						<h4>Cost Governance</h4>
						<p>Token usage tracking, budget limits, and predictive alerts before spend runs ahead of the value it's producing.</p>
					</div>
				</div>

				<div class="gov-item">
					<div class="gov-icon">📋</div>
					<div class="gov-text">
						<span class="small-title">Trust</span>
						<h4>Compliance &amp; Audit</h4>
						<p>Automated audit trails built for regulatory review (GDPR, SOC 2) from the first agent you deploy, not retrofitted later.</p>
					</div>
				</div>

				<div class="gov-item reverse">
					<div class="gov-icon">⚙️</div>
					<div class="gov-text">
						<span class="small-title">Scale</span>
						<h4>Org Policies</h4>
						<p>A change-management framework and role-based training so the team knows how to safely adjust an agent's boundaries.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	QUOTE
	========================================================= -->

	<section class="ai-quote">
		<div class="container">
			<div class="ai-quote-content">
				<div class="ai-quote-photo">
					<img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/nadella.png' ) ); ?>" alt="Satya Nadella portrait">
				</div>
				<div class="ai-quote-text">
					<div class="quote-mark">"</div>
					<h2>
						"The future belongs to organizations that combine
						human expertise with artificial intelligence."
					</h2>
					<div class="quote-author">Satya Nadella</div>
					<div class="quote-role">CEO of Microsoft</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	DESIGNED FOR OUTCOMES
	========================================================= -->

	<section class="outcomes-section">
		<div class="container">
			<div class="outcomes-header">
				<h2>Designed for <span class="highlight">Outcomes</span></h2>
			</div>

			<div class="outcomes-grid">
				<div class="outcome-card">
					<div class="out-icon">🎯</div>
					<div>
						<h4>Intelligent Strategy</h4>
						<p>Mapping AI capabilities directly to high-value business outcomes and legacy system transformation.</p>
					</div>
				</div>
				<div class="outcome-card">
					<div class="out-icon">⚙️</div>
					<div>
						<h4>Expert Engineering</h4>
						<p>Deep technical implementation of custom LLMs, vector databases, and agentic orchestration flows.</p>
					</div>
				</div>
				<div class="outcome-card accent">
					<div class="out-icon">🚀</div>
					<div>
						<h4>Enterprise Execution</h4>
						<p>Scaling from proof-of-concept to global deployment with rigorous stress-testing and governance.</p>
					</div>
				</div>
				<div class="outcome-card">
					<div class="out-icon">⚡</div>
					<div>
						<h4>Rapid Innovation</h4>
						<p>Accelerated prototyping with our proprietary "AI-First" architectural components and toolkits.</p>
					</div>
				</div>
			</div>

			<div class="outcome-featured">
				<div class="out-icon">🎯</div>
				<div>
					<h4>Enterprise Execution</h4>
					<p>Scaling from proof-of-concept to global deployment with rigorous stress-testing and governance.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	POWERED BY LEADING AI PLATFORMS
	========================================================= -->

	<section class="logos-section">
		<div class="container">
			<p class="logos-title">Powered by Leading AI Platforms</p>
			<div class="logos-track-wrap">
				<div class="logos-track">
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/anthropic.png' ) ); ?>" alt="Anthropic"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/azure.png' ) ); ?>" alt="Microsoft Azure AI"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/copilot.png' ) ); ?>" alt="Copilot"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/gemini.png' ) ); ?>" alt="Gemini"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/grok.png' ) ); ?>" alt="Grok"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/langchain.png' ) ); ?>" alt="LangChain"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/openai.png' ) ); ?>" alt="OpenAI"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/meta.jpg' ) ); ?>" alt="Meta AI"></div>
					<!-- duplicated for a seamless infinite loop -->
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/anthropic.png' ) ); ?>" alt="Anthropic"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/azure.png' ) ); ?>" alt="Microsoft Azure AI"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/copilot.png' ) ); ?>" alt="Copilot"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/gemini.png' ) ); ?>" alt="Gemini"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/grok.png' ) ); ?>" alt="Grok"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/langchain.png' ) ); ?>" alt="LangChain"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/openai.png' ) ); ?>" alt="OpenAI"></div>
					<div class="logo-item"><img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/meta.jpg' ) ); ?>" alt="Meta AI"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	FINAL CTA
	========================================================= -->

	<section class="ai-cta">
		<div class="ai-cta-image">
			<img src="<?php echo esc_url( hosho_asset_url( 'images/approach/ai/cta.jpg' ) ); ?>" alt="Team planning an enterprise AI strategy">
		</div>
		<div class="ai-cta-overlay"></div>
		<div class="container">
			<div class="ai-cta-content">
				<h2>Artificial Intelligence Should Strengthen Your Business, Not Complicate It</h2>
				<p>
					Stop compromising with a system that feels like it's
					holding you back. Our senior experts are ready to audit
					your platform and reveal the hidden efficiency within.
				</p>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-red">
					Let's Build Your Enterprise AI Strategy
				</a>
			</div>
		</div>
	</section>

</main>
<?php
get_footer();