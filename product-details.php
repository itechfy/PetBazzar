<?php
session_start();
if (isset($_SESSION['confirmed']) === 0) {
    session_destroy();
    header("Location: login.php?verifyNow=true");
} else {
    if (isset($_GET['product_id'])) {
        require_once "connect.php";
        $productId = $_GET['product_id'];
        $sql = "SELECT * FROM products WHERE id = $productId ORDER BY id DESC LIMIT 1";

        $result = mysqli_query($conn, $sql);
        if (!empty($result)) {
            while ($row = mysqli_fetch_array($result)) {
                $product_id = $row['id'];
                $product_name = $row['product_name'];
                $product_for = $row['product_for'];
                $category = $row['category'];
                $price = $row['price'];
                $product_img = 'admin/pages/images/products/' . $row['image'];
            }
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
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="https://www.agentpet.com/js/smartbanner.js"></script>
            <script type="text/javascript">
                $(function() {
                    $.smartbanner({
                        daysHidden: 0
                    });
                });
            </script>

            <!-- Facebook Pixel Code -->
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
                    }
                })
                var addToCart = function() {
                    const cardSide = document.getElementById('ajax_cart_html')
                    const quantity = document.getElementById('quantity')
                    let val = quantity.value
                    let price = 0
                    let isExists = false
                    //check if product is already in cart, then only change quantity
                    if (productArr1) {
                        for (let i = 0; i < productArr1.length; i++) {

                            if (productArr1[i]['productId'] === <?php echo $product_id; ?>) {
                                isExists = true
                                val = Number(productArr1[i]['productQuantity']) + Number(quantity.value)
                                productArr1[i]['productQuantity'] = val
                                price = Number(productArr1[i]['productPrice']) * val
                                document.getElementById('sub_total').innerText = price

                                //adding animations
                                $(".cart-box").addClass('animated shake');
                                $("#toastermsg").html("Product added successfully!");
                                $(".toaster-notification").addClass('active');
                                setTimeout(function() {
                                    $(".toaster-notification").removeClass('active');
                                    $(".cart-box").removeClass('animated shake');
                                }, 1500)

                                break;
                            }
                        }
                    }
                    if (!isExists) {
                        const product = {
                            "productId": <?php echo $product_id; ?>,
                            "productName": '<?php echo $product_name; ?>',
                            "productImage": '<?php echo $product_img; ?>',
                            "productPrice": '<?php echo $price; ?>',
                            "productQuantity": quantity.value
                        };
                        productArr1.push(product)

                        const productToPush = `<div class="card p-card-landscape e-card-landscape">
                    <div class="card-body">
                        <div class="media">
                        <a item_id="${product['productId']}" id="cart_item_remove_btn" onclick="refresh(${product['productId']})" class="btn btn-link remove-btn">
                        <i class="fas fa-times"></i>
                        </a>
                        <div class="img-box">
                        
                                <img class="card-img-top" src="${product['productImage']}" alt="${product['productName']}">
                                </div>
                                
                                <div class="media-body">
                                <p class="card-title mb-0" href="#">${product['productName']}</p>
                                <div class="price">
                                    <div>
                                    <span><span id="p-qty${product['productId']}">${product['productQuantity']}</span> X PKR</span> <span id="p-price${product['productId']}">${product['productPrice']}</span>
                                    </div>
                                    </div>
                                    
                                    </div>
                                    </div>
                                    </div>
                                    </div>`;

                        if (productToPush !== null)
                            cardSide.insertAdjacentHTML('beforebegin', productToPush)


                        $(".cart-box").addClass('animated shake');
                        $("#toastermsg").html("Product added successfully!");
                        $(".toaster-notification").addClass('active');
                        setTimeout(function() {
                            $(".toaster-notification").removeClass('active');
                            $(".cart-box").removeClass('animated shake');
                        }, 1500)


                    } else {
                        document.getElementById(`p-qty<?php echo $product_id; ?>`).innerText = val
                        document.getElementById(`p-price<?php echo $product_id; ?>`).innerText = price
                    }
                    cartCounter += Number(quantity.value)
                    document.getElementById('cartCounter').innerText = cartCounter
                    localStorage.setItem("productsList", JSON.stringify(productArr1))
                }
            </script>

            <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=444521129727368&ev=PageView&noscript=1" /></noscript>
            <!-- End Facebook Pixel Code -->

            <!-- Google Tag Manager -->
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
            <!-- End Google Tag Manager -->

        </head>

        <body>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSL4Q2K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->


            <noscript>
                <p class="alert alert-danger">
                    You need to turn on your javascript. Some functionality will not work if this is disabled.
                    <a href="https://www.enable-javascript.com/" target="_blank">Read more</a>
                </p>
            </noscript>
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

                <div class="container product">
                    <div class="box no-border" id="jazzCashValidationErrorsDiv" style="display: none;">
                        <div class="box-tools">
                            <p class="alert alert-warning alert-dismissible">
                                <span id="jazzCashValidationErrorsMsg"></span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>
                    <div class="detail-page e-detail-page">

                        <div class="detail-box">
                            <div class="detail-box-body" style="padding-top: 4rem;">
                                <div class="left-box">
                                    <div class="product-slider">
                                        <div class="text-center product-image-loader">
                                            <div class="lds-ellipsis">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <!-- Swiper -->
                                        <div class="gallery-top">
                                            <li>
                                                <div>
                                                    <img src=<?php echo $product_img; ?> alt=<?php echo $product_name; ?> />
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <img src=<?php echo $product_img; ?> alt=<?php echo $product_name; ?> />
                                                </div>
                                            </li>


                                        </div>
                                        <div class="gallery-thumbs-box">
                                            <div class="gallery-thumbs">
                                                <li>
                                                    <div class="slick-slide-inner">
                                                        <img src=<?php echo $product_img; ?> alt=<?php echo $product_name; ?> />
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="slick-slide-inner">
                                                        <img src=<?php echo $product_img; ?> alt=<?php echo $product_name; ?> />
                                                    </div>
                                                </li>
                                            </div>
                                            <div class="total-slides"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="right-box">
                                    <div class="detail-box-header">
                                        <div class="detail-box-sub-header">
                                            <h2 class="product-name"><?php echo $product_name; ?></h2>
                                            <div class="price-box">
                                            </div>
                                        </div>
                                        <div class="footer-box">
                                            <ul class="buttons-list">
                                                <li class="mr-auto">
                                                    <div class="price-box">
                                                        <p class="price">
                                                            <span>PKR</span>
                                                            <?php echo $price; ?>
                                                        </p>
                                                        <!--                                                                                 <p class="price"><span>PKR</span> 1600.00</p>
                                                                             -->

                                                    </div>
                                                </li>
                                                <li>
                                                <li>
                                                    <div class="dropdown share_dropdown">
                                                        <button class="btn btn-link btn-border-icon" type="button" data-toggle="dropdown">
                                                            <div class="icon-box">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" viewBox="0 0 19 21">
                                                                    <path class="cls-1" d="M1041.83,640.844a3.037,3.037,0,0,0-2.06.81l-7.53-4.374a2.777,2.777,0,0,0,0-1.477l7.44-4.332a3.157,3.157,0,1,0-1.01-2.31,3.626,3.626,0,0,0,.09.739l-7.44,4.335a3.161,3.161,0,1,0,0,4.616l7.51,4.382a3.171,3.171,0,0,0-.08.688A3.08,3.08,0,1,0,1041.83,640.844Z" transform="translate(-1026 -626)" />
                                                                </svg>
                                                            </div>
                                                            <span>Share</span>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=1793785197341700&display=popup&redirect_uri=https://www.agentpet.com/pet-store/birbo-premium-dog-food-1kg-758&href=https://www.agentpet.com/pet-store/birbo-premium-dog-food-1kg-758" class="btn btn-block btn-facebook">
                                                                <i class="fab fa-facebook-f"></i>
                                                                &nbsp;
                                                                Share
                                                            </a>
                                                            <a target="_blank" href="https://twitter.com/share?url=https://www.agentpet.com/pet-store/birbo-premium-dog-food-1kg-758" class="btn btn-block btn-twitter">
                                                                <i class="fab fa-twitter"></i>
                                                                &nbsp;
                                                                Tweet
                                                            </a>
                                                            <a target="_blank" href="https://web.whatsapp.com/send?text=https%3A%2F%2Fwww.agentpet.com%2Fpet-store%2Fbirbo-premium-dog-food-1kg-758" data-action="share/whatsapp/share" class="btn btn-block btn-success">
                                                                <i class="fab fa-whatsapp"></i>
                                                                &nbsp;
                                                                Whatsapp
                                                            </a>


                                                        </div>
                                                    </div>
                                                </li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="detail-box-form">

                                        <form action="https://www.agentpet.com/cart" method="post" class="add-to-cart-form">
                                            <div class="row">
                                                <input type="hidden" name="_token" value="PR4FenaT97KybbVGRikeiGSzR74KPcFAyWos3KxZ">


                                                <div class="col-lg-7">
                                                    <div id="add-to-cart-option">
                                                        <div class="form-group mb-0">
                                                            <div class="quantity-box-main">
                                                                <div class="input-group quantity-box">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="quantity-left-minus btn btn-number" data-type="minus" data-field="quantity">
                                                                            <span class="fas fa-minus"></span>
                                                                        </button>
                                                                    </span>
                                                                    <input type="number" min='1' id="quantity" name="quantity" class="form-control input-number quantity" value="1" min="1" max="100" value="">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="quantity">
                                                                            <span class="fas fa-plus"></span>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                                <input type="hidden" name="product" value="758" />

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <a href="#" class="btn btn-callGreen btn-block btn-call mt-3" id="add_to_card" style="color:white;" onclick="addToCart()">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19">
                                                                            <path id="Forma_1" data-name="Forma 1" class="cls-1" d="M1300.92,189.947v4.46a3.6,3.6,0,0,1-3.6,3.593h-9.64a3.6,3.6,0,0,1-3.6-3.593v-4.46a2.729,2.729,0,0,1,.66-5.38h2.08c0.49-.909,1.31-2.441,1.96-3.647,1.03-1.654,1.14-1.921,2.22-1.921h4a3.575,3.575,0,0,1,1.78,1.937c0.56,1.156,1.3,2.669,1.77,3.631h1.71A2.729,2.729,0,0,1,1300.92,189.947Zm-5.13-8.827a1.9,1.9,0,0,0-1.82-1.121h-1.91a2.3,2.3,0,0,0-2.2,1.024c-0.53.991-1.33,2.485-1.9,3.544h9.5C1296.97,183.546,1296.3,182.183,1295.79,181.12Zm4.47,4.884h-2.09l-0.01,0v0h-13.42a1.294,1.294,0,1,0,0,2.587h0.07a0.688,0.688,0,0,1,.52.233,0.762,0.762,0,0,1,.19.548v5.035a2.16,2.16,0,0,0,2.16,2.155h9.64a2.16,2.16,0,0,0,2.16-2.155v-5.035a0.782,0.782,0,0,1,.19-0.548,0.688,0.688,0,0,1,.52-0.233h0.07A1.294,1.294,0,1,0,1300.26,186Zm-3.72,8.482a0.718,0.718,0,0,1-.72-0.719v-3.1a0.72,0.72,0,0,1,1.44,0v3.1A0.718,0.718,0,0,1,1296.54,194.486Zm-4.04,0a0.718,0.718,0,0,1-.72-0.719v-3.1a0.72,0.72,0,0,1,1.44,0v3.1A0.718,0.718,0,0,1,1292.5,194.486Zm-4.04,0a0.718,0.718,0,0,1-.72-0.719v-3.1a0.72,0.72,0,0,1,1.44,0v3.1A0.718,0.718,0,0,1,1288.46,194.486Z" transform="translate(-1282 -179)"></path>
                                                                        </svg>
                                                                        Add to Cart
                                                                    </a>
                                                                </div>
                                                                <div class="col">
                                                                    <a type="submit" href="buyNow.php?id=<?php if (isset($_GET['product_id'])) {
                                                                                                                echo $_GET['product_id'];
                                                                                                            } ?>" class="btn btn-danger btn-block btn-call text-center mt-3 buy_now" style="color:white;" name="buy_now" value="Buy Now">
                                                                        Buy Now
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>



                                    </div>
                                    <div class="pet-features-box mb-0">
                                        <ul class="features-list two-col">
                                            <li>
                                                <span>Product Code: </span>
                                                <span>090-002</span>
                                            </li>
                                            <!--                        <li>
                                                    <span>Color</span>
                                                    <span>Red, Black, Blue</span>
                                                </li>-->
                                            <li id="product_quantity_details_li">
                                                <span>Availablity</span>
                                                <span class="text-success">In Stock : 90</span>
                                            </li>

                                            <li>
                                                <span>Standard shipping time</span>
                                                <span>2-4 days</span>
                                            </li>
                                            <!--                        <li>
                            <span>Standard shipping cost</span>
                            <span>PKR 0</span>
                        </li>-->
                                            <li>
                                                <span>Fast shipping time</span>
                                                <span>1-2 days</span>
                                            </li>
                                            <!--                        <li>
                            <span>Fast shipping cost</span>
                            <span>PKR 0</span>
                        </li>-->


                                            <li>
                                                <span>Warranty</span>
                                                <span>100% Authentic</span>
                                            </li>
                                            <li>
                                                <span>Return</span>
                                                <span>7 Days return <br><small>Change of mind not applicable</small></span>

                                            </li>
                                            <li>
                                                <span>Payment Type</span>
                                                <span>Any</span>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="details-tabs-section">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="pet-features-box shadow-box">
                                            <h5>Features</h5>
                                            <br>
                                            <ul>
                                                <li>At this stage of life, the need for nutrients and energy is huge. Quality ingredients, proteins, vitamins and minerals for proper development of muscle mass and bones.</li>
                                                <li>Contains powdered milk, source of calcium for the development of teeth, healthy bones and a special flavor as a plus. It contains extract of Yucca Schidigera that acts at the intestinal level reducing the odor of feces.</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#"> <img style=" margin-top: 10px;" src="img/banners/productad.png" width="100%" height="100%"></a>
                        </div>



                    </div>


                </div>
                <div class="toaster-notification">
                    <div id="toastermsg" class="alert fade show" role="alert">
                        Product added successfully!
                    </div>
                </div>
                <!-- <script>
            $(document).ready(function() {
                $(document).on("submit", "form.add-to-cart-form", function(e) {
                    var form = $(this);
                    var buy_now = $(document.activeElement).val();
                    if (buy_now == "Buy Now") {
                        return true;
                    }
                    e.preventDefault();

                    var url = "https://www.agentpet.com/ajax_store";

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
        </script> -->





            </div>

            <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://www.agentpet.com/js/vendors/slick.min.js"></script>
            <script src="https://www.agentpet.com/js/vendors/wow.min.js"></script>
            <script src="https://www.agentpet.com/js/vendors/jquery.mCustomScrollbar.min.js"></script>
            <script src="https://www.agentpet.com/js/vendors/bootstrap-datepicker.min.js"></script>
            <script src="https://www.agentpet.com/js/app.js"></script>
            <!-- <script>
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
                var params = localStorage.getItem("agentpet-store-filters" + currentpath);
                if (currentpath.indexOf("/new-arrivals") >= 0) {
                    params = updateQueryStringParameter(params, "order_by", "desc");
                    val = $('#search_term').val();
                    url = 'https://www.agentpet.com/pet-store/new-arrivals?search_term=' + val
                    // url = 'https://www.agentpet.com/pet-store/new-arrivals'
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
                if (currentpath.indexOf("-accessories") >= 0) {
                    params = updateQueryStringParameter(params, "category", "Pet Accessories");
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
                localStorage.setItem("agentpet-store-filters" + window.location.pathname, params);
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
                url: 'https://www.agentpet.com/ajax-product-list?' + params,
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
    </script> -->
            <link rel="stylesheet" href="../css/vendors/bootstrap-slider.css">
            <script src="../js/vendors/bootstrap-slider.js"></script>
            <script src="https://www.agentpet.com/js/vendors/jquery.mCustomScrollbar.min.js"></script>
            <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCk4TfXe2pdQTfzkvPO27NIc1U1O3c1ZoY&callback=initMap"
async defer></script>-->
            <script src="https://www.agentpet.com/js/vendors/jquery.zoom.min.js"></script>

            <script>
                $(document).ready(function() {

                    $("#productAttribute").on("change", function() {
                        var attribute_id = $(this).val();
                        $.ajax({
                            type: "GET",
                            url: 'https://www.agentpet.com/product-attribute-quantity?attribute_id=' + attribute_id,
                            success: function(data) {

                                $('#add-to-cart-option').html(data.addToCartOption);
                                $('#product_quantity_details_li').html(data.stokeDetails);

                            },
                            error: function() {
                                alert('Error occured, refresh page');
                            }
                        });

                    });

                    $(".comments-box-list").mCustomScrollbar();

                    galleryTop = $('.gallery-top');
                    galleryTop.on('init', function(slick) {
                        $(this).parents(".product-slider").addClass("intialized");
                        galleryTop.find(".slick-slide").each(function(index, value) {
                            $(this).zoom({
                                url: $(this).find('img').attr('src'),
                                callback: function() {
                                    $(".zoomImg").attr('alt', 'Birbo Premium Dog Food 1kg - Pet Food - Food Store - Pet supplies');

                                },
                                onZoomIn: function() {
                                    $(".zoomImg").attr('alt', $(this).find('img').attr('alt'));

                                }
                            });
                        });
                    })
                    galleryTop.slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        infinite: false,
                        asNavFor: '.gallery-thumbs'
                    });

                    galleryThumbsBox = $('.gallery-thumbs-box');
                    galleryThumbsTotalSlides = $('.gallery-thumbs-box .total-slides');
                    galleryThumbs = $('.gallery-thumbs');
                    slidesShow = 4;
                    galleryThumbs.on('init', function(event, slick) {
                        galleryThumbsTotalSlides.text('+' + (slick.slideCount - slidesShow));
                        if ((slick.slideCount - slidesShow) <= 0) {
                            galleryThumbsTotalSlides.hide();
                        }
                        $(this).parents(".product-slider").addClass("intialized");

                    });
                    galleryThumbs.slick({
                        slidesToShow: slidesShow,
                        slidesToScroll: 1,
                        asNavFor: '.gallery-top',
                        dots: false,
                        centerMode: false,
                        focusOnSelect: true,
                        arrows: false,
                    });

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

                    var flashDealsSliderComponent = ".flash-deals-slider";
                    var flashDealsSliderComponent = $(flashDealsSliderComponent).slick({
                        autoplay: true,
                        infinite: true,
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        nextArrow: ".flash-deals-slick-next",
                        prevArrow: ".flash-deals-slick-prev",
                        responsive: [{
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 3
                                }
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    slidesToShow: 2
                                }
                            },
                            {
                                breakpoint: 550,
                                settings: {
                                    slidesToShow: 1
                                }
                            }
                        ]
                    });

                    $("[data-target]").on("click", function() {
                        setTimeout(function() {
                            var rating_slider = $('#rating-slider').slider('relayout');
                            rating_slider.on("change", function(slideEvt) {
                                $(".emotions-box-header .emotion-star-img").removeClass('active');
                                $(".emotions-box-header .emotion-star-img[data-emotions-value=" + slideEvt.value.newValue + "]").addClass("active");
                            });
                        }, 200);

                    });
                    $("#order_by").on("change", function() {
                        updateQueryStringParameter('https://www.agentpet.com/pet-store/birbo-premium-dog-food-1kg-758', 'order_by', $(this).val());

                    });

                    function updateQueryStringParameter(baseURL, key, value) {

                        var queryString = location.search.substring(1)
                        var params = "";
                        if (key != undefined && key.length > 0) {
                            var queryParameters = {},
                                re = /([^&=]+)=([^&]*)/g,
                                m;

                            // Creates a map with the query string parameters
                            queryString = queryString.replace("+", " ");
                            while (m = re.exec(queryString)) {

                                queryParameters[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
                            }

                            // Add new parameters or update existing ones
                            queryParameters[key] = value;
                            console.log(key);
                            console.log(value);
                            params = "?" + $.param(queryParameters);
                        } else {
                            params = "?" + queryString;
                        }
                        window.location = baseURL + params;
                        //window.history.pushState(null, '', baseURL + params);
                    }
                });
            </script>
            <div class="modal fade login-modal" id="emailModal">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 767px;">
                    <div class="modal-content">

                        <!-- Modal body -->
                        <div class="modal-body">
                            <button type="button" class="close btn btn-primary" data-dismiss="modal">&times;</button>
                            <div class="form-box">
                                <form id="email-form" method="POST" action="https://www.agentpet.com/send-email">
                                    <input type="hidden" name="_token" value="PR4FenaT97KybbVGRikeiGSzR74KPcFAyWos3KxZ"> <input type="hidden" name="redirect_to" value="https://www.agentpet.com/pet-store/birbo-premium-dog-food-1kg-category-pet-food-type-dog-758">
                                    <input type="hidden" id="share_link" name="share_link" value="">
                                    <div class="form-group has-float-label">
                                        <input type="email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" placeholder="Friend Email" class="form-control" name="friend_email" required="">
                                        <label>Friend Email</label>
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="8" id="description" class="form-control" name="description" required="">Hi,
I would like to invite you to Agentpet:
[link]

Thanks
                            </textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block text-uppercase" id="send-email-btn">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <script src="js/app.js"></script>

            <script>
                $(document).ready(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $(document).on("click", ".save-add", function() {
                        var current_save = $(this);
                        $.ajax({
                            type: "POST",
                            url: 'https://www.agentpet.com/save-ad',
                            data: {
                                'user_id': $(this).attr("user_id"),
                                'pet_id': $(this).attr("pet_id")
                            },
                            success: function(response) {
                                if (response == "saved") {
                                    current_save.addClass("active");
                                } else {
                                    current_save.removeClass("active");
                                }
                            },
                            error: function() {
                                alert('Error occured');
                            }
                        });


                    });
                    $(document).on("click", ".save-product", function() {
                        var current_save = $(this);
                        $.ajax({
                            type: "POST",
                            url: 'https://www.agentpet.com/save-product',
                            data: {
                                'user_id': $(this).attr("user_id"),
                                'product_id': $(this).attr("product_id")
                            },
                            success: function(response) {
                                if (response == "saved") {
                                    current_save.addClass("active");
                                } else {
                                    current_save.removeClass("active");
                                }
                            },
                            error: function() {
                                alert('Error occured');
                            }
                        });


                    });
                    $('#emailModal').on('shown.bs.modal', function(event) {
                        $("#share_link").val($(event.relatedTarget).attr("page_link"));
                        $("input[name=friend_email]").val("");
                    });
                });
            </script>

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80721126-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-80721126-1');
            </script>

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
                        var params = localStorage.getItem("agentpet-store-filters" + currentpath);
                        if (currentpath.indexOf("/new-arrivals") >= 0) {
                            params = updateQueryStringParameter(params, "order_by", "desc");
                            val = $('#search_term').val();
                            url = 'https://www.agentpet.com/pet-store/new-arrivals?search_term=' + val
                            // url = 'https://www.agentpet.com/pet-store/new-arrivals'
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
                        if (currentpath.indexOf("-accessories") >= 0) {
                            params = updateQueryStringParameter(params, "category", "Pet Accessories");
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
                        if (currentpath.indexOf("/pet-store") >= 0) {
                            params = updateQueryStringParameter('page=1', "", "");
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
                        localStorage.setItem("agentpet-store-filters" + window.location.pathname, params);
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
                        url: 'https://www.agentpet.com/ajax-product-list?' + params,
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

                function filterPets() {
                    val = $('#search_term').val();
                    url = 'https://www.agentpet.com/pet-store/new-arrivals?search_term=' + val
                    window.location.href = url;
                }

                function updateQueryStringParameter(queryString, key, value) {
                    console.log(queryString);
                    if (queryString == null) {
                        queryString = 'page=1';
                    }
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




            <div class="icon-box">

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                <a href="https://api.whatsapp.com/send?phone=+923041116369&text=&source=&data=" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

            </div>

        </body>

        </html>
<?php
    }
    echo "No Product Details to show!";
}
?>