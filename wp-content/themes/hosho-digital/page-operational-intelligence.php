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
					<h2>Faster, Smarter and More Efficient</h2>
				</div>
				<div class="body-copy">
					<p>We provide digital solutions that simplify complex business operations across finance, procurement, workforce management, governance, and industry-specific processes. Each solution is designed to improve efficiency, reduce manual work, and support scalable business operations.</p>
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
					<h2 class="opex-stat-card__headline">
						<span class="opex-stat-card__number" data-count-up data-count-end="87" data-count-suffix="%">87%</span>
						<span class="opex-stat-card__heading">of executives believe digital technologies are changing customer expectations faster than their organizations can adapt.</span>
					</h2>
					<p class="opex-stat-card__body">Organizations are under increasing pressure to modernize operations, improve efficiency, and respond faster to changing business demands.</p>
					<div class="opex-stat-card__source">
						<img class="source-logo source-logo--mit" src="<?php echo esc_url( hosho_asset_url( 'MIT-logo.png' ) ); ?>" alt="" aria-hidden="true">
					</div>
					<div class="opex-stat-card__blob" aria-hidden="true"></div>
				</div>

				<div class="opex-help-card">
					<p class="body-copy">We modernize enterprise operations through intelligent automation, workflow optimization, finance, procurement, governance, and industry-specific solutions that enable organizations to operate more efficiently and scale with confidence.</p>
				</div>

			</div>
		</div>
	</section>

	<section class="section solutions-intro-callout">
		<div class="shell motion">
			<div class="solutions-intro-callout__inner">
				<div class="solutions-intro-callout__content">
					<h2 class="solutions-intro-callout__title">Examples of Our Operational Intelligence Solutions</h2>
					<p class="solutions-intro-callout__desc">
						Below are selected highlights from our portfolio. Looking for custom enterprise automation, tailored workflow integrations, or additional operational intelligence solutions? <strong>Reach out to our team</strong> and tell us about your specific business needs.
					</p>
				</div>
				<div class="solutions-intro-callout__action">
					<a href="<?php echo esc_url( hosho_page_url( 'contact' ) ); ?>" class="button button--red">Tell Us About Your Needs &rarr;</a>
				</div>
			</div>
		</div>
	</section>

	<div class="opex-categories-wrapper">

		<!-- Category 1: Procurement & Spend Management -->
		<div class="opex-category-block opex-category-block--navy">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Procurement &amp; Spend Management</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(4, 1fr);">
						
						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iProcure</h3>
							<p class="opex-scard__desc">AI procurement platform managing end-to-end requisitions, vendor evaluation, and spending approvals.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M12 8v4l3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Adhoc Purchase Manager</h3>
							<p class="opex-scard__desc">Centralized emergency procurement system accelerating urgent purchase requests with strict governance.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="8" y="2" width="8" height="4" rx="1" stroke="currentColor" stroke-width="2"/><path d="M9 12h6M9 16h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Purchase Requisition Manager</h3>
							<p class="opex-scard__desc">Digital requisition platform streamlining internal purchase requests, budget validation, and approvals.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Vendor Manager</h3>
							<p class="opex-scard__desc">Centralized platform managing supplier onboarding, contract compliance, and vendor performance monitoring.</p>
						</article>

					</div>
				</div>
			</div>
		</div>

		<!-- Category 2: Financial & Commercial Operations -->
		<div class="opex-category-block opex-category-block--white">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Financial &amp; Commercial Operations</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">
						
						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 22V12h6v10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Capital Expenditure Manager</h3>
							<p class="opex-scard__desc">Centralized platform evaluating, prioritizing, and approving capital expenditure investment requests efficiently.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 20V4M2 12h20M5 8l7-6 7 6M5 16l7 6 7-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Budget Planner</h3>
							<p class="opex-scard__desc">Centralized budgeting platform managing financial plans, spending variances, and cost control.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Invoice Automation</h3>
							<p class="opex-scard__desc">AI solution automating invoice data extraction, validation, matching, and payment approval workflows.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">AR Assistant</h3>
							<p class="opex-scard__desc">Intelligent accounts receivable platform managing automated payment reconciliation and collection workflows.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M12 18v-6M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Quick Quote</h3>
							<p class="opex-scard__desc">Automated sales tool generating fast, accurate pricing quotations from structured templates.</p>
						</article>

					</div>
				</div>
			</div>
		</div>

		<!-- Category 3: Engineering & Document Intelligence -->
		<div class="opex-category-block opex-category-block--navy">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Engineering &amp; Document Intelligence</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">
						
						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2v-4M9 21H5a2 2 0 01-2-2v-4m0 0h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iSLD</h3>
							<p class="opex-scard__desc">AI tool converting electrical single line diagrams into structured digital component data.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Document Analyzer</h3>
							<p class="opex-scard__desc">AI platform transforming unstructured enterprise documents into actionable, structured business data.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iRespond</h3>
							<p class="opex-scard__desc">AI proposal intelligence platform accelerating context-aware responses for RFPs and RFIs.</p>
						</article>

					</div>
				</div>
			</div>
		</div>

		<!-- Category 4: Governance, Risk & IT Security -->
		<div class="opex-category-block opex-category-block--white">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Governance, Risk &amp; IT Security</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iGRC</h3>
							<p class="opex-scard__desc">Centralized enterprise platform managing workplace safety, AI governance, and vendor compliance risks.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="currentColor" stroke-width="2"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iESG</h3>
							<p class="opex-scard__desc">Centralized sustainability platform structuring ESG disclosures, evidence tracking, and audit-ready reporting.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0zM12 9v4M12 17h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Incident Manager</h3>
							<p class="opex-scard__desc">Centralized security operations platform automating incident triage, alert correlation, and rapid containment.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 21h8M12 17v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent License Manager</h3>
							<p class="opex-scard__desc">Centralized platform optimizing software licenses, subscription tracking, compliance, and cost efficiency.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11V7a5 5 0 0110 0v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Hosho Vault</h3>
							<p class="opex-scard__desc">Encrypted credential management vault providing access control, password monitoring, and security.</p>
						</article>

					</div>
				</div>
			</div>
		</div>

		<!-- Category 5: Enterprise & Healthcare Operations -->
		<div class="opex-category-block opex-category-block--navy">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">Enterprise &amp; Healthcare Operations</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">
						
						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iProject</h3>
							<p class="opex-scard__desc">Integrated project management workspace providing real-time progress visibility, resource allocation, and tracking.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M22 19a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2h5l2 3h9a2 2 0 012 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iCase</h3>
							<p class="opex-scard__desc">Centralized case management platform structuring intake, investigation paths, and accountability workflows.</p>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iClinic</h3>
							<p class="opex-scard__desc">Integrated clinic management platform centralizing patient records, appointments, prescriptions, and billing.</p>
						</article>

					</div>
				</div>
			</div>
		</div>

	</div>

	<?php hosho_render_cta('', 'Build Smarter Operations with HOSHŌ Digital', '', 'Contact Us', hosho_page_url('contact'), 'cta-operational.jpg'); ?>

</main>

<?php get_footer(); ?>
