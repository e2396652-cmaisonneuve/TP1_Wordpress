<?php

function theme_tp_customize_register($wp_customize)
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.

    /////////////////////////////////////////////////////// SECTION 404 - EPREUVE FINALE

    $wp_customize->add_section('page404', array(
        'title' => __('Section 404', 'theme_tp'),
        'priority' => 30,

    ));

    //Ajoute title dans la page 404
    $wp_customize->add_setting('page404_titre', array(
        'default' => __('Titre default', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('page404_titre', array(
        'label' => __('404 Titre', 'theme_tp'),
        'section' => 'page404',
        'type' => 'text',
    ));

    //Ajoute message dans la page 404
    $wp_customize->add_setting('page404_message', array(
        'default' => __('Lorem ipsum', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('page404_message', array(
        'label' => __('page404 message', 'theme_tp'),
        'section' => 'page404',
        'type' => 'text',
    ));


    //Ajoute du CTA dans la page 404

    $wp_customize->add_setting('page404_cta_text', array(
        'default' => __('Learn More', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('page404_cta_text', array(
        'label' => __('CTA Button Text', 'theme_tp'),
        'section' => 'page404',
        'type' => 'text',
    ));

    //Ajoute du couleur dans la page 404

    $wp_customize->add_setting('page404_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'page404_couleur', array(
        'label' => __('404 Couleur', 'theme_tp'),
        'section' => 'page404',
    )));

    //Ajoute du background dans la page 404

    $wp_customize->add_setting('page404_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'page404_background', array(
        'label' => __('404 Background Image', 'theme_tp'),
        'section' => 'page404',
    )));

    
    
    /////////////////////////////////////////////////////// HERO SECTION

    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero', 'theme_tp'),
        'priority' => 30,

    ));

    //Ajoute title dans la section hero
    $wp_customize->add_setting('hero_title', array(
        'default' => __('Bienvenue sur mon site', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    //Ajoute description dans la section hero
    $wp_customize->add_setting('hero_description', array(
        'default' => __('Lorem ipsum', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));


    //Ajoute du telephone dans la section hero

    $wp_customize->add_setting('hero_telephone', array(
        'default' => __('514-123-4567', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_telephone', array(
        'label' => __('Telephone', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    //Ajoute du email dans la section hero

    $wp_customize->add_setting('hero_email', array(
        'default' => __('email@email.com', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_email', array(
        'label' => __('E-mail', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    //Ajoute du address dans la section hero

    $wp_customize->add_setting('hero_addresse', array(
        'default' => __('123 rue Lorem', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_addresse', array(
        'label' => __('Addresse', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    //Ajoute du ville dans la section hero

    $wp_customize->add_setting('hero_ville', array(
        'default' => __('Montréal, QC H1H 1H1', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_ville', array(
        'label' => __('Addresse', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    //Ajoute auteur dans la section hero

    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Mariana Neri Matos', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    //Ajoute du CTA dans la section hero

    $wp_customize->add_setting('hero_cta_text', array(
        'default' => __('Learn More', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_cta_text', array(
        'label' => __('CTA Button Text', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    //Ajoute du couleur dans la section hero

    $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Hero Couleur', 'theme_tp'),
        'section' => 'hero_section',
    )));

    //Ajoute du background dans la section hero

    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Hero Background Image', 'theme_tp'),
        'section' => 'hero_section',
    )));

//////////////////////////// BANNER SECTION

    $wp_customize->add_section('banner_section', array(
        'title' => __('Section Banner', 'theme_tp'),
        'priority' => 30,

    ));

    //Ajoute title dans la section banner
    $wp_customize->add_setting('banner_title', array(
        'default' => __('Bienvenue sur mon site', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('banner_title', array(
        'label' => __('Banner Title', 'theme_tp'),
        'section' => 'banner_section',
        'type' => 'text',
    ));

    //Ajoute description dans la section banner

    $wp_customize->add_setting('banner_description', array(
        'default' => __('Lorem ipsum', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('banner_description', array(
        'label' => __('Banner Description', 'theme_tp'),
        'section' => 'banner_section',
        'type' => 'text',
    ));

    //Ajoute du CTA dans la section hero

    $wp_customize->add_setting('banner_cta_text', array(
        'default' => __('Learn More', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('banner_cta_text', array(
        'label' => __('CTA Button Text', 'theme_tp'),
        'section' => 'banner_section',
        'type' => 'text',
    ));

    //Ajoute du background dans la section banner

    $wp_customize->add_setting('banner_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_background', array(
        'label' => __('Banner Background Image', 'theme_tp'),
        'section' => 'banner_section',
    )));
}

add_action('customize_register', 'theme_tp_customize_register');
