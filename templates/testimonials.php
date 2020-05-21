<?php

?>

<section class="testimonials_section section_spacing_top_medium">
  <div class="container">
    <div class="row align-items-start">
      <div class="col text-center">
        <h5 class="heading_upper"><?php the_sub_field('heading_upper');?></h5>
        <h2 class="heading_lower"><?php the_sub_field('heading_lower');?></h2>

        <p class="banner_icon">
          <i class="fa fa-quote-left"></i>
        </p>

        <div class="testimonials_inner">
          <div class="slides">

            <?php
// check if the repeater field has rows
if (have_rows('testimonials_content')) {

    while (have_rows('testimonials_content')) {
        the_row();
        ?>
            <div class="slide">
              <p class="text"><?php the_sub_field('text');?></p>
              <p class="signature"> - <?php the_sub_field('signature');?></p>
            </div>
            <?php
}
}
?>
            <div class="btn_slider_container">
              <p class="btn_slider prev">
                <i class="fas fa-chevron-left"></i>
              </p>
              <p class="btn_slider next">
                <i class="fas fa-chevron-right"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>