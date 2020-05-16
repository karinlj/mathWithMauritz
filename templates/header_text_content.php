<?php
if (get_row_layout() == 'header_text_content') {

    $text_content = get_sub_field('text_content');

    // check if the repeater field has rows
    if (have_rows('text_content')) {?>

<?php
while (have_rows('text_content')) {
        the_row();

        $text = get_sub_field('text');
        ?>

<p class="header-text">
  <?php echo $text; ?>
</p>

<?php }
    }
}
?>