<?php

if (! defined('ABSPATH')) {
    exit;
}

function add_custom_product_fields()
{
    add_meta_box(
        'custom_product_fields',
        'Custom Product Fields',
        'display_custom_product_fields',
        'product',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_custom_product_fields');

function display_custom_product_fields($post)
{
    $live_demo = get_post_meta($post->ID, '_live_demo', true);
    $product_file = get_post_meta($post->ID, '_product_file', true);


    echo '<label for="live_demo">Live demo:</label><br>';
    echo '<input type="text" id="live_demo" name="live_demo" value="' . esc_attr($live_demo) . '" /><br><br>';

    echo '<label for="product_file">Product file:</label><br>';
    echo '<input type="file" id="product_file" name="product_file" value="' . esc_attr($product_file) . '" /><br><br>';
}

function save_custom_product_fields($post_id)
{
    if (isset($_POST['live_demo'])) {
        $live_demo = sanitize_text_field($_POST['live_demo']);
        update_post_meta($post_id, '_live_demo', $live_demo);
    }

    if (isset($_POST['product_file'])) {
        $product_file = sanitize_text_field($_POST['product_file']);
        update_post_meta($post_id, '_product_file', $product_file);
    }
}
add_action('save_post_product', 'save_custom_product_fields');
