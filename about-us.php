<?php
session_start();
if (isset($_SESSION['confirmed']) === 0) {
    session_destroy();
    header("Location: login.php?verifyNow=true");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5273894608737898" crossorigin="anonymous"></script>
    <title>

        About-US - petbazzar.com
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
        function myFunction() {
            <?php $success = $_GET['success'];
            if ($success != "") {
            ?>
                alert("Ad Posted Successfully!");
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
                </div>

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

                    <?php
                    if (isset($_SESSION['user_id']) != "") {
                    ?>
                        <?php
                        if (isset($_SESSION['profilePicture']) !== '') {
                        ?>
                            <div style="margin:0 1rem;width:40px;height:40px; border-radius:50%; background:url('<?php echo $_SESSION['profilePicture']; ?>') no-repeat center; background-size:cover;"></div>
                        <?php
                        } else {
                        ?>
                            <img style="width: 25px;height: 25px;border-radius: 50%;" src="img/user.png" alt="<?php echo $_SESSION['fname']; ?>">
                        <?php } ?> <?php
                                    echo $_SESSION['fname'];
                                    ?>
                        &nbsp;&nbsp;
                        <a href="logout.php" class="btn btn-sm btn-outline-primary text-uppercase">Logout</a>
                    <?php
                    } else { ?>
                        <a href="register.php" class="btn btn-sm btn-outline-primary text-uppercase">Register</a>
                        <a href="login.php" class="btn btn-sm btn-secondary text-uppercase">Login</a>
                    <?php } ?>

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
    <section class="page-banner-section">
        <div class="page-banner-section-inner" style="background-image:url('img/about-us-banner-image.jpg')">
            <h1 class="page-title">About Us</h1>
        </div>
    </section>
    <section class="site-stats-section">
        <ul class="list-unstyled">
            <li>
                <div class="icon-box">
                    <img src="img/pet-engage-icon-red.svg" alt="Pet engage">
                </div>
                <div class="count-box counter">0</div>
                <div class="type-box">Pet Engage</div>
            </li>
            <li>
                <div class="icon-box">
                    <img src="img/buy-sell-icon-red.svg" alt="Pet buy sell">
                </div>
                <div class="count-box counter">0</div>
                <div class="type-box">Buy/Sell</div>
            </li>

            <li>
                <div class="icon-box">
                    <img src="img/add-pet-icon-red.png" alt="Add pet">
                </div>
                <div class="count-box counter">0</div>
                <div class="type-box">Products</div>
            </li>
        </ul>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/vendors/jquery.counterup.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 2000
            });
        });
    </script>
    <section class="about-us-section">
        <div class="container">
            <div class="paw-title-box">
                <h2 class="paw-title">
                    About Us
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="926.657" height="920.219" viewBox="0 0 926.657 920.219">
                            <path data-name="Forma 1" class="cls-1" d="M361.279,390.366c69.866,0,126.679-75.951,126.679-169.3S431.145,51.764,361.279,51.764s-126.69,75.961-126.69,169.306S291.4,390.366,361.279,390.366Zm301.977,0c69.791,0,126.681-75.951,126.681-169.3S733.054,51.764,663.256,51.764c-69.875,0-126.692,75.961-126.692,169.306S593.381,390.366,663.256,390.366Zm236.491-84.445C844.8,295.15,790.593,343.4,776.261,415.878c-14.312,72.387,17.469,137.5,72.423,148.279,54.888,10.751,109.165-37.5,123.474-109.878C986.493,381.813,954.63,316.672,899.747,305.921Zm-723.9,258.245c54.944-10.79,86.733-75.9,72.423-148.278C233.932,343.4,179.728,295.15,124.777,305.931,69.9,316.7,38.033,381.813,52.365,454.289,66.684,526.666,120.958,574.918,175.842,564.166Zm527.647,38c-14.907-91.722-94.965-161.98-191.228-161.98S335.934,510.44,321.034,602.162C252.516,631.93,204.489,700,204.489,779.051c0,106.363,86.915,192.907,193.747,192.907a193.233,193.233,0,0,0,114.032-37.085A193.211,193.211,0,0,0,626.3,971.958c106.834,0,193.744-86.544,193.744-192.907C820.039,700,772,631.93,703.489,602.162Z" transform="translate(-48.938 -51.75)"></path>
                        </svg>
                    </div>
                </h2>

            </div>
            <div class="row about-us-row">
                <div class="col">
                    Locally based Pets Bazzar.com is one of the reputable and devoted website that offers genuine services for your beloved pets. Log in directly to Pets Bazzar.com to find an extensive list of every possible pet available worldwide. Our website comprises of several choices to choose from.Our website is mainly projected for the “Pet Engage” section where you can look for the appropriate mate for your pet whether they are mammals, reptiles, hamsters, ferrets, mice, iguanas, cows, pigs or birds.

                </div>
                <div class="col">
                    <figure class="img-box">
                        <img src="img/about-us-img.jpg" alt="About Us">
                    </figure>
                </div>
            </div>
            <div class="paw-title-box pt-5">
                <h2 class="paw-title">
                    Pet Buy | Pet Sale – Pet Buying and selling Service
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="926.657" height="920.219" viewBox="0 0 926.657 920.219">
                            <path data-name="Forma 1" class="cls-1" d="M361.279,390.366c69.866,0,126.679-75.951,126.679-169.3S431.145,51.764,361.279,51.764s-126.69,75.961-126.69,169.306S291.4,390.366,361.279,390.366Zm301.977,0c69.791,0,126.681-75.951,126.681-169.3S733.054,51.764,663.256,51.764c-69.875,0-126.692,75.961-126.692,169.306S593.381,390.366,663.256,390.366Zm236.491-84.445C844.8,295.15,790.593,343.4,776.261,415.878c-14.312,72.387,17.469,137.5,72.423,148.279,54.888,10.751,109.165-37.5,123.474-109.878C986.493,381.813,954.63,316.672,899.747,305.921Zm-723.9,258.245c54.944-10.79,86.733-75.9,72.423-148.278C233.932,343.4,179.728,295.15,124.777,305.931,69.9,316.7,38.033,381.813,52.365,454.289,66.684,526.666,120.958,574.918,175.842,564.166Zm527.647,38c-14.907-91.722-94.965-161.98-191.228-161.98S335.934,510.44,321.034,602.162C252.516,631.93,204.489,700,204.489,779.051c0,106.363,86.915,192.907,193.747,192.907a193.233,193.233,0,0,0,114.032-37.085A193.211,193.211,0,0,0,626.3,971.958c106.834,0,193.744-86.544,193.744-192.907C820.039,700,772,631.93,703.489,602.162Z" transform="translate(-48.938 -51.75)"></path>
                        </svg>
                    </div>
                </h2>

            </div>
            <div class="row about-us-row">
                <div class="col">
                    <p>Pet Bazzar let’s you choose from several available pets online. You can contact directly via phone or
                        email and buy exclusive pets just in few clicks which saves your time and money for locating and
                        navigating to the pet of your choice.</p>
                    <h4>How can you buy pet online – at best Pet Bazzar – Pet Bazzar?</h4>
                    <ol>
                        <li>Visit <a href="index.php">Pet Bazzar</a></li>
                        <li>Go to <a href="pet-buy-sell.php">Pet Buy and Sell Portal</a></li>
                        <li>Search and filter what you are looking for</li>
                        <li>Contact the current owner via provided channels</li>

                    </ol>
                </div>
                <div class="col">
                    <figure class="img-box">
                        <img src="img/about-us-img.jpg" alt="About Us">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span class="badge badge-pill badge-primary">Online buy and sell
                    </span><span class="badge badge-pill badge-primary">Online buy and sell Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Online buy and sell Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Pet buy and sell
                    </span><span class="badge badge-pill badge-primary">Pet buying portal
                    </span><span class="badge badge-pill badge-primary">Pet selling portal
                    </span><span class="badge badge-pill badge-primary">Pet ads
                    </span><span class="badge badge-pill badge-primary">buy pet
                    </span><span class="badge badge-pill badge-primary">buy expensive pet
                    </span><span class="badge badge-pill badge-primary">pet company
                    </span><span class="badge badge-pill badge-primary">pet buy and sell company
                    </span><span class="badge badge-pill badge-primary">pet buying and selling online
                    </span><span class="badge badge-pill badge-primary">buy pet Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">buy pet Islamabad/Rawalpindisell pet Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">sell pet Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">buy and sell pet in Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">pet online
                    </span><span class="badge badge-pill badge-primary">Online pet selling service
                    </span><span class="badge badge-pill badge-primary">Online pet buying service
                    </span><span class="badge badge-pill badge-primary">Online pet buying and selling service
                    </span><span class="badge badge-pill badge-primary">Online pet buying and selling facility
                    </span><span class="badge badge-pill badge-primary">Online pet Ads
                    </span><span class="badge badge-pill badge-primary">Pet Ads
                    </span><span class="badge badge-pill badge-primary">Pet Profile
                    </span><span class="badge badge-pill badge-primary">Online Pet Profile
                    </span><span class="badge badge-pill badge-primary">Your Online Pet Profile
                    </span><span class="badge badge-pill badge-primary">Buy sell mice
                    </span><span class="badge badge-pill badge-primary">Buy sell dog
                    </span><span class="badge badge-pill badge-primary">Buy sell puppy
                    </span><span class="badge badge-pill badge-primary">Buy sell puppies
                    </span><span class="badge badge-pill badge-primary">Buy sell cat
                    </span><span class="badge badge-pill badge-primary">Buy sell kitten
                    </span><span class="badge badge-pill badge-primary">Buy sell rat
                    </span><span class="badge badge-pill badge-primary">Buy sell rabbit
                    </span><span class="badge badge-pill badge-primary">Buy sell horse
                    </span><span class="badge badge-pill badge-primary">Buy sell cow
                    </span><span class="badge badge-pill badge-primary">Buy sell buffaloes
                    </span><span class="badge badge-pill badge-primary">Buy sell goats
                    </span><span class="badge badge-pill badge-primary">Buy sell sheep
                    </span><span class="badge badge-pill badge-primary">Buy sell German Shephard dog,
                    </span><span class="badge badge-pill badge-primary">Buy sell Husky dog
                    </span><span class="badge badge-pill badge-primary">Buy sell Pit Bull dog
                    </span><span class="badge badge-pill badge-primary">Buy sell Terrier
                    </span><span class="badge badge-pill badge-primary">Buy sell Afghani Hound
                    </span><span class="badge badge-pill badge-primary">Buy sell fish
                    </span><span class="badge badge-pill badge-primary">Buy sell Gold Fish
                    </span><span class="badge badge-pill badge-primary">Buy sell parrot
                    </span><span class="badge badge-pill badge-primary">Buy sell pigeon
                    </span><span class="badge badge-pill badge-primary">Buy sell Sparrow
                    </span><span class="badge badge-pill badge-primary">Buy sell Eagle
                    </span><span class="badge badge-pill badge-primary">Buy sell ostrich
                    </span><span class="badge badge-pill badge-primary">Buy sell cuckoo (koyal)
                    </span><span class="badge badge-pill badge-primary">Buy sell hen
                    </span><span class="badge badge-pill badge-primary">Buy sell mice Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell dog Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell puppy Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell puppies Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell cat Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell kitten Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell rat Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell rabbit Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell horse Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell cow Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell buffaloes Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell goats Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell sheep Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell German Shephard dog Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell Husky dog Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell Pit Bull dog Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell Terrier Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell Afghani Hound Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell fish Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell Gold Fish Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell parrot Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell pigeon Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell Sparrow Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell Eagle Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell ostrich Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell cuckoo (koyal) Islamabad/Rawalpindi
                    </span><span class="badge badge-pill badge-primary">Buy sell hen Islamabad/Rawalpindi

                    </span><span class="badge badge-pill badge-primary">Pet World
                    </span>

                </div>
            </div>
            <br>
            <div class="paw-title-box pt-5">

                <div class="col">
                    <figure class="img-box">
                        <img src="img/about-us-img.jpg" alt="About Us">
                    </figure>
                </div>
            </div>
            <div class="row">


            </div>
            <div class="row">

            </div>
            <div class="paw-title-box pt-5">
                <h2 class="paw-title">
                    PET E-STORE, PET FOOD
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="926.657" height="920.219" viewBox="0 0 926.657 920.219">
                            <path data-name="Forma 1" class="cls-1" d="M361.279,390.366c69.866,0,126.679-75.951,126.679-169.3S431.145,51.764,361.279,51.764s-126.69,75.961-126.69,169.306S291.4,390.366,361.279,390.366Zm301.977,0c69.791,0,126.681-75.951,126.681-169.3S733.054,51.764,663.256,51.764c-69.875,0-126.692,75.961-126.692,169.306S593.381,390.366,663.256,390.366Zm236.491-84.445C844.8,295.15,790.593,343.4,776.261,415.878c-14.312,72.387,17.469,137.5,72.423,148.279,54.888,10.751,109.165-37.5,123.474-109.878C986.493,381.813,954.63,316.672,899.747,305.921Zm-723.9,258.245c54.944-10.79,86.733-75.9,72.423-148.278C233.932,343.4,179.728,295.15,124.777,305.931,69.9,316.7,38.033,381.813,52.365,454.289,66.684,526.666,120.958,574.918,175.842,564.166Zm527.647,38c-14.907-91.722-94.965-161.98-191.228-161.98S335.934,510.44,321.034,602.162C252.516,631.93,204.489,700,204.489,779.051c0,106.363,86.915,192.907,193.747,192.907a193.233,193.233,0,0,0,114.032-37.085A193.211,193.211,0,0,0,626.3,971.958c106.834,0,193.744-86.544,193.744-192.907C820.039,700,772,631.93,703.489,602.162Z" transform="translate(-48.938 -51.75)"></path>
                        </svg>
                    </div>
                </h2>

            </div>
            <div class="row">
                <div class="col">
                    <p>Best pet foods from your favorite brand at your door step, free? Indeed, Pet Bazzar
                        works hard to provide you the best pet food at your door step through Pet Bazzar
                        online store with delivery all over Islamabad/Rawalpindi with absolutely zero or very
                        low cost. We are also in for back orders.</p>
                    <p>We have all the major brands that you look for your pet and have complete range of
                        pet food variety is just awesome. Pet food brands like Optimum, Nova, Osaka, Smart Heart, Me-o,
                        Vittamax, Dr.Luv, SuperCoat, Purina, Friskies, NutraGold, Diamond, Brit, Mera Dog, Wahre Liebe andother available at their shelf.</p>
                </div>
                <div class="col">
                    <figure class="img-box">
                        <img src="img/about-us-img.jpg" alt="About Us">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4>Pet Food</h4>
                    <p>
                        Fish food, turtle food, cichlid fish food, bird food, special parrot food, treats, wet food, Persian cat food,
                        ocean fish food, seafood, regular cat food, regular dog feed, dog food beef, puppy food, chicken food,
                        adult chicken food, meaty grills, salmon and rice, pure meat and other food are completely available on
                        their store </a>
                    </p>
                    <h4>Pet Bazzar E-Store</h4>
                    <p>
                        Pet Bazzar E-store is available for online shopping of pet food all over Islamabad/Rawalpindi. We are
                        also providing Pet Engaging and Pet buying and selling facility.
                        <a href="pet-store.php"> Order now </a> or post an ad for your pet now!
                    </p>



                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <span class="badge badge-pill badge-primary">Pet Food Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Cat Food in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Dog Food in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Fish Food in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Turtle Food in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Pet Food Online</span>
                    <span class="badge badge-pill badge-primary">Pet Food Online Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Pet Food Home Delivery Free</span>
                    <span class="badge badge-pill badge-primary">Best Pet Food</span>
                    <span class="badge badge-pill badge-primary">Best Pet Food Online</span>
                    <span class="badge badge-pill badge-primary">Pet Shampoo in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Pet Collars in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Pet Toys in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Pet Feed in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Pet Cleaner in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Pet Litter Tray in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Pet Brush in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Pet Carrying bags in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Islamabad/Rawalpindi’s best online Food Store Pets Bazzar [link]</span>
                    <span class="badge badge-pill badge-primary">The best Food Store in Islamabad/Rawalpindi Pets Bazzar [link]</span>
                    <span class="badge badge-pill badge-primary">Pet Shampoo Online Free Delivery</span>
                    <span class="badge badge-pill badge-primary">Pet Collars Online Free Delivery</span>
                    <span class="badge badge-pill badge-primary">Pet Toys Online Free Delivery</span>
                    <span class="badge badge-pill badge-primary">Pet Feed Online Free Delivery</span>
                    <span class="badge badge-pill badge-primary">Pet Cleaner Online Free Delivery</span>
                    <span class="badge badge-pill badge-primary">Pet Litter Online Free Delivery</span>
                    <span class="badge badge-pill badge-primary">Pet Brush in Islamabad/Rawalpindi</span>
                    <span class="badge badge-pill badge-primary">Pet Carrying bags in Islamabad/Rawalpindi</span>
                </div>
            </div>
            <div class="paw-title-box pt-5">
                <h2 class="paw-title">
                    PET SHOP | VET SHOP
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="926.657" height="920.219" viewBox="0 0 926.657 920.219">
                            <path data-name="Forma 1" class="cls-1" d="M361.279,390.366c69.866,0,126.679-75.951,126.679-169.3S431.145,51.764,361.279,51.764s-126.69,75.961-126.69,169.306S291.4,390.366,361.279,390.366Zm301.977,0c69.791,0,126.681-75.951,126.681-169.3S733.054,51.764,663.256,51.764c-69.875,0-126.692,75.961-126.692,169.306S593.381,390.366,663.256,390.366Zm236.491-84.445C844.8,295.15,790.593,343.4,776.261,415.878c-14.312,72.387,17.469,137.5,72.423,148.279,54.888,10.751,109.165-37.5,123.474-109.878C986.493,381.813,954.63,316.672,899.747,305.921Zm-723.9,258.245c54.944-10.79,86.733-75.9,72.423-148.278C233.932,343.4,179.728,295.15,124.777,305.931,69.9,316.7,38.033,381.813,52.365,454.289,66.684,526.666,120.958,574.918,175.842,564.166Zm527.647,38c-14.907-91.722-94.965-161.98-191.228-161.98S335.934,510.44,321.034,602.162C252.516,631.93,204.489,700,204.489,779.051c0,106.363,86.915,192.907,193.747,192.907a193.233,193.233,0,0,0,114.032-37.085A193.211,193.211,0,0,0,626.3,971.958c106.834,0,193.744-86.544,193.744-192.907C820.039,700,772,631.93,703.489,602.162Z" transform="translate(-48.938 -51.75)"></path>
                        </svg>
                    </div>
                </h2>

            </div>
            <div class="row">
                <div class="col">
                    <p>Find pet and vet shop near you anywhere in Islamabad/Rawalpindi. We have almost everyone interested boarded on
                        our platform so that you can find them all on a single place and find who is nearest to you via
                        Pets Bazzar.com. This service is available all over Islamabad/Rawalpindi.</p>
                    <h4>Find a vet and pet shop online – Pet Bazzar?</h4>
                    <ol>
                        <li>Go to <a href="index.php">Pets Bazzar.com</a></li>
                        <li>Choose ‘<a href="pets-and-vets.php">Find a Pets and Vets</a>’ Link</li>
                        <li>Select your city and find the shop or vet you are looking for.</li>
                        <li>Or Shop online from our <a href="pet-store.php">e-store</a></li>
                    </ol>
                </div>
                <div class="col">
                    <figure class="img-box">
                        <img src="img/about-us-img.jpg" alt="About Us">
                    </figure>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <span class="badge badge-pill badge-primary">Islamabad/Rawalpindi Pet Shop</span>
                    <span class="badge badge-pill badge-primary">Islamabad/Rawalpindi Vet Shop</span>
                    <span class="badge badge-pill badge-primary">Islamabad/Rawalpindi vet and pet shop</span>
                    <span class="badge badge-pill badge-primary">Pet shops near me</span>
                    <span class="badge badge-pill badge-primary">Vet shops near me</span>
                    <span class="badge badge-pill badge-primary">Pet shop near me</span>
                    <span class="badge badge-pill badge-primary">Vet clinic near me</span>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="logo-box">
                        <img src="img/logo1.png" alt="Pets Bazzar" class="img-fluid">
                    </div>
                    <p>Locally based Pets Bazzar.com is one of the reputable and devoted website that offers genuine services for your beloved pets.</p>
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
                                <a target="_blank" href="   ">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.facebook.com/teamalphaseller?mibextid=LQQJ4d">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="            ">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-3">


                </div>
                <div class="col-md-6">
                    <div class="copyright-box">
                        <ul class="list-unstyled small-link-list">
                            <li class="nav-item active">
                                <a href="about-us.php">About Us</a>
                            </li>
                            <li>
                                <a href="contact-us.php">Contact</a>
                            </li>
                        </ul>
                        <p class="copyright-text">© 2023 Pets Bazzar. All rights reserved. </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <div class="icon-box">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/923058902090" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

    </div>

</body>

</html>