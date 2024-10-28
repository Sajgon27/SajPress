<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}


function upload_product_downloadable_file($file)
{
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/media.php');
    require_once(ABSPATH . 'wp-admin/includes/image.php');


    $upload = wp_handle_upload($file, array('test_form' => false));

    if (!empty($upload['file'])) {
        $filename = $upload['file'];
        $filetype = wp_check_filetype($filename);
        $attachment = array(
            'post_mime_type' => $filetype['type'],
            'post_title'     => sanitize_file_name($filename),
            'post_content'   => '',
            'post_status'    => 'inherit'
        );


        $attachment_id = wp_insert_attachment($attachment, $filename);
        if (!is_wp_error($attachment_id)) {
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            $attachment_data = wp_generate_attachment_metadata($attachment_id, $filename);
            wp_update_attachment_metadata($attachment_id, $attachment_data);
            return $attachment_id;
        }
    }
    return false;
}


function upload_product_image($image_file)
{
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/media.php');
    require_once(ABSPATH . 'wp-admin/includes/image.php');


    $upload = wp_handle_upload($image_file, array('test_form' => false));

    if (!empty($upload['file'])) {
        $filename = $upload['file'];
        $filetype = wp_check_filetype($filename);
        $attachment = array(
            'post_mime_type' => $filetype['type'],
            'post_title'     => sanitize_file_name($filename),
            'post_content'   => '',
            'post_status'    => 'inherit'
        );


        $attachment_id = wp_insert_attachment($attachment, $filename);
        if (!is_wp_error($attachment_id)) {
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            $attachment_data = wp_generate_attachment_metadata($attachment_id, $filename);
            wp_update_attachment_metadata($attachment_id, $attachment_data);
            return $attachment_id;
        }
    }
    return false;
}



function add_acf_fields_to_product($category, $product_id)
{
    if ($category == 'wordpress-theme' || $category == 'woocommerce-theme') {
        $group_id = 120;
    } elseif ($category == 'elementor-kit') {
        $group_id = 116;
    } elseif ($category == 'plugin') {
        $group_id = 131;
    }
    $field_group = acf_get_fields($group_id);
    foreach ($field_group as $field_key => $field_data) {
        //$field_choices = $field_data['choices'];
        $field_label = $field_data['label'];
        $field_name = $field_data['name'];

        switch ($field_data['type']) {
            case 'checkbox':
                if ($_POST[$field_name]) {
                    $selected_features = array_map('sanitize_text_field', $_POST[$field_name]);
                    update_field($field_name, $selected_features, $product_id);
                }
        }
    }
}
