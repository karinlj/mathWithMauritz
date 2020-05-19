<?php
/*
 * Template Name: Front Page
 * Description: Front page template
 */
?>
<?php get_header();?>

<section class="front_container">

  <!-- <div class="container">
    <div class="row">
      <div class="col-lg-12"> -->
  <?php
//Loopa ACF Front Page Blocks -flexible content
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
  <!-- </div>
    </div>
  </div> -->
</section>

<?php get_footer();?>