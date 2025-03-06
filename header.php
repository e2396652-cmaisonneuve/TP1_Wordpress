<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css"> -->
    <title>Bougeotte Voyages</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header global">

            <figure class="header__logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                }
                ?>
            </figure>
            <label for="chk-burger" class="header__burger">
                <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu-alt-1&color=000" width="32" height="32">
            </label>
            <input type="checkbox" name="" id="chk-burger" class="chk-burger">
            <div class="header__navigation">
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu' => 'menu-principal', 'container' => 'nav', 'container_class' => '', 'container_id' => '', 'container_aria_label' => '', 'menu_class' => '')) ?>
                <form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <label>
                        <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button class="recherche__bouton" type="submit">
                        Rechercher
                    </button>
                </form>
            </div>
        </div>
    </header>