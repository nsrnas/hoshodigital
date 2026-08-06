<?php
/**
 * Template Name: Terms of Use
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content" class="legal-page">
	<style>
		:root {
			--red: #bf1e23;
			--red-dark: #8f0f14;
			--navy: #0f2946;
			--text: #18314e;
			--gray: #6b7787;
		}

		* {
			box-sizing: border-box;
		}

		.legal-page {
			font-family: Inter, sans-serif;
			color: var(--text);
			background: #f7f7f8;
		}

		.legal-page .container {
			max-width: 1160px;
			width: calc(100% - 80px);
			margin: auto;
		}

		/* ============ HERO ============ */

		.legal-hero {
			position: relative;
			height: 420px;
			overflow: hidden;
			background:
				linear-gradient(90deg,
					rgba(94, 8, 10, .92) 0%,
					rgba(150, 20, 22, .8) 55%,
					rgba(180, 40, 35, .55) 100%);
		}

		.legal-hero img {
			position: absolute;
			inset: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
			display: block;
		}

		/* ============ CONTENT ============ */

		.legal-content {
			padding: 70px 0 90px;
		}

		.legal-title {
			text-align: center;
			font-size: 36px;
			font-weight: 800;
			letter-spacing: .5px;
			color: #111;
			text-shadow: 2px 2px 0 rgba(0, 0, 0, .18);
			margin-bottom: 40px;
		}

        .legal-callout {
			display: flex;
			align-items: center;
			border-left: 3px solid var(--red);
			padding: 4px 0 4px 22px;
			margin-bottom: 40px;
		}
        
		.legal-callout {
			border-left: 3px solid var(--red);
			padding: 10px 0 10px 22px;
			margin-bottom: 40px;
		}

		.legal-callout p {
			font-size: 17px;
			font-weight: 700;
			color: #111;
			margin: 0;
			line-height: 1.6;
		}

		.legal-content h2 {
			font-size: 22px;
			font-weight: 700;
			color: #111;
			margin-bottom: 18px;
		}

		.legal-content h2:not(:first-of-type) {
			margin-top: 40px;
		}

		.legal-content p {
			font-size: 16px;
			line-height: 1.7;
			color: #1a1a1a;
			margin-bottom: 18px;
		}

		.legal-content p strong {
			font-weight: 700;
		}

		.legal-contact-box {
			margin-top: 45px;
			border: 1px solid var(--red);
			background: #fff;
			padding: 30px 35px;
		}

		.legal-contact-box h3 {
			font-size: 20px;
			font-weight: 700;
			color: #111;
			margin-bottom: 14px;
		}

		.legal-contact-box p {
			margin-bottom: 0;
		}

		.legal-contact-box a {
			color: var(--red);
			text-decoration: none;
		}
	</style>

	<!-- ============ HERO ============ -->
	<section class="legal-hero">
        <img src="<?php echo esc_url( hosho_asset_url( 'images/legal/terms-of-use.jpg' ) ); ?>" alt="Abstract red podium visual">
	</section>

	<!-- ============ CONTENT ============ -->
	<section class="legal-content">
		<div class="container">
			<h1 class="legal-title">Term of Use</h1>

			<div class="legal-callout">
				<p>
					These Terms of Use ("Terms") govern your access to and
					use of the HOSHO DIGITAL website ("Website"). By
					accessing or using the Website, you agree to be bound by
					these Terms.
				</p>
			</div>

			<h2>Intellectual Property</h2>
			<p>
				All content, including text, graphics, logos, images, audio
				clips, and software on the Website, is the property of
				HOSHO DIGITAL or its licensors and is protected by copyright,
				trademark, and other intellectual property laws. You may not
				reproduce, distribute, modify, transmit, or use any content
				from the Website without prior written permission from
				HOSHO DIGITAL.
			</p>

			<h2>Website Use</h2>
			<p>
				You agree to use the Website for lawful purposes and in a
				manner consistent with these Terms. You will not engage in
				any activity that could damage, disable, or impair the
				Website or interfere with other users' access to the
				Website. You will not attempt to gain unauthorized access to
				any portion of the Website, other users' accounts, or any
				systems or networks connected to the Website
			</p>

			<h2>Privacy</h2>
			<p>
				Your use of the Website is subject to our Privacy Policy,
				which outlines how we collect, use, and protect your
				personal information. By using the Website, you consent to
				the collection and use of your information as described in
				the Privacy Policy.
			</p>

			<h2>Cookies</h2>
			<p>
				The Website may contain links to third-party websites that
				are not owned or controlled by HOSHO DIGITAL. We do not
				endorse or assume any responsibility for the content, privacy
				policies, or practices of these websites.
			</p>
			<p>
				You acknowledge and agree that HOSHO DIGITAL is not
				responsible for any damage or losses incurred as a result of
				your interactions with these third-party websites.
			</p>

			<h2>Disclaimer of Warranties</h2>
			<p>
				The Website is provided on an "as is" and "as available"
				basis. HOSHO DIGITAL makes no warranties or representations,
				express or implied, regarding the Website's accuracy,
				completeness, reliability, or availability.
			</p>
			<p>
				HOSHO DIGITAL disclaims all warranties, including but not
				limited to, warranties of merchantability, fitness for a
				particular purpose, and non-infringement.
			</p>

			<h2>Limitation of Liability</h2>
			<p>
				To the fullest extent permitted by law, HOSHO DIGITAL shall
				not be liable for any direct, indirect, incidental, special,
				or consequential damages arising out of or in connection with
				your use of the Website.
			</p>
			<p>
				You agree to indemnify and hold HOSHO DIGITAL harmless from
				any claims, liabilities, damages, losses, or expenses,
				including legal fees, arising out of or in connection with
				your use of the Website or violation of these Terms.
			</p>

			<h2>Limitation of Liability</h2>
			<p>
				HOSHO DIGITAL reserves the right to modify or update these
				Terms at any time. The most current version of the Terms
				will be posted on the Website. By continuing to use the
				Website after any changes to the Terms, you accept and agree
				to the modified Terms.
			</p>

			<h2>Governing Law and Jurisdiction:</h2>
			<p>
				These Terms shall be governed by and construed by the laws of
				Singapore. Any disputes arising out of or relating to these
				Terms or the use of the Website shall be subject to the
				exclusive jurisdiction of the courts in Singapore.
			</p>

			<div class="legal-contact-box">
				<h3>Contact Us</h3>
				<p>
					If you have any questions or concerns regarding these
					Terms, please contact us at
					<a href="mailto:privacy@hoshodigital.com">privacy@hoshodigital.com</a>.
				</p>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();