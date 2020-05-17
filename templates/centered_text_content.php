<?php

if (get_row_layout() == 'centered_text_content') { ?>

<?php
    $text = get_sub_field('text'); ?>

<section class="text-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
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
