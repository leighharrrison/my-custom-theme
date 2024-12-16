<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php get_header(); ?>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('Molly Harrison Music'); ?> | <?php bloginfo('Welcome to my music page'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
    </header>
    
    <main>
        <?php 
        if (have_posts()) :
            while (have_posts()) : the_post(); 
                the_content();
            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
        
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </footer>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
