<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

function hosho_pages() {
  return array(
    'careers' => 'Careers', 'sustainability' => 'Sustainability', 'press' => 'Press',
    'contact' => 'Contact', 'company' => 'Company', 'ai-quick-win' => 'AI Quick Win', 'eci' => 'Enterprise Compute Initiative',
  );
}
function hosho_current_page() {
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
  wp_enqueue_style( 'hosho-theme', get_stylesheet_uri() );
  wp_enqueue_script( 'hosho-theme', get_theme_file_uri( 'assets/site.js' ), array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'hosho_enqueue_assets' );
function hosho_body_classes( $classes ) { $classes[] = 'hosho-remade'; $classes[] = 'page-' . hosho_current_page(); return $classes; }
add_filter( 'body_class', 'hosho_body_classes' );
function hosho_header_action() {
  $actions = array(
    'careers' => array( 'View opportunities', '#opportunities' ), 'sustainability' => array( 'Our commitments', '#commitments' ),
    'press' => array( 'Email media team', 'mailto:media@hoshodigital.com' ), 'contact' => array( 'Start a conversation', '#contact-form' ),
    'company' => array( 'Get in touch', hosho_page_url( 'contact' ) ), 'ai-quick-win' => array( 'Register interest', 'https://hoshodigital.com/ai-quick-win-form/' ),
    'eci' => array( 'Register interest', 'https://hoshodigital.com/eci-form/' ),
  );
  return $actions[ hosho_current_page() ] ?? array( 'Get in touch', hosho_page_url( 'contact' ) );
}
function hosho_primary_menu_fallback() { ?>
  <ul class="nav-links">
    <li class="menu-item-has-children"><a href="<?php echo esc_url( hosho_page_url( 'eci' ) ); ?>">Programmes</a><ul class="sub-menu"><li><a href="<?php echo esc_url( hosho_page_url( 'eci' ) ); ?>">Enterprise Compute Initiative</a></li><li><a href="<?php echo esc_url( hosho_page_url( 'ai-quick-win' ) ); ?>">AI Quick Win</a></li></ul></li>
    <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li><li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>">Solutions</a></li>
    <li class="menu-item-has-children"><a href="<?php echo esc_url( hosho_page_url( 'company' ) ); ?>">Company</a><ul class="sub-menu"><li><a href="<?php echo esc_url( hosho_page_url( 'careers' ) ); ?>">Careers</a></li><li><a href="<?php echo esc_url( hosho_page_url( 'sustainability' ) ); ?>">Sustainability</a></li><li><a href="<?php echo esc_url( hosho_page_url( 'press' ) ); ?>">Press</a></li></ul></li>
    <li><a href="<?php echo esc_url( hosho_page_url( 'contact' ) ); ?>">Contact</a></li>
  </ul><?php
}
function hosho_render_hero( $headline, $image, $options = array() ) {
  $options = array_merge(
    array(
      'class' => '',
      'eyebrow' => '',
      'body' => array(),
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
      <h1><?php echo wp_kses_post( $headline ); ?></h1>
      <?php if ( $options['body'] ) : ?>
        <div class="page-hero__body">
          <?php foreach ( (array) $options['body'] as $line ) : ?><p><?php echo esc_html( $line ); ?></p><?php endforeach; ?>
        </div>
      <?php endif; ?>
      <?php if ( $options['cta_label'] && $options['cta_url'] ) : ?><a class="button page-hero__cta" href="<?php echo esc_url( $options['cta_url'] ); ?>"><?php echo esc_html( $options['cta_label'] ); ?><span class="button-arrow" aria-hidden="true"></span></a><?php endif; ?>
    </div>
    <span class="page-hero__edge" aria-hidden="true"></span>
  </section><?php
}
function hosho_render_quote( $quote, $name, $role, $image, $class = '' ) { ?>
  <section class="quote-band <?php echo esc_attr( $class ); ?>">
    <div class="quote-band__copy motion">
      <span class="quote-band__mark" aria-hidden="true">&ldquo;</span>
      <blockquote><?php echo esc_html( $quote ); ?></blockquote>
      <cite><?php echo esc_html( $name ); ?><span><?php echo esc_html( $role ); ?></span></cite>
    </div>
    <div class="quote-band__portrait"><img src="<?php echo esc_url( hosho_asset_url( $image ) ); ?>" alt="Portrait of <?php echo esc_attr( $name ); ?>"></div>
  </section><?php
}
function hosho_render_cta( $eyebrow, $title, $body, $label, $url, $image ) { ?>
  <section class="cta-panel" style="background-image:url('<?php echo esc_url( hosho_asset_url( $image ) ); ?>')"><div class="cta-panel__inner shell motion"><p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p><h2><?php echo wp_kses_post( $title ); ?></h2><p><?php echo esc_html( $body ); ?></p><a class="button" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a></div></section><?php
}
