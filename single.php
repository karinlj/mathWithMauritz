<?php get_header();?>

<div class="container_blog">
  <div class="blog_flow section_spacing_top_small">
    <div class="container">
      <div class="row">

        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post();?>

        <!--get content.php-->
        <?php get_template_part('parts/content', get_post_format());?>

        <?php endwhile;?>

        <?php else: ?>
        <p><?php __('No Posts Found');?></p>
        <?php endif;?>

      </div>
    </div>
    <?php // comments_template();?>
  </div>

  <?php get_footer();?>