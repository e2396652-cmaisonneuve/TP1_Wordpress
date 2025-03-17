<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Bougeotte Voyages</title>
    <?php wp_head(); ?>
</head>

<body>
    <div id="top"></div>
    <header class="header">
        <div class="header__container">

            <figure class="header__logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                }
                ?>
            </figure>


            <label for="chk-burger" class="header__burger" aria-label="Abrir menu de navegação">
                <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu-alt-1&color=000" width="32" height="32" alt="Ícone de menu">
            </label>

            <input type="checkbox" id="chk-burger" class="chk-burger" aria-hidden="true">

            <div class="header__navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu' => 'menu-principal',
                    'container' => 'nav',
                    'menu_class' => 'menu-list',
                    'container_aria_label' => 'Menu principal de navigation'
                ));
                ?>

                <form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <label for="search-input">
                        <input id="search-input" class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" aria-label="Champ de recherche" />
                    </label>
                    <button class="recherche__bouton" type="submit" aria-label="Démarrer la recherche">
                        Rechercher
                    </button>
                </form>
            </div>
        </div>
    </header>