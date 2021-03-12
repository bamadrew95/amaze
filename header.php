<!DOCTYPE html>
<html lang="en">
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header flex">
        <div class="site-header__container flex">
            <?php the_custom_logo(); ?>
            <a href="<?php echo site_url(); ?>"><h2 class="site-title"><?php bloginfo('name'); ?></h2></a>
            <div class="header-menu__btn flex">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>    
        </div>
        
        <div class="two-column-section main-menu__container">
            <div class="logo-container flex">
                <img width="512" height="512" src="<? echo site_url('/wp-content/themes/amaze/img/logo1.png'); ?>" alt="Bamadrew95" class="site-logo" >
            </div>
            <nav class="main-menu">
                <?php wp_nav_menu(array(
                    'theme_location'          => 'header',
                    'menu_class'    => 'main-menu-list',
                    'container'     => NULL,
                )) ?>
            </nav>
        </div>
        
    </header>