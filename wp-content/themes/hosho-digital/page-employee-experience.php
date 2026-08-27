<?php get_header(); ?>

<main id="main-content">
	<?php
	hosho_render_hero(
		'Redefine the<br>Workplace',
		'hero-employee-experience.jpeg',
		['class' => 'page-hero--ex']
	);
	?>

	<section class="section">
		<div class="shell">
			<div class="intro-grid motion">
				<div>
					<p class="eyebrow">Employee Experience</p>
					<h2>Empowering Teams with Intelligent Tools</h2>
				</div>
				<div class="body-copy">
					<p>Our Employee Experience portfolio helps organizations create a smarter digital workplace by simplifying employee services, automating HR processes, and streamlining internal requests through intelligent enterprise solutions.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section ex-stat">
		<div class="shell motion">
			<div class="ex-stat__wrapper">

				<div class="ex-stat__left">
					<h2 class="ex-stat__headline"><span class="ex-stat__highlight">Highly engaged teams</span> show <span class="ex-stat__accent" data-count-up data-count-end="23" data-count-suffix="%">23%</span> greater profitability.</h2>
					<div class="ex-stat__bar" aria-hidden="true"></div>
					<p class="ex-stat__body">Organizations that invest in employee engagement and workplace experience consistently achieve stronger business performance and long-term success.</p>
					<div class="ex-stat__source">
						<img class="source-logo source-logo--gallup" src="<?php echo esc_url( hosho_asset_url( 'gallup-logo.png' ) ); ?>" alt="" aria-hidden="true">
						<span class="source-brand">Gallup</span>
					</div>
				</div>

				<div class="ex-stat__right">
					<div class="ex-stat__glass">
						<svg width="30" height="18" fill="none" viewBox="0 0 30 18"><path d="M2.1 18L0 15.9 11.1 4.725l6 6L24.9 3H21V0h9v9h-3V5.1L17.1 15l-6-6L2.1 18z" fill="#F9D2D0"/></svg>
						<h3>Why This Matters</h3>
						<p>Friction in daily tasks drains productivity and morale. A seamless digital workplace removes these barriers, allowing employees to focus on high-value work.</p>
					</div>
					<div class="ex-stat__glass">
						<svg width="17" height="27" fill="none" viewBox="0 0 17 27"><path d="M.375 27L0 23.7l4.275-11.775c.375.35.781.644 1.219.881.437.238.906.419 1.406.544L2.775 24.675.375 27zm15.75 0l-2.4-2.325-4.125-11.325c.5-.125.969-.306 1.406-.544.438-.237.844-.531 1.219-.881L16.5 23.7 16.125 27zM8.25 12c-1.25 0-2.313-.438-3.188-1.313C4.188 9.813 3.75 8.75 3.75 7.5c0-.975.281-1.844.844-2.606A4.494 4.494 0 016.75 3.3V0h3v3.3c.875.3 1.594.831 2.156 1.594.563.762.844 1.631.844 2.606 0 1.25-.438 2.313-1.313 3.188C10.563 11.563 9.5 12 8.25 12zm0-3c.425 0 .781-.144 1.069-.431.287-.288.431-.644.431-1.069s-.144-.781-.431-1.069A1.451 1.451 0 008.25 6c-.425 0-.781.144-1.069.431A1.451 1.451 0 006.75 7.5c0 .425.144.781.431 1.069.288.287.644.431 1.069.431z" fill="#F9D2D0"/></svg>
						<h3>How HOSHŌ Digital Helps</h3>
						<p>We design intelligent, consumer-grade digital experiences for internal processes, connecting siloed systems into unified workflows.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="section ex-categories">
		<div class="shell motion">

			<div class="opex-category">
				<div class="opex-category__header">
					<h2 class="opex-category__title">HR &amp; Workforce Management</h2>
					<div class="opex-category__line"></div>
				</div>
				<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Roster Management System</h3>
						<p class="opex-scard__desc">Optimize workforce scheduling and shifts with automated resource allocation and compliance tracking.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><circle cx="9" cy="10" r="1.5" fill="currentColor"/><circle cx="15" cy="10" r="1.5" fill="currentColor"/><path d="M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Intelligent HR Assistant</h3>
						<p class="opex-scard__desc">AI-driven support for employees to handle routine HR queries, leave requests, and document retrieval.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Contract Management System</h3>
						<p class="opex-scard__desc">Centralized lifecycle management for employee contracts, amendments, and digital signatures.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

				</div>
			</div>

			<div class="opex-category">
				<div class="opex-category__header">
					<h2 class="opex-category__title">Employee Services</h2>
					<div class="opex-category__line"></div>
				</div>
				<div class="opex-category__grid" style="grid-template-columns: repeat(2, 1fr);">

					<article class="ex-hcard">
						<div class="ex-hcard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M2 20V17L8 11 2 5V2h20v5h-3l-5 4 5 4h3v5H2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<div class="ex-hcard__body">
							<h3 class="ex-hcard__title">Travel &amp; Expense Management</h3>
							<p class="ex-hcard__desc">Streamline booking, approvals, and reimbursements with integrated policy compliance and mobile support.</p>
							<a class="opex-scard__link" href="#">View Details <span aria-hidden="true">&#8250;</span></a>
						</div>
					</article>

					<article class="ex-hcard">
						<div class="ex-hcard__icon">
							<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 10v2a7 7 0 01-14 0v-2M12 19v4M8 23h8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<div class="ex-hcard__body">
							<h3 class="ex-hcard__title">Case Management System</h3>
							<p class="ex-hcard__desc">A unified resolution center for complex employee issues, ensuring timely responses and tracking.</p>
							<a class="opex-scard__link" href="#">View Details <span aria-hidden="true">&#8250;</span></a>
						</div>
					</article>

				</div>
			</div>

			<div class="opex-category">
				<div class="opex-category__header">
					<h2 class="opex-category__title">Procurement &amp; Internal Requests</h2>
					<div class="opex-category__line"></div>
				</div>
				<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">

					<article class="opex-scard">
						<div class="opex-scard__icon opex-scard__icon--badge">
							<svg width="20" height="20" fill="none" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1" stroke="currentColor" stroke-width="2"/><circle cx="20" cy="21" r="1" stroke="currentColor" stroke-width="2"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Purchase Management</h3>
						<p class="opex-scard__desc">Full PR and PO lifecycle automation with multi-level approval hierarchies.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon opex-scard__icon--badge">
							<svg width="20" height="20" fill="none" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M12 18v-6M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">RFP / RFQ Management</h3>
						<p class="opex-scard__desc">Standardized vendor selection processes with automated comparison engines.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon opex-scard__icon--badge">
							<svg width="20" height="20" fill="none" viewBox="0 0 24 24"><path d="M12 9v4M12 17h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Emergency Purchase</h3>
						<p class="opex-scard__desc">Fast-track procurement protocols for critical workplace operational needs.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon opex-scard__icon--badge">
							<svg width="20" height="20" fill="none" viewBox="0 0 24 24"><path d="M3 21h18M3 7v14M21 7v14M6 21V10M10 21V10M14 21V10M18 21V10M12 3L2 7h20L12 3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">CapEx Procurement</h3>
						<p class="opex-scard__desc">Strategic asset acquisition management with long-term budget tracking.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

					<article class="opex-scard">
						<div class="opex-scard__icon opex-scard__icon--badge">
							<svg width="20" height="20" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<h3 class="opex-scard__title">Procurement Assistant</h3>
						<p class="opex-scard__desc">Intelligent guide for employees to navigate internal procurement policies.</p>
						<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
					</article>

				</div>
			</div>

		</div>
	</section>

	<?php hosho_render_quote("Take care of your employees and they'll take care of your business.", 'Richard Branson', 'richard-branson.png', 'motion'); 	?>


	<?php hosho_render_cta('Empower Your Workforce','Build a Better Employee Experience','Help your employees work more efficiently with intelligent HR, workplace, and procurement solutions designed for modern organizations.', 'Contact Us', hosho_page_url('contact'), 'employee-cta.jpg'); ?>

</main>

<?php get_footer(); ?>
