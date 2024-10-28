<?php

/**
 * Template Name: Activate account Page
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}
get_template_part('parts/header');
?>

<div class="back-to-home">
    <a href="" class="back-button btn btn-pills btn-sm btn-icon btn-primary"><i data-feather="arrow-left" class="icons"></i></a>
</div>

<section class="position-relative bg-soft-primary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="d-flex flex-column min-vh-100 p-4">

                    <div class="text-center">
                        <a href=""><img src="images/logo-dark.png" alt=""></a>
                    </div>

                    <?php
                    if (isset($_GET['key']) && isset($_GET['user'])) {
                        echo 'aaa';
                        $token = sanitize_text_field($_GET['key']);
                        $user_id = intval($_GET['user']);


                        $saved_token = get_user_meta($user_id, 'activation_token', true);
                        $is_active = get_user_meta($user_id, 'is_active', true);

                        if ($saved_token === $token && $is_active == 0) {

                            update_user_meta($user_id, 'is_active', 1);
                            delete_user_meta($user_id, 'activation_token');
                    ?>
                            <div class="title-heading text-center my-auto">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/error-404.png" class="img-fluid" alt="">
                                <h1 class="heading sub-heading mb-3 mt-5 text-dark">Account activated successfully!</h1>
                                <p class="text-muted">You can now log in.</p>
                                <div class="mt-4">
                                    <a href="/login" class="back-button btn btn-primary">Log in</a>
                                </div>
                            </div>
                        <?php

                        } else {
                        ?>
                            <div class="title-heading text-center my-auto">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/error-404.png" class="img-fluid" alt="">
                                <h1 class="heading sub-heading mb-3 mt-5 text-dark">Invalid activation link or the account is already active.</h1>

                                <div class="mt-4">
                                    <a href="/" class="back-button btn btn-primary">Back to Home</a>
                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="title-heading text-center my-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/error-404.png" class="img-fluid" alt="">
                            <h1 class="heading sub-heading mb-3 mt-5 text-dark">Invalid activation link.</h1>

                            <div class="mt-4">
                                <a href="/" class="back-button btn btn-primary">Back to Home</a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>



                    <div class="text-center">
                        <small class="mb-0 text-muted">© <script>
                                document.write(new Date().getFullYear())
                            </script> Superex. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</small>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/feather.min.js"></script>

<script src="js/plugins.init.js"></script>
<script src="js/app.js"></script>