<?php
/**
 * Theme bootstrap and shared helpers.
 *
 * @package Hosho_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Approved V9 page configuration.
 *
 * @return array<string, array<string, mixed>>
 */
function hosho_v9_pages() {
	return array(
		'privacy-policy' => array(
			'classes'     => array( 'page-legal', 'page-privacy-policy' ),
			'styles'      => array( 'styles.css' ),
			'scripts'     => array(),
			'description' => 'Read how HOSHŌ DIGITAL collects, uses, shares and protects personal data.',
		),
		'accessibility'  => array(
			'classes'     => array( 'page-legal', 'page-accessibility' ),
			'styles'      => array( 'styles.css' ),
			'scripts'     => array(),
			'description' => 'Learn how HOSHŌ DIGITAL supports accessibility and inclusive digital experiences.',
		),
		'terms-of-use'   => array(
			'classes'     => array( 'page-legal', 'page-terms-of-use' ),
			'styles'      => array( 'styles.css' ),
			'scripts'     => array(),
			'description' => 'Read the terms that govern use of the HOSHŌ DIGITAL website.',
		),
		'cookies'        => array(
			'classes'     => array( 'page-legal', 'page-cookies' ),
			'styles'      => array( 'styles.css' ),
			'scripts'     => array(),
			'description' => 'See how HOSHŌ DIGITAL uses cookies and similar technologies.',
		),
		'careers'       => array(
			'classes'     => array( 'page-careers', 'page-careers-recolor', 'editorial-v3' ),
			'styles'      => array( 'styles.css', 'editorial-v3.css', 'recontent-v9.css' ),
			'scripts'     => array( 'script.js', 'editorial-v3.js' ),
			'description' => 'Build your career at HOSHŌ DIGITAL and help organizations adopt enterprise AI with confidence.',
		),
		'sustainability' => array(
			'classes'     => array( 'page-sustainability', 'editorial-v3' ),
			'styles'      => array( 'sustainability/styles.css', 'editorial-v3.css', 'recontent-v9.css' ),
			'scripts'     => array( 'sustainability/script.js', 'editorial-v3.js' ),
			'description' => 'How HOSHŌ DIGITAL approaches environmental, social and governance commitments.',
		),
		'press'         => array(
			'classes'     => array( 'page-press', 'editorial-v3' ),
			'styles'      => array( 'press/styles.css', 'editorial-v3.css', 'recontent-v9.css' ),
			'scripts'     => array( 'press/script.js', 'editorial-v3.js' ),
			'description' => 'Media contact information for HOSHŌ DIGITAL.',
		),
		'contact'       => array(
			'classes'     => array( 'page-contact', 'editorial-v3' ),
			'styles'      => array( 'contact/styles.css', 'editorial-v3.css', 'recontent-v9.css' ),
			'scripts'     => array( 'contact/script.js', 'editorial-v3.js' ),
			'description' => 'Get in touch with HOSHŌ DIGITAL.',
		),
		'company'       => array(
			'classes'     => array( 'page-company' ),
			'styles'      => array( 'company/styles.css', 'recontent-v9.css' ),
			'scripts'     => array( 'company/script.js' ),
			'description' => 'Welcome to HOSHŌ DIGITAL, your digital guarantee for responsible enterprise innovation.',
		),
		'ai-quick-win'  => array(
			'classes'     => array( 'page-quickwin', 'editorial-v3' ),
			'styles'      => array( 'ai-quick-win/styles.css', 'ai-quick-win/ai-quick-win.css', 'editorial-v3.css', 'recontent-v9.css' ),
			'scripts'     => array( 'ai-quick-win/script.js', 'editorial-v3.js' ),
			'description' => 'Outcome-driven Generative AI packages for digitally ready Singapore SMEs.',
		),
		'eci'           => array(
			'classes'     => array( 'page-eci', 'editorial-v3' ),
			'styles'      => array( 'eci/styles.css', 'eci/eci.css', 'editorial-v3.css', 'eci/eci-framework-fix.css', 'recontent-v9.css' ),
			'scripts'     => array( 'eci/script.js', 'editorial-v3.js' ),
			'description' => 'Accelerate enterprise AI adoption with HOSHŌ DIGITAL, Microsoft and Singapore’s Enterprise Compute Initiative.',
		),
		'approach' => array(
			'classes'     => array( 'page-approach' ),
			'styles'      => array( 'styles.css' ),
			'scripts'     => array(),
			'description' => 'Read how HOSHŌ DIGITAL collects, uses, shares and protects personal data.',
		),
		'approach-philosophy' => array(
			'classes'     => array( 'page-approach-philosophy' ),
			'styles'      => array( 'styles.css' ),
			'scripts'     => array(),
			'description' => 'Explore the HOSHŌ DIGITAL approach philosophy and delivery framework.',
		),
		'erp' => array(
			'classes'     => array( 'page-approach-erp' ),
			'styles'      => array( 'styles.css' ),
			'scripts'     => array(),
			'description' => 'Explore the HOSHŌ DIGITAL approach philosophy and delivery framework.',
		),
		'ams' => array(
			'classes'     => array( 'page-approach-ams' ),
			'styles'      => array( 'styles.css' ),
			'scripts'     => array(),
			'description' => 'Explore the HOSHŌ DIGITAL approach philosophy and delivery framework.',
		),
	);
}

