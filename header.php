<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php if (!is_front_page()) { ?>
        <header>
            <div class="nav-wrapper">
                <div class="navbar">

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header', // Définition du slug parmi ceux créés dans functions.php
                        'container' => 'nav', // Définition de la balise conteneur-parent
                        'container_class' => 'navbar',
                        'menu' => 'header',
                        'menu_class' => 'menu__box', // Ma classe personnalisée
                        'before' => '',
                        'after' => '<div class="li-separate-bottom"></div>',
                    ));
                    ?>

                </div>
                <div class="nav-logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logoGraffitiMenu.png" alt="Logo">
                    </a>
                </div>
                <input type="checkbox" id="menu__toggle" class="menu__toggle" onchange="checkMenuBtn(this);" />
                <label for="menu__toggle" class="menu__btn">
                    <span></span>
                </label>
                <?php get_search_form(); ?>
            </div>
        </header>
    <?php } ?>

    <?php wp_body_open(); ?>