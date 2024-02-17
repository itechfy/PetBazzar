<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5273894608737898" crossorigin="anonymous"></script>
    <title>

        Login - petbazzar.com
    </title>

    <meta name="description" content="Locally based  petbazzar.com is one of the reputable and devoted website that offers genuine services for your beloved pets">


    <!--Tags for mobile to display smart banners -->

    <meta name="csrf-token" content="PR4FenaT97KybbVGRikeiGSzR74KPcFAyWos3KxZ">
    <link rel="stylesheet" href="css/vendors/bootstrap-float-labels.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/vendors/slick.css">
    <link rel="stylesheet" href="css/vendors/animate.css">
    <link rel="stylesheet" href="css/vendors/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/vendors/bootstrap-datepicker.min.css">

    <link href="css/app.css?v=5" rel="stylesheet">
    <link href="css/custom.css?v=6" rel="stylesheet">
    <link href="css/responsive.css?v=5" rel="stylesheet">

    <link href="css/smartbanner.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--WARNING: Respond.js doesn't work if you view the page via file:// -->

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32..png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16.png">
    <meta property="og:url" content="login" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/smartbanner.js"></script>
    <script type="text/javascript">
        $(function() {
            $.smartbanner({
                daysHidden: 0
            });
        });
    </script>

    <!--Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '444521129727368');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=444521129727368&ev=PageView&noscript=1" /></noscript>
    <!--End Facebook Pixel Code -->

    <!--Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MSL4Q2K');
    </script>
    <!--End Google Tag Manager -->
    <script>
        function myFunction() {
            <?php $error = $_GET['error'];
            if ($error != "") {
            ?>
                alert("Incorrect Email or Password!");
            <?php } ?>
        }
    </script>
</head>

