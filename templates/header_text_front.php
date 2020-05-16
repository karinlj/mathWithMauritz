<?php
if (get_row_layout() == 'header_text_front') {

    $heading = get_sub_field('heading');
    $text = get_sub_field('text');
    ?>

<h1 class="header_heading front">
  <?php echo $heading; ?>
</h1>

<p class="header_text front">
  <?php echo $text; ?>
</p>

<?php
}
?>