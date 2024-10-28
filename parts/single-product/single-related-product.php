<?php
if (! defined('ABSPATH')) {
    exit;
}

$product_id = get_the_ID();
$product = wc_get_product($product_id);
$product_image_id = get_post_thumbnail_id($product_id);
$image_url = wp_get_attachment_url($product_image_id);
if (!$image_url) {
    $image_url = wc_placeholder_img_src();
}
?>

<div class="tiny-slide">
    <div class="card nft-items nft-primary rounded-md shadow overflow-hidden m-1">
        <div class="nft-image position-relative overflow-hidden">
            <img src="<?php echo esc_url($image_url); ?>" class="product-img" alt="">
        </div>

        <div class="content position-relative">
            <div class="mt-2">
                <p class="text-dark small-title"><?php echo get_the_title($product_id); ?></p>

                <div class="d-flex justify-content-between">
                    <small class="rate fw-bold"><?php echo $product->get_price_html(); ?></small>

                </div>

                <div class="d-flex justify-content-between mt-1 gap-20">
                    <a href="<?php echo get_permalink($product_id); ?>" class="btn btn-sm rounded-md shadow-sm btn-light w-50">Check details</a>
                    <a href="#" class="btn ml-2 btn-sm rounded-md btn-primary w-50">Live Demo</a>
                </div>
            </div>
        </div>
    </div>
</div>