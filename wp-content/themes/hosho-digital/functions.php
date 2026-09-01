<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

function hosho_pages() {
  return array(
    'home' => 'Home',
    'privacy-policy' => 'Privacy Policy', 'accessibility' => 'Accessibility Statement', 'terms-of-use' => 'Terms of Use', 'cookies' => 'Cookies Policy',
    'careers' => 'Careers', 'esg' => 'ESG', 'sustainability' => 'ESG', 'media' => 'Media', 'press' => 'Media',
    'contact' => 'Contact', 'company' => 'Company', 'ai-quick-win' => 'AI Quick Win', 'eci' => 'Enterprise Compute Initiative',
    'solutions' => 'Solutions', 'operational-experience' => 'Operational Intelligence', 'customer-experience' => 'Customer Intelligence', 'employee-experience' => 'Workforce Intelligence',
    'approach' => 'Approach', 'innovation' => 'Innovation', 'assurance' => 'Assurance', 'erp' => 'ERP', 'optimization' => 'Optimization', 'ai' => 'AI', 'strategy-session' => 'Strategy Session',
  );
}
function hosho_current_page() {
  if ( is_front_page() ) return 'home';
  foreach ( array_keys( hosho_pages() ) as $slug ) { if ( is_page( $slug ) ) return $slug; }
  return '';
}
function hosho_theme_setup() {
  add_theme_support( 'title-tag' ); add_theme_support( 'post-thumbnails' );
  register_nav_menus( array( 'primary' => __( 'Primary Navigation', 'hosho-digital' ) ) );
}
add_action( 'after_setup_theme', 'hosho_theme_setup' );
function hosho_asset_url( $name ) { return get_theme_file_uri( 'assets/images/' . ltrim( $name, '/' ) ); }
function hosho_page_url( $slug ) {
  $page = get_page_by_path( $slug ); return $page instanceof WP_Post ? get_permalink( $page ) : home_url( '/' . trim( $slug, '/' ) . '/' );
}
function hosho_enqueue_assets() {
  wp_enqueue_style( 'hosho-fonts', 'https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap' );
  wp_enqueue_style( 'hosho-theme', get_stylesheet_uri(), array(), (string) filemtime( get_theme_file_path( 'style.css' ) ) );
  wp_enqueue_script( 'hosho-theme', get_theme_file_uri( 'assets/site.js' ), array(), (string) filemtime( get_theme_file_path( 'assets/site.js' ) ), true );
}
add_action( 'wp_enqueue_scripts', 'hosho_enqueue_assets' );
function hosho_body_classes( $classes ) { $classes[] = 'hosho-remade'; $classes[] = 'page-' . hosho_current_page(); return $classes; }
add_filter( 'body_class', 'hosho_body_classes' );
function hosho_header_action() {
  $actions = array(
    'privacy-policy' => array( 'Contact us', hosho_page_url( 'contact' ) ),
    'accessibility'  => array( 'Contact us', hosho_page_url( 'contact' ) ),
    'terms-of-use'   => array( 'Contact us', hosho_page_url( 'contact' ) ),
    'cookies'        => array( 'Contact us', hosho_page_url( 'contact' ) ),
    'careers' => array( 'View opportunities', home_url( '/job-opportunities/' ) ), 'esg' => array( 'Our commitments', '#commitments' ), 'sustainability' => array( 'Our commitments', '#commitments' ),
    'company' => array( 'Get in touch', hosho_page_url( 'contact' ) ), 'ai-quick-win' => array( 'Register interest', 'https://hoshodigital.com/ai-quick-win-form/' ),
    'eci' => array( 'Register interest', 'https://hoshodigital.com/eci-form/' ),
    'solutions' => array( 'Get in touch', hosho_page_url( 'contact' ) ),
    'operational-experience' => array( 'Get in touch', hosho_page_url( 'contact' ) ),
    'customer-experience' => array( 'Get in touch', hosho_page_url( 'contact' ) ),
    'employee-experience' => array( 'Get in touch', hosho_page_url( 'contact' ) ),
  );
  return $actions[ hosho_current_page() ] ?? array( 'Get in touch', hosho_page_url( 'contact' ) );
}
function hosho_navigation_items() {
  return array(
    array(
      'label' => 'Programmes',
      'slug' => 'eci',
      'children' => array(
        array( 'label' => 'Enterprise Compute Initiative', 'slug' => 'eci' ),
        array( 'label' => 'AI Quick Win', 'slug' => 'ai-quick-win' ),
      ),
    ),
    array(
      'label' => 'Approach',
      'slug' => 'approach',
      'children' => array(
        array( 'label' => 'Innovation', 'slug' => 'innovation' ),
        array( 'label' => 'Optimization', 'slug' => 'optimization' ),
        array( 'label' => 'Assurance', 'slug' => 'assurance' ),
      ),
    ),
    array(
      'label' => 'Solutions',
      'slug' => 'solutions',
      'children' => array(
        array( 'label' => 'Operational Intelligence', 'slug' => 'operational-experience' ),
        array( 'label' => 'Customer Intelligence', 'slug' => 'customer-experience' ),
        array( 'label' => 'Workforce Intelligence', 'slug' => 'employee-experience' ),
      ),
    ),
    array(
      'label' => 'Company',
      'slug' => 'company',
      'children' => array(
        array( 'label' => 'Careers', 'slug' => 'careers' ),
        array( 'label' => 'ESG', 'slug' => 'esg', 'aliases' => array( 'sustainability' ) ),
        array( 'label' => 'Media', 'slug' => 'media', 'aliases' => array( 'press' ) ),
      ),
    ),
    array( 'label' => 'Contact', 'slug' => 'contact' ),
  );
}

