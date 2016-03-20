<?php get_header(); ?>

<main>

    <!--carousel -->

<?php $categories = get_terms('category'); ?>
<?php foreach ($categories as $category): ?>
<?php if(get_field('featured_on_home_page', 'category_'.$category->term_id)): ?>

<?php $stories = jarrett_get_posts($category->term_id); ?>

<div class="carousel">

    <?php foreach($stories as $post): setup_postdata($post); ?>
    <div class="carousel_slide">

        <?php  if($image = the_post_thumbnail()): ?>
    <p><?php $image; ?></p>
    <?php endif; ?>

<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> |
    <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>


        </div>
    <?php endforeach; ?>


</div>

<?php endif; ?>
<?php endforeach; ?>

        <!--more-posts -->

        <?php if(have_posts()): ?>

            <?php while(have_posts()): the_post(); ?>
            <div class="post-stripe">
                <span class="date"><?php the_time('F j, Y'); ?></span>

                <span class="post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <p><?php the_content(); ?></p>
                </span>

                <span class="author">by <?php the_author(); ?></span>
</div>

            <?php endwhile; ?>

        <?php endif; ?>



</main>

<?php get_footer(); ?>
