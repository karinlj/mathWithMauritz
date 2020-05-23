<?php
// layout : Text(and/ or image blocks with background color
?>
<section class="two_columns_blocks">
  <?php
//Loopa kolumner
if (have_rows('column_content')) {
    while (have_rows('column_content')) {
        the_row();
        ?>

  <?php if (get_row_layout() == 'img') {

            $link = get_sub_field('url'); //linking image ?>
  <div class="aspect_wrapper image">
    <div class="box image">

      <?php if ($link) {?>
      <a href="<?php echo $link; ?>">
        <?php
}?>

        <?php $img_id = get_sub_field('img');?>
        <?php echo wp_get_attachment_image($img_id, 'large'); ?>

        <?php if ($link) {?>
      </a>

      <?php
}?>

    </div>
    <?php
}?>
  </div>

  <?php if (get_row_layout() == 'text') {

            $color = get_sub_field('color_theme');?>
  <div class="aspect_wrapper text">
    <div class="box text <?php echo $color; ?>">

      <div class="text_part">
        <div class="text_part_child">
          <?php if ((get_sub_field('heading')) || (get_sub_field('text'))) {?>

          <h3><?php the_sub_field('heading');?></h3>
          <p><?php the_sub_field('text');?></p>

          <?php
}?>

        </div>
      </div>
    </div>
  </div>
  <?php
}
    }
}
?>

</section>