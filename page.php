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
            <?php endforeach; ?>
            <?php endif; ?>


<!--carousel -->

<?php $categories = get_terms('category'); ?>
<?php foreach ($categories as $category): ?>
<?php if(get_field('featured_on_home_page', 'category_'.$category->term_id)): ?>


<h2><?php echo $category->name; ?></h2>

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


<?php get_footer(); ?>
