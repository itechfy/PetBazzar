<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5273894608737898" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjYY1za03E7vxQFIstffxgTPMBKykx2kc&libraries=places"></script>

    <title>

        Register - petbazzar.com
    </title>

    <meta name="description" content="Locally based  petbazzar.com is one of the reputable and devoted website that offers genuine services for your beloved pets">




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



    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32..png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16.png">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 80%;
            height: 80%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border-radius: 10px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-button-prev {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%234c71ae'%2F%3E%3C%2Fsvg%3E") !important;
        }

        .swiper-button-next {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%234c71ae'%2F%3E%3C%2Fsvg%3E") !important;
        }


        .borderbox {
            display: block;
            border-style: dashed;
            border-width: 2px;
            border-color: #d3d3d3;
            height: 300px;
            width: 300px;
            margin: 10px 30%;

        }

        span.header-3 {
            font-size: 130px;
            text-align: center;
            color: #F84646;
            margin: 4px auto 17px;
        }

        span.paragraph-text {
            font-size: 20px;
            text-align: center;
            color: #F84646;
            text-transform: uppercase;
        }
    </style>


    <meta property="og:url" content="register" />
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
    <script>
        function initAutocomplete() {
            const input = document.getElementById("search-box");
            const autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.setFields(["name", "geometry"]);

            autocomplete.addListener("place_changed", () => {
                const place = autocomplete.getPlace();
                if (!place.geometry) {
                    console.error("No location data available.");
                    return;
                }
                const name = place.name;
                const latitude = place.geometry.location.lat();
                const longitude = place.geometry.location.lng();
                if (name && latitude && longitude) {
                    $('input[name="lat"]').val(latitude)
                    $('input[name="long"]').val(longitude)
                    $('input[name="location_name"]').val(name)
                }
            });
        }

        $(document).ready(function() {
            initAutocomplete()
        })
    </script>

    <script>
        function myFunction() {
            <?php $error = $_GET['error'];
            if ($error == "error") {
            ?>
                alert("Please Add a Proof Document for Doctor!");
            <?php } else if ($error == "error1") {
            ?>
                alert("Email Already Exists!");
            <?php } ?>


        }
    </script>
</head>

