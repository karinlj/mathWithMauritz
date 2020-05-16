<?php

if (get_row_layout() == 'header_button') {
    $signup_button = get_sub_field('signup_button');
    $demo_button = get_sub_field('demo_button');
    $play_button = get_sub_field('play_button');
    ?>

<section class="header_links_section">
  <div class="header_btn_section">
    <?php
if ($signup_button) {?>
    <a class="btn signup_btn" href="<?php echo $signup_button['url']; ?>"
      target="<?php echo $signup_button['target']; ?>">
      <?php echo $signup_button['title']; ?>
    </a>
    <?php
}

    if ($demo_button) {?>
    <a class="btn demo_btn" href="<?php echo $demo_button['url']; ?>" target="<?php echo $demo_button['target']; ?>">
      <?php echo $demo_button['title']; ?>
    </a>
    <?php
}?>
  </div>

  <?php

    if ($play_button) {?>

  <!-- <a class="btn play-btn" href="<?php echo $play_button['url']; ?>" target="<?php echo $play_button['target']; ?>"
  title="<?php echo $play_button['title']; ?>">
</a> -->

  <a class="play_btn banner_link" href="<?php echo $play_button['url']; ?>"
    target="<?php echo $play_button['target']; ?>">
    <?php echo $play_button['title']; ?>
  </a>

</section>
<?php
}
}
?>