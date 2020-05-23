<div id="nav-wrap">
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="">

          <h3 class="site_title">
            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
              <?php bloginfo('name');?>
            </a>
          </h3>

          <div class="nav-links">
            <?php
wp_nav_menu(array(
    'theme_location' => 'primary',
));
?>
          </div>
          <span class="toggle">☰</span>
          <!--hamburger-->
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="nav-mobile">
  <span class="toggle">&times;</span>
  <!--close-->

  <div class="nav-links">

    <?php
wp_nav_menu(array(
    'theme_location' => 'primary',
));
?>

    <?php $button_color = get_field('button_color');?>
    <ul class="sign_up">
      <li>
        <div class="btn_wrapper">
          <a class="btn button_link mobile <?php echo $button_color; ?>"
            href="<?php echo get_theme_mod('mobile-header-button-url'); ?>">
            <?php echo get_theme_mod('mobile-header-button-text'); ?>
          </a>

      </li>
    </ul>
  </div>
</div>