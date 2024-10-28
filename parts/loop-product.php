<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

global $product;

if (!$product) {
    $product = wc_get_product(get_the_ID());
}


$product_id = $product->get_id();
$title = $product->get_name();
$price = $product->get_price_html();
$regular_price = $product->get_regular_price();
$sale_price = $product->get_sale_price();
$sku = $product->get_sku();
$description = $product->get_short_description();
$permalink = get_permalink($product_id);
$image = wp_get_attachment_image_src($product->get_image_id(), 'medium');
$rating = $product->get_average_rating();
$stock_status = $product->is_in_stock() ? 'In stock' : 'Out of stock';

$product_image_id = get_post_thumbnail_id($product_id);
$image_url = wp_get_attachment_url($product_image_id);
if (!$image_url) {
    $image_url = wc_placeholder_img_src();
}


$description = $product->get_short_description();

// Limit the description to 25 words
$description_words = explode(' ', $description);
$limited_description = implode(' ', array_slice($description_words, 0, 20));
?>


<div class="template-card mt-4">
    <a href="<?php echo get_permalink($product_id); ?>" class="template-image">
        <img src="<?php echo esc_url($image_url); ?>" alt="Template Preview">
    </a>
    <div class="template-content">

        <div class="template-details w-75 pr-30">
            <h2 class="title text-dark h6"><?php echo $product->get_name(); ?></h2>
            <p class="author small-text">by Evonicmedia in Real Estate Construction</p>
            <span><?php echo wp_kses_post($limited_description); ?><?php if (count($description_words) > 20) echo '...'; ?></span>
        </div>


        <div class="price-and-actions w-25">
            <div class="price-details d-flex flex-column ">
                <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="uil uil-heart-alt mb-0"></i></a></span>
                <span class="price"><?php echo $product->get_price_html(); ?></span>
                <span class="sales small">4 Sales</span>

            </div>
            <div class="actions">
                <a class="btn btn-sm rounded-md btn-primary w-100">Check Details</a>
                <a class="btn btn-sm rounded-md btn-primary w-100 mt-2">Live Preview</a>
            </div>
        </div>
    </div>
</div>