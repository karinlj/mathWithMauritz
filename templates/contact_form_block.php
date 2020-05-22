<?php

// contact_form_block

$color = get_sub_field('color_theme');
$button_color = get_sub_field('button_color');
?>

<section id="contact_form"
  class="contact_form_block <?php echo $color; ?> <?php echo $button_color; ?> section_spacing_top_medium">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <header class="text-header">
          <h2 class="text-heading">
            <?php the_sub_field('text_heading');?>
          </h2>

          <div class="preamble">
            <?php if (get_sub_field('text_preamble')) {?>
            <p><?php the_sub_field('text_preamble');?></p>

            <?php }?>
          </div>
        </header>

        <div class="text">
          <?php if (get_sub_field('text')) {?>
          <?php the_sub_field('text');?>
          <?php
}?>

        </div>
      </div>
    </div>
  </div>
</section>