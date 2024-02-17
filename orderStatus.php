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
        Shopping cart | Pets Bazzar.com
    </title>

    <meta name="description" content="Locally based  Pets Bazzar.com is one of the reputable and devoted website that offers genuine services for your beloved pets">




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


    <link rel="icon" type="image/png" sizes="32x32" href="img/Pets Bazzar-favicon-32..png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/Pets Bazzar-favicon-16.png">
    <!--<link rel="stylesheet" href="css/vendors/jquery.steps.css">-->
    <meta property="og:url" content="cart" />
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


    <!--- Add to Cart  ---->
    <script>
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
                            <a item_id="${productsArr[i]['productId']}" id="cart_item_remove_btn" onclick="refresh()" class="btn btn-link remove-btn">
                                <i class="fas fa-times"></i>
                            </a>
                            <div class="img-box">

                                <img class="card-img-top" src="${productsArr[i]['productImage']}" alt="${productsArr[i]['productName']}">
                            </div>

                            <div class="media-body">
                                <p class="card-title mb-0" href="#">${productsArr[i]['productName']}</p>
                                <div class="price">
                                    <div>
                                        <span><span id="p-qty${productsArr[i]['productId']}">${productsArr[i]['productQuantity']}</span> X PKR</span> <span id="p-price${productsArr[i]['productId']}">${productsArr[i]['productPrice']}</span>
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
                document.getElementById('price-total').innerText = subTotal
                document.getElementById('total_price').innerText = subTotal
                document.querySelector('input[name="shipping_cost"]').value = subTotal
                document.getElementById('totalItems').innerText = cartCounter

            }
        })
    </script>



    <style>
        .stripe-box {
            display: none;
        }

        .show {
            display: block;
        }
    </style>

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

                .swiper {
                    width: 100%;
                    height: 100%;
                }

                .swiper-slide {
                    text-align: center;
                    font-size: 18px;
                    background: #fff;
                    display: flex;
                    justify-content: center;
                    align-items: center;

                }

                .swiper-slide img {
                    display: block;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                .swiper {
                    width: 100%;
                    height: 300px;
                    margin-left: auto;
                    margin-right: auto;
                }

                .swiper-slide {
                    background-size: cover;
                    background-position: center;
                }

                .mySwiper2 {
                    height: 80%;
                    width: 100%;
                }

                .mySwiper {
                    height: 20%;
                    box-sizing: border-box;
                    padding: 10px 0;
                }

                .mySwiper .swiper-slide {
                    width: 25%;
                    height: 100%;
                    opacity: 0.4;
                }

                .mySwiper .swiper-slide-thumb-active {
                    opacity: 1;
                }

                .swiper-slide img {
                    display: block;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
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
                            <?php } ?>                            <?php
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
        <div class="secondary-header fixed-top">

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
                                                <a href="dog-food.html">Dog Food</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mega-dropdown mega-dropdown-small">
                                <a href="cats.html" class="nav-link">CATS</a>
                                <div class="mega-dropdown-menu menu-style-small">
                                    <div class="right-box">
                                        <ul class="list-unstyled links-list">
                                            <li>
                                                <a href="cat-food.html">Cat Food</a>
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
                                                <a href="fish-food.html">Fish Food</a>
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
        <div class="container">


        </div>
        <style>
            .donate_us_add_btn {
                color: white;
                background-color: #f84646;
                border-color: #f93838;
            }

            .donate_us_add_btn:hover {
                background-color: #f84646;
                border-color: #f93838;
            }

            #donation_remove {
                cursor: pointer;
            }
        </style>
        <div class="container">
            <div class="cardsuccess">
                <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;text-align:center;">
                    <i class="checkmark">✓</i>
                </div>
                <h1 class="success">Success</h1>
                <p class="success2">We received your purchase request;<br /> we'll be in touch shortly!</p>
            </div>

            <style>
                h1.success {
                    color: #88B04B;
                    font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
                    font-weight: 900;
                    font-size: 40px;
                    margin-bottom: 10px;
                    text-align: center;
                }

                p.success2 {
                    color: #404F5E;
                    font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
                    font-size: 20px;
                    margin: 0;
                    text-align: center;
                }



                i.checkmark {
                    color: #9ABC66;
                    font-size: 100px;
                    line-height: 200px;
                    margin-left: -15px;
                }

                .cardsuccess {
                    background: white;
                    padding: 60px;
                    border-radius: 4px;
                    box-shadow: 0 2px 3px #C8D0D8;
                    display: block;
                    margin: 0 auto;
                }
            </style>


            <div class="box no-border" id="jazzCashValidationErrorsDiv" style="display: none;">
                <div class="box-tools">
                    <p class="alert alert-warning alert-dismissible">
                        <span id="jazzCashValidationErrorsMsg"></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </p>
                </div>
            </div>






            <form id="payViaJazzCashForm" method="post" action="https://payments.jazzcash.com.pk/CustomerPortal/transactionmanagement/merchantform">

                <input type="hidden" name="pp_Version" value="1.1">
                <input type="hidden" name="pp_TxnType" value="">
                <input type="hidden" name="pp_Language" value="EN">
                <input type="hidden" name="pp_MerchantID" value="00168612">
                <input type="hidden" name="pp_SubMerchantID" value="">
                <input type="hidden" name="pp_Password" value="2sxw4b8wu2">
                <input type="hidden" name="pp_TxnRefNo" value="T20230430003428">
                <input type="hidden" name="pp_Amount" value="100">
                <input type="hidden" name="pp_TxnCurrency" value="PKR">
                <input type="hidden" name="pp_TxnDateTime" value="20230430003428">
                <input type="hidden" name="pp_BillReference" value="OrderID">
                <input type="hidden" name="pp_Description" value="Thank you for using Jazz Cash">
                <input type="hidden" id="pp_DiscountedAmount" name="pp_DiscountedAmount" value="">
                <input type="hidden" id="pp_DiscountBank" name="pp_DiscountBank" value="">
                <input type="hidden" name="pp_TxnExpiryDateTime" value="20230508003428">
                <input type="hidden" name="pp_ReturnURL" value="https://www.agentpet.com/get-jazz-cash-response">
                <input type="hidden" name="pp_SecureHash" value="8c8f8c6b5092f333aaa00434ce6cdf07e83d74dcc94d9aca658b7ec86e0e3bf2">
                <input type="hidden" name="ppmpf_1" value="">
                <input type="hidden" name="ppmpf_2" value="">
                <input type="hidden" name="ppmpf_3" value="">
                <input type="hidden" name="ppmpf_4" value="">
                <input type="hidden" name="ppmpf_5" value="">


                <input type="hidden" id="hashValuesString" value="">
                <label id="salt" style="display:none;">w3045t00ac</label>

                <input id="payViaJazzCashButton" type="submit" name="Jazz Cash" value="Jazz Cash" style="display: none;">

            </form>

        </div>

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
                                    <a target="_blank" href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/teamalphaseller?mibextid=LQQJ4d">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5 class="section-title list-title">Pets for Sale in Islamabad/Rawalpindi</h5>
                        <ul class="menu-list list-unstyled">
                            <li>
                                <a href="dogs/Islamabad/Rawalpindi">Dog for Sale</a>
                            </li>
                            <li>
                                <a href="cats/Islamabad/Rawalpindi">Cat for Sale</a>
                            </li>
                            <li>
                                <a href="fishes/Islamabad/Rawalpindi">Fishes for Sale</a>
                            </li>
                            <li>
                                <a href="birds/Islamabad/Rawalpindi">Birds for Sale</a>
                            </li>
                        </ul>
                        <h5 class="section-title list-title">Dogs for Sale</h5>
                        <ul class="menu-list list-unstyled">

                            <li>
                                <a href="dogs/islamabad">Dogs for Sale in Islamabad</a>
                            </li>
                            <li>
                                <a href="dogs/rawalpindi">Dogs for Sale in Rawalpindi</a>
                            </li>
                        </ul>
                        <h5 class="section-title list-title">Cats for Sale</h5>
                        <ul class="menu-list list-unstyled">

                            <li>
                                <a href="cats/islamabad">Cats for Sale in Islamabad</a>
                            </li>
                            <li>
                                <a href="cats/rawalpindi">Cats for Sale in Rawalpindi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="section-title list-title">Birds for Sale</h5>
                        <ul class="menu-list list-unstyled">

                            <li>
                                <a href="birds/islamabad">Birds for Sale in Islamabad</a>
                            </li>
                            <li>
                                <a href="birds/rawalpindi">Birds for Sale in Rawalpindi</a>
                            </li>
                        </ul>
                        <h5 class="section-title list-title">Fishes for Sale</h5>
                        <ul class="menu-list list-unstyled">

                            <li>
                                <a href="fishes/islamabad">Fishes for Sale in Islamabad</a>
                            </li>
                            <li>
                                <a href="fishes/rawalpindi">Fishes for Sale in Rawalpindi</a>
                            </li>
                        </ul>
                        <h5 class="section-title list-title">Pet Food for Sale</h5>
                        <ul class="menu-list list-unstyled">
                            <li>
                                <a href="dog-food.html">Dog Food for Sale</a>
                            </li>
                            <li>
                                <a href="cat-food.html">Cat Food for Sale</a>
                            </li>
                            <li>
                                <a href="bird-food.php">Bird Food for Sale</a>
                            </li>
                            <li>
                                <a href="fish-food.html">Fish Food for Sale</a>
                            </li>

                        </ul>

                    </div>


                    <div class="col-md-3">

                        <h5 class="section-title list-title">Pets by City</h5>
                        <ul class="menu-list list-unstyled">

                            <li>
                                <a href="pet-buy-sell.php?city=Islamabad">Pets in Islamabad</a>
                            </li>
                            <li>
                                <a href="pet-buy-sell.php?city=Rawalpindi">Pets in Rawalpindi</a>
                            </li>


                        </ul>
                        <h5 class="section-title list-title">Pets by Color</h5>
                        <ul class="menu-list list-unstyled">
                            <li>
                                <a href="white-pets">White Pets</a>
                            </li>
                            <li>
                                <a href="black-pets">Black Pets</a>
                            </li>
                            <li>
                                <a href="brown-pets">Brown Pets</a>
                            </li>
                            <li>
                                <a href="grey-pets">Grey Pets</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-3">

                        <h5 class="section-title list-title">Pets by Temperament</h5>
                        <ul class="menu-list list-unstyled">
                            <li>
                                <a href="protective-pets">Protective Pets</a>
                            </li>
                            <li>
                                <a href="playful-pets">Playful Pets</a>
                            </li>
                            <li>
                                <a href="affectionate-pets">Affectionate Pets</a>
                            </li>
                            <li>
                                <a href="gentle-pets">Gentle Pets</a>
                            </li>
                        </ul>

                    </div>




                    <div class="col-md-3">


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
                            <p class="copyright-text">© 2023 Pets Bazzar. All rights reserved. </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!---------STRIPE--------------->



        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/vendors/slick.min.js"></script>
        <script src="js/vendors/wow.min.js"></script>
        <script src="js/vendors/jquery.mCustomScrollbar.min.js"></script>
        <script src="js/vendors/bootstrap-datepicker.min.js"></script>
        <script src="js/app.js"></script>

        <script async src="https://js.stripe.com/v3/"></script>
        <script async defer src="js/stripe.js"></script>
        <script>
            $(document).mouseup(function(e) {
                var container = $(".header_search_box");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    $("#suggesstion-box").hide();
                }
            });
            $("#search_term").keyup(function() {
                if ($('#search_term').val() == '') {
                    $("#suggesstion-box").hide();
                    return;
                }
                search_term_val = $('#search_term').val();
                var params = "";
                var currentpath = window.location.pathname;
                console.log(currentpath);
                if (typeof(Storage) !== "undefined") {
                    var params = localStorage.getItem("Pets Bazzar-store-filters" + currentpath);
                    if (currentpath.indexOf("/new-arrivals") >= 0) {
                        params = updateQueryStringParameter(params, "order_by", "desc");
                        val = $('#search_term').val();
                        url = 'pet-store/new-arrivals?search_term=' + val
                        // url = 'pet-store/new-arrivals'
                        history.pushState({}, null, url);

                    }
                    if (currentpath.indexOf("/popular-products") >= 0) {
                        params = updateQueryStringParameter(params, "popular", "yes");
                    }
                    if (currentpath.indexOf("/featured-products") >= 0) {
                        params = updateQueryStringParameter(params, "featured", "yes");
                    }
                    if (currentpath.indexOf("-food") >= 0) {
                        params = updateQueryStringParameter(params, "category", "Pet Food");
                    }

                    if (currentpath.indexOf("/dog") >= 0) {
                        params = updateQueryStringParameter(params, "type", "Dog");
                    }
                    if (currentpath.indexOf("/cat") >= 0) {
                        params = updateQueryStringParameter(params, "type", "Cat");
                    }
                    if (currentpath.indexOf("/bird") >= 0) {
                        params = updateQueryStringParameter(params, "type", "Bird");
                    }
                    if (currentpath.indexOf("/fish") >= 0) {
                        params = updateQueryStringParameter(params, "type", "Fish");
                    }

                    if (currentpath.indexOf("/shop-by-brands") >= 0) {
                        var shopparam = currentpath.replace("/shop-by-brands/", "");
                        shopparam = shopparam.replace("/shop-by-brands", "");
                        shopparam = shopparam.replace(/%20/g, " ");
                        params = updateQueryStringParameter(params, "brand", shopparam);
                    }
                }
                if (params == null) {
                    params = 'page=1';
                }
                filterName = "search_term";
                params = updateQueryStringParameter(params, filterName, search_term_val);
                var filterName = $('#search_term').attr('name');
                var filterVal = $('#search_term').val();
                if ($('#search_term').hasClass('btn-price')) {
                    filterName = "price";
                    filterVal = $("#min_price").val() + "_" + $("#max_price").val();
                }
                if ($('#search_term').hasClass('shop-product-search') || $('#search_term').attr('id') == 'search_term') {
                    filterName = "search_term";
                    filterVal = $('#search_term').parents('.input-group').children('input').val();
                    search_term_val = filterVal;
                }
                params = updateQueryStringParameter(params, filterName, filterVal);
                if (typeof(Storage) !== "undefined") {
                    localStorage.setItem("Pets Bazzar-store-filters" + window.location.pathname, params);
                }

                if (params.search('&style') < 1) {
                    if ($(window).width() > 800) {
                        params = params + '&style=grid';
                    } else {
                        params = params + '&style=list';
                    }
                }
                $.ajax({
                    type: "GET",
                    url: 'ajax-product-list?' + params,
                    beforeSend: function() {
                        $("#search_term").css("background", "#FFF url(/img/LoaderIcon.gif) no-repeat 530px");
                    },
                    success: function(data) {
                        $("#suggesstion-box").show();
                        $("#suggesstion-box").html(data);
                        $("#search_term").css("background", "#FFF");
                    }
                });
            });




            function updateQueryStringParameter(queryString, key, value) {
                var queryParameters = {},
                    re = /([^&=]+)=([^&]*)/g,
                    m;

                // Creates a map with the query string parameters
                queryString = queryString.replace("+", " ");
                while (m = re.exec(queryString)) {

                    queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
                }
                if (key != "page") {
                    queryParameters['page'] = "1";
                }
                // Add new parameters or update existing ones
                queryParameters[key] = value;

                return $.param(queryParameters);
            }
        </script>
        <!--<script src="js/vendors/jquery.steps.min.js"></script>-->
        <script>
            $(document).ready(function() {
                $('[data-type="plus"]').click(function(e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    fieldName = $(this).attr('data-field');
                    // Get its current value
                    var quantity = $(this).parents('.quantity-box').find(".quantity");

                    var currentVal = parseInt(quantity.val());
                    // If is not undefined
                    if (!isNaN(currentVal)) {
                        // Increment
                        quantity.val(currentVal + 1);
                    } else {
                        // Otherwise put a 0 there
                        quantity.val(1);
                    }
                });
                // This button will decrement the value till 0
                $('[data-type="minus"]').click(function(e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    fieldName = $(this).attr('data-field');
                    // Get its current value
                    var quantity = $(this).parents('.quantity-box').find(".quantity");
                    var currentVal = parseInt(quantity.val());
                    // If it isn't undefined or its greater than 0
                    if (!isNaN(currentVal) && currentVal > 1) {
                        // Decrement one
                        quantity.val(currentVal - 1);
                    } else {
                        // Otherwise put a 0 there
                        quantity.val(1);
                    }
                });

                $(document).on("click", "a#proceed-to-checkout", function(e) {

                    e.preventDefault();
                    window.location.href = $("a#proceed-to-checkout").attr("href") + '?coupon=' + $('#coupon_code_holder').html();
                    //  + '&donation_amount=' + $('#donation_amount_holder').html();
                    // $("a#proceed-to-checkout").attr("href", function (i, href) {
                    //     return href + '?coupon=' + $('#coupon_code_holder').html() + '&donation_amount=' + $('#donation_amount_holder').html();
                    // });
                    // $('a#proceed-to-checkout')[0].click();

                });


                $(document).on("click", ".coupon_code_button", function(e) {

                    e.preventDefault();
                    var c_code = $(".coupon_code_input").val();
                    $(".coupon_code_input").val('');
                    if (c_code) {
                        var url = "coupon";

                        $.ajax({
                            type: "get",
                            url: url,
                            data: {
                                'total': $("#total_price_holder").html(),
                                'coupon': c_code
                            }, // serializes the form's elements.
                            success: function(response) {
                                if (response.error) {
                                    // $(".coupon_code_success").hide();
                                    $(".coupon_code_error").html(response.error).show();

                                    $("a#proceed-to-checkout").attr("href", function(i, href) {
                                        var proceedURL = "checkout?shipping_method=" + $(".shipping_method:checked").val();
                                        // $("#proceed-to-checkout").attr("href", proceedURL);

                                    });


                                } else if (response.discount) {
                                    $(".coupon_code_error").hide();
                                    $(".coupon_code_success").show();
                                    $("#coupon_discount_total").html(response.discount);
                                    $("#coupon_code_holder, #coupon_discount_code").html(c_code);
                                    $("#discount_price_holder").html(response.discount);

                                    // $("a#proceed-to-checkout").attr("href", function (i, href) {

                                    //     if(href.indexOf('coupon=') != -1){    // replace the coupon with amount


                                    //         var hrefReplaced = href.replace('&','?')
                                    //         console.log(hrefReplaced);
                                    //         var hrefArray = hrefReplaced.split('?');

                                    //         let hrefNew = "";
                                    //         hrefArray.forEach(hrefFunction);

                                    //         function hrefFunction(value, index) {
                                    //             if (index == 1) {
                                    //                 hrefNew += '?';
                                    //             }
                                    //             if (index > 1) {
                                    //                 hrefNew += '&';
                                    //             }
                                    //             if (value.indexOf('coupon=') == -1) {
                                    //                 console.log(hrefNew);
                                    //                 hrefNew += value
                                    //             } else {
                                    //                 couponArray = value.split('=');
                                    //                 couponNew = couponArray[0] + '=' + c_code;
                                    //                 hrefNew += couponNew

                                    //             }
                                    //         }

                                    //         return hrefNew;
                                    //         // $(".coupon_code_success").hide();
                                    //         // $(".coupon_code_error").html('Already applied.').show();
                                    //     } else {
                                    //         $(".coupon_code_error").hide();
                                    //         return href + '?coupon=' + c_code;
                                    //     }

                                    // });

                                    $("#total_price").html(((parseInt($("#total_price_holder").text()) - parseInt(response.discount)) + parseInt($("#donation_amount_holder").text())).toFixed(2));

                                } else {
                                    $(".coupon_code_success, .coupon_code_error").hide()
                                    $("#total_price").html(((parseInt($("#total_price_holder").text()) - parseInt(response.discount)) + parseInt($("#donation_amount_holder").text())).toFixed(2));

                                }

                            }
                        });
                    } else {

                        $("#coupon_discount_total").html(0);
                        $("#discount_price_holder").html(0);
                        $("#coupon_code_holder").html('');
                        calculateTotal();


                    }

                });

                /**
                 * Restrict input field from entring point (.)
                 */
                $(".donate_us_input").on("keypress", function(evt) {
                    var keycode = evt.charCode || evt.keyCode;
                    if (keycode == 46) {
                        return false;
                    }
                });

                $(document).on("click", ".donate_us_add_btn", function(e) {

                    e.preventDefault();
                    var d_amount = $(".donate_us_input").val().replace(/^0+/, '');
                    $(".donate_us_input").val('');
                    if (d_amount) {

                        if (d_amount > 0) {
                            $(".donation_success").show();
                            $(".donation_error").hide();
                        }
                        $("#donation_total").html(d_amount);

                        // $("a#proceed-to-checkout").attr("href", function (i, href) {

                        //     if (href.indexOf('&donation_amount=') != -1) {

                        //         preString = "donation_amount=",
                        //         searchString = "?coupon",
                        //         preIndex = href.indexOf(preString)-1,
                        //         searchIndex = preIndex + href.substring(preIndex).indexOf(searchString);

                        //         if ( searchIndex > preIndex ) {

                        //             console.log(preIndex,searchIndex, href.substring(preIndex, searchIndex), 'oops');
                        //             $donationString = href.substring(preIndex, searchIndex);

                        //         } else {

                        //             lastIndex = href.lastIndexOf('');
                        //             console.log(preIndex,lastIndex, href.substring(preIndex, lastIndex), 'oops2');
                        //             $donationString = href.substring(preIndex, lastIndex);

                        //         }

                        //         if (d_amount < 1) {

                        //             return href.replace($donationString,'');

                        //         }

                        //         return href.replace($donationString,'&donation_amount=' + d_amount);


                        //     } else {

                        //         if (d_amount > 0) {

                        //             return href + '&donation_amount=' + d_amount;

                        //         }


                        //     }

                        // });

                        $("#donation_amount_holder").html(d_amount);

                    } else {

                        $(".donation_error_text").html('Please enter a valid value');
                        // $(".donation_success").hide();
                        $(".donation_error").show();
                        // $("#donation_amount_holder").html(0);

                    }

                    $("#total_price").html(
                        (
                            (
                                parseInt(

                                    $("#total_price_holder").text()
                                ) -
                                parseInt(

                                    $("#discount_price_holder").html()

                                )
                            ) +
                            parseInt(

                                $("#donation_amount_holder").text()

                            )

                        ).toFixed(2)
                    );

                    // $("#donation_amount_holder").val(0);


                });

                $(document).on("click", ".donation_remove_button", function(e) {

                    e.preventDefault();
                    $('.donate_us_input').val('');
                    $('.donation_success').hide();
                    $("#donation_amount_holder").html(0);
                    // $(".donate_us_add_btn").click();

                    $("a#proceed-to-checkout").attr("href", function(i, href) {

                        if (href.indexOf('&donation_amount=') != -1) {

                            preString = "donation_amount=",
                                searchString = "?coupon",
                                preIndex = href.indexOf(preString) - 1,
                                searchIndex = preIndex + href.substring(preIndex).indexOf(searchString);

                            if (searchIndex > preIndex) {

                                // console.log(preIndex,searchIndex, href.substring(preIndex, searchIndex), 'oops');
                                $donationString = href.substring(preIndex, searchIndex);

                            } else {

                                lastIndex = href.lastIndexOf('');
                                // console.log(preIndex,lastIndex, href.substring(preIndex, lastIndex), 'oops2');
                                $donationString = href.substring(preIndex, lastIndex);

                            }

                            return href.replace($donationString, '');

                        }

                    });

                    $("#total_price").html(
                        (
                            (
                                parseInt(

                                    $("#total_price_holder").text()
                                ) -
                                parseInt(

                                    $("#discount_price_holder").html()

                                )
                            ) +
                            parseInt(

                                $("#donation_amount_holder").text()

                            )

                        ).toFixed(2)
                    );

                });

                $(".coupon_code_success, .coupon_code_error").hide();

            });


            // $(".shipping_method").on("change", function () {
            //     calculateTotal();
            // });


            calculateTotal();

            function calculateTotal() {
                //var shipping_cost = parseFloat($(".shipping_method:checked").attr("shipping_cost"));
                var shipping_cost = 0.00;
                var subtotal = parseFloat($("#subtotal").html().replace(/,/g, ''));
                // var donationAmount = parseFloat($("#donation_amount_holder").html());
                // var total = shipping_cost + subtotal + donationAmount;
                var total = shipping_cost + subtotal;
                $("#shipping_cost").html(shipping_cost.toFixed(2));
                $("#total_price_holder").html(total.toFixed(2));
                $("#total_price").html(
                    (
                        (
                            parseInt(

                                $("#total_price_holder").text()
                            ) -
                            parseInt(

                                $("#discount_price_holder").html()

                            )
                        ) +
                        parseInt(

                            $("#donation_amount_holder").text()

                        )

                    ).toFixed(2)
                );
                //var proceedURL = "checkout?shipping_method=" + $(".shipping_method:checked").val();

                $("a#proceed-to-checkout").attr("href", function(i, href) {



                    var hrefReplaced = href.replace('&', '?')
                    var hrefArray = hrefReplaced.split("?");

                    let proceedURL = "";
                    let couponFound = false;
                    hrefArray.forEach(hrefFunction);

                    // console.log(proceedURL);                
                    function hrefFunction(value, index) {
                        if (index == 1) {
                            proceedURL += '?';
                        }
                        if (index > 1) {
                            proceedURL += '&';
                        }
                        if (value.indexOf('coupon=') == -1) {

                            proceedURL += value
                        } else {
                            couponFound = true;
                        }
                    }

                    $("#proceed-to-checkout").attr("href", proceedURL);
                    $(".coupon_code_success").hide();
                    if (couponFound) {
                        $(".coupon_code_error").html('Coupon removed.').show();
                    }


                });

                // var proceedURL = "checkout";
                // $("#proceed-to-checkout").attr("href", proceedURL);

                // $(".coupon_code_success, .coupon_code_error").hide()
            }
        </script>


        <div class="icon-box">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://wa.me/923058902090" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

        </div>

</body>

</html>