<body onload="myFunction()">
    <!--Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSL4Q2K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!--End Google Tag Manager (noscript) -->



    <div class="wrap-all">
        <div class="overlay"></div>
        <div class="cart-sidebar bg-white">
            <div class="cs-header d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Cart</h4>
                <button type="button" class="btn btn-link close-btn">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="cs-body" id="ajax_cart_html">
                <div>No products in cart yet.

                    <div class="cart-item-box cart-item-box-footer">
                        <a href="cart.php" class="btn btn-outline-primary mr-auto">Continue
                            shopping</a>
                    </div>
                </div>

                <div class="total-box">
                    Subtotal: <b>PKR 0.00</b>
                </div>
                <div class="buttons-box">
                    <a href="cart.php" class="btn btn-primary btn-block">View Cart</a>
                    <a href="checkout?shipping_method=1" class="btn btn-secondary btn-block">Checkout</a>
                </div>

                <script>
                    function refresh() {
                        setTimeout(function() {
                            location.reload(true);
                        }, 100);
                    }
                </script>
            </div>
        </div>
        <header class="primary-header fixed-top header-style-1">

            <style>
                .whatsApp {
                    position: fixed;
                    width: 60px;
                    height: 60px;
                    bottom: 10px;
                    right: 10px;
                    background-color: #25d366;
                    color: white;
                    border-radius: 50px;
                    text-align: center;
                    font-size: 30px;
                    box-shadow: 2px 2px 3px transparent;
                    z-index: 100;
                }

                .my-whatsApp {
                    margin-top: 16px;
                }

                @import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i');



                .toast__container {
                    display: table-cell;
                    vertical-align: middle;
                }

                .toast__cell {
                    display: inline-block;
                }

                .add-margin {
                    margin-top: 20px;
                }

                .toast__svg {
                    fill: #fff;
                }

                .toast {
                    text-align: left;
                    padding: 13px 0;
                    background-color: #fff;
                    border-radius: 4px;
                    max-width: 500px;
                    top: 0px;
                    position: relative;
                    box-shadow: 1px 7px 14px -5px rgba(0, 0, 0, 0.2);
                }


                .toast:before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 4px;
                    height: 100%;
                    border-top-left-radius: 4px;
                    border-bottom-left-radius: 4px;

                }

                .toast__icon {
                    position: absolute;
                    top: 50%;
                    left: 22px;
                    transform: translateY(-50%);
                    width: 14px;
                    height: 14px;
                    padding: 7px;
                    border-radius: 50%;
                    display: inline-block;
                }

                .toast__type {
                    color: #3e3e3e;
                    font-weight: 700;
                    margin-top: 0;
                    margin-bottom: 8px;
                }

                .toast__message {
                    font-size: 14px;
                    margin-top: 0;
                    margin-bottom: 0;
                    color: #878787;
                }

                .toast__content {
                    padding-left: 70px;
                    padding-right: 60px;
                }

                .toast__close {
                    position: absolute;
                    right: 22px;
                    top: 30%;
                    width: 10px;
                    cursor: pointer;
                    height: 10px;
                    fill: #878787;
                    transform: translateY(-50%);
                }


                .toast--blue .toast__icon {
                    background-color: #F84646;
                }

                .toast--blue:before {
                    background-color: #F84646;
                }
            </style>

            <div class="menu-overlay"></div>
            <div class="container">
                <div class="top-header">
                    <div class="social-list-box">
                        <span>Follow Us</span>

                    </div>
                    <div class="links-box d-flex align-items-center justify-content-end">
                        <div class="cart-box">
                            <ul class="list-unstyled mb-0 mr-5">

                                <li class="cart-main">
                                    <a href="javascript:void(0)">
                                        <img src="img/cart-basket-icon-red.svg" alt="cart">
                                        <span id="cartItemsCount">0 - Item</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <a href="register.php" class="btn btn-sm btn-outline-primary text-uppercase">Register</a>
                        <a href="login.php" class="btn btn-sm btn-secondary text-uppercase">Login</a>

                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo1.png" alt="Pet Bazzar">
                    </a>



                    <a href="addpet.php" class="btn-add-pet text-uppercase animated fadeInRight">
                        <div class="text-box">Add Pet</div>
                        <div class="icon-box">

                            <svg xmlns="http://www.w3.org/2000/svg" width="926.657" height="920.219" viewBox="0 0 926.657 920.219">
                                <path data-name="Forma 1" class="cls-1" d="M361.279,390.366c69.866,0,126.679-75.951,126.679-169.3S431.145,51.764,361.279,51.764s-126.69,75.961-126.69,169.306S291.4,390.366,361.279,390.366Zm301.977,0c69.791,0,126.681-75.951,126.681-169.3S733.054,51.764,663.256,51.764c-69.875,0-126.692,75.961-126.692,169.306S593.381,390.366,663.256,390.366Zm236.491-84.445C844.8,295.15,790.593,343.4,776.261,415.878c-14.312,72.387,17.469,137.5,72.423,148.279,54.888,10.751,109.165-37.5,123.474-109.878C986.493,381.813,954.63,316.672,899.747,305.921Zm-723.9,258.245c54.944-10.79,86.733-75.9,72.423-148.278C233.932,343.4,179.728,295.15,124.777,305.931,69.9,316.7,38.033,381.813,52.365,454.289,66.684,526.666,120.958,574.918,175.842,564.166Zm527.647,38c-14.907-91.722-94.965-161.98-191.228-161.98S335.934,510.44,321.034,602.162C252.516,631.93,204.489,700,204.489,779.051c0,106.363,86.915,192.907,193.747,192.907a193.233,193.233,0,0,0,114.032-37.085A193.211,193.211,0,0,0,626.3,971.958c106.834,0,193.744-86.544,193.744-192.907C820.039,700,772,631.93,703.489,602.162Z" transform="translate(-48.938 -51.75)" />
                            </svg>

                            <i class="fa fa-plus"></i>
                        </div>
                    </a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <?php
                            if (isset($_SESSION['user_id']) != "") {
                                echo '<li class="nav-item">
                        <a class="nav-link" href="myPetAds.php">My Pets</a></li>';
                                echo '<li class="nav-item">
                        <a class="nav-link" href="inbox.php">Messages</a></li>';
                            }
                            ?>
                            <li class="nav-item contains-menu  ">
                                <a class="nav-link petstore-link" href="pet-store.php">Food Store</a>
                                <ul class="navbar-nav mr-auto petstore-menu">
                                    <li class="nav-item contains-menu">
                                        <a href="javascript:void(0)" class="nav-link">Food Store</a>
                                        <ul class="navbar-nav mr-auto">

                                            <li class="nav-item">
                                                <a href="pet-food.php" class="nav-link">PET FOOD</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item contains-menu">
                                        <a href="javascript:void(0)" class="nav-link">DOGS</a>
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a href="dog-food.php" class="nav-link">Dog Food</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="dog-food.html" class="nav-link">Dog Food</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item contains-menu">
                                        <a href="javascript:void(0)" class="nav-link">CATS</a>
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a href="cat-food.php" class="nav-link">Cat Food</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="cat-food.html" class="nav-link">Cat Food</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item contains-menu">
                                        <a href="javascript:void(0)" class="nav-link">BIRDS</a>
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a href=bird-food.php class="nav-link">Bird Food</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="bird-food.php" class="nav-link">Bird Food</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item contains-menu">
                                        <a href="javascript:void(0)" class="nav-link">FISHES</a>
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a href="fish-food.php" class="nav-link">Fish Food</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="fish-food.html" class="nav-link">Fish Food</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="pets-and-vets.php">Pets and Vets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pet-buy-sell.php">Buy/Sell</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="how-it-works.php">How it works</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="contact-us.php">Contact</a>
                            </li>

                        </ul>

                    </div>


                </div>
            </nav>

        </header>
        <div class="container auto-fill-page">
            <div class="form-box d-flex text-center">
                <div class="left-box">
                    <div class="login-slider">
                        <div class="slide-item" style="background-image:url('img/login-slide1.jpg')"></div>
                        <div class="slide-item" style="background-image:url('img/login-slide2.jpg')"></div>
                        <div class="slide-item" style="background-image:url('img/login-slide3.jpg')"></div>
                    </div>
                </div>
                <div class="right-box">
                    <h2 class="box-title text-uppercase font-sm text-primary">Sign In</h2>

                    <?php
                    if (isset($_GET['verifyNow']) === true) {
                    ?>
                        <div class="toast__container">
                            <div class="toast__cell">


                                <div class="toast toast--blue add-margin">
                                    <div class="toast__icon">
                                        <svg version="1.1" class="toast__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                            <g>
                                                <g id="info">
                                                    <g>
                                                        <path d="M10,16c1.105,0,2,0.895,2,2v8c0,1.105-0.895,2-2,2H8v4h16v-4h-1.992c-1.102,0-2-0.895-2-2L20,12H8     v4H10z"></path>
                                                        <circle cx="16" cy="4" r="4"></circle>
                                                    </g>
                                                </g>
                                            </g>

                                        </svg>
                                    </div>
                                    <div class="toast__content">

                                        <p class="toast__message">Please confirm your email address to login</p>
                                    </div>
                                    <div class="toast__close">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.642 15.642" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 15.642 15.642">
                                            <path fill-rule="evenodd" d="M8.882,7.821l6.541-6.541c0.293-0.293,0.293-0.768,0-1.061  c-0.293-0.293-0.768-0.293-1.061,0L7.821,6.76L1.28,0.22c-0.293-0.293-0.768-0.293-1.061,0c-0.293,0.293-0.293,0.768,0,1.061  l6.541,6.541L0.22,14.362c-0.293,0.293-0.293,0.768,0,1.061c0.147,0.146,0.338,0.22,0.53,0.22s0.384-0.073,0.53-0.22l6.541-6.541  l6.541,6.541c0.147,0.146,0.338,0.22,0.53,0.22c0.192,0,0.384-0.073,0.53-0.22c0.293-0.293,0.293-0.768,0-1.061L8.882,7.821z"></path>
                                        </svg>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_GET['verified']) === true) {
                    ?>
                        <div class="toast__container">
                            <div class="toast__cell">


                                <div class="toast toast--blue add-margin">
                                    <div class="toast__icon">
                                        <svg version="1.1" class="toast__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                            <g>
                                                <g id="info">
                                                    <g>
                                                        <path d="M10,16c1.105,0,2,0.895,2,2v8c0,1.105-0.895,2-2,2H8v4h16v-4h-1.992c-1.102,0-2-0.895-2-2L20,12H8     v4H10z"></path>
                                                        <circle cx="16" cy="4" r="4"></circle>
                                                    </g>
                                                </g>
                                            </g>

                                        </svg>
                                    </div>
                                    <div class="toast__content">

                                        <p class="toast__message">Verified Successfully, Login now</p>
                                    </div>
                                    <div class="toast__close">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.642 15.642" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 15.642 15.642">
                                            <path fill-rule="evenodd" d="M8.882,7.821l6.541-6.541c0.293-0.293,0.293-0.768,0-1.061  c-0.293-0.293-0.768-0.293-1.061,0L7.821,6.76L1.28,0.22c-0.293-0.293-0.768-0.293-1.061,0c-0.293,0.293-0.293,0.768,0,1.061  l6.541,6.541L0.22,14.362c-0.293,0.293-0.293,0.768,0,1.061c0.147,0.146,0.338,0.22,0.53,0.22s0.384-0.073,0.53-0.22l6.541-6.541  l6.541,6.541c0.147,0.146,0.338,0.22,0.53,0.22c0.192,0,0.384-0.073,0.53-0.22c0.293-0.293,0.293-0.768,0-1.061L8.882,7.821z"></path>
                                        </svg>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <br>
                    <div class="box no-border" id="jazzCashValidationErrorsDiv" style="display: none;">
                        <div class="box-tools">
                            <p class="alert alert-warning alert-dismissible">
                                <span id="jazzCashValidationErrorsMsg"></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </p>
                        </div>
                    </div>
                    <form action="login1.php" method="POST">
                        <div class="form-group has-float-label">
                            <input type="email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" id="email" name="email" value="" class="form-control focus" placeholder="Email address" autofocus required="">
                            <label>Email address</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="password" name="pwd" id="pwd" value="" class="form-control" placeholder="Password" required="">
                            <label>Password</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="login">
                                Sign In
                            </button>
                        </div>
                        <div class="form-group">
                            <b>or sign in with</b>
                            <br>
                            <div class="sign-in-with">
                                <a href="auth/facebook" class="fab fa-facebook-f text-facebook">Login with Facebook</a>
                                <a href="auth/twitter" class="fab fa-twitter text-twitter"></a>
                                <a href="auth/google" class="fab fa-google text-google"></a>
                            </div>
                        </div>
                        <div class="form-group text-left forgot-text-box">
                            <a href="password/reset" class="text-secondary  float-left">Forgot Password ?</a>
                            <a href="register.php" class="text-secondary float-right">New User ? Sign Up here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                var loginSliderComponent = ".login-slider";
                var loginSlider = $(loginSliderComponent).slick({
                    fade: true,
                    speed: 800,
                    arrows: false,
                    autoplay: true,
                    dots: true
                });
            });
        </script>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="logo-box">
                            <img src="img/logo1.png" alt="petbazzar" class="img-fluid">
                        </div>
                        <p>Locally based petbazzar.com is one of the reputable and devoted website that offers genuine services for your beloved pets.</p>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <form action="subscribe" method="post" class="mt-4">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" name="email" required="required" placeholder="Email Address" aria-label="Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-white" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <div class="social-list-box mt-4">
                            <span class="mr-2" style="font-weight: 600;">Follow Us:</span>
                            <ul class="social-list list-inline">
                                <li>
                                    <a target="_blank" href="https://twitter.com/petbazzardotcom/">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/teamalphaseller?mibextid=LQQJ4d">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/officialpetbazzar/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="copyright-box">
                            <ul class="list-unstyled small-link-list">
                                <li class="nav-item ">
                                    <a href="about-us.php">About Us</a>
                                </li>

                                <li>
                                    <a href="contact-us.php">Contact</a>
                                </li>
                            </ul>
                            <p class="copyright-text">© 2023 petbazzar. All rights reserved. </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>





        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/vendors/slick.min.js"></script>
        <script src="js/vendors/wow.min.js"></script>
        <script src="js/vendors/jquery.mCustomScrollbar.min.js"></script>
        <script src="js/vendors/bootstrap-datepicker.min.js"></script>
        <script src="js/app.js"></script>

        <script>
            jQuery(document).ready(function() {
                jQuery('.toast__close').click(function(e) {
                    e.preventDefault();
                    var parent = $(this).parent('.toast');
                    parent.fadeOut("slow", function() {
                        $(this).remove();
                    });
                });
            });
        </script>









        <div class="icon-box">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://wa.me/923058902090" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

        </div>

</body>

</html>