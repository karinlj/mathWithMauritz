<?php
/*
 * Template Name: Page
 * Description: Template for Default Page
 */
?>
<?php get_header();?>
<section class="front_container">

  <?php
//Loopa ACF Content Blocks -flexible content
if (function_exists('have_rows')) {?>

  <?php
if (have_rows('content')) {?>

  <?php while (have_rows('content')) {?>
  <?php the_row();?>


  <?php $layout = get_row_layout();?>

  <?php // load the layout from the templates folder
    get_template_part('templates/' . $layout);?>

  <?php }
}
}?>
</section>

<?php get_footer();?>