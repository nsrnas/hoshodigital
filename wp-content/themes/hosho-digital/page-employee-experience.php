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
						<h3>How HOSH&#332; Digital Helps</h3>
						<p>We design intelligent, consumer-grade digital experiences for internal processes, connecting siloed systems into unified workflows.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<div class="opex-categories-wrapper">

		<div class="opex-category-block opex-category-block--navy">
			<div class="shell motion">
				<div class="opex-category">
					<div class="opex-category__header">
						<h2 class="opex-category__title">HR &amp; Workforce Management</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(4, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Human Resource Management System (HRMS)</h3>
							<p class="opex-scard__desc">Centralized HR platform managing employee records, attendance, performance, and operational workflows.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 2v4M8 2v4M3 10h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Leave Management</h3>
							<p class="opex-scard__desc">Centralized platform streamlining employee leave requests, approval routing, and workforce availability.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Timesheet Management</h3>
							<p class="opex-scard__desc">Centralized tool capturing employee working hours, project effort, overtime, and attendance.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Appraisal Management</h3>
							<p class="opex-scard__desc">Centralized platform streamlining employee performance reviews, continuous feedback, and skill development.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="M22 21v-2a4 4 0 00-3-3.87M19 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Employee Onboarding and Exit</h3>
							<p class="opex-scard__desc">Centralized platform orchestrating joining formalities, access provisioning, asset handovers, and clearances.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M22 10l-10-5L2 10l10 5 10-5zM6 12v5c0 1.66 2.69 3 6 3s6-1.34 6-3v-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Employee Training</h3>
							<p class="opex-scard__desc">Centralized learning platform managing training programs, skill gaps, assessments, and certifications.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M20 12v10H4V12M2 7h20v5H2zM12 22V7M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7zM12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Employee Benefits Management</h3>
							<p class="opex-scard__desc">Centralized platform managing employee benefit plans, eligibility validation, claims, and enrollment.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Payroll Management</h3>
							<p class="opex-scard__desc">Centralized payroll platform automating salary calculations, tax deductions, allowances, and payslips.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Internship Management</h3>
							<p class="opex-scard__desc">Centralized platform managing intern applications, onboarding, mentor matching, and performance tracking.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Hiring Request Management</h3>
							<p class="opex-scard__desc">Centralized platform managing recruitment requests, budget justifications, approvals, and workforce planning.</p>
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
						<h2 class="opex-category__title">Employee Services &amp; Engagement</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><circle cx="9" cy="10" r="1.5" fill="currentColor"/><circle cx="15" cy="10" r="1.5" fill="currentColor"/><path d="M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent HR Assistant</h3>
							<p class="opex-scard__desc">AI assistant delivering instant answers regarding HR policies, payroll, leave, and benefits.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="currentColor" stroke-width="2"/><path d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Intelligent Self Service Assistant</h3>
							<p class="opex-scard__desc">AI platform enabling employees to complete routine requests and access business information.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Grievance Management</h3>
							<p class="opex-scard__desc">Centralized platform managing employee concerns, automated case routing, and transparent resolutions.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Whistle-Blower Management</h3>
							<p class="opex-scard__desc">Secure, confidential reporting platform managing misconduct cases, investigations, and compliance resolution.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iTicket</h3>
							<p class="opex-scard__desc">Centralized service desk platform automating request routing, prioritization, and internal ticketing.</p>
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
						<h2 class="opex-category__title">Workplace &amp; Business Productivity</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(3, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 01-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Ashistanto</h3>
							<p class="opex-scard__desc">AI workplace assistant automating emails, calendar scheduling, reminders, and daily tasks.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M2 20V17L8 11 2 5V2h20v5h-3l-5 4 5 4h3v5H2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Travel and Expense Management</h3>
							<p class="opex-scard__desc">Centralized platform automating travel bookings, expense submissions, policy checks, and reimbursements.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><path d="M3 9h18M9 21V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Seating Management</h3>
							<p class="opex-scard__desc">Centralized workplace platform managing desk bookings, floor plans, and office space utilization.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Project Management</h3>
							<p class="opex-scard__desc">Centralized workspace managing project timelines, task assignments, resource allocation, and budgets.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1" stroke="currentColor" stroke-width="2"/><circle cx="20" cy="21" r="1" stroke="currentColor" stroke-width="2"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Purchase Request</h3>
							<p class="opex-scard__desc">Centralized portal managing internal purchase requests, budget validations, and approval paths.</p>
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
						<h2 class="opex-category__title">Governance, Risk &amp; Security</h2>
						<div class="opex-category__line"></div>
					</div>
					<div class="opex-category__grid" style="grid-template-columns: repeat(2, 1fr);">

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">Hosho Vault</h3>
							<p class="opex-scard__desc">Encrypted credential management vault providing access control, password monitoring, and security.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

						<article class="opex-scard">
							<div class="opex-scard__icon">
								<svg width="28" height="28" fill="none" viewBox="0 0 24 24"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="currentColor" stroke-width="2"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</div>
							<h3 class="opex-scard__title">iGRC</h3>
							<p class="opex-scard__desc">Centralized governance platform managing enterprise risk, compliance obligations, and vendor audits.</p>
							<a class="opex-scard__link" href="#">Learn More <span aria-hidden="true">&#8594;</span></a>
						</article>

					</div>
				</div>
			</div>
		</div>

	</div>

	<?php hosho_render_quote("Take care of your employees and they'll take care of your business.", 'Richard Branson', 'richard-branson.png', 'motion'); 	?>


	<?php hosho_render_cta('', 'Build a Better Employee Experience', '', 'Contact Us', hosho_page_url('contact'), 'employee-cta.jpg'); ?>

</main>

<?php get_footer(); ?>
