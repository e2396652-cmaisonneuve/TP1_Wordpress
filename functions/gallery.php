<?php // Register Custom Post Type for Gallery
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
