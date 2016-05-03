<?php
/*
Template Name: Two-Column Page
*/
?>

<?php get_header(); ?>

<main>
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
</main>
<?php get_footer(); ?>
