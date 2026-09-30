<?php get_header(); ?>

<main id="main-content" class="ashistanto-page">
	<?php
	hosho_render_hero(
		'Ashistanto.',
		'hero-ashistanto.jpg',
		array(
			'class'     => 'page-hero--ashistanto',
			'eyebrow'   => 'AI workplace assistant for Microsoft 365',
			'body'      => array( 'Everyday work, completed through simple voice or text commands.' ),
			'cta_label' => 'Visit Ashistanto',
			'cta_url'   => 'https://ashistanto.com/',
		)
	);
	?>

	<section class="section ashi-intro">
		<div class="shell ashi-intro__grid motion">
			<div>
				<p class="eyebrow">Work without the app switching</p>
				<h2>Say what needs to happen. Ashistanto gets it moving.</h2>
			</div>
			<div class="ashi-intro__copy">
				<p class="lede">Ashistanto is a workplace assistant that performs everyday tasks through natural voice or text commands.</p>
				<p>It connects with Microsoft 365 applications to handle emails, meetings, reminders and Teams interactions, helping employees move through routine work with less effort.</p>
			</div>
		</div>
	</section>

	<section class="section section-navy ashi-command">
		<div class="shell ashi-command__grid">
			<div class="ashi-command__copy motion">
				<p class="eyebrow">One request. Connected action.</p>
				<h2>Turn natural language into completed workplace tasks.</h2>
				<p>Ashistanto understands what the user wants to accomplish, identifies the right workplace action and prepares it across connected Microsoft applications.</p>
				<ul class="ashi-checklist">
					<li>Speak or type naturally</li>
					<li>Review the prepared action</li>
					<li>Confirm before execution</li>
				</ul>
			</div>

			<div class="ashi-console motion" aria-label="Example Ashistanto interaction">
				<div class="ashi-console__bar">
					<span class="ashi-console__brand">ASHISTANTO</span>
					<span class="ashi-console__status"><i aria-hidden="true"></i> Ready</span>
				</div>
				<div class="ashi-console__body">
					<div class="ashi-console__prompt">
						<span>You</span>
						<p>Schedule a project review with the team tomorrow at 10, then send everyone the agenda.</p>
					</div>
					<div class="ashi-console__response">
						<div class="ashi-console__pulse" aria-hidden="true"></div>
						<div>
							<strong>Meeting and email prepared</strong>
							<p>Project Review · Tomorrow, 10:00 AM</p>
						</div>
					</div>
					<div class="ashi-console__actions" aria-hidden="true">
						<span>OUTLOOK</span><span>CALENDAR</span><span>TEAMS</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section ashi-challenges">
		<div class="shell">
			<div class="intro-grid motion">
				<div><p class="eyebrow">The workplace friction</p><h2>Small tasks create a large productivity drag.</h2></div>
				<p>Routine work becomes fragmented when employees need to move repeatedly between Outlook, Calendar, Teams and other applications.</p>
			</div>
			<div class="ashi-challenges__grid motion">
				<article><h3>Constant context switching</h3><p>Employees lose focus while navigating between workplace applications to complete a single task.</p></article>
				<article><h3>Repetitive manual effort</h3><p>Emails, meeting updates and reminders consume time through repeated steps and data entry.</p></article>
				<article><h3>Delays and avoidable errors</h3><p>Disconnected actions make everyday communication slower and increase the chance of missed details.</p></article>
			</div>
		</div>
	</section>

	<section class="section section-mist ashi-capabilities">
		<div class="shell">
			<div class="section-heading motion">
				<div><p class="eyebrow">Core capabilities</p><h2>Everyday work, intelligently orchestrated.</h2></div>
			</div>
			<div class="ashi-capabilities__grid">
				<article class="ashi-capability motion">
					<h3>Conversational Language Understanding</h3>
					<p>Understands natural-language voice and text commands and interprets what the user wants to accomplish.</p>
				</article>
				<article class="ashi-capability motion">
					<h3>Intent Recognition &amp; Execution</h3>
					<p>Converts user requests into appropriate actions across connected workplace applications.</p>
				</article>
				<article class="ashi-capability motion">
					<h3>Email Automation</h3>
					<p>Creates, sends, replies to and manages emails based on simple user instructions.</p>
				</article>
				<article class="ashi-capability motion">
					<h3>Meeting Scheduling Intelligence</h3>
					<p>Creates, updates, reschedules and manages calendar meetings and invitations.</p>
				</article>
			</div>
		</div>
	</section>

	<section class="section ashi-value">
		<div class="shell">
			<div class="intro-grid motion">
				<div><p class="eyebrow">Business value</p><h2>More time for work that needs people.</h2></div>
				<p>Ashistanto removes repetitive interaction from daily workflows while keeping employees in control of what is sent, scheduled or changed.</p>
			</div>
			<div class="ashi-value__grid motion">
				<article><strong>Time Savings</strong><p>Automates repetitive workplace tasks and reduces application switching.</p></article>
				<article><strong>Improved Productivity</strong><p>Enables employees to complete tasks quickly through natural voice and text commands.</p></article>
				<article><strong>Reduced Errors</strong><p>Standardizes routine actions across emails, calendars, meetings and Teams.</p></article>
			</div>
		</div>
	</section>

	<section class="ashi-external">
		<div class="shell ashi-external__inner motion">
			<div>
				<h2>Meet Ashistanto.</h2>
				<p>Explore the live product and see how natural conversation can simplify work across Microsoft 365.</p>
			</div>
			<a class="button" href="https://ashistanto.com/" target="_blank" rel="noopener noreferrer">Visit Ashistanto<span class="button-arrow" aria-hidden="true"></span></a>
		</div>
	</section>
</main>

<?php get_footer(); ?>
