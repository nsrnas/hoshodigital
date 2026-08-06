<?php
/**
 * Template Name: Cookies Policy
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
			background: #1a0407;
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
			border-left: 3px solid var(--red);
			padding: 10px 0 10px 22px;
			margin-bottom: 40px;
		}

		.legal-callout p {
			font-size: 17px;
			font-weight: 700;
			color: #111;
			margin: 0;
		}

		.legal-content h2 {
			font-size: 22px;
			font-weight: 700;
			color: #111;
			margin-bottom: 18px;
		}

		.legal-content h3 {
			font-size: 19px;
			font-weight: 700;
			color: #111;
			margin-bottom: 14px;
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
        <img src="<?php echo esc_url( hosho_asset_url( 'images/legal/cookies-policy.jpg' ) ); ?>" alt="Abstract geometric red background">
	</section>

	<!-- ============ CONTENT ============ -->
	<section class="legal-content">
		<div class="container">
			<h1 class="legal-title">Cookies Policy</h1>

			<div class="legal-callout">
				<p>How We Use Cookies</p>
			</div>

			<h3>We use cookies for the following purposes:</h3>
			<p>
				<strong>Necessary Cookies:</strong> These cookies are necessary
				for the website to function property. They enable you to
				navigate our website and use its features.
			</p>
			<p>
				<strong>Functional Cookies</strong>: Functional cookies help
				perform certain functionalities lke sharing the content of the
				website on social media platforms, collecting feedback, and
				other third-party features.
			</p>
			<p>
				<strong>Analytics Cookies</strong>: Analytics cookies collect
				information about how visitors use our websites, such os the
				pages they visit most frequently and any error messages they
				may encounter. This wil help us improve the performance and
				design of our website.
			</p>
			<p>
				<strong>Performance Cookies</strong>: Performance cookies
				collect information about how visitors use our websites, such
				os the pages they visit most frequently, the time spent on each
				page, and any error messages they may encounter. This
				information helps us analyze and improve the performance and
				design of our website to enhance your browsing experience.
			</p>
			<p>
				<strong>Advertising Cookies</strong>: Marketing cookies to
				deliver personalized advertisements and promotional content
				based an your interests and browsing behavior.
			</p>

			<h2>Third-Party Cookies</h2>
			<p>
				Our website may also use cookies from third-party service
				providers, such as analytis tools or advertising networks.
				These cookies are subject to the respective third parties
				privacy policies, and we have no control over them.
			</p>

			<h2>Managing Cookies</h2>
			<p>
				You con manage and control cookies through your web browser
				settings. You can choose to occept or decline cookies, delete
				existing cookies, or set your browser to notity you when
				cookies ore being ploced on your computer or mobile device.
				Please note that disabling cookes may atfect the tunctionality
				of our website and limit your oocess to certoin foatures.
			</p>

			<h2>Changes to this Cookie Policy</h2>
			<p>
				We may update this Cookie Policy from time to time. Any
				changes will be posted on this page, and the updated pollcy
				will take effect immediately upon posting.
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