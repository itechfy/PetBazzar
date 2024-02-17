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
        Best Online Food Store in Islamabad/Rawalpindi | Buy Pet Food
    </title>
    <meta name="description" content="Buy Food for your pet online. petbazzar is the Best Online Food Store in Islamabad/Rawalpindi.">
    <!--<meta name="keywords" content="">-->





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
    <meta property="og:url" content="pet-store" />
    <meta property="og:type" content="home" />
    <meta property="og:title" content="petsbazzar.com" />
    <meta property="og:description" content="petsbazzar.com" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/smartbanner.js"></script>
    <script type="text/javascript">
        $(function() {
            $.smartbanner({
                daysHidden: 0
            });
        });
    </script>
    <!--- Add to Cart  ---->
    <script defer="defer">
        // localStorage.setItem("productsList", JSON.stringify([]));
        // const productList = JSON.parse(localStorage.getItem('productsList')) // this will get empty array
        var productArr1 = []
        let subTotal = 0
        let cartCounter = 0
        $(document).ready(function() {
            const cardSide = document.getElementById('ajax_cart_html')
            const listAA = localStorage.getItem("productsList")
            const productsArr = JSON.parse(listAA) ?? []
            productArr1 = productsArr
            if (productsArr) {

                for (let i = 0; i < productsArr.length; i++) {
                    const productToPush = `<div class="card p-card-landscape e-card-landscape">
                    <div class="card-body">
                        <div class="media">
                            <a item_id="${productsArr[i]['productId']}" id="cart_item_remove_btn" onclick="refresh(${productsArr[i]['productId']})" class="btn btn-link remove-btn">
                                <i class="fas fa-times"></i>
                            </a>
                            <div class="img-box">

                                <img class="card-img-top" src="${productsArr[i]['productImage']}" alt="${productsArr[i]['productName']}">
                            </div>

                            <div class="media-body">
                                <p class="card-title mb-0" href="#">${productsArr[i]['productName']}</p>
                                <div class="price">
                                    <div>
                                        <span><span id="p-qty">${productsArr[i]['productQuantity']}</span> X PKR</span> <span id="p-price">${productsArr[i]['productPrice']}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>`;
                    cardSide.insertAdjacentHTML('beforebegin', productToPush)
                    cartCounter += Number(productsArr[i]['productQuantity'])
                    subTotal += Number(productsArr[i]['productQuantity']) * Number(productsArr[i]['productPrice'])

                }
                document.getElementById('sub_total').innerText = subTotal
                document.getElementById('cartCounter').innerText = cartCounter
            }
        })
    </script>


</head>

