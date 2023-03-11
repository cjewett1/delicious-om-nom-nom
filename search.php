<?php
/**
 * The template for displaying search results
 * 
 * @link https://developer.wordpress.org/theme/basics/template-hierarchy/
 * 
 * @package delicious-oh-nom-nom
 */
?>

<?php get_header(); ?>

    <h2>This is search.php</h2>

    <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part('template-parts/content', 'page');
                endwhile;
            endif;
            ?>

<?php get_footer(); ?>