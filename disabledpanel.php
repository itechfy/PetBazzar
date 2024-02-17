<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5273894608737898" crossorigin="anonymous"></script>
    <title>

        Disabled - petbazzar.com
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

</head>

<body>
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
        </style>

        <div class="menu-overlay"></div>
        <div class="container">
            <div class="top-header">
                <div class="social-list-box">
                    <span>Follow Us</span>

                </div>
                <a href="register.php" class="btn btn-sm btn-outline-primary text-uppercase">Register</a>
                &nbsp; <a href="login.php" class="btn btn-sm btn-secondary text-uppercase">Login</a>

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




                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
                                            <a href="dog-food.html" class="nav-link">Dog Food</a>

                                        </li>
                                        <li class="nav-item contains-menu">
                                            <a href="javascript:void(0)" class="nav-link">CATS</a>
                                            <ul class="navbar-nav mr-auto">

                                                <li class="nav-item">
                                                    <a href="cat-food.html" class="nav-link">Cat Food</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href=bird-food.php class="nav-link">Bird Food</a>
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
                                                <li class="nav-item">
                                                    <a href="fish-food.php" class="nav-link">Fish Food</a>
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
                                <li class="nav-item ">
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
            <div class="box">
                <br><br><br><br><br><br><br>

                <h2 class="text-uppercase font-sm text-secondary">Your Account Status is Pending for Verification Right Now!</h2>
                <h3 class="text-uppercase font-sm text-secondary">Please wait for Confirmation!</h3>

                <br><br><br><br><br><br><br>
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










    <div class="icon-box">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/923058902090" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

    </div>

</body>

</html>