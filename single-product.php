<?php get_header(); ?>

<main>
    <?php if ( have_posts()); ?>
    <?php while(have_posts()): the_post(); ?>

<p>product page</p>

    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <?php the_post_thumbnail(); ?>

        <?php endif; >
<?php endwhile; ?>
    <?php endif; >




    </main>

<?php get_footer(); ?>
