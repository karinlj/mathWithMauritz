<?php
$link = get_sub_field('link');
?>

<section class="testimonials-section-new section_spacing_top_big">
  <div class="container">

    <div class="row align-items-start justify-content-between">

      <div class="col-xl-10">
        <div class="testimonials-container">
          <?php
// check if the repeater field has rows
if (have_rows('testimonials_content')) {

    while (have_rows('testimonials_content')) {
        the_row();

        $color = get_sub_field('color_theme');
        ?>
          <div class="testimonials-item <?php echo $color; ?>">

            <p class="icon">
              <i class="fas fa-quote-left"></i>
            </p>

            <p class="text"><?php the_sub_field('text');?></p>

            <h4 class="signature"><?php the_sub_field('signature');?></h4>
          </div>
          <span class="pointer-tip"></span>
          <?php
}
}?>
        </div>
      </div>
      <div class="col-xl-2 heading-section">
        <div>
          <h3 class="tesimonials-heading"><?php the_sub_field('heading');?></h3>

          <?php if ($link) {?>
          <a class="arrow_link" href="<?php echo $link['url']; ?>"
            target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?>
          </a>
          <?php
}?>

        </div>

      </div>

    </div>
  </div>
</section>