/**
 * Return the active approved V9 page slug.
 *
 * @return string
 */
function hosho_current_v9_page() {
	foreach ( array_keys( hosho_v9_pages() ) as $slug ) {
		if ( is_page( $slug ) ) {
			return $slug;
		}
	}

	return '';
}

/** Register theme features and menu locations. */
function hosho_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array( 'primary' => __( 'Primary Navigation', 'hosho-digital' ) ) );
}
add_action( 'after_setup_theme', 'hosho_theme_setup' );

/**
 * Return a cache-busting version for a local theme asset.
 *
 * @param string $relative_path Path relative to the theme root.
 * @return string
 */
function hosho_asset_version( $relative_path ) {
	$path = get_theme_file_path( $relative_path );
	return file_exists( $path ) ? (string) filemtime( $path ) : wp_get_theme()->get( 'Version' );
}

/** Return a theme asset URL. */
function hosho_asset_url( $relative_path ) {
	return get_theme_file_uri( 'assets/' . ltrim( $relative_path, '/' ) );
}

/** Return a URL inside the mirrored V9 design package. */
function hosho_v9_asset_url( $relative_path ) {
	return hosho_asset_url( 'v9/' . ltrim( $relative_path, '/' ) );
}

/** Resolve a WordPress page URL while keeping a setup-safe fallback. */
function hosho_page_url( $slug ) {
	$page = get_page_by_path( $slug );
	return $page instanceof WP_Post ? get_permalink( $page ) : home_url( '/' . trim( $slug, '/' ) . '/' );
}

