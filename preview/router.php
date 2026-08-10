<?php
$project_root = dirname(__DIR__); $theme_root = $project_root . '/wp-content/themes/hosho-digital'; $request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); $asset_path = realpath($project_root . $request_path);
if ($asset_path && str_starts_with($asset_path, realpath($project_root)) && is_file($asset_path)) return false;
$pages = array('careers','sustainability','press','contact','company','ai-quick-win','eci', 'solutions', 'operational-experience', 'customer-experience', 'employee-experience'); $segments = array_values(array_filter(explode('/', trim($request_path,'/')))); $preview_page = 'careers';
if (!empty($segments)) { $last_segment = end($segments); if (in_array($last_segment, $pages, true)) { $preview_page = $last_segment; } else { http_response_code(404); } }
define('ABSPATH',$project_root.'/'); define('HOSHO_PREVIEW',true); define('HOSHO_PREVIEW_PAGE',$preview_page); define('HOSHO_THEME_ROOT',$theme_root);
$preview_styles=array(); $preview_scripts=array(); class WP_Post {}
function add_action(){} function add_filter(){} function add_theme_support(){} function register_nav_menus(){}
function get_page_by_path(){return null;} function get_permalink(){return '/';} function home_url($path='/'){return '/'.ltrim($path,'/');}
function get_theme_file_uri($path=''){return '/wp-content/themes/hosho-digital/'.ltrim($path,'/');} function get_theme_file_path($path=''){return HOSHO_THEME_ROOT.'/'.ltrim($path,'/');} function get_stylesheet_uri(){return get_theme_file_uri('style.css');}
function wp_enqueue_style($handle,$source){global $preview_styles;$preview_styles[$handle]=$source;} function wp_enqueue_script($handle,$source){global $preview_scripts;$preview_scripts[$handle]=$source;}
function is_page($pages){return in_array(HOSHO_PREVIEW_PAGE,(array)$pages,true);} function esc_url($v){return htmlspecialchars($v,ENT_QUOTES,'UTF-8');} function esc_attr($v){return htmlspecialchars($v,ENT_QUOTES,'UTF-8');} function esc_html($v){return htmlspecialchars($v,ENT_QUOTES,'UTF-8');}
function wp_kses_post($v){return strip_tags($v,'<br><span><strong><em>');} function __($v){return $v;} function language_attributes(){echo 'lang="en"';} function bloginfo($key){if($key==='charset')echo 'UTF-8';}
function body_class($classes=array()){$classes=hosho_body_classes($classes);printf('class="%s"',esc_attr(implode(' ',array_unique($classes))));} function wp_body_open(){} function wp_nav_menu(){hosho_primary_menu_fallback();}
function wp_head(){global $preview_styles;hosho_enqueue_assets();printf('<title>%s | HOSHŌ DIGITAL</title>',esc_html(hosho_pages()[HOSHO_PREVIEW_PAGE]));foreach($preview_styles as $src)printf('<link rel="stylesheet" href="%s">',esc_url($src));}
function wp_footer(){global $preview_scripts;foreach($preview_scripts as $src)printf('<script src="%s"></script>',esc_url($src));}
function get_header(){require HOSHO_THEME_ROOT.'/header.php';} function get_footer(){require HOSHO_THEME_ROOT.'/footer.php';}
require HOSHO_THEME_ROOT.'/functions.php'; require HOSHO_THEME_ROOT.'/page-'.$preview_page.'.php';
