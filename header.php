<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <!-- for meta tag -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- for title -->
    <title>Rey-Global</title>
    
    <?php wp_head(); ?>
</head>
<body <?php echo body_class(); ?>>
    <!-- for header section -->
    <header id="header">
        <div class="header-wrap">
            <div class="logo-area">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Logo-main.svg" alt="logo" class="primary-color">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.svg" alt="logo" class="secondary-color">
                </a>
            </div>
            <div class="menu-icon">
                <div class="menu-trigger">
                    <div class="bar-1"></div>
                    <div class="bar-3"></div>
                    <div class="bar-2"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header section -->

    <!-- for menu wrapper -->    
    <div class="menu-wrap">
        <div class="container">
            <div class="menu-content">
                <div class="left-section menu-wrap-blog">
                  
                <?php wp_nav_menu(array(
						'theme_location' => 'left_menu',
						'menu_class' => 'menu-sidebar-content',
						'container' => false,
						
					)); ?>
                </div>
                <?php if ( is_active_sidebar( 'custom-header-widget' )) : ?> 
                <div class="right-section menu-wrap-blog">  
                    <div class="blog-width-50 menu-blog-wrap">                  
                     
                        <div class="menu-listing">
                        <?php dynamic_sidebar( 'custom-header-widget' ); ?>   
                        </div>
                </div>    
                        <?php endif;?>
                    
                    <div class="blog-width-50 menu-blog-wrap">
                    <?php if ( is_active_sidebar( 'custom-header-menu-listing-widget' )) : ?> 
                        <div class="menu-listing">
                        <?php dynamic_sidebar( 'custom-header-menu-listing-widget' ); ?>   
                        </div>
                    <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end menu wrapper -->