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

            if (productsArr.length) {
                $('#step-checkout').show()
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

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">

                    </li>
                    <li class="breadcrumb-item">
                        <a href="pet-store.php">
                            Food Store
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping cart</li>
                </ol>
            </nav>
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

            <div class="box no-border" id="jazzCashValidationErrorsDiv" style="display: none;">
                <div class="box-tools">
                    <p class="alert alert-warning alert-dismissible">
                        <span id="jazzCashValidationErrorsMsg"></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </p>
                </div>
            </div>
            <div id="cart_steps" class="steps-wizard">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first disabled" aria-disabled="false" aria-selected="true">
                            <a id="cart_steps-t-0" href="javascript:void(0)" aria-controls="cart_steps-p-0">
                                <span class="current-info audible">current step: </span>
                                <span class="number">1.</span> Shopping Cart</a>
                        </li>
                        <li role="tab" class="current" aria-disabled="true">
                            <a id="cart_steps-t-1" href="javascript:void(0)" aria-controls="cart_steps-p-1">
                                <span class="number">2.</span> Checkout
                            </a>
                        </li>
                        <li role="tab" class="disabled last" aria-disabled="true">
                            <a id="cart_steps-t-2" href="javascript:void(0)" aria-controls="cart_steps-p-2">
                                <span class="number">3.</span> Order Complete</a>
                        </li>
                    </ul>

                    <h1 class="step-header">Checkout</h1>
                    <div class="step-content" id="step-checkout" style="display: none;">

                        <form method="post" class="needs-validation" novalidate="" id="stripe-form">
                            <div class="step-content-inner">

                                <div class="left-box pt-4">
                                    <h4 class="form-title">Shipping information</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="hidden" name="status" value="1">
                                            <div class="form-group has-float-label">
                                                <input name="name" type="text" placeholder="Name" class="form-control" required="" value="">
                                                <label>Name*</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-float-label">
                                                <input name="phone" type="text" pattern="[0-9]+" title="03001234567" maxlength="17" placeholder="Phone" class="form-control" required="" value="">
                                                <label>Phone (03001234567)*</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-float-label">
                                                <input name="email" type="email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" placeholder="Email" class="form-control" required value="">
                                                <label>Email*</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-float-label float">
                                                <select name="country_name" class="form-control" required="">
                                                    <!--<option value=""></option>-->
                                                    <option selected="selected" value="pakistan">PAKISTAN</option>
                                                </select>
                                                <label>Country*</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-float-label float">
                                                <select id="city_id" name="city" class="form-control" required="">
                                                    <option value="" selected="" disabled="">Select City</option>
                                                    <!--<option value=""></option>-->
                                                    <option value="Karachi" shippingcityid="1">Karachi</option>
                                                    <option value="Lahore" shippingcityid="2">Lahore</option>
                                                    <option value="Rawalpindi" shippingcityid="5">Rawalpindi</option>
                                                    <option value="Peshawar" shippingcityid="9">Peshawar</option>
                                                    <option value="Islamabad" shippingcityid="11">Islamabad</option>
                                                    <option value="Quetta" shippingcityid="12">Quetta</option>
                                                    <option value="Abbottabad" shippingcityid="10">Abbottabad</option>
                                                    <option value="Abdul Hakim" shippingcityid="153">Abdul Hakim</option>
                                                    <option value="Ahmed Pur East" shippingcityid="179">Ahmed Pur East</option>
                                                    <option value="Ahmed Pur Sial" shippingcityid="266">Ahmed Pur Sial</option>
                                                    <option value="Ajnian Wala" shippingcityid="267">Ajnian Wala</option>
                                                    <option value="Akhtar Abad" shippingcityid="268">Akhtar Abad</option>
                                                    <option value="Aliabad" shippingcityid="80">Aliabad</option>
                                                    <option value="Alipur" shippingcityid="154">Alipur</option>
                                                    <option value="Allah Abad" shippingcityid="269">Allah Abad</option>
                                                    <option value="Alpurai" shippingcityid="109">Alpurai</option>
                                                    <option value="Arifwala" shippingcityid="142">Arifwala</option>
                                                    <option value="Athmuqam" shippingcityid="127">Athmuqam</option>
                                                    <option value="Attock City" shippingcityid="122">Attock City</option>
                                                    <option value="Awaran" shippingcityid="74">Awaran</option>
                                                    <option value="Ayubia" shippingcityid="270">Ayubia</option>
                                                    <option value="Aziz Abad A.K." shippingcityid="284">Aziz Abad A.K.</option>
                                                    <option value="Badin" shippingcityid="50">Badin</option>
                                                    <option value="Bagh" shippingcityid="49">Bagh</option>
                                                    <option value="Bahawalnagar" shippingcityid="78">Bahawalnagar</option>
                                                    <option value="Bahawalpur" shippingcityid="14">Bahawalpur</option>
                                                    <option value="Bajwar" shippingcityid="295">Bajwar</option>
                                                    <option value="BalaKot" shippingcityid="155">BalaKot</option>
                                                    <option value="Bannu" shippingcityid="13">Bannu</option>
                                                    <option value="Bardar" shippingcityid="25">Bardar</option>
                                                    <option value="Barkhan" shippingcityid="60">Barkhan</option>
                                                    <option value="Basharat" shippingcityid="271">Basharat</option>
                                                    <option value="Basirpur" shippingcityid="140">Basirpur</option>
                                                    <option value="Basti Malook" shippingcityid="272">Basti Malook</option>
                                                    <option value="Batgram" shippingcityid="47">Batgram</option>
                                                    <option value="Betkhela" shippingcityid="254">Betkhela</option>
                                                    <option value="Bhai Pheru" shippingcityid="149">Bhai Pheru</option>
                                                    <option value="Bhakkar" shippingcityid="100">Bhakkar</option>
                                                    <option value="Bhalwal" shippingcityid="193">Bhalwal</option>
                                                    <option value="Bhara Khu" shippingcityid="192">Bhara Khu</option>
                                                    <option value="Bhera" shippingcityid="136">Bhera</option>
                                                    <option value="Bhikki" shippingcityid="156">Bhikki</option>
                                                    <option value="Bhurban Peral C" shippingcityid="194">Bhurban Peral C</option>
                                                    <option value="Bolan" shippingcityid="280">Bolan</option>
                                                    <option value="Burewala" shippingcityid="148">Burewala</option>
                                                    <option value="Chak Jhumra" shippingcityid="196">Chak Jhumra</option>
                                                    <option value="Chak Sawari" shippingcityid="296">Chak Sawari</option>
                                                    <option value="Chakwal" shippingcityid="69">Chakwal</option>
                                                    <option value="Chaman" shippingcityid="36">Chaman</option>
                                                    <option value="Charsadda" shippingcityid="76">Charsadda</option>
                                                    <option value="Chawinda" shippingcityid="182">Chawinda</option>
                                                    <option value="Chichawatni" shippingcityid="162">Chichawatni</option>
                                                    <option value="Chilas" shippingcityid="82">Chilas</option>
                                                    <option value="Chiniot" shippingcityid="32">Chiniot</option>
                                                    <option value="Chistian" shippingcityid="197">Chistian</option>
                                                    <option value="Chitral" shippingcityid="85">Chitral</option>
                                                    <option value="Chowk Azam" shippingcityid="200">Chowk Azam</option>
                                                    <option value="Chowk Munda" shippingcityid="198">Chowk Munda</option>
                                                    <option value="Chowk Sarwar Shaheed" shippingcityid="190">Chowk Sarwar Shaheed</option>
                                                    <option value="Chung" shippingcityid="195">Chung</option>
                                                    <option value="Chunian" shippingcityid="199">Chunian</option>
                                                    <option value="Dadu" shippingcityid="79">Dadu</option>
                                                    <option value="Dadyal AJK" shippingcityid="282">Dadyal AJK</option>
                                                    <option value="Daggar" shippingcityid="114">Daggar</option>
                                                    <option value="Dakwala" shippingcityid="202">Dakwala</option>
                                                    <option value="Dalbandin" shippingcityid="117">Dalbandin</option>
                                                    <option value="Dargai" shippingcityid="297">Dargai</option>
                                                    <option value="Daska" shippingcityid="163">Daska</option>
                                                    <option value="Dasu" shippingcityid="126">Dasu</option>
                                                    <option value="Depal Pur" shippingcityid="170">Depal Pur</option>
                                                    <option value="Dera Allahyar" shippingcityid="45">Dera Allahyar</option>
                                                    <option value="Dera Bugti" shippingcityid="64">Dera Bugti</option>
                                                    <option value="Dera Ghazi Khan" shippingcityid="27">Dera Ghazi Khan</option>
                                                    <option value="Dera Ismail Khan" shippingcityid="35">Dera Ismail Khan</option>
                                                    <option value="Dera Murad Jamali" shippingcityid="55">Dera Murad Jamali</option>
                                                    <option value="Dharanwala" shippingcityid="206">Dharanwala</option>
                                                    <option value="Dharki" shippingcityid="164">Dharki</option>
                                                    <option value="Digri" shippingcityid="205">Digri</option>
                                                    <option value="Dina" shippingcityid="263">Dina</option>
                                                    <option value="Dinga" shippingcityid="204">Dinga</option>
                                                    <option value="Dokri" shippingcityid="203">Dokri</option>
                                                    <option value="Dunya Pur" shippingcityid="183">Dunya Pur</option>
                                                    <option value="Eidgah" shippingcityid="115">Eidgah</option>
                                                    <option value="Faisalabad" shippingcityid="3">Faisalabad</option>
                                                    <option value="Farooqabad" shippingcityid="258">Farooqabad</option>
                                                    <option value="Fateh Jang" shippingcityid="189">Fateh Jang</option>
                                                    <option value="FatehPur" shippingcityid="184">FatehPur</option>
                                                    <option value="Feroza Wala" shippingcityid="187">Feroza Wala</option>
                                                    <option value="Gadoon Amazai" shippingcityid="207">Gadoon Amazai</option>
                                                    <option value="Gakkhar Mandi" shippingcityid="209">Gakkhar Mandi</option>
                                                    <option value="Gakuch" shippingcityid="107">Gakuch</option>
                                                    <option value="Gandava" shippingcityid="91">Gandava</option>
                                                    <option value="Ghotki" shippingcityid="71">Ghotki</option>
                                                    <option value="Gilgit" shippingcityid="31">Gilgit</option>
                                                    <option value="Gojra" shippingcityid="151">Gojra</option>
                                                    <option value="Goth Machi" shippingcityid="208">Goth Machi</option>
                                                    <option value="Gujar Khan" shippingcityid="176">Gujar Khan</option>
                                                    <option value="Gujranwala" shippingcityid="7">Gujranwala</option>
                                                    <option value="Gujrat" shippingcityid="24">Gujrat</option>
                                                    <option value="Gwadar" shippingcityid="40">Gwadar</option>
                                                    <option value="Hafizabad" shippingcityid="61">Hafizabad</option>
                                                    <option value="Hala New" shippingcityid="143">Hala New</option>
                                                    <option value="Hala Old" shippingcityid="144">Hala Old</option>
                                                    <option value="Hangu" shippingcityid="105">Hangu</option>
                                                    <option value="Haripur" shippingcityid="43">Haripur</option>
                                                    <option value="Haroonabad" shippingcityid="137">Haroonabad</option>
                                                    <option value="Hashmore" shippingcityid="264">Hashmore</option>
                                                    <option value="Hasilpur" shippingcityid="260">Hasilpur</option>
                                                    <option value="Hassan Abdal" shippingcityid="210">Hassan Abdal</option>
                                                    <option value="Havellian" shippingcityid="265">Havellian</option>
                                                    <option value="HUB Chouki" shippingcityid="201">HUB Chouki</option>
                                                    <option value="Hunza" shippingcityid="298">Hunza</option>
                                                    <option value="Hyderabad City" shippingcityid="8">Hyderabad City</option>
                                                    <option value="Jacobabad" shippingcityid="108">Jacobabad</option>
                                                    <option value="Jaffarabad" shippingcityid="274">Jaffarabad</option>
                                                    <option value="Jalal Pur Jatta" shippingcityid="174">Jalal Pur Jatta</option>
                                                    <option value="Jampur" shippingcityid="213">Jampur</option>
                                                    <option value="Jamshoro" shippingcityid="102">Jamshoro</option>
                                                    <option value="Jaranwala" shippingcityid="188">Jaranwala</option>
                                                    <option value="Jauharabad" shippingcityid="273">Jauharabad</option>
                                                    <option value="Jhang City" shippingcityid="65">Jhang City</option>
                                                    <option value="Jhang Sadr" shippingcityid="23">Jhang Sadr</option>
                                                    <option value="Jhelum" shippingcityid="98">Jhelum</option>
                                                    <option value="Jumber Khurd" shippingcityid="212">Jumber Khurd</option>
                                                    <option value="Kabir wala" shippingcityid="217">Kabir wala</option>
                                                    <option value="Kahota" shippingcityid="259">Kahota</option>
                                                    <option value="Kala Shah Kaku" shippingcityid="167">Kala Shah Kaku</option>
                                                    <option value="Kalat" shippingcityid="90">Kalat</option>
                                                    <option value="Kamalia" shippingcityid="218">Kamalia</option>
                                                    <option value="Kamoki" shippingcityid="165">Kamoki</option>
                                                    <option value="Kamra" shippingcityid="214">Kamra</option>
                                                    <option value="Kandhkot" shippingcityid="125">Kandhkot</option>
                                                    <option value="Karak" shippingcityid="56">Karak</option>
                                                    <option value="Karor Pakka" shippingcityid="219">Karor Pakka</option>
                                                    <option value="Kashmore" shippingcityid="277">Kashmore</option>
                                                    <option value="Kasur" shippingcityid="26">Kasur</option>
                                                    <option value="Khairpur" shippingcityid="94">Khairpur</option>
                                                    <option value="Khairpur Nathan Shah" shippingcityid="226">Khairpur Nathan Shah</option>
                                                    <option value="Khan Bela" shippingcityid="285">Khan Bela</option>
                                                    <option value="Khan Pur" shippingcityid="215">Khan Pur</option>
                                                    <option value="Khanewal" shippingcityid="92">Khanewal</option>
                                                    <option value="Kharan" shippingcityid="103">Kharan</option>
                                                    <option value="Kharian" shippingcityid="130">Kharian</option>
                                                    <option value="Khipro" shippingcityid="225">Khipro</option>
                                                    <option value="Khurrianwala" shippingcityid="216">Khurrianwala</option>
                                                    <option value="Khushab" shippingcityid="70">Khushab</option>
                                                    <option value="Khuzdar" shippingcityid="73">Khuzdar</option>
                                                    <option value="Kohala" shippingcityid="220">Kohala</option>
                                                    <option value="Kohat" shippingcityid="22">Kohat</option>
                                                    <option value="Kohlu" shippingcityid="72">Kohlu</option>
                                                    <option value="Kot Abdul Malik" shippingcityid="157">Kot Abdul Malik</option>
                                                    <option value="Kot Addu" shippingcityid="221">Kot Addu</option>
                                                    <option value="Kot Ghulam MUHD" shippingcityid="286">Kot Ghulam MUHD</option>
                                                    <option value="Kot Radha Kisha" shippingcityid="222">Kot Radha Kisha</option>
                                                    <option value="Kotli" shippingcityid="62">Kotli</option>
                                                    <option value="Kuldana" shippingcityid="223">Kuldana</option>
                                                    <option value="Kundian" shippingcityid="41">Kundian</option>
                                                    <option value="Kunri" shippingcityid="224">Kunri</option>
                                                    <option value="Lakki Marwat" shippingcityid="81">Lakki Marwat</option>
                                                    <option value="Lalamusa" shippingcityid="168">Lalamusa</option>
                                                    <option value="Landikotal" shippingcityid="299">Landikotal</option>
                                                    <option value="Larkana" shippingcityid="18">Larkana</option>
                                                    <option value="Lasbela" shippingcityid="276">Lasbela</option>
                                                    <option value="Layyah" shippingcityid="119">Layyah</option>
                                                    <option value="LiaqatPur" shippingcityid="180">LiaqatPur</option>
                                                    <option value="Lodhran" shippingcityid="46">Lodhran</option>
                                                    <option value="Loralai" shippingcityid="63">Loralai</option>
                                                    <option value="Machi Goth" shippingcityid="289">Machi Goth</option>
                                                    <option value="MacLeod Gunj" shippingcityid="132">MacLeod Gunj</option>
                                                    <option value="Mailsi" shippingcityid="228">Mailsi</option>
                                                    <option value="Malakand" shippingcityid="95">Malakand</option>
                                                    <option value="Malakwal" shippingcityid="135">Malakwal</option>
                                                    <option value="Mandi Bahauddin" shippingcityid="99">Mandi Bahauddin</option>
                                                    <option value="Manga Mandi" shippingcityid="158">Manga Mandi</option>
                                                    <option value="Mangla" shippingcityid="262">Mangla</option>
                                                    <option value="Mangora" shippingcityid="255">Mangora</option>
                                                    <option value="Mansehra" shippingcityid="51">Mansehra</option>
                                                    <option value="Mardan" shippingcityid="57">Mardan</option>
                                                    <option value="Masiwala" shippingcityid="28">Masiwala</option>
                                                    <option value="Mastung" shippingcityid="89">Mastung</option>
                                                    <option value="Matiari" shippingcityid="44">Matiari</option>
                                                    <option value="Matli" shippingcityid="229">Matli</option>
                                                    <option value="Mehar" shippingcityid="230">Mehar</option>
                                                    <option value="Mehmoodkot" shippingcityid="178">Mehmoodkot</option>
                                                    <option value="Mehra" shippingcityid="38">Mehra</option>
                                                    <option value="Mehrab Pur" shippingcityid="231">Mehrab Pur</option>
                                                    <option value="Mian Channu" shippingcityid="227">Mian Channu</option>
                                                    <option value="Mianwali" shippingcityid="110">Mianwali</option>
                                                    <option value="Mirpur Khas" shippingcityid="20">Mirpur Khas</option>
                                                    <option value="Mirwah Gorchani" shippingcityid="288">Mirwah Gorchani</option>
                                                    <option value="Mithi" shippingcityid="290">Mithi</option>
                                                    <option value="Moro" shippingcityid="177">Moro</option>
                                                    <option value="Multan" shippingcityid="6">Multan</option>
                                                    <option value="Muridke" shippingcityid="159">Muridke</option>
                                                    <option value="Murree" shippingcityid="147">Murree</option>
                                                    <option value="Musa Khel Bazar" shippingcityid="111">Musa Khel Bazar</option>
                                                    <option value="Muslim Bagh" shippingcityid="287">Muslim Bagh</option>
                                                    <option value="Muzaffarabad" shippingcityid="146">Muzaffarabad</option>
                                                    <option value="Muzaffargarh" shippingcityid="53">Muzaffargarh</option>
                                                    <option value="Nankana Sahib" shippingcityid="59">Nankana Sahib</option>
                                                    <option value="Narang Mandi" shippingcityid="232">Narang Mandi</option>
                                                    <option value="Narowal" shippingcityid="93">Narowal</option>
                                                    <option value="Nasirabad" shippingcityid="275">Nasirabad</option>
                                                    <option value="Naudero" shippingcityid="291">Naudero</option>
                                                    <option value="Naushahro Firoz" shippingcityid="112">Naushahro Firoz</option>
                                                    <option value="Naushki" shippingcityid="281">Naushki</option>
                                                    <option value="Nawabshah" shippingcityid="29">Nawabshah</option>
                                                    <option value="New Mirpur" shippingcityid="113">New Mirpur</option>
                                                    <option value="Nowshera" shippingcityid="75">Nowshera</option>
                                                    <option value="Okara" shippingcityid="30">Okara</option>
                                                    <option value="Pakpattan" shippingcityid="68">Pakpattan</option>
                                                    <option value="Panjgur" shippingcityid="88">Panjgur</option>
                                                    <option value="Pano Aqil" shippingcityid="234">Pano Aqil</option>
                                                    <option value="Parachinar" shippingcityid="39">Parachinar</option>
                                                    <option value="Pasrur" shippingcityid="152">Pasrur</option>
                                                    <option value="Pattoki" shippingcityid="160">Pattoki</option>
                                                    <option value="Phool Nagar" shippingcityid="233">Phool Nagar</option>
                                                    <option value="Pind Dadan Khan" shippingcityid="235">Pind Dadan Khan</option>
                                                    <option value="Pindi Bhattian" shippingcityid="236">Pindi Bhattian</option>
                                                    <option value="Pindigheb" shippingcityid="138">Pindigheb</option>
                                                    <option value="Pishin" shippingcityid="83">Pishin</option>
                                                    <option value="Qadir Pur Rawan" shippingcityid="241">Qadir Pur Rawan</option>
                                                    <option value="Qambar" shippingcityid="279">Qambar</option>
                                                    <option value="Qazi Ahmed" shippingcityid="292">Qazi Ahmed</option>
                                                    <option value="Qila Abdullah" shippingcityid="77">Qila Abdullah</option>
                                                    <option value="Qila Dedar Sing" shippingcityid="181">Qila Dedar Sing</option>
                                                    <option value="Qila Saifullah" shippingcityid="86">Qila Saifullah</option>
                                                    <option value="Rabwa" shippingcityid="238">Rabwa</option>
                                                    <option value="Rahimyar Khan" shippingcityid="21">Rahimyar Khan</option>
                                                    <option value="Rahwali" shippingcityid="237">Rahwali</option>
                                                    <option value="Raiwind" shippingcityid="191">Raiwind</option>
                                                    <option value="Rajana" shippingcityid="240">Rajana</option>
                                                    <option value="Rajanpur" shippingcityid="118">Rajanpur</option>
                                                    <option value="Rani Pur" shippingcityid="293">Rani Pur</option>
                                                    <option value="Rawala Kot" shippingcityid="123">Rawala Kot</option>
                                                    <option value="Rawat" shippingcityid="161">Rawat</option>
                                                    <option value="Renala Khurd" shippingcityid="257">Renala Khurd</option>
                                                    <option value="Sadiqabad" shippingcityid="33">Sadiqabad</option>
                                                    <option value="Sahiwal" shippingcityid="66">Sahiwal</option>
                                                    <option value="Sahowala" shippingcityid="251">Sahowala</option>
                                                    <option value="Saidu Sharif" shippingcityid="97">Saidu Sharif</option>
                                                    <option value="Sakrand" shippingcityid="246">Sakrand</option>
                                                    <option value="Sambrial" shippingcityid="247">Sambrial</option>
                                                    <option value="Samundri" shippingcityid="244">Samundri</option>
                                                    <option value="Sanghar" shippingcityid="67">Sanghar</option>
                                                    <option value="Sanghi" shippingcityid="248">Sanghi</option>
                                                    <option value="Sangla Hill" shippingcityid="169">Sangla Hill</option>
                                                    <option value="Sargodha" shippingcityid="15">Sargodha</option>
                                                    <option value="Serai" shippingcityid="4">Serai</option>
                                                    <option value="Shadiwal" shippingcityid="249">Shadiwal</option>
                                                    <option value="Shahdad Kot" shippingcityid="42">Shahdad Kot</option>
                                                    <option value="Shahdad Pur" shippingcityid="261">Shahdad Pur</option>
                                                    <option value="Shakargarh" shippingcityid="294">Shakargarh</option>
                                                    <option value="Sheikhupura" shippingcityid="19">Sheikhupura</option>
                                                    <option value="Sher Shah" shippingcityid="242">Sher Shah</option>
                                                    <option value="Shikarpur" shippingcityid="87">Shikarpur</option>
                                                    <option value="Shinkiari" shippingcityid="300">Shinkiari</option>
                                                    <option value="Shor Kot" shippingcityid="171">Shor Kot</option>
                                                    <option value="Shujabad" shippingcityid="245">Shujabad</option>
                                                    <option value="Sialkot City" shippingcityid="16">Sialkot City</option>
                                                    <option value="Sibi" shippingcityid="116">Sibi</option>
                                                    <option value="skardu" shippingcityid="283">skardu</option>
                                                    <option value="Sohawa" shippingcityid="250">Sohawa</option>
                                                    <option value="Sujawal" shippingcityid="145">Sujawal</option>
                                                    <option value="Sukkur" shippingcityid="17">Sukkur</option>
                                                    <option value="Sunder Adda" shippingcityid="243">Sunder Adda</option>
                                                    <option value="Swabi" shippingcityid="124">Swabi</option>
                                                    <option value="Swat" shippingcityid="150">Swat</option>
                                                    <option value="Takhat Bai" shippingcityid="303">Takhat Bai</option>
                                                    <option value="Takht E Bhai" shippingcityid="252">Takht E Bhai</option>
                                                    <option value="Talagang" shippingcityid="139">Talagang</option>
                                                    <option value="Tall" shippingcityid="301">Tall</option>
                                                    <option value="Tando Adam" shippingcityid="173">Tando Adam</option>
                                                    <option value="Tando Allahyar" shippingcityid="54">Tando Allahyar</option>
                                                    <option value="Tando Jam" shippingcityid="172">Tando Jam</option>
                                                    <option value="Tando Muhammad Khan" shippingcityid="121">Tando Muhammad Khan</option>
                                                    <option value="Tank" shippingcityid="84">Tank</option>
                                                    <option value="Tarbela" shippingcityid="186">Tarbela</option>
                                                    <option value="Tarnol" shippingcityid="253">Tarnol</option>
                                                    <option value="Taxila" shippingcityid="131">Taxila</option>
                                                    <option value="Tharparkar" shippingcityid="278">Tharparkar</option>
                                                    <option value="Thatta" shippingcityid="48">Thatta</option>
                                                    <option value="Timargara" shippingcityid="106">Timargara</option>
                                                    <option value="Toba Tek Singh" shippingcityid="101">Toba Tek Singh</option>
                                                    <option value="Topi" shippingcityid="304">Topi</option>
                                                    <option value="Turbat" shippingcityid="34">Turbat</option>
                                                    <option value="Umarkot" shippingcityid="104">Umarkot</option>
                                                    <option value="Upper Dir" shippingcityid="120">Upper Dir</option>
                                                    <option value="Uthal" shippingcityid="58">Uthal</option>
                                                    <option value="Vihari" shippingcityid="96">Vihari</option>
                                                    <option value="Wah Cantt" shippingcityid="133">Wah Cantt</option>
                                                    <option value="Wazirabad" shippingcityid="166">Wazirabad</option>
                                                    <option value="Zafarwal" shippingcityid="134">Zafarwal</option>
                                                    <option value="Zhob" shippingcityid="37">Zhob</option>
                                                    <option value="Ziarat" shippingcityid="52">Ziarat</option>
                                                    <option value="other">Other</option>
                                                </select>
                                                <label>City*</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-float-label">
                                                <input name="nickname" type="text" placeholder="Pet Nickname" class="form-control">
                                                <label>Pet Nickname</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 city_other_wrap">
                                            <div class="form-group has-float-label">
                                                <input name="city_other" type="text" placeholder="City Name" class="form-control city_other" value="">
                                                <label>Other City Name*</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group has-float-label">
                                                <input name="address" type="text" placeholder="Address" class="form-control" required="" value="">
                                                <label>Address*</label>
                                            </div>
                                        </div>


                                        <!--                        <div class="col-md-12">
                                                    <div class="form-group checkboxes">
                                                        <label class="custom-checkbox dark font-size-sm">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                            <span class="text text-capitalize">Receive SMS Updates (optional)</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group checkboxes">
                                                        <label class="custom-checkbox dark font-size-sm">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                            <span class="text text-capitalize">Create an account ?</span>
                                                        </label>
                                                    </div>
                                                </div>-->
                                        <div class="col-md-12">
                                            <h4 class="form-title">Additional information</h4>
                                            <div class="form-group has-float-label">
                                                <textarea type="text" name="additional_info" class="form-control" row="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-box">
                                    <div class="order-summary-box">
                                        <div class="osb-inner-box">
                                            <h4>Summary</h4>
                                            <ul class="items-list">
                                                <li>
                                                    <div class="item">Subtotal (<span id="totalItems">0</span> items)</div>
                                                    <div class="item price-box"> PKR <span id="price-total" style="font-size: 16px;">13,000.00</span></div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="osb-inner-box">
                                            <h4>Payment Type</h4>
                                            <ul class="items-list">

                                                <li>
                                                    <div style="padding: 2px 0px;">
                                                        <div class="form-group checkboxes">
                                                            <label class="custom-checkbox dark font-size-sm">
                                                                <input type="radio" checked="" class="payment_type" name="payment_type" value="manual">
                                                                <span class="checkmark"></span>
                                                                <span class="text text-capitalize">Cash On Delivery</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                    <div style="padding: 2px 0px;">
                                                        <div class="form-group checkboxes">
                                                            <label class="custom-checkbox dark font-size-sm">
                                                                <input type="radio" class="payment_type" name="payment_type" value="stripe">
                                                                <span class="checkmark"></span>
                                                                <span class="text text-capitalize">Card Payment</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                    <div style="padding: 2px 0px; display: none;">
                                                        <div class="form-group checkboxes">
                                                            <label class="custom-checkbox dark font-size-sm">
                                                                <input type="radio" disabled="" class="payment_type" name="payment_type" value="Credit/Debit Card">
                                                                <span class="checkmark"></span>
                                                                <span class="text text-capitalize">Credit/Debit Card</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </li>

                                            </ul>

                                        </div>

                                        <div class="osb-inner-box" id="shipping-box" style="display: none">
                                            <h4>Shipping Method</h4>
                                            <ul class="items-list" id="shipping-options">

                                            </ul>
                                        </div>


                                        <div class="osb-inner-box">
                                            <ul class="items-list" style="display: none;">
                                                <li>
                                                    <div class="item">Subtotal</div>
                                                    <div class="item"><span>PKR</span>&nbsp;<span id="subtotal">13,000.00</span></div>
                                                </li>
                                                <li class="test_class">
                                                    <div class="item">Shipping &amp; Sales Tax</div>
                                                    <div class="item"><span>PKR</span>&nbsp;<span id="shipping_cost">0.00</span></div>
                                                </li>


                                            </ul>
                                            <!----------Stripe-------------------->
                                            <div class="stripe-box" style="margin-bottom: 1rem;">
                                                <h4 style="margin:1em 0;">Pay with your Card</h4>
                                                <div id="card-element">
                                                    <!-- Stripe Payment Element will be inserted here -->
                                                </div>


                                                <div id="error-message" style="color:red;font-size:13px;margin-top:3px;"></div>
                                            </div>

                                            <!-----Stripe end--->
                                            <ul class="items-list total">
                                                <li>
                                                    <div class="item">Total</div>
                                                    <div class="item price-box"><span>PKR</span>&nbsp;<span id="total_price">13000.00</span></div>
                                                </li>
                                                <span id="total_price_holder" style="display: none">13000.00</span>
                                                <span id="donation_amount_holder" style="display: none">0</span>

                                            </ul>
                                        </div>
                                        <div class="osb-inner-box total-box">
                                            <!-- <h4>Payment Method</h4>
                            <ul class="payment-method-list">
                                <li>
                                    <label class="payment-method-checkbox">
                                        <input type="radio" name="payment" value="manual" checked="">
                                        <span><img src="img/cash-on-delivery.jpg" alt="Cash on delivery"></span>
                                        <i>Cash on delivery</i>
                                    </label>
                                </li>
                                <li>
                                    <label class="payment-method-checkbox">
                                        <input type="radio" name="payment" value="manual" disabled="">
                                        <span><img src="img/tameer-bank.jpg" alt="Coming Soon"></span>
                                        <i>Coming Soon</i>
                                    </label>
                                </li>
                            </ul> -->
                                            <div class="form-group checkboxes agree-box">
                                                <label class="custom-checkbox dark font-size-sm">
                                                    <input type="checkbox" name="agree" value="Yes, I agree to the TERM &amp; CONDITIONS *" required="required">
                                                    <span class="checkmark"></span>
                                                    <span class="text text-capitalize">Yes, I agree to the TERM &amp; CONDITIONS <sup>*</sup></span>
                                                    <br>
                                                </label>
                                            </div>
                                            <div class="form-group">

                                                <input type="hidden" name="shipping_cost" value="0">

                                                <button type="submit" class="btn btn-callGreen btn-block text-uppercase placeOrderBtn" id="submit" data-goto-next-step="true">Place Order</button>
                                            </div>
                                        </div>
                                    </div>





                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>



            <input type="hidden" name="referanceNumber" value="9159">


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