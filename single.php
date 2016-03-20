<?php get_header(); ?>

        <?php if(have_posts()): ?>

            <?php while(have_posts()): the_post(); ?>

<h2><?php the_title(); ?></h2>
                <p class="byline">by <?php the_author(); ?></p>

<article>

            <p><?php the_content(); ?></p>

            <p>Posted in <?php the_category(','); ?> on <?php the_time('F j, Y'); ?></p>
</article>
            <?php endwhile; ?>

        <?php endif; ?>

<?php get_footer(); ?>
