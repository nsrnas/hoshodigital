<?php get_header(); ?>

<main id="main-content">
	<?php
	hosho_render_hero(
		'Strategic Customer<br>Engagement',
		'hero-customer-experience.jpg',
		['class' => 'page-hero--cx']
	);
	?>

	<section class="section">
		<div class="shell">
			<div class="intro-grid motion">
				<div>
					<h2>Make Every Interaction Smarter</h2>
				</div>
				<div class="body-copy">
					<p>We empower organizations to build stronger customer relationships through intelligent sales management, AI-powered customer engagement, workflow automation, and digital workplace solutions. Every solution is designed to improve responsiveness, collaboration, and customer satisfaction.</p>
				</div>
			</div>
		</div>
	</section>

	<?php hosho_render_quote("There is only one boss—the customer. And he can fire everybody in the company from the chairman on down, simply by spending his money somewhere else.", 'Sam Walton', 'sam-walton.png', 'motion'); 	?>

	<section class="section opex-dual-cards">
		<div class="shell motion">
			<div class="opex-dual-cards__wrapper">

				<div class="opex-stat-card">
					<h2 class="opex-stat-card__headline">
						Acquiring a new customer can cost <span class="opex-stat-card__number"><span data-count-up data-count-end="5" data-count-suffix="x">5x</span> to <span data-count-up data-count-end="25" data-count-suffix="x">25x</span></span> more than retaining an existing one.
					</h2>
					<p class="opex-stat-card__body">Organizations that prioritize customer relationships, loyalty, and service quality create stronger long-term business value.</p>
					<div class="opex-stat-card__source">
						<img class="source-logo source-logo--hbr" src="<?php echo esc_url( hosho_asset_url( 'hbr-logo.png' ) ); ?>" alt="" aria-hidden="true">
					</div>
					<div class="opex-stat-card__blob" aria-hidden="true"></div>
				</div>

				<div class="opex-help-card">
					<p class="body-copy">Our AI-powered solutions strengthen relationships by unifying customer data, automating service workflows, and enabling intelligent, proactive engagement. We help you deliver seamless experiences that turn everyday interactions into long-term customer loyalty.</p>
				</div>

			</div>
		</div>
	</section>

	<section class="section solutions-intro-callout">
		<div class="shell motion">
			<div class="solutions-intro-callout__inner">
				<div class="solutions-intro-callout__content">
					<h2 class="solutions-intro-callout__title">Examples of Our Customer Intelligence Solutions</h2>
					<p class="solutions-intro-callout__desc">
						Below are selected highlights from our portfolio. Looking for bespoke customer engagement platforms, specialized CRM integrations, or additional customer intelligence solutions? <strong>Reach out to our team</strong> and tell us about your specific business needs.
					</p>
				</div>
				<div class="solutions-intro-callout__action">
					<a href="<?php echo esc_url( hosho_page_url( 'contact' ) ); ?>" class="button button--red">Tell Us About Your Needs &rarr;</a>
				</div>
			</div>
		</div>
	</section>

	<div class="opex-categories-wrapper">

		<!-- Category 1: Sales & Revenue Enablement -->
		<div class="opex-category-block opex-category-block--navy">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Sales &amp; Revenue Enablement</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Lead Management System</h3>
							<p class="opex-scard__desc">Centralized sales platform capturing, scoring, and qualifying prospects to accelerate deal conversions.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Opportunity Management</h3>
							<p class="opex-scard__desc">Centralized sales platform tracking pipeline stages, deal health, and revenue forecasting.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">360 Invoice Management</h3>
							<p class="opex-scard__desc">Unified lead-to-cash platform connecting sales opportunities, quotation workflows, and customer billing processes.</p>
						</article>

					</div>
				</div>
			</div>
		</div>

		<!-- Category 2: Customer Support & Engagement -->
		<div class="opex-category-block opex-category-block--white">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Customer Support &amp; Engagement</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(4, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Customer Service</h3>
							<p class="opex-scard__desc">Centralized customer support platform automating ticket routing, prioritization, and SLA tracking.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 10v2a7 7 0 01-14 0v-2M12 19v4M8 23h8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Customer Service Assistant</h3>
							<p class="opex-scard__desc">AI assistant delivering instant, personalized customer answers and smart troubleshooting guidance.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><circle cx="9" cy="10" r="1.5" fill="currentColor"/><circle cx="15" cy="10" r="1.5" fill="currentColor"/><path d="M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iGuide</h3>
							<p class="opex-scard__desc">AI conversational assistant enabling natural product discovery, SKU validation, and inventory lookups.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M20 12v10H4V12M2 7h20v5H2zM12 22V7M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7zM12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Customer Portal</h3>
							<p class="opex-scard__desc">Secure self-service portal giving customers real-time access to orders, invoices, and requests.</p>
						</article>

					</div>
				</div>
			</div>
		</div>

		<!-- Category 3: Partner & Relationship Management -->
		<div class="opex-category-block opex-category-block--navy">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Partner &amp; Relationship Management</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M3 21h18M3 7v14M21 7v14M6 21V10M10 21V10M14 21V10M18 21V10M12 3L2 7h20L12 3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">360 Account Management</h3>
							<p class="opex-scard__desc">Centralized client platform providing relationship health scoring, stakeholder mapping, and growth opportunities.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Partner Portal</h3>
							<p class="opex-scard__desc">Collaborative platform managing partner onboarding, deal registration, resources, and channel growth.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Franchise Manager</h3>
							<p class="opex-scard__desc">Centralized platform connecting franchise operations, network compliance, onboarding, and performance tracking.</p>
						</article>

					</div>
				</div>
			</div>
		</div>

		<!-- Category 4: Commerce & Operations Assistant -->
		<div class="opex-category-block opex-category-block--white">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Commerce &amp; Operations Assistant</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1" stroke="currentColor" stroke-width="2"/><circle cx="20" cy="21" r="1" stroke="currentColor" stroke-width="2"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Order Assistant</h3>
							<p class="opex-scard__desc">Conversational order assistant automating order capture, SKU matching, and fulfillment tracking workflows.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Procurement Assistant</h3>
							<p class="opex-scard__desc">AI sourcing assistant evaluating purchase requests, comparing supplier quotations, and enforcing compliance.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Receivables</h3>
							<p class="opex-scard__desc">AI solution automating payment tracking, collection prioritization, and cash flow forecasting.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M16 13H8M16 17H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Contract Manager</h3>
							<p class="opex-scard__desc">Centralized legal platform managing contract lifecycles, renewal alerts, and contractual obligation tracking.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Workflow</h3>
							<p class="opex-scard__desc">Cross-department automation platform orchestrating dynamic tasks, approvals, and process bottleneck identification.</p>
						</article>

					</div>
				</div>
			</div>
		</div>

	</div>

	<?php hosho_render_cta('', 'Elevate Your Customer Experience', '', 'Contact Us', hosho_page_url('contact'), 'cta-customer.jpg'); ?>

</main>

<?php get_footer(); ?>
