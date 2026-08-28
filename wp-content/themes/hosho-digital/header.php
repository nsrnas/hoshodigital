<?php $action = hosho_header_action(); ?>
<!doctype html><html <?php language_attributes(); ?>><head><meta charset="<?php bloginfo( 'charset' ); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class(); ?>><?php wp_body_open(); ?><a class="skip-link" href="#main-content">Skip to content</a>
<header class="site-header" data-header><nav class="nav shell" aria-label="Main navigation">
  <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="HOSHŌ DIGITAL homepage"><img src="<?php echo esc_url( hosho_asset_url( 'logo.webp' ) ); ?>" alt=""></a>
  <button class="menu-button" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="primary-navigation"><span></span></button>
  <div class="primary-navigation" id="primary-navigation"><?php hosho_primary_menu_fallback(); ?></div>
  <a class="nav-cta" href="<?php echo esc_url( $action[1] ); ?>"><?php echo esc_html( $action[0] ); ?></a>
</nav></header>
