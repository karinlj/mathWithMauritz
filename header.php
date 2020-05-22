<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset=" <?php bloginfo('charset');?> ">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content=" <?php bloginfo('description');?>">
  <!-- <link rel="icon" href="../../favicon.ico">-->

  <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
  <title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title();?>
  </title>

  <?php wp_head();?>

</head>

<body <?php body_class();?>>

  <?php //header field variables
$col_class = 'col-md-8 offset-md-2 col-lg-6 offset-lg-3';
$header_class = 'header_small';
$style = '';
$color = '';
$header_bgImage = get_field('header_image');
$overlay_color = '';
$header_heading_pages = get_field('header_heading_pages');
$header_text_pages = get_field('header_text_pages');
$button_link_url = get_field('button_link_url');
$button_link_text = get_field('button_link_text');
$button_color = get_field('button_color');

if (is_home() || is_archive()) { //for blog
    $header_heading_pages = get_field('header_heading_pages', get_option('page_for_posts'));
    $header_text_pages = get_field('header_text_pages', get_option('page_for_posts'));
}

if (is_singular('post')) {
    $col_class = 'col-md-10 offset-md-1';
}

// header class
if (is_front_page()) {
    $header_class = 'header_big';
}

// header background
if (get_field('color_theme')) {
    $color = get_field('color_theme');
} else if (get_field('color_default', 'option')) { //default header background
    $color = get_field('color_default', 'option');
}

// header background image
if ($header_bgImage) {
    $style = 'style="background: url(\'' . wp_get_attachment_url($header_bgImage, 'full') . '\') no-repeat center;
  background-size: cover"';
    $overlay_color = get_field('overlay_color');
}

if (is_home() || is_singular('post') || is_archive()) { //for blog
    $color = get_field('color_theme', get_option('page_for_posts'));
    $header_bgImage = get_field('header_image', get_option('page_for_posts'));

    if ($header_bgImage) {
        $style = 'style="background: url(\'' . wp_get_attachment_url($header_bgImage, 'full') . '\') no-repeat center;
  background-size: cover"';
        $overlay_color = get_field('overlay_color', get_option('page_for_posts'));
    }
}
?>

  <header id="header" class="<?php echo $header_class; ?> <?php echo $color; ?> <?php echo $overlay_color; ?>"
    <?php echo $style; ?>>

    <!-- get menu -->
    <?php get_template_part('parts/main-menu');?>

    <div class="header_items_section">
      <div class="container">
        <div class="row">
          <div class="<?php echo $col_class; ?>">

            <?php if ($header_heading_pages) {?>
            <h1 class="header_heading">
              <?php echo $header_heading_pages; ?>
              <!-- title in header for single post -->
              <?php if (is_singular('post')): the_title();endif;?>
            </h1>
            <?php }?>

            <?php if ($header_text_pages) {?>
            <p class="header_text">
              <?php echo $header_text_pages; ?>
            </p>
            <?php }?>

            <?php if ($button_link_url && $button_link_text) {?>

            <div class="btn_wrapper">
              <a class="btn button_link <?php echo $button_color; ?>"
                href="<?php echo $button_link_url; ?>"><?php echo $button_link_text; ?></a>
            </div>
            <?php }?>

          </div>
        </div>
      </div>
    </div>
  </header>