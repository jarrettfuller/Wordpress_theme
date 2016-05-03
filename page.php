<?php get_header(); ?>

<div class="articles">
    <?php if(have_posts()): ?>

        <?php while(have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php if(has_post_thumbnail()): ?>
        <div class="page-image">
          <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
