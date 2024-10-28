<?php

/**
 * Template Name: Registration Page
 */
if (! defined('ABSPATH')) {
    exit;
}

$register_error = '';
if (isset($_POST['register'])) {
    $role = sanitize_user($_POST['options']);
    $username = sanitize_user($_POST['username']);
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];

    $errors = [];

    if (username_exists($username)) {
        $errors[] = "Username already exists.";
    }
    if (email_exists($email)) {
        $errors[] = "Email already exists.";
    }
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
        $errors[] = "Password must be at least 8 characters long, with at least one uppercase letter, one lowercase letter, and one number.";
    }

    if (empty($errors)) {
        $token = bin2hex(random_bytes(32));


        $user_id = wp_create_user($username, $password, $email);
        wp_update_user(['ID' => $user_id, 'role' => $role]);

        if (!is_wp_error($user_id)) {

            update_user_meta($user_id, 'is_active', 0);
            update_user_meta($user_id, 'activation_token', $token);

            $activation_link = add_query_arg([
                'key' => $token,
                'user' => $user_id,
            ], get_site_url() . '/activate-account');

            $subject = "Activate Your Account";
            $message = "Hi $username, \n\nPlease click the link below to activate your account:\n\n$activation_link";
            wp_mail($email, $subject, $message);

            wp_redirect(home_url('/successful-registration'));
            exit;
        } else {
            echo "<p>Error: " . $user_id->get_error_message() . "</p>";
            $register_error = "Error: " . $user_id->get_error_message();
        }
    } else {
        $register_error = 'Error:' . $errors[1];
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
                                <form action="" method="POST" id="registration_form">
                                    <h5 class="mb-4">Register Your Account</h5>

                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-floating mb-2 register-user">
                                                <label>
                                                    Client
                                                    <input type="radio" id="option1" required name="options" value="client">

                                                </label>

                                                <span class="or-text">Or</span>

                                                <label>
                                                    Author
                                                    <input type="radio" id="option2" required name="options" value="author">
                                                </label>

                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-floating mb-2">
                                                <input type="text" name="username" required class="form-control" id="RegisterName" placeholder="Harry">
                                                <label for="RegisterName">Username</label>
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-floating mb-2">
                                                <input type="email" class="form-control" name="email" required id="RegisterEmail" placeholder="name@example.com">
                                                <label for="RegisterEmail">Email Address</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" name="password" required id="RegisterPassword" placeholder="Password">
                                                <label for="RegisterPassword">Password</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <p class="small-error-msg"><?php echo $register_error; ?></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <p class="small-normal-msg">Password must be at least 8 characters long, with at least one uppercase letter, one lowercase letter, and one number.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-check align-items-center d-flex mb-3">
                                                <input class="form-check-input mt-0" type="checkbox" value="" required id="AcceptT&C">
                                                <label class="form-check-label text-muted ms-2" for="AcceptT&C">I Accept <a href="javascript:void(0)" class="text-primary">Terms And Condition</a></label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button class="btn btn-primary rounded-md w-100" name="register" type="submit">Register</button>
                                        </div>

                                        <div class="col-12 text-center mt-4">
                                            <small><span class="text-muted me-2">Already have an account ? </span> <a href="/login" class="text-dark fw-bold">Sign in</a></small>
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