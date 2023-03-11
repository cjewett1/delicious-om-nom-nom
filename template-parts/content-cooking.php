<!-- What goes inside the loop is up to us. Use markup around the content -->
<div class="recipe-flex-item">
    
<?php 
    $image = get_field('recipe_image');
    $size = 'my-photos'; // (thumbnail, medium, large, full or custom size)
    if( $image ) {
    echo wp_get_attachment_image( $image, $size );
    }
    ?> 
    <h4><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
</div>
