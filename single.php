<?php
/***
* The template for displaying individual blog posts (full article/blog post).
*
* @package delicious-oh-nom-nom
* @since 1.0.0
*/
//display header
get_header();
?>
<?php if(have_posts()) : ?>

    <?php while(have_posts()) : the_post(); ?>
        <?php
        get_template_part( 'template-parts/content', 'single' );
        ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>