<?php get_header(); ?>

<main>

    <ul>
        <?php if(have_posts()): ?>

            <?php while(have_posts()): the_post(); ?>
            <li>
                <span class="date"><?php the_time('F j, Y'); ?></span>

                <span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>

                <span class="author">by <?php the_author(); ?></li></span>


            <?php endwhile; ?>

        <?php endif; ?>
    </ul>
</main>

<?php get_footer(); ?>
