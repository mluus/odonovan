<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package odonovan
 */
 
  if( is_front_page() ){

        include_once('mobile-detect/Mobile_Detect.php');
        $detect = new Mobile_Detect(); 

        if ( $detect->is_mobile() ) {
            $redirect_url = 'http://pod-edit.com/mobile/';
            header('Location: ' . $redirect_url ); // Redirect the user
        }
    }
	
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  
<head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

    <body <?php body_class(); ?>>
   
         <div id="container">
            <div id="page" class="hfeed site">
                    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'odonovan' ); ?></a>
                    <div class="header-cont"
                    <header id="masthead" class="site-header" role="banner">
                            <div class="site-branding">
                                    <a href="<?php echo esc_url( home_url( '/' ) );  ?> " rel="home"> <?php bloginfo( 'name' ); ?><h1 class="site-title"></h1></a>
                                    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
                            </div><!-- .site-branding -->

                            <nav id="site-navigation" class="main-navigation" role="navigation">
                                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" ><?php esc_html_e( 'MENU', 'odonovan' ); ?></button>
                                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                                   
                                    
                            </nav><!-- #site-navigation -->
                    </div>        
                    </header><!-- #masthead -->

                    <div id="content" class="site-content"></div>
            </div>  
   