<?php
/**
 * Created by PhpStorm.
 * User: Karin
 */

$color = get_sub_field('color_theme');
?>

<section class="text-block <?php echo $color; ?> section_spacing_top_medium">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <header class="text-header">
          <h2 class="text-heading">
            <?php the_sub_field('text_heading');?>
          </h2>

          <div class="preamble">
            <h5>
              <?php the_sub_field('text_preamble');?>
            </h5>
          </div>
        </header>

        <div class="text">
          <?php the_sub_field('text');?>
        </div>
      </div>
    </div>
  </div>
</section>