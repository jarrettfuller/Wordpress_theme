<?php get_header(); ?>
** This is the standard page template. **


<?php if($topstories = jarrett_get_posts('3')): ?>
<h2>News Cateogry</h2>
            <?php foreach($topstories as $post): setup_postdata($post); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php endforeach; ?>
            <?php endif; ?>

<?php if($topstories = jarrett_get_posts('4')): ?>
<h2>Posts Category</h2>
            <?php foreach($topstories as $post): setup_postdata($post); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php endif; ?>

<?php get_footer(); ?>
