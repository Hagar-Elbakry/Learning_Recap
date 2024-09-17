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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <?php if(!empty($errors)):?>
                            <div style=" background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 10px;border-radius: 5px;margin-bottom: 20px;font-size: 14px; text-align:center;">
                                <?=implode("<br>",$errors);?>
                            </div>
                        <?php endif;?>   
                        <h2 class="form-title">Create account</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="Name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Name" id="Name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="Email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Email" id="Email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="Password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="Password" id="Password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="terms" class="agree-term" name= "terms"/>
                                <label for="terms" class="label-agree-term"><span><span></span></span>Accept terms</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" id="signup" class="form-submit" value="Create"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?=ROOT?>/assets/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="<?=ROOT?>/login" class="signup-image-link">I am already member</a>
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