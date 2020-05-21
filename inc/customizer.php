<?php
function bn_customize_register($wp_customize)
{

    //Custom Link Section
    $wp_customize->add_section('mobile-header-button', array(

        'title' => __('Mobile header button', 'math-with-mauritz'),
        'description' => sprintf(__('Options for Mobile header button', 'math-with-mauritz')),
    ));

    //Custom Link Section: Link Url: settings and control
    $wp_customize->add_setting('mobile-header-button-url', array(
        'default' => _x('http://test.com', 'math-with-mauritz'),
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mobile-header-button-control', array(
        'label' => __('Link URL'),
        'section' => 'mobile-header-button',
        'settings' => 'mobile-header-button-url',
    )));

    //Custom Link Section: Link Text: settings and control
    $wp_customize->add_setting('mobile-header-button-text', array(
        'default' => _x('Example Button Text', 'math-with-mauritz'),
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'mobile-header-button-text-control', array(
        'label' => __('Link Text'),
        'section' => 'mobile-header-button',
        'settings' => 'mobile-header-button-text',
        'type' => 'textarea',
    )));
}

add_action('customize_register', 'bn_customize_register');