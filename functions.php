<?php

//Including all resourses for the site
function mwm_script_resourses()
{
    //name, absolute path, dependencies, version, in_footer

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true);
}
add_action('wp_enqueue_scripts', 'mwm_script_resourses');

function mwm_style_resourses()
{

    //name, absolute path, dependencies, version, media

    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');

    wp_enqueue_style('font-awesome-5', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', array(), null);

    wp_enqueue_style('math-with-mauritz-custom', get_stylesheet_directory_uri() . '/css/custom.css');
}
add_action('wp_enqueue_scripts', 'mwm_style_resourses');

function google_fonts()
{
    //Av någon anledning knasar det med wp_enqueue_script
?>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900" rel="stylesheet">

<?php
}
add_action('wp_head', 'google_fonts');

function add_scripts()
{
    wp_register_script('custom_script', home_url() . '/wp-content/themes/math-with-mauritz/js/custom_script.js', array('jquery'));
    wp_enqueue_script('custom_script');
}
add_action('wp_enqueue_scripts', 'add_scripts');

function favicon()
{ ?>
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<?php }
add_action('wp_head', 'favicon', 99);

//Theme support
function mwm_theme_setup()
{
    //Featured Image Support
    add_theme_support('post-thummwmails');
    //width, height, hard-or soft cropping(hard)
    add_image_size('small-thummwmail', 230, 144, true);
    add_image_size('normal-thummwmail', 320, 380, true);
    add_image_size('large-thummwmail', 500, 375, true);
}
add_action('after_setup_theme', 'mwm_theme_setup');

//Excerpt lenght control
function set_excerpt_length()
{
    return 70;
}
add_filter('excerpt_length', 'set_excerpt_length');

//Menyer
//register Nav Walker class_alias
//require_once('wp-bootstrap-navwalker.php');

function mathWithMauritz_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'math-with-mauritz'),
    ));
}
add_action('after_setup_theme', 'mathWithMauritz_register_menus');

//New file for customizing
require get_template_directory() . '/inc/customizer.php';

//Widget locations
function wpb_init_widgets($id)
{
    //blog sidebar
    register_sidebar(array(
        'name' => 'Sidebar-blog',
        'id' => 'sidebar-blog',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'wpb_init_widgets');

//ACF options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'position' => 3.33,
    ));
}
function my_acf_admin_head()
{ ?>

<script type="text/javascript">
(function($) {
    $(document).ready(function() {
        $('.layout').addClass('-collapsed');
        $('.acf-postbox').addClass('closed');
    });
})(jQuery);
</script>
<?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');