<?php get_header(); ?>

<main>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>

    <div class="post-stripe">

        <span class="date"><?php the_post_thumbnail(); ?></span>
                <span class="post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </span>

                <span class="author">by <?php the_author(); ?></span>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
