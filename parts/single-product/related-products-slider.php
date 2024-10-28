<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

?>

<div class="row">
    <div class="col-12">
        <div class="tiny-four-item-nav-arrow">

            <?php
            global $product;

            $excluded_category_ids = array(43, 44, 45, 46);
            $terms = get_the_terms($product->get_id(), 'product_cat');

            if ($terms && ! is_wp_error($terms)) {
                $top_level_category = null;

                foreach ($terms as $term) {
                    if ($term->parent == 0 && ! in_array($term->term_id, $excluded_category_ids)) {
                        $top_level_category = $term;
                        break;
                    }
                }
                if ($top_level_category) {

                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 8,
                        // 'tax_query'      => array(
                        //     array(
                        //         'taxonomy' => 'product_cat',
                        //         'field'    => 'term_id',
                        //        'terms'    => $top_level_category->term_id,
                        //    ),
                        // ),
                    );

                    $products = new WP_Query($args);

                    if ($products->have_posts()) {


                        while ($products->have_posts()) {
                            $products->the_post();
                            get_template_part('parts/single-product/single-related-product');
                        }
                    } else {
                        echo '<p>No products found in this category.</p>';
                    }


                    wp_reset_postdata();
                }
            }
            ?>



        </div>
    </div>
</div>