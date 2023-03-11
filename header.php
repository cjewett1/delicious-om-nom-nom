<?php
    // this is the header for our theme

    // This is the template that displays ALL of the <head> section and everything up to div id="content"

    // @link https://developer.wordpress.org/themes/basics/template-files/

    //@package Delicious-oh-nom-nom

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
<header>
  <div class="header-nav-container">
    <div class="nav-flex-toggle">
    
    
          <?php if ( ! has_custom_logo() ) { ?>
        <?php if ( is_front_page() && is_home() ) : ?>
        <!--if your page is set to front-page or blog display the site title (appearance > customize) -->
        <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' );
        ?></a>
        <?php else : ?>
        <!-- if your page is not set to front-page or blog display the site title (appearance > customize) -->
        <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' );
        ?></a>
        <?php endif; ?>
        <!-- otherwise display the custom logo. -->
        <?php } else {
        the_custom_logo();
        }?>
    
            <button class="toggle-btn">
                  <svg viewBox="0 0 100 80">
                      <rect rx="8"></rect>
                      <rect y="30" rx="8"></rect>
                      <rect y="60" rx="8"></rect>
                  </svg>
              </button>
      </div>
    
      <nav class = "header-menu">
        <?php
            wp_nav_menu(
                  array(
                    'theme_location' => 'main-menu',
                    'menu_id' => 'main-menu',
                  )
            );?>
      </nav>
  </div>
       </header>
    <div id="content" class="site-content">
