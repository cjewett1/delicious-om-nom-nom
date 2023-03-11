<?php

/*
    Sets up the theme defaults and register support for various WordPress features.

    @link https://developer.wordpress.org/themes/basics/theme-functions/

    @package delicious-oh-nom-nom
*/

?>

<?php

//Add support for title tag
function deliciousohnomnom_setup() {
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
    
    add_image_size('my-photos', 560, 460, true);

    add_theme_support('custom-logo', array(

        'height'    => 100,
        'width'     => 400,
        'flex-height'       => true,
        'flex-width'        => true,
        'header-text'       => array('site-title', 'site-description')

    ));

//Registers one menu in one location - main menu
register_nav_menus(
        array(
            'main-menu'     => 'Main Menu',
        )
    );
}

add_action('after_setup_theme', 'deliciousohnomnom_setup');

//This function will add all styles and scripts
function deliciousohnomnom_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), 1.1, true);
}

add_action('wp_enqueue_scripts', 'deliciousohnomnom_enqueue_styles');

/**
 * Register our sidebars and widgetized areas.

 */
function deliciousohnomnom_widgets_init() {

    register_sidebar( array(
		'name'          => 'Footer widget',
		'id'            => 'footer_widget',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'deliciousohnomnom_widgets_init' );

function wpdocs_excerpt_more( $more ) {
	if ( ! is_single() ) {
		$more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( 'Read More', 'textdomain' )
		);
	}

	return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



?>

