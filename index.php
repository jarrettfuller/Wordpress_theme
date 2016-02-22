<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Jarrett's News Site</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>

        <div class="wrapper">
            <h1>Jarrett's New Site</h1>
        </div>

        <?php if(have_posts()): ?>
        <ul>
            <?php while(have_posts()): the_post(); ?>
            <li>
                <?php the_time('F j, Y'); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> by <?php the_author(); ?></li>

            <p><?php the_content(); ?></p>

            <p><?php the_category(','); ?></p>

            <?php endwhile; ?>
        </ul>
        <?php endif; ?>

    </body>
</html>
