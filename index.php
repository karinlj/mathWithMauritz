<?php get_header();?>

<div class="container_blog">

  <?php get_template_part('parts/blog-sidebar');?>

  <div class="blog_flow section_spacing_top_small">
    <div class="container">
      <div class="row">

        <!--main post loop-->
        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post();?>

        <!-- get content.php-->
        <?php get_template_part('parts/content', get_post_format());?>

        <?php endwhile;?>
      </div>

      <div class="paginate_links">
        <!-- <?php previous_posts_link();?>
        <?php next_posts_link();?> -->
        <?php echo paginate_links(); ?>
      </div>

      <?php else: ?>
      <p><?php __('No Posts Found');?></p>
      <?php endif;?>
    </div>
  </div>
</div>

<?php get_footer();?>