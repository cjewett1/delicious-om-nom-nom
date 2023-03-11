<?php
/**
 * The template to display archive pages for category types
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#category-php-tag-php-and-taxonomy-php
 * 
 * @package Delicious-oh-nom-nom
 */

?>

<?php get_header(); ?>


<h2>This is the category.php</h2>

<?php the_archive_title(); ?>

<section class="all-recipes">
            <div>
                <?php
                    $args = array(
                        'post_type'      => 'the-recipes',
                        'posts_per_page' => 10,
                        'category_name' => '',
                        'order' => 'DESC'
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        get_template_part('template-parts/content', 'cooking');
                    }?>
                    <!-- The loop content is in the cooking template page. -->
            </div>
    </section>


<?php get_footer(); ?>