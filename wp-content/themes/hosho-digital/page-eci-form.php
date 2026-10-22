<?php
/**
 * Template Name: ECI Form
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content">
	<section class="section contact-page strategy-session-page eci-form-page" id="eci-form">
		<div class="eci-form-heading">
			<h1>
				<span>Intelligent. Solutions.</span>
				<img src="<?php echo esc_url( hosho_asset_url( 'stamp-red.png' ) ); ?>" alt="保証">
			</h1>
		</div>
		<div class="strategy-session-form-wrap">
			<form class="contact-form strategy-session-form eci-form" action="#" method="post">
				<div class="field">
					<label for="company-name">Company Name *</label>
					<input id="company-name" name="company_name" autocomplete="organization" required>
				</div>
				<div class="field">
					<label for="uen">UEN *</label>
					<input id="uen" name="uen" autocomplete="off" required>
				</div>
				<div class="field">
					<label for="contact-name">Contact Name *</label>
					<input id="contact-name" name="contact_name" autocomplete="name" required>
				</div>
				<div class="field">
					<label for="designation">Designation *</label>
					<input id="designation" name="designation" autocomplete="organization-title" required>
				</div>
				<div class="field">
					<label for="email-address">Email Address *</label>
					<input id="email-address" name="email_address" type="email" autocomplete="email" required>
				</div>
				<div class="field">
					<label for="contact-number">Contact Number *</label>
					<input id="contact-number" name="contact_number" type="tel" autocomplete="tel" required>
				</div>
				<div class="field">
					<label for="singapore-employees">No. of Singapore Employees *</label>
					<select id="singapore-employees" name="singapore_employees" required>
						<option value="">Select</option>
						<option value="1-9">1 - 9</option>
						<option value="10-49">10 - 49</option>
						<option value="50-249">50 - 249</option>
						<option value="250-plus">250+</option>
					</select>
				</div>
				<div class="field">
					<label for="technical-employees">No. of Technical Employees *</label>
					<input id="technical-employees" name="technical_employees" type="number" min="0" step="1" inputmode="numeric" required>
				</div>
				<div class="field field-full">
					<label for="ai-interest">Area of AI interest (Select most relevant) *</label>
					<select id="ai-interest" name="ai_interest" required>
						<option value="">Select</option>
						<option>Operations</option>
						<option>Finance</option>
						<option>Human Resources</option>
						<option>Customer Support</option>
						<option>IT / Service Management</option>
						<option>Compliance Reporting</option>
					</select>
				</div>
				<div class="field">
					<label for="change-management">Digital Change Management Experience *</label>
					<select id="change-management" name="change_management" required>
						<option value="">Select</option>
						<option>Extensive experience</option>
						<option>Some experience</option>
						<option>Limited experience</option>
					</select>
				</div>
				<div class="field">
					<label for="cloud-adoption">Cloud-Based Solutions Adoption *</label>
					<select id="cloud-adoption" name="cloud_adoption" required>
						<option value="">Select</option>
						<option>Already on cloud</option>
						<option>Partially on cloud</option>
						<option>Planning to move to cloud</option>
					</select>
				</div>
				<div class="consent">
					<input id="eci-consent" name="consent" type="checkbox" required>
					<label for="eci-consent">HOSHŌ DIGITAL will use your information in accordance with our privacy policy and handle it with care wherever it is processed.</label>
				</div>
				<div class="field-full">
					<button class="button strategy-session-form__button" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</section>
</main>
<?php get_footer(); ?>
