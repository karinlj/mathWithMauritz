<?php
// centered text layout for Pages Content block
//centered wysiwyg for pages

if (get_row_layout() == 'centered_text_content') {?>

<?php
$text = get_sub_field('text');?>

<section class="text_section_pages section_spacing_top_medium">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">

        <div class="text_content">
          <?php echo $text; ?>
        </div>

      </div>
    </div>
  </div><!-- /.container -->
</section>

<?php
}
?>