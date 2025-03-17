<?php

function theme_tp_customize_register($wp_customize)
{
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  // HERO SECTION

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

  //Ajoute du background dans la section hero

  $wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label' => __('Hero Background Image', 'theme_tp'),
    'section' => 'hero_section',
  )));

  // BANNER SECTION

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

function mon_theme_supports()
{
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mon_theme_supports');




function theme_tp_enqueue_styles()
{
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style(
    'main-styles',
    get_template_directory_uri() . '/style.css',
    array(),
    filemtime(get_template_directory() . '/style.css')
  );
}
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');

function new_excerpt_length($length)
{

  return 100;
}

add_filter('excerpt_length', 'new_excerpt_length');


/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function modifie_requete_principal($query)
{
  if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
    $query->set('category_name', 'Populaire');
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
  }
}
add_action('pre_get_posts', 'modifie_requete_principal');

function ajout_options()
{
  // Activer le support des menus personnalisés
  add_theme_support('menus');
  add_theme_support('custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-height' => true,
    'flex-width'  => true,
  ));
}
add_action('after_setup_theme', 'ajout_options');

function my_theme_add_scripts()
{
  // Register the script
  wp_register_script(
    'reviews-carousel', // Script handle
    get_template_directory_uri() . '/js/reviews-carousel.js', // Path to the file
    array(), // Dependencies (e.g., 'jquery')
    '1.0.0', // Version
    true // Load in footer
  );

  // Enqueue the script
  wp_enqueue_script('reviews-carousel');

  // Register the script
  wp_register_script('back-to-top-script', get_template_directory_uri() . '/js/back-to-top.js', array('jquery'), null, true);

  // Enqueue the script
  wp_enqueue_script('back-to-top-script');
}
add_action('wp_enqueue_scripts', 'my_theme_add_scripts');

// Register Custom Post Type for Reviews
function create_reviews_post_type()
{
  register_post_type(
    'reviews',
    array(
      'labels' => array(
        'name' => __('Reviews'),
        'singular_name' => __('Review')
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'menu_icon' => 'dashicons-star-filled',
    )
  );
}
add_action('init', 'create_reviews_post_type');

// Register Custom Post Type for Gallery
function create_gallery_post_type()
{
  $args = array(
    'public' => true,
    'label'  => 'Gallery Home',
    'supports' => array('title', 'thumbnail'),
    'menu_icon' => 'dashicons-format-gallery',
  );
  register_post_type('gallery_home', $args);
}
add_action('init', 'create_gallery_post_type');

// Add Custom Field for URL
function add_gallery_url_field()
{
  add_meta_box(
    'gallery_url', // ID
    'Page URL', // Title
    'render_gallery_url_field', // Callback
    'gallery_home', // Post Type
    'normal', // Context
    'default' // Priority
  );
}
add_action('add_meta_boxes', 'add_gallery_url_field');

// Render the URL Field
function render_gallery_url_field($post)
{
  $url = get_post_meta($post->ID, 'gallery_url', true);
  echo '<input type="url" name="gallery_url" value="' . esc_url($url) . '" style="width: 100%;" placeholder="Enter the page URL">';
}

// Save the URL Field
function save_gallery_url_field($post_id)
{
  if (array_key_exists('gallery_url', $_POST)) {
    update_post_meta(
      $post_id,
      'gallery_url',
      esc_url_raw($_POST['gallery_url'])
    );
  }
}
add_action('save_post', 'save_gallery_url_field');
