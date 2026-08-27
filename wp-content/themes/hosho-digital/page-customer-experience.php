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
					<p class="eyebrow">Customer Experience</p>
					<h2>Personalized AI-Powered Touchpoints</h2>
				</div>
				<div class="body-copy">
					<p>Our Customer Experience portfolio empowers organizations to build stronger customer relationships through intelligent sales management, AI-powered customer engagement, workflow automation, and digital workplace solutions. Every solution is designed to improve responsiveness, collaboration, and customer satisfaction.</p>
				</div>
			</div>
		</div>
	</section>

	<?php hosho_render_quote("If you do build a great experience, customers tell each other about that. Word of mouth is very powerful.", 'Jeff Bezos', 'jeff-bezos.png', 'motion'); 	?>

	<section class="section opex-dual-cards">
		<div class="shell motion">
			<div class="opex-dual-cards__wrapper">

				<div class="opex-stat-card">
					<h2 class="opex-stat-card__number"><span data-count-up data-count-end="5" data-count-suffix="x">5x</span> to <span data-count-up data-count-end="25" data-count-suffix="x">25x</span></h2>
					<h3 class="opex-stat-card__heading">Acquiring a new customer can cost 5 to 25 times more than retaining an existing one.</h3>
					<p class="opex-stat-card__body">Organizations that prioritize customer relationships, loyalty, and service quality create stronger long-term business value.</p>
					<div class="opex-stat-card__source">
						<img class="source-logo source-logo--hbr" src="<?php echo esc_url( hosho_asset_url( 'hbr-logo.png' ) ); ?>" alt="" aria-hidden="true">
						<span class="source-brand">Harvard Business Review</span>
					</div>
					<div class="opex-stat-card__blob" aria-hidden="true"></div>
				</div>

				<div class="opex-help-card">
					<h2 class="opex-help-card__title">How HOSH&#332; Digital Helps</h2>
					<p class="body-copy">Our AI-powered solutions strengthen relationships by unifying customer data, automating service workflows, and enabling intelligent, proactive engagement. We help you deliver seamless experiences that turn everyday interactions into long-term customer loyalty.</p>
				</div>

			</div>
		</div>
	</section>

	<div class="opex-categories-wrapper">

		<div class="opex-category-block opex-category-block--navy">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Sales, CRM &amp; Pipeline Management</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(4, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Lead Management System</h3>
							<p class="opex-scard__desc">Sales platform capturing, scoring, and nurturing leads into qualified revenue opportunities.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Opportunity Management</h3>
							<p class="opex-scard__desc">Centralized sales platform tracking pipeline stages, deal health, and revenue forecasting.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M3 21h18M3 7v14M21 7v14M6 21V10M10 21V10M14 21V10M18 21V10M12 3L2 7h20L12 3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Account Management System</h3>
							<p class="opex-scard__desc">Centralized platform providing complete customer account visibility, relationship health, and expansion.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Customer Experience Management</h3>
							<p class="opex-scard__desc">Integrated solution connecting customer journeys across sales, quotation, and billing touchpoints.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

					</div>
				</div>
			</div>
		</div>

		<div class="opex-category-block opex-category-block--white">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Quotation &amp; Commerce Enablement</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(2, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M12 18v-6M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Quotation Generator</h3>
							<p class="opex-scard__desc">AI tool automating consistent, accurate sales quotation generation using pricing rules.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1" stroke="currentColor" stroke-width="2"/><circle cx="20" cy="21" r="1" stroke="currentColor" stroke-width="2"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Order Assistant</h3>
							<p class="opex-scard__desc">Digital assistant streamlining order capture, product SKU validation, tracking, and fulfillment.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

					</div>
				</div>
			</div>
		</div>

		<div class="opex-category-block opex-category-block--navy">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Customer Support &amp; Conversational AI</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Customer Service</h3>
							<p class="opex-scard__desc">Centralized customer support platform automating ticket routing, prioritization, and SLA tracking.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 10v2a7 7 0 01-14 0v-2M12 19v4M8 23h8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Customer Service Assistant</h3>
							<p class="opex-scard__desc">AI assistant delivering instant, personalized customer answers and smart troubleshooting guidance.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><circle cx="9" cy="10" r="1.5" fill="currentColor"/><circle cx="15" cy="10" r="1.5" fill="currentColor"/><path d="M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iGuide</h3>
							<p class="opex-scard__desc">AI conversational assistant enabling natural product discovery, SKU validation, and recommendations.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

					</div>
				</div>
			</div>
		</div>

		<div class="opex-category-block opex-category-block--white">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Partner, Franchise &amp; Self-Service Portals</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M20 12v10H4V12M2 7h20v5H2zM12 22V7M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7zM12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Customer Portal</h3>
							<p class="opex-scard__desc">Secure self-service portal giving customers real-time access to orders, invoices, and requests.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Partner Portal</h3>
							<p class="opex-scard__desc">Collaborative platform managing partner onboarding, deal registration, resources, and channel growth.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Franchise Management</h3>
							<p class="opex-scard__desc">Centralized platform connecting franchise operations, network compliance, onboarding, and performance tracking.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

					</div>
				</div>
			</div>
		</div>

	</div>

	<?php hosho_render_cta('Strategic Customer Engagement','Ready to Elevate Your Customer Experience?',"Discover how HOSH&#332; Digital's Customer Experience solutions can strengthen customer relationships, streamline operations, and improve every interaction across your business.", 'Contact Us', hosho_page_url('contact'), 'contact-singapore-waterfront.jpg'); ?>

</main>

<?php get_footer(); ?>