<body onload="myFunction()">




    <div class="wrap-all">
        <div class="overlay"></div>
        <div class="cart-sidebar bg-white">
            <div class="cs-header d-flex align-items-center justify-content-between">
                <h4 class="mb-0">cart</h4>
                <button type="button" class="btn btn-link close-btn">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="cs-body" id="ajax_cart_html">
                <div>No products in cart yet.

                    <div class="cart-item-box cart-item-box-footer">
                        <a href="pet-store/new-arrivals.html" class="btn btn-outline-primary mr-auto">Continue
                            shopping</a>
                    </div>
                </div>

                <div class="total-box">
                    Subtotal: <b>PKR 0.00</b>
                </div>
                <div class="buttons-box">
                    <a href="cart.php" class="btn btn-primary btn-block">View cart</a>
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
                    < <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1592194996308-7b43878e84a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" srcset="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="" srcset="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1583337260546-28b6bf66d004?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE3fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="" srcset="">
                                </div>

                            </div>
                            <!-- <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div> -->
                        </div>
                </div>
                <div class="right-box">
                    <h2 class="box-title text-uppercase font-sm text-primary">Sign Up</h2>
                    <br>
                    <div style="display:flex; align-items:center; gap:20px;"> <label for="fileDp" style="position:relative;display:block; width:100px; height:100px; border-radius:50%; border:1px solid black;" class="myDiv2 showDpBox">
                            <span class="text text-capitalize" style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%)"><i class="fa fa-upload" aria-hidden="true" style="color:red;margin-left:3px;"></i></span>

                            <p class="infoBoxImg2" style="display:none;"><img id="output2" width="100%" /></p>
                        </label>
                        <div style="text-align: left;">
                            <span><b>Upload your Profile Picture</b></span><br>
                            <span>Maximum 5mb</span>
                        </div>
                    </div>

                    <label for=""></label>
                    <div class="box no-border" id="jazzCashValidationErrorsDiv" style="display: none;">
                        <div class="box-tools">
                            <p class="alert alert-warning alert-dismissible">
                                <span id="jazzCashValidationErrorsMsg"></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </p>
                        </div>
                    </div>
                    <form class="form-horizontal" role="form" method="POST" action="registration.php" autocomplete="false" enctype="multipart/form-data">
                        <div class="form-group has-float-label myDiv2" style="display: none;" id="showDp">
                            <p> <input type="file" accept=".jpg, .png" name="dp" id="fileDp" onchange="loadDp(event)" required style="display: none;">
                            </p>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" placeholder="Full name" name="fname" value="" required="">
                            <label>Full name</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" class="form-control" placeholder="Email" name="email" value="" required="">
                            <label>Email</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" pattern="^(\+92|0)\d{10}$" placeholder="e.g +923315976008" name="phone" value="" required="">
                            <label>Phone</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="password" class="form-control" minlength="4" maxlength="8" placeholder="Password" id="pwd" name="pwd" required>
                            <label>Password</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="password" class="form-control" minlength="4" maxlength="8" id="confirm_pwd" placeholder="Password" name="pwd_confirm" required>
                            <label>Confirm Password</label>
                        </div>
                        <div class="form-group has-float-label" id="search_locationDoctor" style="display:none;" class="myDiv searchLocation_Doctor">
                            <input id="search-box" class="form-control" type="text" placeholder="Search for a location" /> <label>Search your location</label>
                        </div>
                        <input type="hidden" name="lat">
                        <input type="hidden" name="long">
                        <input type="hidden" name="location_name">
                        <span class="error-or-success" style="display:block; font-size:13px; text-align:left; padding-bottom:15px;"></span>
                        <script>
                            $(document).ready(function() {
                                $('input[type="radio"]').click(function() {
                                    var typ = $(this).val();
                                    $(`#fileX`).removeAttr("required");
                                    $(`#search-box`).removeAttr("required");
                                    $("#search_locationDoctor").hide();
                                    $(".myDiv").hide();

                                    $("#show" + typ).show();
                                    $(`#show${typ} #fileX`).attr("required", true);
                                    $(".showUpload" + typ).show();

                                    $(`#search_location${typ}`).show();
                                    $(`#search_location${typ} #search-box`).attr("required", true);
                                });


                            });
                        </script>
                        <div class="form-group text-center checkboxes">
                            <label class="custom-checkbox dark">
                                <input type="radio" name="typ" checked value="User">
                                <span class="checkmark"></span>
                                <span class="text">User</span>
                            </label>
                            <label class="custom-checkbox dark">
                                <input type="radio" name="typ" value="Doctor">
                                <span class="checkmark"></span>
                                <span class="text">Doctor</span>
                            </label>
                        </div>
                        <p> <label for="fileX" style="display:block; border-style: dashed; display:none; width:100%; padding:2rem 0;" class="myDiv showUploadDoctor">
                                <span class="text text-capitalize">Upload Proof <i class="fa fa-upload" aria-hidden="true" style="color:red;margin-left:3px;"></i></span>

                            </label></p>
                        <p class="infoBoxImg" style="display:none"><img id="output" width="100" /></p>
                        <p class="infoBoxFile" style="display:none" id="fileName"></p>
                        <div class="form-group has-float-label myDiv" style="display: none;" id="showDoctor">
                            <p> <input type="file" accept=".pdf, .jpg, .png" name="img" id="fileX" onchange="loadFile(event)" style="display: none;">
                            </p>
                        </div>
                        <script>
                            var loadFile = function(event) {
                                var image = document.getElementById('output');
                                if (event.target.files[0].name.split('.').pop() === 'pdf') {
                                    $('.infoBoxFile').show()
                                    $('#fileName').html(`<i class="fa fa-file-pdf-o" aria-hidden="true" style="color:red;"></i> ${event.target.files[0].name}`)
                                    $('.infoBoxImg').hide()
                                } else {
                                    $('.infoBoxImg').show()
                                    $('.infoBoxFile').hide()
                                    $('#fileName').text(``)
                                    image.src = URL.createObjectURL(event.target.files[0]);

                                }
                            };
                            var loadDp = function(event) {
                                var image = document.getElementById('output2');
                                //    image.src = URL.createObjectURL(event.target.files[0]);
                                $('.showDpBox').css('background', `url(${URL.createObjectURL(event.target.files[0])}) no-repeat center`)
                                $('.showDpBox').css('background-size', `cover`)
                            }
                        </script>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block text-uppercase" name="signup" disabled>
                                Create Account
                            </button>
                        </div>
                        <div class="form-group">
                            <b>or sign up with</b>
                            <br>
                            <div class="sign-in-with">
                                <a href="auth/facebook" class="fab fa-facebook-f text-facebook">&nbsp; Login with Facebook</a>
                                <a href="auth/twitter" class="fab fa-twitter text-twitter"></a>
                                <a href="auth/google" class="fab fa-google text-google"></a>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-center forgot-text-box">
                            <p>
                                By clicking the button above, you are agreeing to our <a href="terms" class="text-secondary">Terms of Use</a>.
                            </p>
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

        <!-- The Modal -->
        <div class="modal fade login-modal" id="registerModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal body -->
                    <div class="modal-body">
                        <button type="button" class="close btn btn-primary" data-dismiss="modal">&times;</button>
                        <div class="form-box text-center">
                            <form action="registration.php" method="post" enctype="multipart/form-data" autocomplete="false">
                                <h2 class="box-title text-uppercase font-sm text-primary">Sign Up</h2>
                                <br>
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" placeholder="Full name" name="fname" required>
                                    <label>Full name</label>
                                </div>
                                <div class="form-group has-float-label">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    <label>Email</label>
                                </div>
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                                    <label>Phone Number</label>
                                </div>
                                <div class="form-group has-float-label">
                                    <input type="password" class="form-control" placeholder="Password" name="pwd" required>
                                    <label>Password</label>
                                </div>
                                <div class="form-group has-float-label">
                                    <input type="password" class="form-control" id="confirm_pwd" placeholder="Password">
                                    <label>Confirm Password</label>
                                </div>
                                <div class="form-group checkboxes">
                                    <label class="custom-checkbox dark font-size-sm">
                                        <input type="checkbox" name="send_updates">
                                        <span class="checkmark"></span>
                                        <span class="text text-capitalize">Send me updates and relevant news</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block text-uppercase">
                                        Create Account
                                    </button>
                                </div>
                                <div class="form-group">
                                    <b>or sign up with</b>
                                    <br>
                                    <div class="sign-in-with">
                                        <a href="#" class="fab fa-facebook-f text-facebook"></a>
                                        <a href="#" class="fab fa-twitter text-twitter"></a>
                                        <a href="#" class="fab fa-google text-google"></a>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group text-center forgot-text-box">
                                    <p>
                                        By clicking the button above, you are agreeing to our <a href="#" class="text-secondary">Terms of Use</a>.
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade login-modal" id="loginModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal body -->
                    <div class="modal-body">
                        <button type="button" class="close btn btn-primary" data-dismiss="modal">&times;</button>
                        <div class="form-box text-center">
                            <form action="#" autocomplete="false">
                                <h2 class="box-title text-uppercase font-sm text-primary">Sign In</h2>
                                <br>
                                <div class="form-group has-float-label">
                                    <input type="text" class="form-control" placeholder="Username / email id">
                                    <label>Username / email id</label>
                                </div>
                                <div class="form-group has-float-label">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <label>Password</label>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block">
                                        Sign In
                                    </button>
                                </div>
                                <div class="form-group">
                                    <b>or sign in with</b>
                                    <br>
                                    <div class="sign-in-with">
                                        <a href="#" class="fab fa-facebook-f text-facebook"></a>
                                        <a href="#" class="fab fa-twitter text-twitter"></a>
                                        <a href="#" class="fab fa-google text-google"></a>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group text-left forgot-text-box">
                                    <a href="#" class="text-secondary  float-left">Forgot Password ?</a>
                                    <a href="#" class="text-secondary float-right">New User ? Sign Up here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/vendors/slick.min.js"></script>
    <script src="js/vendors/wow.min.js"></script>
    <script src="js/vendors/jquery.mCustomScrollbar.min.js"></script>
    <script src="js/vendors/bootstrap-datepicker.min.js"></script>
    <script src="js/app.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 2000,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
        });
    </script>
    <script>
        // validate pass

        function validatePassword(password) {
            if (password.length < 4) {
                return false;
            }
            if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
                return false;
            }
            if (!/[A-Z]/.test(password)) {
                return false;
            }
            if (!/[0-9]/.test(password)) {
                return false;
            }
            return true;
        }
        $('#confirm_pwd').on("input", function(e) {
            let pwd = $('#pwd').val()
            const isValidated = validatePassword(pwd)

            if (!isValidated) {
                $('.error-or-success').text("Password must contain 1 special character & number");
                $('.error-or-success').css("color", "red");
                $('[name="signup"]').attr('disabled', true)
            } else {
                if (pwd === e.target.value) {
                    $('.error-or-success').text("Passwords Matched");
                    $('.error-or-success').css("color", "green");
                    $('[name="signup"]').removeAttr('disabled')
                } else {
                    $('.error-or-success').text("Failed to Match Passwords");
                    $('.error-or-success').css("color", "red");
                    $('[name="signup"]').attr('disabled', true)
                }
            }

        });

        $('#pwd').on("input", function(e) {
            if ($('#confirm_pwd').val().length > 0) {
                let pwd = $('#confirm_pwd').val()
                const isValidated = validatePassword(pwd)

                if (!isValidated) {
                    $('.error-or-success').text("Password must contain 1 special character & number");
                    $('.error-or-success').css("color", "red");
                    $('[name="signup"]').attr('disabled', true)
                } else {
                    if (pwd === e.target.value) {
                        $('.error-or-success').text("Passwords Matched");
                        $('.error-or-success').css("color", "green");
                        $('[name="signup"]').removeAttr('disabled')
                    } else {
                        $('.error-or-success').text("Failed to Match Passwords");
                        $('.error-or-success').css("color", "red");
                    }
                }
            }
        });
    </script>










    <div class="icon-box">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/923058902090" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

    </div>

</body>

</html>