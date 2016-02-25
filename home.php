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

<?php $categories = get_terms('category'); ?>
<?php foreach ($categories as $category): ?>
<?php if(get_field('featured_on_home_page', 'category_'.$category->term_id)): ?>

<h2><?php echo $category->name; ?></h2>
<?php $stories = jarrett_get_posts($category->term_id); ?>
<ul>
    <?php foreach($stories as $post): setup_postdata($post); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endforeach; ?>
</ul>

<?php endif; ?>
<?php endforeach; ?>

</main>

<?php get_footer(); ?>
