<?php

if (! defined('ABSPATH')) {
	exit;
}

get_template_part('parts/header');
global $product;
if (! is_a($product, 'WC_Product')) {
	$product = wc_get_product();
	$product_id = get_the_ID();
}

?>

<section class="bg-item-detail d-table w-100">
	<div class="container ">
		<div class="row">
			<?php $args = array(
				'delimiter' => '/'
			);
			woocommerce_breadcrumb($args);
			?>
		</div>
		<div class="row">
			<?php echo the_title('<h1 class="product-title h3 fw-bold mb-0">', '</h1>'); ?>
		</div>
		<div class="row mt-2">
			<?php $author_id = $product->get_post_data()->post_author;
			$author_name = get_the_author_meta('display_name', $author_id);
			?>
			<span class="fw-bold col-lg-6 d-flex align-items-center">By <a href="<?php get_author_posts_url($author_id); ?>"> <?php echo esc_html($author_name) ?></a></span>

			<span class="col-lg-6 d-flex justify-content-end align-items-center">
				<span class="col-lg-3 p-2 mx-3 text-center rounded p-1 bg-success text-light fw-bold">
					<i class="uil uil-shield-check fs-6"></i>
					Updated
				</span>

				<span class="col-lg-3 p-2 mx-3 text-center rounded p-1 bg-primary text-light fw-bold">
					<i class="uil uil-shopping-cart-alt fs-6"></i>
					82 Sales
				</span>

				<span class="col-lg-2">
					⭐⭐⭐⭐⭐
				</span>
			</span>
		</div>
		<hr>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<?php
					$attachment_ids = $product->get_gallery_image_ids();

					if (has_post_thumbnail()) {
						$main_image_id = $product->get_image_id();
						echo wp_get_attachment_image($main_image_id, 'full', false, array(
							'class' => 'img-fluid rounded-md shadow',
						));
					} else {
						echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder" />';
					}
					?>

				</div>
				<div class="row my-3 d-flex align-items-center justify-content-between">
					<a class=" col-lg-3 btn btn-l btn-pills btn-primary me-2" hre="#">Live Demo</a>
					<span class="col-lg-8 d-flex align-items-center justify-content-end bg-light shadow-sm rounded py-2">
						<span class="px-2 small">Created:12.12.2024</span>
						<span class="px-2 small">Updated:12.12.2024</span>
						<span class="px-2 small">ID:95124</span>
					</span>
				</div>
				<div class="row mt-2 pt-2">
					<div class="col-12">
						<ul class="nav nav-tabs border-bottom" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="detail-tab" data-bs-toggle="tab" data-bs-target="#detailItem" type="button" role="tab" aria-controls="detailItem" aria-selected="true">Item Description</button>
							</li>

							<li class="nav-item" role="presentation">
								<button class="nav-link" id="bids-tab" data-bs-toggle="tab" data-bs-target="#bids" type="button" role="tab" aria-controls="bids" aria-selected="false">Reviews</button>
							</li>

							<li class="nav-item" role="presentation">
								<button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab" aria-controls="activity" aria-selected="false">Comments</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="additional-information-tab" data-bs-toggle="tab" data-bs-target="#additional-information" type="button" role="tab" aria-controls="additional-information" aria-selected="false">Additional Information</button>
							</li>
						</ul>

						<div class="tab-content mt-2 pt-2" id="myTabContent">
							<div class="tab-pane fade show active" id="detailItem" role="tabpanel" aria-labelledby="detail-tab">
								<?php the_content(); ?>
							</div>

							<div class="tab-pane fade" id="bids" role="tabpanel" aria-labelledby="bids-tab">
								<?php
								$comments_args = array(
									'post_id' => $product_id,
									'status'  => 'approve',
									'post_type' => 'product',
									//'type'    => 'review', 
									'parent'  => 0
								);

								// Get the reviews (comments)
								$comments = get_comments($comments_args);


								if ($comments) : ?>
									<div class="woocommerce-product-reviews">
										<h5 class="mb-4"><?php echo count($comments); ?> Reviews</h5>
										<div class="commentlist">
											<?php foreach ($comments as $comment) : ?>

												<div class="creators creator-primary d-flex align-items-center flex-wrap mb-5 p-3 rounded shadow-sm bg-light">
													<div class="position-relative">
														<img src="<?php echo esc_url(get_avatar_url($comment->comment_author_email, array('size' => 32))); ?>" class="avatar avatar-sm-sm shadow-md rounded-pill" alt="">
													</div>

													<div class="ms-3">
														<h6 class="mb-0"><?php echo get_comment_author($comment); ?><span class="text-muted"> gave</span> <span class="review-rating">⭐⭐⭐⭐⭐</span></h6>
														<small class="text-muted"><?php echo get_comment_date('', $comment); ?></small>
													</div>

													<div class="review-content w-100 mt-2 ml-52p">
														<?php echo wpautop($comment->comment_content);  ?>
													</div>

													<?php
													$replies = get_comments(array(
														'post_id' => $product_id,
														'status' => 'approve',
														'parent' => $comment->comment_ID
													));

													// Display replies if any
													if ($replies) : ?>

														<?php foreach ($replies as $reply) : ?>
															<div class="creators px-5 creator-primary d-flex align-items-center flex-wrap mt-2">
																<div class="position-relative">
																	<img src="<?php echo esc_url(get_avatar_url($reply->comment_author_email, array('size' => 32))); ?>" class="avatar avatar-sm-sm shadow-md rounded-pill" alt="">
																</div>

																<div class="ms-3">
																	<h6 class="mb-0"><?php echo get_comment_author($reply); ?></h6>
																	<small class="text-muted"><?php echo get_comment_date('', $reply); ?></small>
																</div>

																<div class="review-content w-100 mt-2 ml-52p">
																	<?php echo wpautop($reply->comment_content); ?>
																</div>
															</div>

														<?php endforeach; ?>

													<?php endif; ?>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								<?php else : ?>
									<p>No reviews yet.</p>
								<?php endif; ?>



							</div>

							<div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
								<?php
								$comments_args = array(
									'post_id' => $product_id,
									'status'  => 'approve',
									'post_type' => 'product',
									//'type'    => 'review', 
									'parent'  => 0
								);

								// Get the reviews (comments)
								$comments = get_comments($comments_args);

								// MAKE CODE A FUNCTION !!!!!!!!!
								if ($comments) : ?>
									<div class="woocommerce-product-reviews">
										<h5 class="mb-4"><?php echo count($comments); ?> Comments</h5>
										<div class="commentlist">
											<?php foreach ($comments as $comment) : ?>

												<div class="creators creator-primary d-flex align-items-center flex-wrap mb-5 p-3 rounded shadow-sm bg-light">
													<div class="position-relative">
														<img src="<?php echo esc_url(get_avatar_url($comment->comment_author_email, array('size' => 32))); ?>" class="avatar avatar-sm-sm shadow-md rounded-pill" alt="">
													</div>

													<div class="ms-3">
														<h6 class="mb-0"><?php echo get_comment_author($comment); ?><span class="text-muted"> gave</span> <span class="review-rating">⭐⭐⭐⭐⭐</span></h6>
														<small class="text-muted"><?php echo get_comment_date('', $comment); ?></small>
													</div>

													<div class="review-content w-100 mt-2 ml-52p">
														<?php echo wpautop($comment->comment_content);  ?>
													</div>

													<?php
													$replies = get_comments(array(
														'post_id' => $product_id,
														'status' => 'approve',
														'parent' => $comment->comment_ID
													));


													if ($replies) : ?>

														<?php foreach ($replies as $reply) : ?>
															<div class="creators px-5 creator-primary d-flex align-items-center flex-wrap mt-2">
																<div class="position-relative">
																	<img src="<?php echo esc_url(get_avatar_url($reply->comment_author_email, array('size' => 32))); ?>" class="avatar avatar-sm-sm shadow-md rounded-pill" alt="">
																</div>

																<div class="ms-3">
																	<h6 class="mb-0"><?php echo get_comment_author($reply); ?></h6>
																	<small class="text-muted"><?php echo get_comment_date('', $reply); ?></small>
																</div>

																<div class="review-content w-100 mt-2 ml-52p">
																	<?php echo wpautop($reply->comment_content); ?>
																</div>
															</div>

														<?php endforeach; ?>

													<?php endif; ?>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								<?php else : ?>
									<p>No reviews yet.</p>
								<?php endif; ?>

							</div>
							<div class="tab-pane fade" id="additional-information" role="tabpanel" aria-labelledby="additional-information">
								<p>additional information</p>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
				<div class="ms-lg-5">

					<div class="row">
						<div class="col-md-6 mt-4 pt-2">
							<h6>Current Bid</h6>
							<h4 class="mb-0">4.85 ETH</h4>
							<small class="mb-0 text-muted">$450.48USD</small>
						</div>

						<div class="col-md-6 mt-4 pt-2">
							<h6>Auction Ending In</h6>
							<h4 id="auction-item-8" class="fw-bold mb-0"></h4>
						</div>
						<?php woocommerce_template_single_add_to_cart(); ?>
						<div class="col-12 mt-4 pt-2">
							<a href="#" class="btn btn-l btn-pills btn-primary me-2" data-bs-toggle="modal" data-bs-target="#NftBid"><i class="mdi mdi-gavel fs-5 me-2"></i> Place a Bid</a>
							<a href="#" class="btn btn-l btn-pills btn-primary" data-bs-toggle="modal" data-bs-target="#NftBuynow"><i class="mdi mdi-cart fs-5 me-2"></i> Buy Now</a>
						</div>
					</div>
					<div class="row bg-light p-5 shadow-md rounded">
						<div>
							<h5>Categories</h5>
							<div class="d-flex flex-wrap justify-content-start align-items-center">
								<?php
								$terms = get_the_terms($product->get_id(), 'product_cat');

								if ($terms && ! is_wp_error($terms)) {
									foreach ($terms as $term) {
								?>
										<a class="bg-light small p-1 m-1 shadow-md rounded" href="<?php echo esc_url(get_term_link($term)); ?>">
											<?php echo esc_html($term->name); ?>
										</a>
								<?php
									}
								}
								?>
							</div>
						</div>
						<div class="mt-2">
							<h5>Tags</h5>
							<div class="d-flex flex-wrap justify-content-start align-items-center">
								<?php
								$tags = get_the_terms($product->get_id(), 'product_tag');

								if ($tags && ! is_wp_error($tags)) {

									foreach ($tags as $tag) {
								?>
										<a class="bg-light small p-1 m-1 shadow-md rounded" href="<?php echo esc_url(get_term_link($tag)); ?>">
											<?php echo esc_html($tag->name); ?>
										</a>
								<?php
									}
								}
								?>
							</div>
						</div>
						<?php
						$fields = get_fields($product->get_id());
						if ($fields) {

							foreach ($fields as $field_name => $field_value) {

								if (is_array($field_value) && ! empty($field_value)) {
						?> <div class="mt-2">
										<h5><?php echo esc_html(get_field_object($field_name)['label']);  ?></h5>
										<div class="d-flex flex-wrap justify-content-start align-items-center"> <?php


																												foreach ($field_value as $value) {
																												?>
												<a class="bg-light small p-1 m-1 shadow-md rounded" href="#">
													<?php echo esc_html($value); ?>
												</a>
											<?php
																												}
											?>
										</div>
									</div> <?php
										} elseif (!is_array($field_value) && ! empty($field_value)) {
											?> <div class="mt-2">
										<h5><?php echo esc_html(get_field_object($field_name)['label']);  ?></h5>
										<div class="d-flex flex-wrap justify-content-start align-items-center"> <?php
																												?>
											<a class="bg-light small p-1 m-1 shadow-md rounded" href="#">
												<?php echo esc_html($field_value); ?>
											</a>
										</div>
									</div>
						<?php

										}
									}
								}
						?>


					</div>


				</div>
			</div>
		</div>
	</div>

	<div class="container mt-100 mt-60">
		<div class="row align-items-end mb-2 pb-2">
			<div class="col-md-8">
				<div class="section-title">
					<h4 class="title mb-2">Similar Products </h4>
					<p class="text-muted mb-0">You could be intersted too.</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="text-end d-md-block d-none">
					<a href="creators.html" class="btn btn-link primary text-dark">See More <i class="uil uil-arrow-right"></i></a>
				</div>
			</div>
		</div>

		<?php get_template_part('parts/single-product/related-products-slider'); ?>

	</div>
</section>

<?php get_template_part('parts/footer'); ?>