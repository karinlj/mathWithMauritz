<?php
/*
 * Template Name: Page
 * Description: Template for Default Page
 */
?>
<?php get_header();?>

<section class="front_container">

  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <?php // for layouts of content_block_pages

//Loopa ACF flex Content
if (function_exists('have_rows')) {

    if (have_rows('content')) {

        while (have_rows('content')) {
            the_row();

            $layout = get_row_layout();

            // load the layout from the templates folder
            get_template_part('templates/' . $layout);
        }
    }
}?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>