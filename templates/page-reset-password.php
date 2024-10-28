<?php

/**
 * Template Name: Reset Password page
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

$form_message = '';
if (isset($_POST['request_reset'])) {

    $user_email = sanitize_email($_POST['user_email']);

    if (!email_exists($user_email)) {
        $form_message = '<p class="small-error-msg" >This email does not exist in our records.</p>';
    } else {
        $user = get_user_by('email', $user_email);
        $reset_key = get_password_reset_key($user);


        $reset_url = home_url('/reset-password') . '?key=' . $reset_key . '&login=' . rawurlencode($user->user_login);


        wp_mail(
            $user_email,
            'Password Reset Request',
            'Click here to reset your password: ' . $reset_url
        );
        $form_message = '<p class="small-success-msg" >A password reset link has been sent to your email address.</p>';
    }
}

if (isset($_POST['reset_password'])) {

    $reset_key = sanitize_text_field($_POST['reset_key']);
    $login = sanitize_text_field($_POST['login']);
    $new_password = $_POST['new_password'];

    $errors = false;
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $new_password)) {
        $errors = "New password must be at least 8 characters long, with at least one uppercase letter, one lowercase letter, and one number.";
    }

    $user = check_password_reset_key($reset_key, $login);

    if (is_wp_error($user)) {
        $form_message = '<p class="small-error-msg" >The password reset link is invalid or expired.</p>';
    } elseif ($errors) {
        $form_message = '<p class="small-error-msg" >' . $errors . '</p>';
    } else {
        reset_password($user, $new_password);
        $form_message = '<p class="small-success-msg">Your password has been successfully reset. You can now <a href="/login">log in</a>.</p>';
    }
}

$reset_key = isset($_GET['key']) ? sanitize_text_field($_GET['key']) : '';
$login = isset($_GET['login']) ? sanitize_text_field($_GET['login']) : '';

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
                                <?php if (!empty($reset_key) && !empty($login)) : ?>
                                    <form method="post" action="">
                                        <h5 class="mb-3">Enter your new password</h5>

                                        <p class="text-muted">Please enter your your new password.</p>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" name="new_password" required id="floatingInput" placeholder="password">
                                                    <input type="hidden" name="reset_key" value="<?php echo esc_attr($reset_key); ?>">
                                                    <input type="hidden" name="login" value="<?php echo esc_attr($login); ?>">
                                                    <label for="floatingInput">Password</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <p class="small-error-msg"><?php echo $form_message; ?></p>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-primary rounded-md w-100" name="reset_password" value="Reset Password" type="submit">Reset your password</button>
                                            </div>

                                            <div class="col-12 text-center mt-4">
                                                <small><span class="text-muted me-2">Remember your password ? </span><a href="/login" class="text-dark fw-bold">Sign in</a></small>
                                            </div>
                                        </div>
                                    </form>
                                <?php else : ?>
                                    <form method="post" action="">
                                        <h5 class="mb-3">Reset Your Password</h5>

                                        <p class="text-muted">Please enter your email address. You will receive a link to create a new password via email.</p>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="email" name="user_email" required class="form-control" id="floatingInput" placeholder="name@example.com">
                                                    <label for="floatingInput">Email address</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <?php echo $form_message; ?>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-primary rounded-md w-100" name="request_reset" value="Send Password Reset Link" type="submit">Send</button>
                                            </div>

                                            <div class="col-12 text-center mt-4">
                                                <small><span class="text-muted me-2">Remember your password ? </span><a href="/login" class="text-dark fw-bold">Sign in</a></small>
                                            </div>
                                        </div>
                                    </form>
                                <?php endif; ?>
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