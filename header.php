<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Jarrett's News Site</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
    </head>
    <body>

        <div class="breaking">

            <?php if($breaking = jarrett_get_posts('9', '1')): ?>
            <?php foreach($breaking as $post): setup_postdata($post); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php endforeach; ?>
            <?php endif; ?>

        </div>

        <?php wp_reset_postdata(); ?>

        <div class="wrapper">
            <header>
                <?php if ( get_theme_mod( 'jarrett_logo' ) ) : ?>
                <div class='site-logo'>
                    <img src="<?php echo esc_url(get_theme_mod('jarrett_logo')); ?>" alt="">
                </div>
                <?php endif; ?>
            </header>

            <nav>
                <?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>

                <?php dynamic_sidebar('header'); ?>
            </nav>



