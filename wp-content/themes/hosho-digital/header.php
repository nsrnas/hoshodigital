<?php
/**
 * Canonical transparent site header.
 *
 * @package Hosho_Digital
 */

$header_action = hosho_header_action();
$is_front_page = function_exists( 'is_front_page' )
	? is_front_page()
	: ( defined( 'HOSHO_PREVIEW_PAGE' ) && 'front-page' === HOSHO_PREVIEW_PAGE );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'hosho-digital' ); ?></a>
<header class="site-header" data-site-header>
	<nav class="nav shell" aria-label="<?php esc_attr_e( 'Main navigation', 'hosho-digital' ); ?>">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'HOSHŌ DIGITAL homepage', 'hosho-digital' ); ?>">
			<img src="<?php echo esc_url( hosho_v9_asset_url( 'assets/logo.webp' ) ); ?>" alt="">
			<span>HOSHŌ DIGITAL</span>
		</a>
		<button class="menu-button" type="button" aria-label="<?php esc_attr_e( 'Open navigation', 'hosho-digital' ); ?>" aria-expanded="false" aria-controls="primary-navigation">
			<span aria-hidden="true"></span>
		</button>
		<div class="primary-navigation" id="primary-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'nav-links',
					'fallback_cb'    => 'hosho_primary_menu_fallback',
					'depth'          => 2,
				)
			);
			?>
		</div>
		<a class="nav-cta" href="<?php echo esc_url( $header_action['url'] ); ?>">
			<?php echo esc_html( $header_action['label'] ); ?>
		</a>
	</nav>
</header>
