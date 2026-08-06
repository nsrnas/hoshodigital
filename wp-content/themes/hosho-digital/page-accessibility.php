<?php
/**
 * Template Name: Accessibility Statement
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
			margin-bottom: 55px;
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
        <img src="<?php echo esc_url( hosho_asset_url( 'images/legal/accessibility.jpg' ) ); ?>" alt="Key and keyring, representing access">
	</section>

	<!-- ============ CONTENT ============ -->
	<section class="legal-content">
		<div class="container">
			<h1 class="legal-title">Accessibility Statement</h1>

			<h2>Accessibility Statement</h2>
			<p>
				HOSHO DIGITAL is committed to ensuring digital accessibility for
				individuals with disabilities. We strive to make our website,
				located at www.hoshodigital.com, accessible to all users,
				including those with visual, hearing, motor, and cognitive
				impairments.
			</p>

			<h2>Accessibility Features</h2>
			<p>
				1. <strong>Clear Structure and Headings:</strong> We use proper
				headings, subheadings, and page structure to help users navigate
				through the website and easily understand the content.
			</p>
			<p>
				2. <strong>Color Contrast:</strong> We ensure sufficient color
				contrast between text and background elements to improve
				readability for users with visual impairments.
			</p>
			<p>
				3. <strong>Compatibility:</strong> We strive to ensure our
				website is compatible with popular assistive technologies, such
				as screen readers and voice recognition software.
			</p>

			<h2>Accessibility Features</h2>
			<p>
				1. <strong>Regular Audits:</strong> We conduct regular
				accessibility audits of our website to identify and address any
				accessibility issues.
			</p>
			<p>
				2. <strong>User Feedback:</strong> We welcome feedback from
				users regarding accessibility concerns. If you encounter any
				difficulties accessing our website or have suggestions for
				improvement, please contact us using the provided contact
				information below.
			</p>
			<p>
				3. <strong>Training:</strong> We provide ongoing training to our
				web development team to enhance their understanding of
				accessibility standards and best practices.
			</p>

			<div class="legal-contact-box">
				<h3>Contact Us</h3>
				<p>
					If you have any questions or need further assistance
					regarding the accessibility of our website, please contact
					us at
					<a href="mailto:privacy@hoshodigital.com">privacy@hoshodigital.com</a>.
					We are dedicated to providing an inclusive online experience
					and are committed to improving the accessibility of our
					website to meet the needs of all users.
				</p>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();