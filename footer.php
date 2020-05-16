<footer class="footer-main section_spacing_top_medium">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2 class="contact_phrase">Get in touch!</h2>
      </div>

      <div class="col-md-4">
        <div class="contact">
          <div class="logo">

            <?php if (function_exists('acf_add_options_page')) {

    $site_url = get_field('site_url', 'option');
    $site_name = get_field('site_name', 'option');?>

            <h2>
              <a class="" href="<?php echo $site_url; ?>"><?php echo $site_name; ?></a>
            </h2>
          </div>
          <p class=""><?php the_field('adress_field', 'option')?></p>

          <div class="social-icons">
            <ul class="social">

              <?php $link = get_field('mail_link', 'option');?>

              <li class=" social-item">
                <a href="mailto:<?php echo $link; ?>" target="_top"><i class="fas fa-envelope"
                    aria-hidden="true"></i></a>
              </li>

              <?php if (have_rows('social_icons', 'option')) { //repeater field ?>
              <?php
while (have_rows('social_icons', 'option')) {
        the_row();

        $social_url = get_sub_field('social_url');
        $social_site = get_sub_field('social_site');?>

              <li class="social-item">
                <a href="<?php echo $social_url; ?>"><i class="fab fa-<?php echo $social_site; ?>"></i></a>
              </li>

              <?php
}
    }
//}?>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="links">

          <?php
//if (function_exists('acf_add_options_page')) {
    if (have_rows('footer_links', 'option')) { // check if repeater field has rows

        while (have_rows('footer_links', 'option')) { // loop through the rows of data
            the_row();

            if (have_rows('links')) { // check if repeater field has rows
                ?>
          <ul class="footer-links">
            <?php
while (have_rows('links')) { // loop through the rows of data
                    the_row();?>

            <?php
$link = get_sub_field('link');?>

            <li class="link-item">
              <a href="<?php echo $link['url']; ?>"
                target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
            </li>

            <?php
}?>

          </ul>
          <?php
}
        }
    }
}
?>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-copy">
    <div class="container">
      <div class="row align-items-start">
        <div class="col">
          <div class="copy">
            <p>© 2020 - Math With Mauritz INC. ALL RIGHTS RESERVED. Theme by <a href="http://karinljunggren.com/"
                target="_blank">Karin</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer();?>
</body>

</html>