<?php

function enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

/**
 * Create Logo Setting and Upload Control
 */
function tracy_new_customizer_settings($wp_customize) {
    // add a setting for the site logo
    $wp_customize->add_setting('add_theme_logo');
    // Add a control to upload the logo
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'add_theme_logo',
        array(
            'label' => 'Add BBJ Logo (1200px)',
            'section' => 'title_tagline',
            'settings' => 'add_theme_logo',
        )
    ));
}

add_action('customize_register', 'tracy_new_customizer_settings');


//admin hook defined in functions.php. This calls the above function at
// initialization time.
// add_action('admin_init', 'test_custom_settings');
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