/** Enqueue only the styles and scripts used by the current approved page. */
function hosho_enqueue_assets() {
	$slug  = hosho_current_v9_page();
	$pages = hosho_v9_pages();

	wp_enqueue_style(
		'hosho-fonts',
		'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap',
		array(),
		null
	);

	if ( ! $slug || ! isset( $pages[ $slug ] ) ) {
		wp_enqueue_style(
			'hosho-v9-shell',
			hosho_v9_asset_url( 'styles.css' ),
			array( 'hosho-fonts' ),
			hosho_asset_version( 'assets/v9/styles.css' )
		);
		wp_enqueue_style(
			'hosho-v9-wordpress',
			hosho_asset_url( 'css/v9-wordpress.css' ),
			array( 'hosho-v9-shell' ),
			hosho_asset_version( 'assets/css/v9-wordpress.css' )
		);
		wp_enqueue_style(
			'hosho-brand-shell-v10',
			hosho_v9_asset_url( 'brand-shell-v10.css' ),
			array( 'hosho-v9-wordpress' ),
			hosho_asset_version( 'assets/v9/brand-shell-v10.css' )
		);
		wp_enqueue_style(
			'hosho-v9-motion',
			hosho_asset_url( 'css/v9-motion.css' ),
			array( 'hosho-brand-shell-v10' ),
			hosho_asset_version( 'assets/css/v9-motion.css' )
		);
		return;
	}

	$dependencies = array( 'hosho-fonts' );
	foreach ( $pages[ $slug ]['styles'] as $index => $file ) {
		$handle = 'hosho-v9-' . $slug . '-' . $index;
		wp_enqueue_style(
			$handle,
			hosho_v9_asset_url( $file ),
			$dependencies,
			hosho_asset_version( 'assets/v9/' . $file )
		);
		$dependencies = array( $handle );
	}

	wp_enqueue_style(
		'hosho-v9-wordpress',
		hosho_asset_url( 'css/v9-wordpress.css' ),
		$dependencies,
		hosho_asset_version( 'assets/css/v9-wordpress.css' )
	);
	wp_enqueue_style(
		'hosho-brand-shell-v10',
		hosho_v9_asset_url( 'brand-shell-v10.css' ),
		array( 'hosho-v9-wordpress' ),
		hosho_asset_version( 'assets/v9/brand-shell-v10.css' )
	);
	wp_enqueue_style(
		'hosho-v9-motion',
		hosho_asset_url( 'css/v9-motion.css' ),
		array( 'hosho-brand-shell-v10' ),
		hosho_asset_version( 'assets/css/v9-motion.css' )
	);

	$script_dependencies = array();
	foreach ( $pages[ $slug ]['scripts'] as $index => $file ) {
		$handle = 'hosho-v9-' . $slug . '-script-' . $index;
		wp_enqueue_script(
			$handle,
			hosho_v9_asset_url( $file ),
			$script_dependencies,
			hosho_asset_version( 'assets/v9/' . $file ),
			true
		);
		$script_dependencies = array( $handle );
	}

	wp_enqueue_script(
		'hosho-v9-motion',
		hosho_asset_url( 'js/v9-motion.js' ),
		$script_dependencies,
		hosho_asset_version( 'assets/js/v9-motion.js' ),
		true
	);
	wp_enqueue_script(
		'hosho-brand-shell-v10',
		hosho_v9_asset_url( 'brand-shell-v10.js' ),
		array( 'hosho-v9-motion' ),
		hosho_asset_version( 'assets/v9/brand-shell-v10.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hosho_enqueue_assets' );

/** Add the design-system classes expected by each source page. */
function hosho_body_classes( $classes ) {
	$slug  = hosho_current_v9_page();
	$pages = hosho_v9_pages();
	$classes[] = 'hosho-v9-wordpress';

	if ( $slug && isset( $pages[ $slug ] ) ) {
		$classes = array_merge( $classes, $pages[ $slug ]['classes'] );
		$classes[] = 'hosho-page-' . $slug;
	}

	return array_values( array_unique( $classes ) );
}
add_filter( 'body_class', 'hosho_body_classes' );

/** Add preconnect hints for the hosted typeface. */
function hosho_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = 'https://fonts.googleapis.com';
		$urls[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous' );
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'hosho_resource_hints', 10, 2 );

/** Mark JavaScript-capable documents before styles are evaluated. */
function hosho_javascript_bootstrap() {
	echo "<script>document.documentElement.classList.add('has-js');</script>\n";
}
add_action( 'wp_head', 'hosho_javascript_bootstrap', 0 );

/** Return the correct page-level header action. */
function hosho_header_action() {
	$slug = hosho_current_v9_page();
	$actions = array(
		'privacy-policy' => array( 'label' => 'Contact us', 'url' => hosho_page_url( 'contact' ) ),
		'accessibility'  => array( 'label' => 'Contact us', 'url' => hosho_page_url( 'contact' ) ),
		'terms-of-use'   => array( 'label' => 'Contact us', 'url' => hosho_page_url( 'contact' ) ),
		'cookies'        => array( 'label' => 'Contact us', 'url' => hosho_page_url( 'contact' ) ),
		'careers'       => array( 'label' => 'View opportunities', 'url' => '#opportunities' ),
		'sustainability' => array( 'label' => 'Our commitments', 'url' => '#commitments' ),
		'press'         => array( 'label' => 'Email media team', 'url' => 'mailto:media@hoshodigital.com' ),
		'contact'       => array( 'label' => 'Start a conversation', 'url' => '#contact-form' ),
		'company'       => array( 'label' => 'Get in touch', 'url' => hosho_page_url( 'contact' ) ),
		'ai-quick-win'  => array( 'label' => 'Register interest', 'url' => 'https://hoshodigital.com/ai-quick-win-form/' ),
		'eci'           => array( 'label' => 'Register interest', 'url' => 'https://hoshodigital.com/eci-form/' ),
	);

	return $actions[ $slug ] ?? array( 'label' => 'Get in touch', 'url' => hosho_page_url( 'contact' ) );
}

/** Output the fallback primary navigation before a menu is configured. */
function hosho_primary_menu_fallback() {
	?>
	<ul class="nav-links">
		<li class="menu-item menu-item-has-children">
			<a href="<?php echo esc_url( hosho_page_url( 'eci' ) ); ?>">Programmes</a>
			<ul class="sub-menu">
				<li><a href="<?php echo esc_url( hosho_page_url( 'eci' ) ); ?>">Enterprise Compute Initiative</a></li>
				<li><a href="<?php echo esc_url( hosho_page_url( 'ai-quick-win' ) ); ?>">AI Quick Win</a></li>
			</ul>
		</li>
		<li class="menu-item menu-item-has-children">
			<a href="<?php echo esc_url( hosho_page_url( 'approach' ) ); ?>">Approach</a>
			<ul class="sub-menu">
				<li><a href="<?php echo esc_url( hosho_page_url( 'approach-philosophy' ) ); ?>">Philosophy</a></li>
				<li><a href="<?php echo esc_url( hosho_page_url( 'ai' ) ); ?>">AI</a></li>
				<li><a href="<?php echo esc_url( hosho_page_url( 'ams' ) ); ?>">AMS</a></li>
				<li><a href="<?php echo esc_url( hosho_page_url( 'erp' ) ); ?>">ERP</a></li>
			</ul>
		</li>
		<li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>">Solutions</a></li>
		<li class="menu-item menu-item-has-children">
			<a href="<?php echo esc_url( hosho_page_url( 'company' ) ); ?>">Company</a>
			<ul class="sub-menu">
				<li><a href="<?php echo esc_url( hosho_page_url( 'careers' ) ); ?>">Careers</a></li>
				<li><a href="<?php echo esc_url( hosho_page_url( 'sustainability' ) ); ?>">Sustainability</a></li>
				<li><a href="<?php echo esc_url( hosho_page_url( 'press' ) ); ?>">Press</a></li>
			</ul>
		</li>
		<li><a href="<?php echo esc_url( hosho_page_url( 'contact' ) ); ?>">Contact</a></li>
	</ul>
	<?php
}

/** Output a page-specific description without requiring an SEO plugin. */
function hosho_meta_description() {
	$slug  = hosho_current_v9_page();
	$pages = hosho_v9_pages();
	if ( $slug && isset( $pages[ $slug ]['description'] ) ) {
		printf( '<meta name="description" content="%s">' . "\n", esc_attr( $pages[ $slug ]['description'] ) );
	}
}
add_action( 'wp_head', 'hosho_meta_description', 1 );
