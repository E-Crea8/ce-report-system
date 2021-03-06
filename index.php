<?php
 include ('./controllers/loginAuth.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>CE Report System - App Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="https://kit.fontawesome.com/54ee82dc95.js" crossorigin="anonymous"></script>
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Open+Sans:300,400,600,700"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
            urls: ['assets/css/fonts.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/azzara.min.css">

    <!-- Call sweetalert css here  -->
    <link rel="stylesheet" href="./assets/sweetalert/css/sweetalert2.min.css">
</head>

<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn mt-0">
            <div class="row pb-2 mt-0" style="border-bottom: 1px solid #ccc;">
                <div class="col-12">
                    <img class="img-fluid" src="./assets/img/logo.fw.png" alt="logo">
                </div>
            </div>


            <form name="login" method="POST">
                <!-- <div class="pt-4">
		Echo all PHP Login Alerts Here
		<?php //echo $accountNotExistErr; ?>
        <?php //echo $emailPwdErr; ?>
        <?php //echo $verificationRequiredErr; ?>
        <?php //echo $email_empty_err; ?>
        <?php //echo $pass_empty_err; ?>
        <?php //echo $loginSuccess; ?>
		</div> -->

                <h3 class="text-center pt-4 st">Login Here!</h3>
                <div class="login-form">
                    <div class="form-group">
                        <label for="email" class="placeholder"><b>Email</b></label>
                        <input id="email" name="email" type="email" class="form-control"
                            value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="placeholder"><b>Password</b></label>
                        <a href="#" class="link float-right" style="color: #A01F62 !important;">Forget Password ?</a>
                        <div class="position-relative">
                            <input id="password" name="password" type="password" class="form-control"
                                value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"
                                required>
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-action-d-flex mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" id="rememberme"
                                <?php if(isset($_COOKIE["email"])) { ?> checked <?php } ?>>
                            <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
                        </div>
                        <button type="submit" id="login" name="login"
                            class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold"
                            style="background-color: #E0891A !important; border-color: #F79E1F !important;"><i
                                class="fas fa-sign-in-alt pr-2"></i>Sign In</button>
                    </div>
                </div>
            </form>
        </div>



    </div>
    <!-- Sweet Alert -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./assets/sweetalert/js/sweetalert2.min.js"></script>

    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/ready.js"></script>
</body>

</html>