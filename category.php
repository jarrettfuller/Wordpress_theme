<?php get_header(); ?>

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
