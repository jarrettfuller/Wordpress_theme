<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
    foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach
} //if

$search = new WP_Query($search_query);
?>

<div class="articles">
<?php if ( have_posts() ) : ?>


                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>


                    <?php get_template_part( 'content', 'search' ); ?>
<article>
                <span class="date"><?php the_time('F j, Y'); ?></span>

                <span class="post">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <p><?php the_excerpt(); ?></p>

                </span>
</article>
        <?php get_template_part( 'no-results', 'search' ); ?>



                <?php endwhile; ?>

            <?php else : ?>


            <?php endif; ?>

</div>
<?php get_footer(); ?>