function hosho_navigation_item_is_current( $item, $current ) {
  $matches = array_merge( array( $item['slug'] ), $item['aliases'] ?? array() );
  return in_array( $current, $matches, true );
}

function hosho_primary_menu_fallback() {
  $current = hosho_current_page(); ?>
  <ul class="nav-links" role="list">
    <?php foreach ( hosho_navigation_items() as $item ) :
      $children = $item['children'] ?? array();
      $is_exact = hosho_navigation_item_is_current( $item, $current );
      $is_parent = $is_exact;
      foreach ( $children as $child ) {
        if ( hosho_navigation_item_is_current( $child, $current ) ) $is_parent = true;
      }
      $classes = array( 'menu-item' );
      if ( $children ) $classes[] = 'menu-item-has-children';
      if ( $is_exact ) $classes[] = 'current-menu-item';
      elseif ( $is_parent ) $classes[] = 'current-menu-ancestor'; ?>
      <li class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
        <a href="<?php echo esc_url( hosho_page_url( $item['slug'] ) ); ?>"<?php echo $is_exact ? ' aria-current="page"' : ''; ?>><?php echo esc_html( $item['label'] ); ?></a>
        <?php if ( $children ) : ?>
          <ul class="sub-menu" role="list" aria-label="<?php echo esc_attr( $item['label'] ); ?>">
            <?php foreach ( $children as $child ) :
              $child_current = hosho_navigation_item_is_current( $child, $current ); ?>
              <li class="menu-item<?php echo $child_current ? ' current-menu-item' : ''; ?>"><a href="<?php echo esc_url( hosho_page_url( $child['slug'] ) ); ?>"<?php echo $child_current ? ' aria-current="page"' : ''; ?>><?php echo esc_html( $child['label'] ); ?></a></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul><?php
}
function hosho_render_hero( $headline, $image, $options = array() ) {
  $options = array_merge(
    array(
      'class' => '',
      'eyebrow' => '',
      'body' => array(),
      'actions_html' => '',
      'cta_label' => '',
      'cta_url' => '',
    ),
    $options
  );
  $classes = trim( 'page-hero ' . $options['class'] ); ?>
  <section class="<?php echo esc_attr( $classes ); ?>" data-hero>
    <div class="page-hero__media" style="background-image:url('<?php echo esc_url( hosho_asset_url( $image ) ); ?>')"></div>
    <div class="page-hero__content shell">
      <?php if ( $options['eyebrow'] ) : ?><p class="page-hero__eyebrow"><?php echo esc_html( $options['eyebrow'] ); ?></p><?php endif; ?>
      <h1><?php echo wp_kses_post( strtoupper( $headline ) ); ?></h1>
      <?php if ( $options['body'] ) : ?>
        <div class="page-hero__body">
          <?php foreach ( (array) $options['body'] as $line ) : ?><p><?php echo esc_html( $line ); ?></p><?php endforeach; ?>
        </div>
      <?php endif; ?>
      <?php if ( $options['actions_html'] ) : ?>
        <div class="page-hero__actions">
          <?php echo wp_kses_post( $options['actions_html'] ); ?>
        </div>
      <?php endif; ?>
      <?php if ( $options['cta_label'] && $options['cta_url'] ) : ?><a class="button page-hero__cta" href="<?php echo esc_url( $options['cta_url'] ); ?>"><?php echo esc_html( $options['cta_label'] ); ?><span class="button-arrow" aria-hidden="true"></span></a><?php endif; ?>
    </div>
    <span class="page-hero__edge" aria-hidden="true"></span>
  </section><?php
}
function hosho_render_quote( $quote, $name, $image, $class = '' ) { ?>
  <section class="quote-band <?php echo esc_attr( $class ); ?>">
    <div class="quote-band__copy motion">
      <span class="quote-band__mark" aria-hidden="true">&ldquo;</span>
      <blockquote><?php echo wp_kses_post( $quote ); ?></blockquote>
      <cite><?php echo esc_html( $name ); ?> </cite>
    </div>
    <div class="quote-band__portrait"><img loading="lazy" decoding="async" src="<?php echo esc_url( hosho_asset_url( $image ) ); ?>" alt="Portrait of <?php echo esc_attr( $name ); ?>"></div>
  </section><?php
}
function hosho_render_cta( $eyebrow, $title, $body, $label, $url, $image ) { ?>
  <?php $concise = empty( $body ) || in_array( hosho_current_page(), array( 'careers', 'sustainability', 'press', 'contact', 'company', 'ai-quick-win', 'eci', 'solutions', 'operational-experience', 'customer-experience', 'employee-experience', 'innovation', 'front-page', 'assurance', 'approach', 'erp' ), true ); ?>
  <section class="cta-panel<?php echo $concise ? ' cta-panel--concise' : ''; ?>" style="background-image:url('<?php echo esc_url( hosho_asset_url( $image ) ); ?>')"><div class="cta-panel__inner shell motion">
    <?php if ( $concise ) : ?><h2><?php echo wp_kses_post( $title ); ?></h2><?php if(!empty($body)) : ?><p><?php echo esc_html( $body ); ?></p><?php endif; ?><a class="button" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?><span class="button-arrow" aria-hidden="true"></span></a><?php else : ?><p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p><h2><?php echo wp_kses_post( $title ); ?></h2><p><?php echo esc_html( $body ); ?></p><a class="button" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?><span class="button-arrow" aria-hidden="true"></span></a><?php endif; ?></div></section><?php
}
