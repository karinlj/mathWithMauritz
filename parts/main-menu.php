<div id="nav-wrap" class="">

  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="">

          <h3 class="site-title">
            <a class="logo" href="http://localhost/mathWithMauritz/">
              Math with Mauritz
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
    <div class="signup">
      <ul>
        <li>
          <a class="btn signup_btn" href="http://localhost/mathWithMauritz">
            Free Trial Lesson
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>