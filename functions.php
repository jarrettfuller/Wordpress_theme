<?php

add_theme_support( 'post-thumbnails' );

function jarrett_scripts() {

    // Theme stylesheet
    wp_enqueue_style( 'jarrett-style', get_stylesheet_uri());

    // js files
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery') );
    wp_enqueue_script('first-theme-js', get_template_directory_uri() . '/js/first-theme.js', array('jquery', 'owl-carousel') );

}
add_action( 'wp_enqueue_scripts', 'jarrett_scripts' );

function jarrett_menus() {

    // Setting up Menus
    register_nav_menu('main-menu', __('Main menu') );
    register_nav_menu('footer-menu', __('Footer menu') );
}
add_action( 'init', 'jarrett_menus' );

function jarrett_theme($wp_customize) {

    $wp_customize->add_setting('jarrett_logo');

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'jarrett_logo',
        array(
            'label' => __('Logo'),
            'section' => 'title_tagline',
            'settings' => 'jarrett_logo',
        )
    ) );

}
add_action( 'customize_register', 'jarrett_theme');

function jarrett_widgets() {

    // Widget settings for header
    $settings = array(
        'name' => 'Header',
        'id' => 'header',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title'=> '</h2>',
    );
    // register header widget area
    register_sidebar($settings);


    // widget settings for footer
    $settings['name'] = 'Footer';
    $settings['id'] = 'footer';

    // register footer widget area
    register_sidebar($settings);
}
add_action( 'widgets_init', 'jarrett_widgets');

    //old breaking news function
//function jarrett_get_breaking_news() {
//
//    $args = array(
//        'post_status' => 'publish',
//        'category' => '9',
//        'posts_per_page' => '1',
//        'offset' => '0',
//        'post_type' => 'post',
//    );
//    return get_posts($args);
//}


    //function for getting posts with arrays for category and post count
function jarrett_get_posts($category_id, $per_page = '5') {

    $args = array(
        'post_status' => 'publish',
        'category' => $category_id,
        'posts_per_page' => $per_page,
        'offset' => '0',
        'post_type' => 'post',
    );
    return get_posts($args);
}

