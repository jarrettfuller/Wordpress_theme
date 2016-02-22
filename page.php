<?php get_header(); ?>
** This is the standard page template. **


<?php if($topstories = jarrett_get_category_posts()): ?>
<h2>Posts</h2>
            <?php foreach($topstories as $post): setup_postdata($post); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php endforeach; ?>
            <?php endif; ?>

<?php get_footer(); ?>
