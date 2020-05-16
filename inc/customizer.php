<?php
function bn_customize_register($wp_customize)
{

    //Custom Link Section
    $wp_customize->add_section('custom-link', array(

        'title' => __('Custom Link', 'boozang-fifth'),
        'description' => sprintf(__('Options for Custom  Link', 'boozang-fifth')),
    ));

    //Custom Link Section: Link Url: settings and control
    $wp_customize->add_setting('custom-link-url', array(
        'default' => _x('http://test.com', 'boozang-fifth'),
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'custom-link-control', array(
        'label' => __('Link URL'),
        'section' => 'custom-link',
        'settings' => 'custom-link-url',
    )));

    //Custom Link Section: Link Text: settings and control
    $wp_customize->add_setting('custom-link-text', array(
        'default' => _x('Example Button Text', 'boozang-fifth'),
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'custom-link-text-control', array(
        'label' => __('Link Text'),
        'section' => 'custom-link',
        'settings' => 'custom-link-text',
        'type' => 'textarea',
    )));
}

add_action('customize_register', 'bn_customize_register');