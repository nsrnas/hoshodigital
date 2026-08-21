<?php
/**
 * Template Name: Strategy Session
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content">
	<section class="section contact-page strategy-session-page" id="contact-form">
		<div class="strategy-session-form-wrap">
			<form class="contact-form strategy-session-form" action="#" method="post">
				<div class="field">
					<label for="first-name">First name *</label>
					<input id="first-name" name="first_name" autocomplete="given-name" required>
				</div>
				<div class="field">
					<label for="last-name">Last name *</label>
					<input id="last-name" name="last_name" autocomplete="family-name" required>
				</div>
				<div class="field field-full">
					<label for="email">Email *</label>
					<input id="email" name="email" type="email" autocomplete="email" required>
				</div>
				<div class="field">
					<label for="title">Title *</label>
					<input id="title" name="title" autocomplete="organization-title" required>
				</div>
				<div class="field">
					<label for="organization">Organization *</label>
					<input id="organization" name="organization" autocomplete="organization" required>
				</div>
				<div class="field field-full">
					<label for="phone">Phone *</label>
					<input id="phone" name="phone" type="tel" autocomplete="tel" required>
				</div>
				<div class="field">
					<label for="service">Service interest *</label>
					<select id="service" name="service" required>
						<option value="">Select</option>
						<option>AI</option>
						<option>Automation</option>
						<option>Applications</option>
						<option>Data</option>
						<option>Dynamics 365 Business Central</option>
					</select>
				</div>
				<div class="field">
					<label for="solution">Solution interest *</label>
					<select id="solution" name="solution" required>
						<option value="">Select</option>
						<option>Customer Experience</option>
						<option>Employee Experience</option>
						<option>Operational Experience</option>
					</select>
				</div>
				<div class="field field-full">
					<label for="message">How can we help?</label>
					<textarea id="message" name="message"></textarea>
				</div>
				<div class="consent">
					<input id="consent" name="consent" type="checkbox" required>
					<label for="consent">HOSHŌ DIGITAL will use your information in accordance with our privacy policy and handle it with care wherever it is processed.</label>
				</div>
				<div class="field-full">
					<button class="button strategy-session-form__button" type="submit">Initiate Strategy Session</button>
				</div>
			</form>
		</div>
	</section>
</main>
<?php get_footer(); ?>
