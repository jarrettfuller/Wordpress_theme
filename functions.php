<?php

function jarrett_scripts() {

    // Theme stylesheet
    wp_enqueue_style( 'jarrett-style', get_stylesheet_uri());

}
add_action( 'wp_enqueue_scripts', 'jarrett_scripts' );

function jarrett_menus() {

    // Setting up Menus
    register_nav_menu('main-menu', __('Main menu') );
    register_nav_menu('footer-menu', __('Footer menu') );
}
add_action( 'init', 'jarrett_menus' );

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

function jarrett_get_breaking_news() {

    $args = array(
        'post_status' => 'publish',
        'category' => '9',
        'posts_per_page' => '1',
        'offset' => '0',
        'post_type' => 'post',
    );
    return get_posts($args);
}

function jarrett_get_top_stories() {

    $args = array(
        'post_status' => 'publish',
        'category' => '-9',
        'posts_per_page' => '5',
        'offset' => '0',
        'post_type' => 'post',
    );
    return get_posts($args);
}

function jarrett_get_category_posts() {

    $args = array(
        'post_status' => 'publish',
        'category' => '4',
        'posts_per_page' => '5',
        'offset' => '0',
        'post_type' => 'post',
    );
    return get_posts($args);
}