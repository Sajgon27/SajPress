<?php

/**
 * Template Name: Cart Page
 */
if (! defined('ABSPATH')) {
    exit;
}

get_template_part('parts/header');

//wc_print_notices();

?>

<section class="bg-half-170 d-table w-100" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/dark-background.jpg) bottom;">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold sub-heading text-white title-dark">Cart</h5>
                    <p class="text-white-50 para-desc mx-auto mb-0">Please check all digital activities</p>
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
            <div class="row">
                <div class="me-lg-4">
                    <?php
                    if (WC()->cart->is_empty()) {
                    ?>

                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="section-title text-center mb-4 pb-2">
                                    <h4 class="mb-4 title">Your shopping cart is empty.</h4>
                                    <p class="para-desc mx-auto text-muted">Discover the most popular items available in our <a href="#">catalog</a>.</p>
                                </div>
                            </div>
                        </div>

                    <?php
                    } else {

                    ?>

                        <div class="row g-4">

                            <?php

                            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                $product = $cart_item['data'];
                                if (! $product || ! $product->exists()) {
                                    continue;
                                }

                                $product_id = $product->get_id();
                                $product_name = $product->get_name();
                                $product_price = WC()->cart->get_product_price($product);
                                $product_thumbnail = wp_get_attachment_url($product->get_image_id());
                                $product_subtotal = WC()->cart->get_product_subtotal($product, $cart_item['quantity']);
                                $product_url = $product->get_permalink();
                                $product_quantity = $cart_item['quantity'];

                            ?>
                                <div class="col-12 row">
                                    <div class="col-lg-8 card activity activity-primary rounded-md shadow p-4">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative">
                                                <img src="<?php echo $product_thumbnail; ?>" class="avatar avatar-md-md rounded-md shadow-md" alt="">

                                                <a href="<?php echo esc_url(wc_get_cart_remove_url($cart_item_key)); ?>" class="position-absolute top-0 start-0 translate-middle px-1 rounded-lg shadow-md bg-white">
                                                    <i class="uil-trash-alt mdi-18px text-danger"></i>
                                                </a>
                                            </div>

                                            <span class="content ms-3">
                                                <a href="<?php echo esc_url($product_url); ?>" class="text-dark title mb-0 h6 d-block"><?php echo esc_html($product_name); ?></a>
                                                <small class="text-muted d-block mt-1">License: Regular License</small>

                                                <small class="d-block mt-1"><?php echo $product_price; ?></small>
                                            </span>
                                            <div>

                                                <form class="text-right px-2" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
                                                    <input type="number" class="w-50" name="cart[<?php echo esc_attr($cart_item_key); ?>][qty]" value="<?php echo esc_attr($product_quantity); ?>" min="1" max="100">
                                                    <button class="btn btn-primary w-50 mt-1" type="submit" name="update_cart" value="Update">Update</button>
                                                    <?php wp_nonce_field('woocommerce-cart');
                                                    ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 p-2 rounded shadow-md">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="section-title text-center mb-4 pb-2">
                                                    <h4 class="mb-4 title">Your shopping cart total.</h4>
                                                    <p class="para-desc mx-auto h5"><?php echo WC()->cart->get_total(); ?></p>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">

                                                <a href="/checkout" class="btn btn-primary col-10 mb-1 rounded">
                                                    Proceed to checkout
                                                </a>
                                                <p class="small small-text text-muted col-10 mx-auto mb-4">Price displayed excludes any applicable<br> taxes and a handling fee.</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('parts/footer'); ?>