<?php
$project_root = dirname(__DIR__);
$theme_root   = $project_root . '/wp-content/themes/hosho-digital';

$request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$asset_path   = realpath($project_root . $request_path);

if ($asset_path && str_starts_with($asset_path, realpath($project_root)) && is_file($asset_path)) {
    return false;
}

$route_map = array(
    ''                       => array('page' => 'front-page',          'file' => 'front-page.php'),
    '/'                      => array('page' => 'front-page',          'file' => 'front-page.php'),
    'careers'                => array('page' => 'careers',             'file' => 'page-careers.php'),
    'esg'                    => array('page' => 'esg',                 'file' => 'page-sustainability.php'),
    'media'                  => array('page' => 'media',               'file' => 'page-press.php'),
    'press'                  => array('page' => 'press',               'file' => 'page-press.php'),
    'contact'                => array('page' => 'contact',             'file' => 'page-contact.php'),
    'company'                => array('page' => 'company',             'file' => 'page-company.php'),
    'ai-quick-win'           => array('page' => 'ai-quick-win',        'file' => 'page-ai-quick-win.php'),
    'eci'                    => array('page' => 'eci',                 'file' => 'page-eci.php'),
    'solutions'              => array('page' => 'solutions',           'file' => 'page-solutions.php'),
    'operational-experience' => array('page' => 'operational-experience', 'file' => 'page-operational-experience.php'),
    'customer-experience'    => array('page' => 'customer-experience', 'file' => 'page-customer-experience.php'),
    'employee-experience'    => array('page' => 'employee-experience', 'file' => 'page-employee-experience.php'),
    'approach'               => array('page' => 'approach',            'file' => 'page-approach.php'),
    'innovation'             => array('page' => 'approach-ai',         'file' => 'page-approach-ai.php'),
    'assurance'              => array('page' => 'approach-ams',        'file' => 'page-approach-ams.php'),
    'erp'                    => array('page' => 'approach-erp',        'file' => 'page-approach-erp.php'),
    'optimization'           => array('page' => 'approach-optimization', 'file' => 'page-approach-optimization.php'),
    'privacy-policy'         => array('page' => 'privacy-policy',      'file' => 'page-privacy-policy.php'),
    'privacy'                => array('page' => 'privacy-policy',      'file' => 'page-privacy-policy.php'),
    'terms-of-use'           => array('page' => 'terms-of-use',        'file' => 'page-terms-of-use.php'),
    'cookies'                => array('page' => 'cookies',             'file' => 'page-cookies.php'),
    'accessibility'          => array('page' => 'accessibility',       'file' => 'page-accessibility.php'),
    'strategy-session'       => array('page' => 'strategy-session',    'file' => 'page-strategy-session.php'),
);

$path_clean = strtolower(trim($request_path, '/'));
$segments   = array_values(array_filter(explode('/', $path_clean)));
$last_segment = !empty($segments) ? end($segments) : '';

if (isset($route_map[$path_clean])) {
    $match = $route_map[$path_clean];
} elseif (isset($route_map[$last_segment])) {
    $match = $route_map[$last_segment];
} else {
    http_response_code(404);
    $match = array('page' => 'careers', 'file' => 'page-careers.php');
}

$preview_page  = $match['page'];
$template_file = $match['file'];

define('ABSPATH', $project_root . '/');
define('HOSHO_PREVIEW', true);
define('HOSHO_PREVIEW_PAGE', $preview_page);
define('HOSHO_PREVIEW_SLUG', $path_clean);
define('HOSHO_THEME_ROOT', $theme_root);

$preview_styles  = array();
$preview_scripts = array();

class WP_Post {}

function add_action() {}
function add_filter() {}
function add_theme_support() {}
function register_nav_menus() {}
function get_page_by_path() { return null; }
function get_permalink() { return '/'; }
function home_url($path = '/') { return '/' . ltrim($path, '/'); }
function get_theme_file_uri($path = '') { return '/wp-content/themes/hosho-digital/' . ltrim($path, '/'); }
function get_theme_file_path($path = '') { return HOSHO_THEME_ROOT . '/' . ltrim($path, '/'); }
function get_stylesheet_uri() { return get_theme_file_uri('style.css'); }

function wp_enqueue_style($handle, $source, $deps = array(), $version = null) {
    global $preview_styles;
    $preview_styles[$handle] = $version ? $source . '?ver=' . rawurlencode((string) $version) : $source;
}
function wp_enqueue_script($handle, $source, $deps = array(), $version = null, $in_footer = false) {
    global $preview_scripts;
    $preview_scripts[$handle] = $version ? $source . '?ver=' . rawurlencode((string) $version) : $source;
}

function is_page($pages) {
    $pages = (array)$pages;
    return in_array(HOSHO_PREVIEW_PAGE, $pages, true) || in_array(HOSHO_PREVIEW_SLUG, $pages, true);
}
function is_front_page() {
    return HOSHO_PREVIEW_PAGE === 'front-page' || HOSHO_PREVIEW_SLUG === '';
}

function esc_url($v) { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
function esc_attr($v) { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
function esc_html($v) { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
function wp_kses_post($v) { return strip_tags($v, '<br><span><strong><em>'); }
function __($v) { return $v; }
function language_attributes() { echo 'lang="en"'; }
function bloginfo($key) { if ($key === 'charset') echo 'UTF-8'; }

function body_class($classes = array()) {
    $classes = hosho_body_classes($classes);
    printf('class="%s"', esc_attr(implode(' ', array_unique($classes))));
}
function wp_body_open() {}
function wp_nav_menu() { hosho_primary_menu_fallback(); }

function wp_head() {
    global $preview_styles;
    hosho_enqueue_assets();
    $all_pages = hosho_pages();
    $title = isset($all_pages[HOSHO_PREVIEW_PAGE]) ? $all_pages[HOSHO_PREVIEW_PAGE] : (HOSHO_PREVIEW_PAGE === 'front-page' ? 'Home' : ucfirst(HOSHO_PREVIEW_PAGE));
    printf('<title>%s | HOSHŌ DIGITAL</title>', esc_html($title));
    foreach ($preview_styles as $src) {
        printf('<link rel="stylesheet" href="%s">', esc_url($src));
    }
}

function wp_footer() {
    global $preview_scripts;
    foreach ($preview_scripts as $src) {
        printf('<script src="%s"></script>', esc_url($src));
    }
}

function get_header() { require HOSHO_THEME_ROOT . '/header.php'; }
function get_footer() { require HOSHO_THEME_ROOT . '/footer.php'; }

require HOSHO_THEME_ROOT . '/functions.php';
require HOSHO_THEME_ROOT . '/' . $template_file;

