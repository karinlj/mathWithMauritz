<?php
$color = get_sub_field('color_theme');?>

<section class="blurb_columns <?php echo $color; ?> section_spacing_top_medium">

  <h2 class="section-heading text-center"><?php the_sub_field('heading');?></h2>

  <div class="container">
    <div class="row">

      <?php
//Loopa kolumner
if (have_rows('columns')) {
    while (have_rows('columns')) {
        the_row();?>

      <div class="col-12 col-lg-6">
        <div class="row">

          <?php
//Loopa puffar
        if (have_rows('blurb')) {
            while (have_rows('blurb')) {
                the_row();

                $col_class = 'blurb blurb-small col-12 col-sm-6';
                $text_link = get_sub_field('link_blurb'); //linking the text

                if (get_sub_field('size') == 'large') {
                    $col_class = 'blurb blurb-large col-12';
                }

                ?>
          <div class="<?php echo $col_class; ?>">

            <?php
if ($text_link) {?>
            <a href="<?php echo $text_link; ?>">
              <?php
}?>

              <div class="featured-image">
                <?php echo wp_get_attachment_image(get_sub_field('img'), 'full'); ?>
              </div>
              <?php
if (get_sub_field('label')) {?>
              <p class="sub-title"><?php the_sub_field('label');?></p>
              <?php
}
                if (get_sub_field('heading')) {
                    ?>
              <h3><?php the_sub_field('heading');?></h3>
              <?php
}
                the_sub_field('text');
                ?>

              <?php
if ($text_link) {?>
            </a>
            <?php
}
                ?>

          </div>
          <?php
}
        }
        ?>
        </div>
      </div>
      <?php
}
}
?>
    </div>
  </div>
</section>