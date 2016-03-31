<?php get_header(); ?>

        <?php if(have_posts()): ?>

            <?php while(have_posts()): the_post(); ?>

<div class="articles">
<h1><?php the_title(); ?></h1>
                <p class="byline">by <?php the_author(); ?> • <?php the_time('F j, Y'); ?></p>

<article>

            <p><?php the_content(); ?></p>

            <p class="byline">Posted in <?php the_category(','); ?></p>
</article>

    <h2>Related Stories</h2>
    <!---related stories ---->
    <?php

    // Get cateogt yids as array //
    $category_ids = wp_get_post_categories($post->ID);
    // convert array to comma separated list
    $category_ids_string = implode (',', $category_ids);
    // get related posts
    $related_posts = jarrett_get_posts($category_ids_string, 5, 'rand', $post->ID);
?>

    <?php if(sizeof($related_posts)):  ?>
    <ul>
    <?php foreach($related_posts as $post):  ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
         <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    </div>
            <?php endwhile; ?>



        <?php endif; ?>

<?php get_footer(); ?>
