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
        <article <?php post_class();?> id="post-<?php the_ID();?>" >
        <div class="entry-content">

            <div class="color-background-recipe">
            <div class="individual-recipe-flex-container">
    
                    <div class="recipe-div" >
                        <div class="individual-recipes-heading" ><?php the_title('<h1 class="entry-title">', '</h1>'); ?></div>
                        <div class="individual-recipes-description"><?php the_field('description'); ?></div>
                        <div class="preparation-container">
                            <div><?php the_field('serves'); ?></div>
                            <div><?php the_field('prep_time'); ?></div>
                            <div><?php the_field('cook_time'); ?></div>
                            <div><?php the_field('total_time'); ?></div>
                        </div>
                        <div class="categories-container">
                        <p>Categories:</p>
                        <span class = "category"><?php the_category(); ?> </span> <!-- Can be styled now by using span with a class--></div>
                    </div>
            <div>
            </div>
    
                <div class="individual-recipes-image">
                    <?php
                    $image = get_field('recipe_image');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
                </div>
            </div>
    
            </div>

            <div class="steps-instructions-flex-container">
                <div class="si-flex-item" ><?php the_field('ingredients'); ?></div>
                <div class="si-flex-item" ><?php the_field('steps'); ?></div>
            </div>
        </div>
    </article>
    <?php endwhile; ?>
        <div class= "pagination">
        <?php
            next_post_link('%link');
            previous_post_link('%link');
         ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>