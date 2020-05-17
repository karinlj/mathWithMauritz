<?php
/**
 * Created by Karin.
 */
$color = get_sub_field('color_theme');
?>

<section class="two-columns-white <?php echo $color; ?>">

  <div class="container">
    <div class="row justify-content-center">
      <!-- <div class="col-12 col-lg-10"> -->
      <div class="col-12">
        <div class="row align-items-center justify-content-between">

          <?php

//Loopa kolumner
if (have_rows('two_columns_white')) {
    while (have_rows('two_columns_white')) {
        the_row();
        ?>

          <?php
//Innehåll i kolumnerna
        if (get_row_layout() == 'img') {?>
          <!-- <div class="col-12 col-md-4 col-lg-3 part text-center"> -->
          <div class="col-12 col-md-6 part text-center">


            <?php $img_id = get_sub_field('img');?>

            <?php
echo wp_get_attachment_image($img_id, 'full');
            ?>
          </div>

          <?php
}?>


          <?php
if (get_row_layout() == 'text') {?>

          <!-- <div class="col-12 col-md-8 text-part"> -->
          <div class="col-12 col-md-6 text-part">


            <div class="text-part-child">

              <?php

            if (get_sub_field('heading')) {?>

              <h3><?php the_sub_field('heading');?></h3>

              <?php
}
            if (get_sub_field('text')) {?>

              <p><?php the_sub_field('text');?></p>

              <?php
}
            ?>

            </div>
          </div>
          <?php
}?>
          <?php
}
}
?>
        </div>
      </div>

</section>