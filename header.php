<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mann_und_natur
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text" href="#primary"><?php //esc_html_e( 'Skip to content', 'mann' ); ?></a> -->
        <header id="header" class="site-header">
            <?php 
		 $header_image_url = get_theme_mod('header_image') ?? '';
		?>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand logo" href="<?php echo home_url();?>">
                        <?php if(!empty($header_image_url)) :?>
                        <img src="<?php echo esc_url($header_image_url);?>" />
                        <?php endif;?>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'mann' ); ?></button> -->
                    <?php
			wp_nav_menu( array(
				'theme_location' => 'main-menu',
				'container' => 'div',
				'container_class' => 'navbar-nav',
				
			) );
			?>
                </nav><!-- #site-navigation -->
            </div>
        </header><!-- #masthead -->