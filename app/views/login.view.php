<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?=ROOT?>/assets/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="<?=ROOT?>/signup" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                    <?php if(!empty($errors)):?>
                            <div style=" background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 10px;border-radius: 5px;margin-bottom: 20px;font-size: 14px; text-align:center;">
                                <?=implode("<br>",$errors);?>
                            </div>
                        <?php endif;?>
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="Name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Name" id="Name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="Password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="Password" id="Password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>