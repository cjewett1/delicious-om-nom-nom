<?php 

// Template for displaying the custom home page.

//@link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display

// @package delicious-oh-nom-nom

?>

<?php get_header(); ?>

<main>
    <?php
        if(have_posts()) : ?>
    <!-- start the loop -->
         <?php while(have_posts()) : the_post(); ?>
        <?php
        ?>

        <div class="banner-section">
            <div class="banner-image">
                    <?php
                        $image = get_field('banner_image');
                        if( !empty( $image ) ): ?>
                            <img  class="banner-image"  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
            </div>

            <div class="banner-overlay">
                <?php
                the_field('banner_heading');
                the_field ('banner_text');
                ?>

                <?php
                $link = get_field('banner_button');
                if( $link ): ?>
                    <a class="banner-button" href="<?php echo esc_url( $link ); ?>">Explore Recipes!</a>
                <?php endif; ?>
            </div>

        </div>
        <?php endwhile; ?>
        <?php else : ?>
    <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>

    <div class="recipe-section-blurb-flex-container">
        <?php the_field('recipe_section_heading');?>
        <?php the_field('recipe_section_description');?>
    </div>

    <div class="recipe-wrapper">
        <?php
        $args = array(
        'post_type'      => '',
        'posts_per_page' => 3,

        );

        ?>
    </div>
        <div class="recipes-flex-container">

            <?php
                $args = array(
                    'post_type'      => 'the-recipes',
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                );
                $loop = new WP_Query($args);
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    get_template_part('template-parts/content', 'cooking');
                }?>

                <?php wp_reset_query() ?>

        </div>
            <div class="more-about-us-container">
            <div class="more-about-us-flex-item">
                    <?php
                    the_field('about_us_heading');
                    the_field('about_us_description');
                    ?>
                    <?php
                        $link = get_field('more_about_us_button');
                        if( $link ): ?>
                            <a class="about-us-button" href="<?php echo esc_url( $link ); ?>">More About Us!</a>
                    <?php endif; ?>
                </div>

            <div class="more-about-us-image">
                <?php
                    $image = get_field('about_us_image');
                    if( !empty( $image ) ): ?>
                        <img  class="about-us-image"  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
    </div>
</main>

<?php get_footer(); ?>