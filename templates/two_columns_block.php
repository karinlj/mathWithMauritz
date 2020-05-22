<?php
/**
 * Created by PhpStorm.
 * User: Karin
 * Date: 2018-06-14
 * Time: 21:59
 */

?>
<section class="two_columns_blocks">
  <?php
//Loopa kolumner
if (have_rows('column_content')) {
    while (have_rows('column_content')) {
        the_row();
        ?>
  <div class="aspect-wrapper">
    <?php
//Innehåll i kolumnerna

        if (get_row_layout() == 'img') {

            $link = get_sub_field('url'); //linking image ?>

    <div class="box image">

      <?php
if ($link) {?>
      <a href="<?php echo $link; ?>">
        <?php
}?>

        <?php $img_id = get_sub_field('img');?>

        <?php
echo wp_get_attachment_image($img_id, 'large');
            ?>

        <?php
if ($link) {?>
      </a>
      <?php
}
            ?>
    </div>

    <?php
}?>

    <?php

        if (get_row_layout() == 'text') {

            $color = get_sub_field('color_theme');?>

    <div class="box text <?php echo $color; ?>">


      <div class="text-part">
        <div class="text-part-child">
          <?php
if ((get_sub_field('heading')) || (get_sub_field('text'))) {?>

          <h3><?php the_sub_field('heading');?></h3>
          <p><?php the_sub_field('text');?></p>

          <?php
}
            ?>

        </div>
      </div>

    </div>

    <?php
}?>
  </div>
  <!--aspect-wrapper-->

  <?php
}
}
?>

</section>