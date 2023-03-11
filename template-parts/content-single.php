<?php
/***
* Template part for displaying content in the single.php template (individual/article blog page)
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package design+code demo
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >

<header>
<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
 <?php the_date(); ?>
</header>

<div class="entry-content">

<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
<?php the_content(); ?>
</div>
</article>