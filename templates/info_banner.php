<?php
// get started layout for  Pages Content block
if (get_row_layout() == 'info_banner') {?>

<?php
$style = '';
    $color = get_sub_field('color_theme');
    $bg_image = get_sub_field('background_image');

    if ($bg_image) {
        $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
        $overlay_color = get_sub_field('overlay_color');
    }
    ?>

<section class="info_banner <?php echo $color; ?> <?php echo $overlay_color; ?> section_spacing_top_big text-center"
  <?php echo $style; ?>>

  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-8">
        <h2 class=""><?php the_sub_field('heading');?></h2>
        <p class=""><?php the_sub_field('text');?></p>

        <!-- loopa flex content -->
        <?php if (have_rows('banner_links')) {
        while (have_rows('banner_links')) {
            the_row();?>

        <!-- layouter -->
        <?php if (get_row_layout() == 'mail_link') {

                $maillink = get_sub_field('mail_link');
                $mail_text = get_sub_field('mail_text');?>


        <div class="link_wrapper">
          <a class="banner_link" href="mailto:<?php echo $maillink; ?>" target="_top"><?php echo $mail_text; ?>
          </a>
        </div>
        <?php
}
            if (get_row_layout() == 'link') {

                $link_url = get_sub_field('link_url');
                $link_text = get_sub_field('link_text');?>

        <div class="link_wrapper">
          <a class="banner_link" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
        </div>
        <?php
}
            if (get_row_layout() == 'button_link') {

                $button_link_url = get_sub_field('button_link_url');
                $button_link_text = get_sub_field('button_link_text');?>

        <div class="btn_wrapper">
          <a class="btn link" href="<?php echo $button_link_url; ?>"><?php echo $button_link_text; ?></a>
        </div>
        <?php
}
        }
    }?>

      </div>
    </div>
  </div>
</section>
<?php
}?>