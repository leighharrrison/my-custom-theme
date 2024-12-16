<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
    <img src="<?php echo get_template_directory_uri(); ?>/images/header.jpg" alt="header image" class="header-logo">
        <nav>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'nav-menu',
        'container' => 'div',
        'container_class' => 'nav-container',
    ));
    ?>
    <div class="social-links">
    <a href="https://www.instagram.com/mollyharrison.music" target="_blank" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="https://www.facebook.com/mollyharrison.music" target="_blank" aria-label="Facebook">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://www.tiktok.com/@mollyharrisonmusic" target="_blank" aria-label="TikTok">
        <i class="fab fa-tiktok"></i>
    </a>
</div>

</nav>

    </header>
