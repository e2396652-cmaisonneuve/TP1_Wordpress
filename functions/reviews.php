<?php function my_theme_add_scripts()
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
