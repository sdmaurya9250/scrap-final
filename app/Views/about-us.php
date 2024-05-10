<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="images/logo.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>ECO HTML Log in</title>
    <!-- CSS FILES START -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <!-- CSS FILES End -->
    <style>
        body {
            background-color: #00e3ff14;
            padding-top: 80px;
            /* Add padding to the body to prevent content from being hidden behind the fixed header */
        }

        .navbar {
            background-color: #fff;
            /* Change background color of the navbar */
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .bg-primary {
            border: 1px solid #689f38;
            background-color: #689f38 !important;
        }

        .modal.fade .modal-dialog {
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
            -webkit-transition: -webkit-transform 0.3s ease-out;
            transition: -webkit-transform 0.3s ease-out;
            transition: transform 0.3s ease-out;
            transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
        }

        .modal.fade.show .modal-dialog {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
        }

        .header-style-1 {
            z-index: auto;
        }

        .custom-height {
            height: 100vh;
            /* Set height to 100% of viewport height */
        }

        .custom-width {
            width: 100%;
            /* Define your custom width styles here */
        }
    </style>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
    </style>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <!--Header Start-->
    <header class="header-style-1">
        <nav class="navbar navbar-expand-lg shadow-lg">
            <a class="navbar-brand" href="/"><img src="images/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i
                    class="fas fa-bars"></i> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link font-weight-bold" href="/" role="button"> Home </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link font-weight-bold" href="#" role="button"> About </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link font-weight-bold" href="#" role="button"> How it Work </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link font-weight-bold" href="#" role="button"> Our Success </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link font-weight-bold" href="#ContactUs" role="button" class="scroll-link"
                            onclick="slowScroll('#target')"> Contact Us </a>
                    </li>
                </ul>
                <ul class="float-right topside-menu">
                    <li> <a class="con font-weight-bold" href="/login.html">Log in</a> </li>
                    <!-- <li><a href="#search"> <i class="fas fa-search"></i> </a></li> -->
                    <!-- <li class="burger font-weight-bold"> <a><i class="fas fa-bars"></i> Menu</a> </li> -->
                </ul>
            </div>
        </nav>
    </header>

    <section class="vh-100">
        <img src="images/bgimg/bg.jpg" alt="" style="width: 20%;">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100 img-aligns">
                    <div class="col-md-8 col-lg-7 col-xl-6 mb-3">
                        <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="img-fluid" alt="Phone image"> -->
                            <img src="images/how its work/work.png" alt="">
                    </div>
<!-- Display success message if it exists -->
<?php if(session()->has('success')): ?>
    <div class="alert alert-success">
        <?= session('success') ?>
    </div>
<?php endif; ?>

<!-- Display error message if it exists -->
<?php if(session()->has('error')): ?>
    <div class="alert alert-danger">
        <?= session('error') ?>
    </div>
<?php endif; ?>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form class="login" id="Login" action="/loginform" method="POST">
                            <!-- Login form -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="loginEmail" class="form-control form-control-lg" />
                                <label class="form-label" for="loginEmail">Email address</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="loginPassword" class="form-control form-control-lg" />
                                <label class="form-label" for="loginPassword">Password</label>
                            </div>

                            <div class="d-flex justify-content-around align-items-center mb-4">
                                <a href="/forgot-password">Forgot password?</a>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                            <p class=" mt-3" style="text-align: center;">Don't have an Account?
                                <a href="#" onclick="showRegisterForm()">Register</a>
                            </p>
                        </form>

                        <!-- Registration form -->
                        <form class="Register hidden" id="Registration" action="/register" method="POST">
                            <div class="form-outline mb-4">
                                <input type="tel" id="registerNumber" name="contact" class="form-control form-control-lg" />
                                <label class="form-label" for="registerNumber">Mobile Number</label>
                                <div id="numberError" class="text-danger" style="display:none;">Please enter a 10-digit mobile number.</div>
                            </div>
                        
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" name="email" class="form-control form-control-lg" />
                                <label class="form-label" for="registerEmail">Email address</label>
                                <div id="emailError" class="text-danger" style="display:none;">Please enter a valid email address.</div>
                            </div>
                        
                            <div class="form-outline mb-4" id="otpInputField" >
                                <input type="text" id="otp" name="otp" class="form-control form-control-lg" />
                                <label class="form-label" for="otp">Enter OTP</label>
                            </div>
                        
                            <div class="form-outline mb-4" id="passwordInputField" >
                                <input type="password" name="password" id="registerPassword" class="form-control form-control-lg" />
                                <label class="form-label" for="registerPassword">New Password</label>
                            </div>
                        
                            <div class="d-flex justify-content-around align-items-center mb-4">
                                <button type="button" class="btn btn-primary btn-lg btn-block" id="sendOtpButton">Send OTP</button>
                            </div>
                        
                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="registerButton"  onclick="validatePassword(); showLoginForm()">Sign in</button>
                        
                            <p class=" mt-2" style="text-align: center;">I already have an account. <a href="#" >Log in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
 
    <?php include(APPPATH . 'Views/components/footer.php'); ?>