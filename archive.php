<?php get_header();?>

<div class="container_blog">

  <?php get_template_part('parts/blog-sidebar');?>

  <div class="blog_flow">
    <div class="container">
      <div class="row">

        <!--main post loop-->
        <?php if (have_posts()): ?>

        <?php while (have_posts()): the_post();?>

        <!--get content.php-->
        <?php get_template_part('content', get_post_format());?>

        <?php endwhile;?>

        <?php echo paginate_links(); ?>

        <?php else: ?>
        <p><?php __('No Posts Found');?></p>
        <?php endif;?>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>