<?php
$style = '';
$color = get_field('color_theme', 'option');
$bg_image = get_field('background_image', 'option');

if ($bg_image) {
    $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
    $overlay_color = get_field('overlay_color', 'option');
}
?>

<footer class="footer_main <?php echo $color; ?> <?php echo $overlay_color; ?> section_spacing_top_medium"
    <?php echo $style; ?>>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="contact">
                    <?php if (function_exists('acf_add_options_page')) { ?>

                    <?php $contact_phrase = get_field('contact_phrase', 'option');
                        $text_field = get_field('text_field', 'option');
                        $adress_field = get_field('adress_field', 'option');
                        $phone_field = get_field('phone_field', 'option');
                        $link = get_field('mail_link', 'option');
                        ?>
                    <div class="text">
                        <?php if ($contact_phrase) { ?>
                        <h2 class="contact_phrase"><?php echo $contact_phrase ?></h2>
                        <?php } ?>

                        <?php if ($text_field) { ?>
                        <p class="text_field"><?php echo $text_field ?></p>
                        <?php } ?>
                    </div>

                    <h6 class="logo">
                        <a class="" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h6>

                    <?php if ($adress_field) { ?>
                    <p class="adress_field"><?php echo $adress_field ?></p>
                    <?php } ?>

                    <?php if ($phone_field) { ?>
                    <p class="phone_field"><?php echo $phone_field ?></p>
                    <?php } ?>

                    <div class="social-icons">
                        <ul class="social">

                            <?php if ($link) { ?>
                            <li class="social-item">
                                <a href="mailto:<?php echo $link; ?>" target="_top"><i class="fas fa-envelope"
                                        aria-hidden="true"></i>
                                    <?php echo $link; ?></a>
                            </li>
                            <?php } ?>

                            <?php if (have_rows('social_icons', 'option')) { //repeater field 
                                ?>
                            <?php
                                    while (have_rows('social_icons', 'option')) {
                                        the_row();

                                        $social_url = get_sub_field('social_url');
                                        $social_site = get_sub_field('social_site'); ?>

                            <li class="social-item">
                                <a href="<?php echo $social_url; ?>"><i class="fab fa-<?php echo $social_site; ?>"></i>
                                    <?php echo $social_site; ?></a>
                            </li>
                            <?php
                                    }
                                } ?>
                    </div>
                    <?php
                    } ?>
                </div>
            </div>

            <div class="col-md-4  offset-md-1 order-first order-md-last">
                <div class="links">
                    <ul class="footer-links">

                        <?php
                        if (function_exists('acf_add_options_page')) {
                            if (have_rows('footer_links', 'option')) { // check if repeater field has rows

                                while (have_rows('footer_links', 'option')) { // loop through the rows of data
                                    the_row();

                                    $link = get_sub_field('link');

                                    if ($link) {    ?>
                        <li class="link-item">
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                <?php echo $link['title']; ?>
                            </a>
                        </li>

                        <?php }
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="to_top">
                    <a href="#header" class="to_top_btn">Back to top </a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="footer-copy">

                    <div class="copy">
                        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> INC. ALL RIGHTS RESERVED. Theme
                            by <a href="http://karinljunggren.com/" target="_blank">Karin</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>