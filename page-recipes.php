<?php

    // template for displaying recipes

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Adding custom thumbnail sizes!!
	//This goes in the loop..
	//<?php the_post_thumbnail('my-photos'); ? >

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package delicious-oh-nom-nom

?>

<?php get_header(); ?>

<main>
    <section class="all-recipes">

            <div class="recipes-heading-background">
                <h2 class="recipes-page-heading"><?php the_field('recipe_page_heading');?></h2>
            </div>

            <div class="all-recipe-flex-container" >
                <?php
                    $args = array(
                        'post_type'      => 'the-recipes',
                        'posts_per_page' => 18,
                        'order' => 'DESC',
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        get_template_part('template-parts/content', 'cooking');
                    }?>
                    <!-- The loop content is in the services template page. -->
            </div>
        
    </section>
</main>

<?php get_footer(); ?>
