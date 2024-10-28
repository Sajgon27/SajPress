<?php

/**
 * Template Name: Login Page
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

$register_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = sanitize_email($_POST['log']);
    $password = $_POST['pwd'];


    $user = get_user_by('email', $email);

    if (!$user) {

        $register_error = 'No user found with that email address.';
    } else {

        if (wp_check_password($password, $user->data->user_pass, $user->ID)) {

            $account_status = get_user_meta($user->ID, 'account_status', true);

            if ($account_status === 'inactive') {

                $register_error = 'Your account is inactive. Please contact the administrator.';
            } else {

                wp_set_current_user($user->ID);
                wp_set_auth_cookie($user->ID);

                wp_redirect(home_url('/account'));
                exit();
            }
        } else {

            $register_error = 'Incorrect password.';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Superex - NFT Marketplace HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NFT Marketplace Website Template" />
    <meta name="keywords" content="blockchain nft, collectibles, crypto, crypto art, crypto asset, crypto marketplace, digital, item, NFT, NFT assets, NFT Gaming, nft marketplace, token, wallet" />
    <meta content="Shreethemes" name="author" />
    <meta content="support@shreethemes.in" name="Email" />
    <meta content="https://shreethemes.in/" name="Website" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <?php wp_head(); ?> <!-- This function calls all enqueued styles and other head elements -->
</head>

<body>

    <div class="back-to-home">
        <a href="" class="back-button btn btn-pills btn-sm btn-icon btn-primary"><i data-feather="arrow-left" class="icons"></i></a>
    </div>


    <section class="position-relative">
        <div class="bg-video-wrapper">
            <iframe src="https://player.vimeo.com/video/502163294?background=1&autoplay=1&loop=1&byline=0&title=0"></iframe>

        </div>
        <div class="bg-overlay bg-linear-gradient-2"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="d-flex flex-column min-vh-100 p-4">

                        <div class="text-center">
                            <a href=""><img src="images/logo-white.png" alt=""></a>
                        </div>



                        <div class="title-heading text-center my-auto">
                            <div class="form-signin px-4 py-5 bg-white rounded-md shadow-sm">
                                <form name="loginform" id="loginform" action="" method="post">
                                    <h5 class="mb-4">Login</h5>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-2">
                                                <input type="email" class="form-control" required name="log" id="LoginEmail" placeholder="name@example.com">
                                                <label for="LoginEmail">Email Address:</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" required name="pwd" id="LoginPassword" placeholder="Password">
                                                <label for="LoginPassword">Password:</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <p class="small-error-msg"><?php echo $register_error; ?></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-3">
                                                    <div class="form-check align-items-center d-flex mb-0">
                                                        <input class="form-check-input mt-0" type="checkbox" value="" id="RememberMe">
                                                        <label class="form-check-label text-muted ms-2" for="RememberMe">Remember me</label>
                                                    </div>
                                                </div>
                                                <small class="text-muted mb-0"><a href="/reset-password" class="text-muted fw-semibold">Forgot password ?</a></small>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button class="btn btn-primary rounded-md w-100" name="wp-submit" type="submit">Sign in</button>
                                        </div>

                                        <div class="col-12 text-center mt-4">
                                            <small><span class="text-muted me-2">Don't have an account ?</span> <a href="/sign-up" class="text-dark fw-bold">Sign Up</a></small>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="text-center">
                            <small class="mb-0 text-light title-dark">© <script>
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

</body>

</html>