<?php
/**
 * Lightweight renderer for the real WordPress templates.
 *
 * Production always runs through WordPress. This router provides only the
 * small API surface needed for local design and responsive QA.
 */

$project_root = dirname( __DIR__ );
$theme_root   = $project_root . '/wp-content/themes/hosho-digital';
$request_path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
$asset_path   = realpath( $project_root . $request_path );

if ( $asset_path && str_starts_with( $asset_path, realpath( $project_root ) ) && is_file( $asset_path ) ) {
	return false;
}

$preview_pages = array( 'front-page', 'approach', 'philosophy', 'privacy-policy', 'accessibility', 'terms-of-use', 'cookies', 'careers', 'sustainability', 'press', 'contact', 'company', 'ai-quick-win', 'eci' );
$segments      = array_values( array_filter( explode( '/', trim( $request_path, '/' ) ) ) );
$preview_page  = $segments[0] ?? 'front-page';

if ( ! in_array( $preview_page, $preview_pages, true ) ) {
	http_response_code( 404 );
	$preview_page = 'front-page';
}

define( 'ABSPATH', $project_root . '/' );
define( 'HOSHO_PREVIEW', true );
define( 'HOSHO_PREVIEW_PAGE', $preview_page );
define( 'HOSHO_THEME_ROOT', $theme_root );

$preview_styles = array();
$preview_scripts = array();

class WP_Post {}

function add_action() {}
function add_filter() {}
function add_theme_support() {}
function register_nav_menus() {}
function wp_get_theme() {
	return new class() {
		public function get() {
			return '0.9.0';
		}
	};
}
function get_theme_file_uri( $path = '' ) {
	return '/wp-content/themes/hosho-digital/' . ltrim( $path, '/' );
}
function get_theme_file_path( $path = '' ) {
	return HOSHO_THEME_ROOT . '/' . ltrim( $path, '/' );
}
function get_stylesheet_uri() {
	return get_theme_file_uri( 'style.css' );
}
function wp_enqueue_style( $handle, $source ) {
	global $preview_styles;
	$preview_styles[ $handle ] = $source;
}
function wp_enqueue_script( $handle, $source ) {
	global $preview_scripts;
	$preview_scripts[ $handle ] = $source;
}
function is_page( $pages ) {
	return in_array( HOSHO_PREVIEW_PAGE, (array) $pages, true );
}
function get_page_by_path() {
	return null;
}
function get_permalink() {
	return '/';
}
function home_url( $path = '/' ) {
	return '/' . ltrim( $path, '/' );
}
function esc_url( $value ) {
	return htmlspecialchars( $value, ENT_QUOTES, 'UTF-8' );
}
function esc_attr( $value ) {
	return htmlspecialchars( $value, ENT_QUOTES, 'UTF-8' );
}
function esc_html( $value ) {
	return htmlspecialchars( $value, ENT_QUOTES, 'UTF-8' );
}
function __( $value ) {
	return $value;
}
function esc_html_e( $value ) {
	echo esc_html( $value );
}
function esc_attr_e( $value ) {
	echo esc_attr( $value );
}
function language_attributes() {
	echo 'lang="en"';
}
function bloginfo( $key ) {
	if ( 'charset' === $key ) echo 'UTF-8';
}
function body_class( $classes = array() ) {
	$classes = hosho_body_classes( (array) $classes );
	printf( 'class="%s"', esc_attr( implode( ' ', array_unique( $classes ) ) ) );
}
function wp_body_open() {}
function wp_nav_menu() {
	hosho_primary_menu_fallback();
}
function wp_head() {
	global $preview_styles;
	$titles = array(
		'front-page'    => 'Home',
		'approach'      => 'Approach',
		'philosophy' => 'Approach Philosophy',
		'privacy-policy' => 'Privacy Policy',
		'accessibility' => 'Accessibility Statement',
		'terms-of-use'  => 'Terms of Use',
		'cookies'       => 'Cookies Policy',
		'careers'       => 'Careers',
		'sustainability' => 'Sustainability',
		'press'         => 'Press',
		'contact'       => 'Contact',
		'company'       => 'Company',
		'ai-quick-win'  => 'AI Quick Win',
		'eci'           => 'Enterprise Compute Initiative',
	);
	$title = ( $titles[ HOSHO_PREVIEW_PAGE ] ?? ucwords( str_replace( '-', ' ', HOSHO_PREVIEW_PAGE ) ) ) . ' | HOSHŌ DIGITAL';
	printf( '<title>%s</title>', esc_html( $title ) );
	hosho_javascript_bootstrap();
	hosho_meta_description();
	hosho_enqueue_assets();
	foreach ( $preview_styles as $source ) {
		printf( '<link rel="stylesheet" href="%s">', esc_url( $source ) );
	}
}
function wp_footer() {
	global $preview_scripts;
	foreach ( $preview_scripts as $source ) {
		printf( '<script src="%s"></script>', esc_url( $source ) );
	}
}
function get_header() {
	require HOSHO_THEME_ROOT . '/header.php';
}
function get_footer() {
	require HOSHO_THEME_ROOT . '/footer.php';
}

require HOSHO_THEME_ROOT . '/functions.php';
if ( 'front-page' === HOSHO_PREVIEW_PAGE ) {
	require HOSHO_THEME_ROOT . '/front-page.php';
} elseif ( 'philosophy' === HOSHO_PREVIEW_PAGE ) {
	require HOSHO_THEME_ROOT . '/page-approach-philosophy.php';
} else {
	require HOSHO_THEME_ROOT . '/page-' . HOSHO_PREVIEW_PAGE . '.php';
}
