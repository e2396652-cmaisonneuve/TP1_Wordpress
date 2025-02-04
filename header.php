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
                <img src="<?php echo get_template_directory_uri() . '/images/logo-bougeotte.jpg' ?>">
            </figure>
            <label for="chk-burger" class="header__burger">
                <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu-alt-1&color=000" width="32" height="32">
            </label>
            <input type="checkbox" name="" id="chk-burger" class="chk-burger">
            <div class="header__navigation">
                <nav class="header__menu">
                    <ul class="menu">
                        <li class="menu__item"><a href="" class="menu__item__a">Sport</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Nature</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Cruise</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Adventure</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Cultural</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Pause</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Zen</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Economic</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Favorite</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Country</a></li>
                    </ul>
                </nav>
                <form class="search">
                    <input type="text" placeholder="Search" class="search__input">
                    <img class="search__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16"
                        height="16">
                </form>
            </div>
        </div>
    </header>