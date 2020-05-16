<!--content for posts-->
<?php
//blog variables - default: (!is_single()
$col_class = 'col-sm-6 col-lg-4';
$post_class = 'post_card';
?>

<!-- column size -->
<?php if (is_single()) {
    $col_class = 'col-lg-10 offset-lg-1 col-xl-8 offset-xl-2';
}?>
<div class="<?php echo $col_class; ?>">


  <!-- article  -->
  <?php if (is_single()) {
    $post_class = 'post_card single';
}?>
  <article class="<?php echo $post_class; ?>">

    <?php the_post_thumbnail('banner-image');?>

    <!-- link if post page  -->
    <?php if (!is_single()) {?>
    <a class="post_link" href="<?php the_permalink();?>"> </a>
    <?php }?>

    <!-- content -->
    <div class="post_content">

      <!-- categories -->
      <?php $categories = get_the_category();
$separator = ", ";
$output = '';

if ($categories) {
    foreach ($categories as $category) {

        //  output categories as a link separated by comma
        $output .= '<a class ="category" href=" ' . get_category_link($category->term_id) . ' ">' . $category->cat_name . '</a>' . $separator;
    }
// function trim takes $output and removes $separator
    echo trim($output, $separator);
}
?>
      <!-- post_heading -->
      <div class="post_heading">
        <h3 class="blog_post_title">
          <?php the_title();?>
        </h3>
      </div>

      <!-- meta - single-->
      <?php if (is_single()) {?>
      <div class="blog_post_meta">
        <p>
          by <?php the_author();?> &nbsp; | &nbsp;
        </p>
        <p>
          <?php echo get_the_date('F j, Y'); ?>
        </p>
      </div>
      <?php }?>

      <div class="post_text">
        <!-- content and exerpt-->
        <!--if search.php or archive.php -> show only excerpts-->
        <?php if (is_search() or is_archive()) {?>

        <p>
          <?php echo get_the_excerpt(); ?>
          <!-- <a class="read_more" href="<?php the_permalink();?>">Read More&raquo;</a> -->
        </p>
        <?php } else {

/*if excerpt used in GUI -> show excerpt*/
    if ($post->post_excerpt) {?>

        <p>
          <?php echo get_the_excerpt(); ?>
        </p>

        <?php } else if (!is_single()) {?>

        <p>
          <?php echo get_the_excerpt(); ?>
        </p>

        <?php } else {
        the_content();
    }
}?>
      </div>

      <!-- meta - blog page-->
      <?php if (!is_single()) {?>
      <div class="blog_post_meta">
        <p>
          <!-- by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> -->
          by <?php the_author();?>
        </p>
        <p>
          <?php echo get_the_date('F j, Y'); ?>
        </p>
      </div>
      <?php }?>

    </div>
  </article>
</div>