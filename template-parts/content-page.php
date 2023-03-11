<?php
/***
* Template part for displaying content in the page.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package delicious-oh-nom-nom
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >
        <!-- get the page title -->
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    <div class="entry-content">
    <!-- if you had an image it will display using wordpress's largest default thumbnail sizing (settings in the admin - you can see the sizes) -->
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

        <div class="flex-item">
        <!-- display page or post content -->
            <?php
                the_content(); // displays all of the content within the editor in pages in the dashboard
            ?>
        <!-- other things you could put in here would be: pagination (more used for blog posts), custom posts, anything you need for site. -->
        </div>
        </div>

    <footer class="entry-footer">
        <!--adds a link to edit your content -->
        <?php edit_post_link( __('Edit','themenamehere'), '<span class="edit-link">', '</span>' ); ?>
    </footer>
</article>