<body>




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

                <div>

                    <div class="cart-item-box cart-item-box-footer">
                        <a href="pet-food.php" class="btn btn-outline-primary mr-auto">Continue
                            shopping</a>
                    </div>
                </div>

                <div class="total-box">
                    Subtotal: <b>PKR <span id="sub_total">0.00</span></b>
                </div>
                <div class="buttons-box">
                    <a href="cart.php" class="btn btn-primary btn-block">View Cart</a>
                    <a href="checkout.php" class="btn btn-secondary btn-block">Checkout</a>
                </div>

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
                                        <span id="cartItemsCount"><span id="cartCounter"></span> - Item</span>
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



                    <a href="login.php" class="btn-add-pet text-uppercase animated fadeInRight">
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
                            <li class="nav-item contains-menu active ">
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
                                                <a href="dog-food.php" class="nav-link">Dog Food</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item contains-menu">
                                        <a href="javascript:void(0)" class="nav-link">CATS</a>
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a href="catfood.php" class="nav-link">Cat Food</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="catfood.php" class="nav-link">Cat Food</a>
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
                                                <a href="fish-food.php" class="nav-link">Fish Food</a>
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

        <div class="secondary-header fixed-top">
            <br>
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondaryHeader" aria-controls="secondaryHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>



                    <div class="collapse navbar-collapse" id="secondaryHeader">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="mega-dropdown mega-dropdown-small">
                                <a href="#" class="nav-link">Food Store</a>
                                <div class="mega-dropdown-menu menu-style-small">
                                    <div class="right-box">
                                        <ul class="list-unstyled links-list">

                                            <li>
                                                <a href="pet-food.php">PET FOOD</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>


                            <li class="mega-dropdown mega-dropdown-small">
                                <a href="dog-food.php" class="nav-link">DOGS</a>
                                <div class="mega-dropdown-menu menu-style-small">
                                    <div class="right-box">
                                        <ul class="list-unstyled links-list">
                                            <li>
                                                <a href="dog-food.php">Dog Food</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mega-dropdown mega-dropdown-small">
                                <a href="cat-food.php" class="nav-link">CATS</a>
                                <div class="mega-dropdown-menu menu-style-small">
                                    <div class="right-box">
                                        <ul class="list-unstyled links-list">
                                            <li>
                                                <a href="cat-food.php">Cat Food</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mega-dropdown mega-dropdown-small">
                                <a href=bird-food.php class="nav-link">BIRDS</a>
                                <div class="mega-dropdown-menu menu-style-small">
                                    <div class="right-box">
                                        <ul class="list-unstyled links-list">
                                            <li>
                                                <a href="bird-food.php">Bird Food</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mega-dropdown mega-dropdown-small">
                                <a href="fish-food.php" class="nav-link">FISHES</a>
                                <div class="mega-dropdown-menu menu-style-small">
                                    <div class="right-box">
                                        <ul class="list-unstyled links-list">
                                            <li>
                                                <a href="fish-food.php">Fish Food</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                    <div class="search-box ml-auto header_search_box">
                        <!--<form >-->
                        <div class="input-group">
                            <input type="text" class="form-control filter-intput" placeholder="Search Products" name="search_term" value="" id="search_term" autocomplete="off">
                            <div id="suggesstion-box" style="display:none;"></div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-white shop-product-search filter-intput" type="button" onclick="filterPets(this);">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <!--</form>-->
                    </div>


                </div>
            </nav>
        </div>
        <section class="e-main-slider-section d-none d-sm-block d-md-block">

            <div class="container main-slider-controls">
                <a href="javascript:void(0)" class="main-slick-control main-slick-prev"></a>
                <a href="javascript:void(0)" class="main-slick-control main-slick-next"></a>
            </div>
        </section>

        <section class="e-main-slider-section d-block d-sm-none d-md-none">

            <div class="container main-slider-mob-controls">
                <a href="javascript:void(0)" class="main-slick-control main-slick-mob-prev"></a>
                <a href="javascript:void(0)" class="main-slick-control main-slick-mob-next"></a>
            </div>
            <div class="main-slider-mob">
                <div id="slider2-5" style="visibility: hidden;" class="main-slider-item" style="background-image:url('img/banners/1-dog-food-mob-estore.jpg')"></div>
                <div id="slider2-1" style="visibility: hidden;" class="main-slider-item" style="background-image:url('img/banners/2-cat-food-mob-estore.jpg')"></div>
                <div id="slider2-2" style="visibility: hidden;" class="main-slider-item" style="background-image:url('img/banners/3-birds-food-mob-estore.jpg')"></div>
                <div id="slider2-3" style="visibility: hidden;" class="main-slider-item" style="background-image:url('img/banners/4-fish-food-mob-estore.jpg')"></div>
            </div>
        </section>
        <section class="categories-banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="pet-food.php" class="card bg-dark text-white categoies-banner-card bg-pet-home">
                            <img src="img/pet-food-img2.webp" alt="Pet food" class="category-icon">
                            <div class="card-img-overlay">
                                <div class="cio-inner">
                                    <h5 class="card-title">Pet Food</h5>
                                    <p class="card-text">Organic and Dry Pet Food.</p>
                                    <img src="img/arrow-icon.svg" alt="Arrow">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <a href="dog-food.php" class="card bg-dark text-white categoies-banner-card bg-pet-toys small">
                            <img src="img/dog-sitting2.webp" alt="Dog" class="category-icon">
                            <div class="card-img-overlay">
                                <div class="cio-inner">
                                    <h5 class="card-title">Dog Food</h5>
                                    <p class="card-text">dry food, wet food, treats.</p>
                                    <img src="img/arrow-icon.svg" alt="Arrow">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <a href="cat-food.php" class="card bg-dark text-white categoies-banner-card bg-bags small">
                            <img src="img/cat-sitting2.png" alt="Cat" class="category-icon">
                            <div class="card-img-overlay">
                                <div class="cio-inner">
                                    <h5 class="card-title">Cat Food</h5>
                                    <p class="card-text">dry food, wet food, litter, treats.</p>
                                    <img src="img/arrow-icon.svg" alt="Arrow">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <a href=bird-food.php class="card bg-dark text-white categoies-banner-card bg-pet-cage small">
                            <img src="img/bird-flying2.webp" alt="Bird" class="category-icon">
                            <div class="card-img-overlay">
                                <div class="cio-inner">
                                    <h5 class="card-title">Bird Food</h5>
                                    <p class="card-text">small pets, pet food.</p>
                                    <img src="img/arrow-icon.svg" alt="Arrow">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <a href="fish-food.php" class="card bg-dark text-white categoies-banner-card bg-medicine small">
                            <img src="img/fish3.webp" alt="Fish" class="category-icon">
                            <div class="card-img-overlay">
                                <div class="cio-inner">
                                    <h5 class="card-title">Fish Food</h5>
                                    <p class="card-text">food, feeders, supplies.</p>
                                    <img src="img/arrow-icon.svg" alt="Arrow">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function() {
                $('.get_quote_btn').on('click', function(e) {
                    //            e.preventDefault();

                    $('.owner_phone_input').removeAttr('required');


                })
            });
        </script>
        <section class="red-boxes-section">
            <a href="pet-buy-sell.php?pet_for=Sell" class="r-box">
                <div class="icon-box">
                    <img src="img/buy-sell-icon.svg" alt="Buy Sell">
                </div>
                <div class="text-box">
                    <h5 class="r-box-title">Pet Buy / Sell</h5>
                    <p class="r-box-desc">Buying and selling of pets made easy... <br>
                        <b class="text-uppercase">Find out more..</b>
                    </p>
                </div>
            </a>
            <a href="pet-buy-sell.php?pet_for=Engage" class="r-box">
                <div class="icon-box">
                    <img src="img/pet-engage-icon.svg" alt="Pet Engage">
                </div>
                <div class="text-box">
                    <h5 class="r-box-title">Pet Engage</h5>
                    <p class="r-box-desc">Find a partner for your pet & engage... <br>
                        <b class="text-uppercase">Find out more..</b>
                    </p>
                </div>
            </a>

            <a href="consult-doctor.php" class="r-box">
                <div class="icon-box">
                    <img src="img/consult-doctor.png" alt="Consult Doctor">
                </div>
                <div class="text-box">
                    <h5 class="r-box-title">Consult Doctor</h5>
                    <p class="r-box-desc">Online Doctor Consulting... <br>
                        <b class="text-uppercase">Find out more..</b>
                    </p>
                </div>
            </a>
            <a href="pet-store.php" class="r-box">
                <div class="icon-box">
                    <img src="img/eshop-icon.svg" alt="E Shop">
                </div>
                <div class="text-box">
                    <h5 class="r-box-title">Food Store</h5>
                    <p class="r-box-desc">Buy pet food... <br>
                        <b class="text-uppercase">Find out more..</b>
                    </p>
                </div>
            </a>

        </section>
        <section class="search-map-section">
            <div class="contact-form">
                <div class="contact-form-header">
                    <h2 class="form-title">Find A Nearby <b>Pet And Vets Clinic</b> in Islamabad/Rawalpindi</h2>
                </div>
                <form action="pets-and-vets.php" class="search-form">
                    <div class="col-box">
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" placeholder="Name" maxlength="25" name="search_term">
                            <label>Name</label>
                        </div>
                    </div>
                    <div class="col-box">
                        <div class="form-group has-float-label">
                            <select name="city" class="form-control">
                                <option value=""></option>
                                <option value="Islamabad">Islamabad</option>
                                <option value="Rawalpindi">Rawalpindi</option>
                            </select>
                            <label>City</label>
                        </div>
                    </div>
                    <div class="col-box">
                        <div class="form-group text-center checkboxes">
                            <label class="custom-checkbox dark">
                                <input type="radio" name="type" value="Vet Shop">
                                <span class="checkmark"></span>
                                <span class="text">Vet Clinic</span>
                            </label>
                            <label class="custom-checkbox dark">
                                <input type="radio" name="type" checked="" value="Pet Shop">
                                <span class="checkmark"></span>
                                <span class="text">Pet Shop</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-box buttons-box">
                        <div class="form-group text-center">
                            <button class="btn btn-primary wow shake" data-wow-delay="1s">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Islamabad&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </section>
        <div class="toaster-notification">
            <div id="toastermsg" class="alert fade show" role="alert">
                Product added successfully!
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $(document).on("submit", "form.add-to-cart-form", function(e) {
                    var form = $(this);
                    var buy_now = $(document.activeElement).val();
                    if (buy_now == "Buy Now") {
                        return true;
                    }
                    e.preventDefault();

                    var url = "ajax_store";

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: form.serialize(), // serializes the form's elements.
                        success: function(response) {
                            if (response['status'] == 'success') {
                                $("#ajax_cart_html").html(response['cart_html']);
                                $("#cartItemsCount").html(response['data']);
                                $(".cart-box").addClass('animated shake');
                                $("#toastermsg").html("Product added successfully!");
                                $(".toaster-notification").addClass('active');
                                setTimeout(function() {
                                    $(".toaster-notification").removeClass('active');
                                    $(".cart-box").removeClass('animated shake');
                                }, 1500)
                            } else {
                                $("#toastermsg").html(response['message']);
                                $(".toaster-notification").addClass('active');
                                setTimeout(function() {
                                    $(".toaster-notification").removeClass('active');
                                    $(".cart-box").removeClass('animated shake');
                                }, 3000)
                            }

                        }
                    });
                });
                $(".mega-dropdown-menu a[data-rel]").on("click", function(e) {
                    e.preventDefault();
                    var activeView = $(this).attr("data-rel");
                    $(".mega-dropdown-menu a[data-rel]").removeClass("active");
                    $(this).addClass("active");
                    $(".mega-dropdown-menu .cat-views").removeClass("active");
                    $("#" + activeView).addClass("active");
                });

            });

            $(window).on('scroll', function(event) {
                var scrollValue = $(window).scrollTop();
                var dataSpyFixed = $("[data-spy = 'affix']");
                var dataSpyFixedScrollPosition = dataSpyFixed.attr('data-offset-top');
                console.log(dataSpyFixedScrollPosition);
                if (scrollValue == event.scrollTopPx || scrollValue > dataSpyFixedScrollPosition) {
                    dataSpyFixed.addClass('fixed-top');
                } else {
                    dataSpyFixed.removeClass('fixed-top');
                }
            });
        </script>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="logo-box">
                            <img src="img/logo1.png" alt="petbazzar" class="img-fluid">
                        </div>
                        <p>Locally based petsbazzar.com is one of the reputable and devoted website that offers genuine services for your beloved pets.</p>
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
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/vendors/slick.min.js"></script>
    <script src="js/vendors/wow.min.js"></script>
    <script src="js/vendors/jquery.mCustomScrollbar.min.js"></script>
    <script src="js/vendors/bootstrap-datepicker.min.js"></script>
    <script async src="js/app.js"></script>


    <div class="icon-box">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/923058902090" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

    </div>

</body>

</html>