<?php
//layout centered_text_content
if (get_row_layout() == 'centered_text_content') {?>

<?php
$text = get_sub_field('text');?>

<section class="text_section section_spacing_top_medium">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="text_content">

          <?php echo $text; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}
?>