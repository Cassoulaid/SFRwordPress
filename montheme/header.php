<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">  
</head>
    <header>
        <div class="nav-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/images/SFR_logo.png" alt="<?php bloginfo( 'name' ); ?>" class="headerLogo">
            </a>
            <div class="header-search">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="search-field" placeholder="Rechercher un téléphone, un service,..." value="<?php echo get_search_query(); ?>" name="s" />
                    <button type="submit" class="search-submit"></button>
                </form>
            </div>
            <?php wp_nav_menu(['theme_location' => 'header']) ?>
            <a href="#" rel="cart">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cart.svg" alt="<?php bloginfo( 'name' ); ?>" class="icons">
            </a>
            <a href="#" rel="email">
                <img src="<?php echo get_template_directory_uri(); ?>/images/email.svg" alt="<?php bloginfo( 'name' ); ?>" class="icons" id="email">
            </a>
                <a href="#" rel="login">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/login.svg" alt="<?php bloginfo( 'name' ); ?>" class="icons" id="login">
                </a>
             <div class="login-icon"></div>
        </div>
        <div class="nav-secondary-container">
            <?php wp_nav_menu(['theme_location' => 'header_secondary']) ?>
        </div>
    </header>
<body>
