<?php get_header(); ?>

<main id="main-content">
	<?php
	hosho_render_hero(
		'Driving Operational<br>Excellence',
		'hero-operational-experience.jpg',
		['class' => 'page-hero--opex']
	);
	?>

	<section class="section">
		<div class="shell">
			<div class="intro-grid motion">
				<div>
					<p class="eyebrow">Operational Experience</p>
					<h2>Streamlining Core Systems with Automation</h2>
				</div>
				<div class="body-copy">
					<p>Our Operational Experience portfolio provides digital solutions that simplify complex business operations across finance, procurement, workforce management, governance, and industry-specific processes. Each solution is designed to improve efficiency, reduce manual work, and support scalable business operations.</p>
				</div>
			</div>
		</div>
	</section>

	<?php
	hosho_render_quote("The advance of technology is based on making it fit in so that you don't really even notice it.", 'Bill Gates', 'bill-gates.png', 'motion'); ?>

	<section class="section opex-dual-cards">
		<div class="shell motion">
			<div class="opex-dual-cards__wrapper">
				
				<div class="opex-stat-card">
					<h2 class="opex-stat-card__number"><span data-count-up data-count-end="87" data-count-suffix="%">87%</span></h2>
					<h3 class="opex-stat-card__heading">of executives believe digital technologies are changing customer expectations faster than their organizations can adapt.</h3>
					<p class="opex-stat-card__body">Organizations are under increasing pressure to modernize operations, improve efficiency, and respond faster to changing business demands.</p>
					<div class="opex-stat-card__source">
						<img class="source-logo source-logo--mit" src="<?php echo esc_url( hosho_asset_url( 'MIT-logo.png' ) ); ?>" alt="" aria-hidden="true">
						<span class="source-brand">MIT Sloan Management Review</span>
					</div>
					<div class="opex-stat-card__blob" aria-hidden="true"></div>
				</div>

				<div class="opex-help-card">
					<h2 class="opex-help-card__title">How HOSHŌ Digital Helps</h2>
					<p class="body-copy">We modernize enterprise operations through intelligent automation, workflow optimization, finance, procurement, governance, and industry-specific solutions that enable organizations to operate more efficiently and scale with confidence.</p>
				</div>

			</div>
		</div>
	</section>

	<section class="section section-mist opex-categories">
		<div class="shell motion">
			
			<div class="opex-category">
				<div class="opex-category__header">
					<h2 class="opex-category__title">Finance Operations</h2>
					<div class="opex-category__line"></div>
				</div>
				<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">
					
					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Intelligent Invoice Automation</h3>
						<p class="opex-scard__desc">Eliminate manual entry with AI-powered data extraction and automated approval cycles.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Automated Accounts Receivable</h3>
						<p class="opex-scard__desc">Optimize cash flow through automated collections and seamless payment integration.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M18 20V10M12 20V4M6 20v-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Budget Planner</h3>
						<p class="opex-scard__desc">Align departmental spending with corporate objectives using real-time collaborative forecasting.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

				</div>
			</div>

			<div class="opex-category">
				<div class="opex-category__header">
					<h2 class="opex-category__title">Partner & Procurement</h2>
					<div class="opex-category__line"></div>
				</div>
				<div class="opex-category__grid" style="grid-template-columns: repeat(4, 1fr);">
					
					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Vendor Management Portal</h3>
						<p class="opex-scard__desc">Centralize supplier onboarding and performance monitoring in a unified hub.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="currentColor" stroke-width="2"/><path d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Partner Portal</h3>
						<p class="opex-scard__desc">Empower channel partners with direct access to sales tools and collaborative resources.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Partner Management</h3>
						<p class="opex-scard__desc">Drive ecosystem growth through automated lead tracking and partner lifecycle management.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Customer Portal</h3>
						<p class="opex-scard__desc">Enhance retention with intuitive self-service account management and support.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

				</div>
			</div>

			<div class="opex-category">
				<div class="opex-category__header">
					<h2 class="opex-category__title">Workforce & Operations</h2>
					<div class="opex-category__line"></div>
				</div>
				<div class="opex-category__grid" style="grid-template-columns: repeat(4, 1fr);">
					
					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Payroll Management</h3>
						<p class="opex-scard__desc">Secure, automated payroll processing with built-in tax compliance and reporting.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M20 12v10H4V12M2 7h20v5H2zM12 22V7M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7zM12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Employee Benefits Management</h3>
						<p class="opex-scard__desc">Simplify enrollment and administration for comprehensive workforce benefit plans.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M22 10l-10-5L2 10l10 5 10-5zM6 12v5c0 1.66 2.69 3 6 3s6-1.34 6-3v-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Employee Training Management</h3>
						<p class="opex-scard__desc">Scale skills development with automated course assignments and progress tracking.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Grievance Management</h3>
						<p class="opex-scard__desc">Ensure workplace fairness with transparent, secure resolution workflows.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

				</div>
			</div>

			<div class="opex-category">
				<div class="opex-category__header">
					<h2 class="opex-category__title">Governance & Industry</h2>
					<div class="opex-category__line"></div>
				</div>
				<div class="opex-category__grid" style="grid-template-columns: repeat(4, 1fr);">
					
					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Security Incident Management System</h3>
						<p class="opex-scard__desc">Rapidly mitigate threats with automated response protocols and risk analysis.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Whistleblower Management</h3>
						<p class="opex-scard__desc">Maintain ethics compliance via secure, anonymous reporting and case tracking.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Clinic Management System</h3>
						<p class="opex-scard__desc">Optimize healthcare workflows from patient intake to resource scheduling.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Franchise Management</h3>
						<p class="opex-scard__desc">Standardize operations and performance tracking across your entire franchise network.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

				</div>
			</div>

		</div>
	</section>

	<?php hosho_render_cta('Modernize Your Operations','Build Smarter Operations with HOSHŌ Digital','Empower your organization with intelligent operational solutions that improve efficiency, reduce complexity, and support sustainable business growth.','Contact Us',hosho_page_url('contact'),'company-urban-waterfront.jpg'); ?>

</main>

<?php get_footer(); ?>
