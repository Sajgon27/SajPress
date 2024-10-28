<?php

/**
 * Template Name: Upload Product Page
 */
if (! defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/inc/custom-functions.php';
get_template_part('parts/header');


if (isset($_POST['submit-product'])) {
    //  if ( ! isset( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'add_product' ) ) {
    //    die( 'Security check failed!' );
    //  } 

    $title       = sanitize_text_field($_POST['product-name']);
    $live_demo   = sanitize_text_field($_POST['live-demo']);
    $price       = sanitize_text_field($_POST['product-price']);
    $description = sanitize_textarea_field($_POST['product-description']);
    $product_short_description = sanitize_text_field($_POST['product-excerpt']);
    $category =  sanitize_text_field($_POST['category']);
    $categories_id = array_map('intval', $_POST['product-categories']);
    var_dump($categories_id);

    $product = new WC_Product_Simple();

    $product->set_name($title);
    $product->set_description($description);
    $product->set_short_description($product_short_description);
    $product->set_regular_price($price);
    $product->update_meta_data('_live_demo', $live_demo);
    $product->set_category_ids($categories_id);
    $product_id = $product->save();
    update_post_meta($product_id, '_virtual', 'yes');
    update_post_meta($product_id, '_downloadable', 'yes');
    add_acf_fields_to_product($category, $product_id);

    if (!empty($_FILES['input-file']) && !$_FILES['input-file']['error']) {
        $download_file_id = upload_product_downloadable_file($_FILES['input-file']);
        if ($download_file_id) {
            $downloadable_files = array(
                md5($download_file_id) => array(
                    'name' => basename(get_attached_file($download_file_id)),
                    'file' => wp_get_attachment_url($download_file_id)
                )
            );
            update_post_meta($product_id, '_downloadable_files', $downloadable_files);
        }
    }

    if (!empty($_FILES['product_image']) && !$_FILES['product_image']['error']) {
        $attachment_id = upload_product_image($_FILES['product_image']);
        if ($attachment_id) {
            set_post_thumbnail($product_id, $attachment_id);
        }
    }

    if (!empty($_FILES['product_gallery']) && is_array($_FILES['product_gallery']['name'])) {
        $gallery_image_ids = array();
        foreach ($_FILES['product_gallery']['name'] as $key => $value) {
            if ($_FILES['product_gallery']['name'][$key]) {
                $gallery_file = array(
                    'name'     => $_FILES['product_gallery']['name'][$key],
                    'type'     => $_FILES['product_gallery']['type'][$key],
                    'tmp_name' => $_FILES['product_gallery']['tmp_name'][$key],
                    'error'    => $_FILES['product_gallery']['error'][$key],
                    'size'     => $_FILES['product_gallery']['size'][$key]
                );

                $gallery_image_id = upload_product_image($gallery_file);
                if ($gallery_image_id) {
                    $gallery_image_ids[] = $gallery_image_id;
                }
            }
        }
        if (!empty($gallery_image_ids)) {
            update_post_meta($product_id, '_product_image_gallery', implode(',', $gallery_image_ids));
        }
    }
    echo 'Product added successfully!';
}
?>


<section class="bg-half-170 d-table w-100" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/background/dark-background.jpg') bottom;">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold sub-heading text-white title-dark">Upload Your Work</h5>
                    <p class="text-white-50 para-desc mx-auto mb-0">Add your digital art and work</p>
                </div>
            </div>
        </div>

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Superex</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="row">


            <div class="order-1 order-md-2">
                <div class="card rounded-md shadow p-4">
                    <div class="row">
                        <div class=" mt-4 mt-lg-0">
                            <div class="ms-lg-4">
                                <form id="add_product_form" method="POST" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <div class="form-floating mb-2 product-category register-user">
                                                <label data-category="theme">
                                                    WordPress Theme
                                                    <input type="radio" checked id="wordpress-theme" required name="category" value="wordpress-theme">
                                                </label>

                                                <label data-category="theme">
                                                    WooCommerce Theme
                                                    <input type="radio" id="woocommerce-theme" required name="category" value="woocommerce-theme">
                                                </label>

                                                <label data-category="elementor-kit">
                                                    Elementor Kit
                                                    <input type="radio" id="elementor-kit" required name="category" value="elementor-kit	">
                                                </label>

                                                <label data-category="plugin">
                                                    Plugin
                                                    <input type="radio" id="plugin" required name="category" value="plugin">
                                                </label>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-bold">Product Name <span class="text-danger">*</span></label>
                                            <input name="product-name" id="product-name" type="text" class="form-control" placeholder="Product name :">
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-bold">Live Demo <span class="text-danger">*</span></label>
                                            <input name="live-demo" id="live-demo" type="text" class="form-control" placeholder="Link to live demo :">
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label class="form-label fw-bold">Sub-category</label>
                                            <div class="dropdown-checkbox-container">
                                                <span class="dropdown-button-category form-control">Select Options</span>
                                                <div class="dropdown-checkboxes dropdown-checkbox-menu w-100">
                                                    <?php
                                                    $args = array(
                                                        'taxonomy'   => 'product_cat',
                                                        'hide_empty' => false,
                                                    );
                                                    $categories = get_terms($args);
                                                    foreach ($categories as $category) {
                                                        if ($category->parent == 0) {
                                                    ?>
                                                            <div class="parent-option">
                                                                <label><input type="checkbox" name="product-categories[]" data-title="<?php echo esc_html($category->name);  ?>" class="parent-checkbox" value="<?php echo esc_html($category->term_id);  ?>"><?php echo esc_html($category->name);  ?></label>
                                                                <?php
                                                                $child_categories = get_term_children($category->term_id, 'product_cat');

                                                                if (! empty($child_categories)) {
                                                                ?>
                                                                    <span class="arrow-down">▼</span>
                                                            </div>
                                                            <div class="sub-options">
                                                    <?php
                                                                    foreach ($child_categories as $child_id) {
                                                                        $child_category = get_term($child_id, 'product_cat');
                                                                        echo '<label><input type="checkbox" name="product-categories[]" data-title="' . esc_html($child_category->name) . '" class="child-checkbox" value="' .  $child_id . '">' .  esc_html($child_category->name) . '</label>';
                                                                    }
                                                                    echo '</div>';
                                                                } else {
                                                                    echo '</div>';
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                            </div>
                                                            <div class="selected-options selected-options-checkbox"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <label class="form-label fw-bold">Tags<span class="text-danger">*</span></label>
                                                <input name="name" id="name" type="text" class="form-control" placeholder="Title :">
                                            </div>

                                            <div class="col-12 mb-4">
                                                <label class="form-label fw-bold"> Description : </label>
                                                <?php
                                                $editor_id = 'product-description';
                                                $editor_content = '';
                                                $editor_settings = array(
                                                    'textarea_name' => 'product-description',
                                                    'media_buttons' => true,
                                                    'textarea_rows' => 10,
                                                    'teeny' => false,
                                                );

                                                wp_editor($editor_content, $editor_id, $editor_settings); ?>

                                            </div>

                                            <div class="col-12 mb-4">
                                                <label class="form-label fw-bold"> Excerpt : </label>

                                                <textarea name="product-excerpt" id="product-excerpt" rows="3" class="form-control" placeholder="Excerpt :"></textarea>
                                            </div>

                                            <div class="col-12 mb-4">
                                                <p class="fw-semibold mb-4">Your product files</p>
                                                <div class="preview-box preview-box-file d-block rounded-md shadow overflow-hidden bg-light text-muted p-2 small">Upload your ZIP file. Max file size : 10MB.</div>
                                                <input type="file" id="input-file" name="input-file" accept=".zip" onchange={handleChange()} hidden />
                                                <label class="btn-upload btn btn-primary rounded-md mt-4" for="input-file">Upload ZIP</label>
                                            </div>

                                            <div class="col-12 mb-4">
                                                <p class="fw-semibold mb-4">Main image</p>

                                                <div class="image-preview-container" id="image-preview-container-main"></div>
                                                <label class="btn-upload btn btn-primary rounded-md mt-4" for="product_gallery_upload_main">Upload Image</label>
                                                <input type="file" id="product_gallery_upload_main" name="product_image" accept="image/*" class="d-none" />
                                                <input type="hidden" id="product_gallery_ids" name="product_gallery_ids">
                                            </div>

                                            <div class="col-12 mb-4">
                                                <p class="fw-semibold mb-4">Slide Images</p>

                                                <div class="image-preview-container" id="image-preview-container-slides"></div>
                                                <label class="btn-upload btn btn-primary rounded-md mt-4" for="product_gallery_upload_slides">Upload Images</label>
                                                <input type="file" id="product_gallery_upload_slides" name="product_gallery[]" multiple accept="image/*" class="d-none" />
                                                <input type="hidden" id="product_gallery_ids" name="product_gallery_ids">

                                            </div>

                                            <hr>
                                            <div id="loader" class="text-center" style="display:none;">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loader.gif" class="img-fluid pd-50" alt="">
                                            </div>
                                            <div class="row" id="product-attributes">
                                                <?php get_template_part('parts/upload-product/theme'); ?>
                                            </div>
                                            <hr>

                                            <div class=" mb-4">
                                                <label class="form-label fw-bold"> Price : </label>
                                                <input name="product-price" id="product-price" type="number" class="form-control end" placeholder="Select date :">
                                            </div>

                                            <div class="col-lg-12">
                                                <?php wp_nonce_field('add_product'); ?>
                                                <input type="submit" name="submit-product" placeholder="Create Product" class="btn btn-primary rounded-md" />
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_template_part('parts/footer'); ?>