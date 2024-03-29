<?php
// layout: two columns white or lightgrey with text and round image

$color = get_sub_field('color_theme');
?>

<section class="two_columns_round_image <?php echo $color; ?> section_spacing_top_big">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row justify-content-between">

                    <?php

//Loopa kolumner
if (have_rows('two_columns_white')) {
    while (have_rows('two_columns_white')) {
        the_row(); ?>
                    <?php if (get_row_layout() == 'img') {?>

                    <?php $round_image = get_sub_field('round_image');?>

                    <div class="col-12 col-sm-5 col-lg-3 part text-center">

                        <div class="image <?php echo $round_image; ?>">

                            <?php $img_id = get_sub_field('img');?>

                            <?php echo wp_get_attachment_image($img_id, 'full'); ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if (get_row_layout() == 'text') {?>

                    <?php $heading = get_sub_field('heading');?>
                    <?php $text = get_sub_field('text');
          
          $center_class = '';
            $center = get_sub_field('center_text');
            if ($center === 'yes') {
                $center_class = 'text-center';
            }?>
                    <div class="col-12 col-sm-6 col-lg-8 text-part <?php echo $center_class; ?>">
                        <h2><?php echo $heading; ?></h2>
                        <p><?php echo $text; ?></p>
                    </div>

                    <?php } ?>

                    <?php
    }
}
?>
                </div>
            </div>
</section>