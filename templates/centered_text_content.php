<?php

if (get_row_layout() == 'centered_text_content') {?>

<?php
$text = get_sub_field('text');?>

<section class="text-section section_spacing_top_small">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="preamble text-center">

          <h3>
            <?php echo $text; ?>
          </h3>
        </div>
      </div>
    </div>
  </div><!-- /.container -->
</section>
<?php
}
?>