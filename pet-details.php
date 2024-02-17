<?php
session_start();

require_once "connect.php";
if (isset($_GET['pet_id'])) {
    $pet_id = $_GET['pet_id'];
    $result = mysqli_query($conn, "SELECT * FROM pets WHERE pet_id = '" . $pet_id . "' LIMIT 1");
    if (!empty($result)) {
        while ($row = mysqli_fetch_array($result)) {
            $pet_id = $row['pet_id'];
            $user_id = $row['user_id'];
            $img = json_decode($row['img']);
            $ttle = $row['ttle'];
            $price = $row['price'];
            $locat = $row['locat'];
            $descr = $row['descr'];
            $cate = $row['cate'];
            $clr = $row['clr'];
            $breed = $row['breed'];
            $gender = $row['gender'];
            $age = $row['age'];
            $comment = $row['comment'];
            $timestmp = $row['timestmp'];
            $contact = $row['contact'];
            $history = $row['history'];
            $result1 = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '" . $user_id . "'");
            if (!empty($result1)) {
                while ($row1 = mysqli_fetch_array($result1)) {
                    $fname = $row1['fname'];
                    $profilePicture = $row1['profilePicture'];
?>

                    <!DOCTYPE html>
                    <html lang="en">

                    <head>

                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5273894608737898" crossorigin="anonymous"></script>
                        <title>
                            <?php echo $ttle; ?> - <?php echo $cate; ?> - Pet For Sale in Islamabad/Rawalpindi | Pets Online Store | petbazzar.com </title>
                        <!--<meta name="keywords" content="Puppies for sale, dogs for adoption, pets for sale, Small dogs for sale, pet community in Islamabad/Rawalpindi, pet animals, Buy online pets in Islamabad/Rawalpindi, Buy online fishes, online pet shop in Islamabad/Rawalpindi, Islamabad/Rawalpindi's Pets Portal, Pet Classified ads, Dogs, Cats, Vets, Pets, birds, animals.">-->
                        <meta name="description" content="Buy & Sell all Pets Online  in all The Major Cities of Islamabad/Rawalpindi. Find Dogs,Cats, Fish, Birds for Sale in Rawalpindi & Islamabad. Visit petbazzar.com">
                        <meta name="google-site-verification" content="upziuH58cfe8wNxBaPZKRorLUiAwG6drISPu1E0fAZI" />





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
                        <!-- Link Swiper's CSS -->
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

                        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32..png">
                        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16.png">
                        <meta property="og:url" content="index.php" />
                        <meta property="og:type" content="home" />
                        <meta property="og:image" content="img/mini.png" />

                        <meta property="og:title" content="Pets For Sale in Islamabad/Rawalpindi | Pets Online Store | petbazzar.com" />
                        <meta property="og:description" content="Buy & Sell all Pets Online  in all The Major Cities of Islamabad/Rawalpindi. Find Dogs,Cats, Fish, Birds for Sale in Rawalpindi & Islamabad. Visit petbazzar.com" />
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
                                                    <img style="width: 25px;height: 25px;border-radius: 50%;" src="img/user.png" alt="">
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
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="pet-buy-sell.php">Buy/Sell <span class="sr-only">(current)</span></a>
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
                            <br><br><br><br><br>
                            <div class="container">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.php" title="Home">
                                                <img src="img/home-icon.png" alt="Home">
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="pet-buy-sell.php">
                                                Buy/Sell </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $ttle; ?></li>
                                    </ol>
                                </nav>
                            </div>

                            <style>
                                .viewmap {
                                    height: 0px !important;
                                    overflow-y: hidden
                                }
                            </style>
                            <div class="container detail-page">

                                <div class="detail-page">
                                    <?php
                                    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $user_id) {
                                        echo "";
                                    } else {
                                    ?>
                                        <div class="owner-info-header">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5><?php echo $fname; ?></h5>
                                                    <a href="#">More ads by <?php
                                                                            echo $fname; ?></a>
                                                </div>
                                                <div class="image-box">
                                                    <?php
                                                    if ($profilePicture !== '') {
                                                    ?>
                                                        <div style="margin:0 1rem;width:40px;height:40px; border-radius:50%; background:url('<?php echo $profilePicture ?>') no-repeat center; background-size:cover;"></div>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <img style="width: 25px;height: 25px;border-radius: 50%;" src="img/user.png" alt="">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="detail-box">
                                        <div class="detail-box-header">
                                            <div class="detail-box-sub-header">
                                                <h2 class="product-name"><?php echo $ttle; ?> <span style="font-size:13px; color:grey;">
                                                        <?php
                                                        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $user_id) {
                                                            echo "YOU POSTED THIS";
                                                        }
                                                        ?>
                                                    </span></h2>

                                                <div class="price-box">
                                                    <span>PKR</span> <?php echo $price; ?>
                                                </div>
                                            </div>
                                            <ul class="product-info-list">
                                                <li>
                                                    <img src="img/refresh-icon.svg" alt="Last Updated">
                                                    <span>Last Updated <?php echo $timestmp; ?></span>
                                                </li>
                                                <li>
                                                    <img src="img/map-with-marker-icon.svg" alt="Location">
                                                    <span><?php echo $locat; ?></span>
                                                </li>
                                                <li>
                                                    <img src="img/folder-icon.svg" alt="Folder">
                                                    <span>Ad Ref # <?php echo $pet_id; ?></span>
                                                </li>

                                            </ul>

                                            <div class="footer-box">
                                                <ul class="buttons-list"></ul>
                                                <?php
                                                if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $user_id) {
                                                    echo "";
                                                } else {
                                                ?>

                                                    <div class="row contact-action-btn">
                                                        <button class="btn btn-outline-titleColor btn-call" data-toggle="modal" data-target="#messageModal">
                                                            <img src="img/envelope-icon.svg" alt="Envelope">
                                                            Send a message
                                                        </button>
                                                        <a href="tel:<?php echo $contact; ?>" class="btn btn-callGreen btn-call" style="color:white;">
                                                            <img src="img/phone-icon.svg" alt="Phone">
                                                            <?php echo $contact; ?>
                                                        </a>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="detail-box-body">
                                            <div class="left-box">
                                                <!-- Swiper -->

                                                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                                                    <div class="swiper-wrapper">
                                                        <?php
                                                        for ($i = 0; $i < count($img); $i++) {
                                                        ?>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $img[$i] ?>" />
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                </div>
                                                <div thumbsSlider="" class="swiper mySwiper">
                                                    <div class="swiper-wrapper">
                                                        <?php
                                                        for ($i = 0; $i < count($img); $i++) {
                                                        ?>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $img[$i] ?>" />
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-box">
                                                <div class="pet-features-box shadow-box mb-0">
                                                    <h6 class="features-title text-primary">Pet Features</h6>
                                                    <ul class="features-list">
                                                        <li>
                                                            <span>Pet</span>
                                                            <span><?php echo $cate; ?></span>
                                                        </li>
                                                        <li>
                                                            <span>Breed</span>
                                                            <span><?php echo $breed; ?></span>
                                                        </li>
                                                        <li>
                                                            <span>Gender</span>
                                                            <span><?php echo $gender; ?></span>
                                                        </li>
                                                        <li>
                                                            <span>Color</span>
                                                            <span><?php echo $clr; ?></span>
                                                        </li>
                                                        <li>
                                                            <span>Age (In Days)</span>
                                                            <span> <?php echo $age; ?> </span>
                                                        </li>
                                                    </ul>
                                                    <br>
                                                    <h6 class="features-title text-primary">Description</h6>
                                                    <p class="">
                                                        <?php echo $descr; ?>
                                                    </p>
                                                    <br>
                                                    <h6 class="features-title text-primary">Pet History</h6>
                                                    <p class="">
                                                        <a href='viewhistory.php?pet_id=<?php echo $pet_id; ?>' class='btn btn-sm btn-outline-primary text-uppercase'>View History</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="modal fade login-modal" id="reportAdModal">
                            <div class="modal-dialog modal-dialog-centered" style="max-width: 767px;">
                                <div class="modal-content">

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <button type="button" class="close btn btn-primary" data-dismiss="modal">×</button>
                                        <div class="form-box">
                                            <h4 class="box-title font-sm text-primary">Thanks for reporting this ad</h4>
                                            <form id="report-form" action="report-ad" method="POST">
                                                <input type="hidden" name="_token" value="6KiJxYszQzOK7kguuCZK1sp5jguPnCgxRISn7xrt">
                                                <input type="hidden" name="pet_id" value="13476">
                                                <div class="form-group checkboxes">
                                                    <label class="custom-checkbox dark">
                                                        <input type="radio" name="description" value="Duplicate" checked="">
                                                        <span class="checkmark"></span>
                                                        <span class="text">Duplicate: There's already a listing posted just like this one.</span>
                                                    </label>
                                                </div>
                                                <div class="form-group checkboxes">
                                                    <label class="custom-checkbox dark">
                                                        <input type="radio" name="description" value="Spam">
                                                        <span class="checkmark"></span>
                                                        <span class="text">Spam: It's a Junk Ad.</span>
                                                    </label>
                                                </div>
                                                <div class="form-group checkboxes">
                                                    <label class="custom-checkbox dark">
                                                        <input type="radio" name="description" value="Wrong Contact Info">
                                                        <span class="checkmark"></span>
                                                        <span class="text">Wrong Contact Info: Contact info is incorrect.</span>
                                                    </label>
                                                </div>
                                                <div class="form-group checkboxes">
                                                    <label class="custom-checkbox dark">
                                                        <input type="radio" name="description" value="Sold Already">
                                                        <span class="checkmark"></span>
                                                        <span class="text">Sold Already: The seller has already sold this item.</span>
                                                    </label>
                                                </div>
                                                <div class="form-group checkboxes">
                                                    <label class="custom-checkbox dark">
                                                        <input type="radio" name="description" value="Fake Ads">
                                                        <span class="checkmark"></span>
                                                        <span class="text">Fake Ads: Fake phone number, item doesn't exist, false details etc.</span>
                                                    </label>
                                                </div>
                                                <div class="form-group checkboxes">
                                                    <label class="custom-checkbox dark">
                                                        <input type="radio" name="description" value="Wrong Category">
                                                        <span class="checkmark"></span>
                                                        <span class="text">Wrong Category: It doesn't belong in this category.</span>
                                                    </label>
                                                </div>
                                                <div class="form-group checkboxes">
                                                    <label class="custom-checkbox dark">
                                                        <input type="radio" name="description" value="Prohibited/Explicit Content">
                                                        <span class="checkmark"></span>
                                                        <span class="text">Prohibited/Explicit Content: It's got abusive language, explicit/adult content etc.</span>
                                                    </label>
                                                </div>
                                                <div class="form-group checkboxes">
                                                    <label class="custom-checkbox dark">
                                                        <input type="radio" name="description" value="Other">
                                                        <span class="checkmark"></span>
                                                        <span class="text">Other:</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <textarea id="custom-description" class="form-control" name="custom-description"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block text-uppercase" id="report-ad-btn">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade login-modal" id="messageModal">
                            <div class="modal-dialog modal-dialog-centered" style="max-width: 767px;">
                                <div class="modal-content">

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <button type="button" class="close btn btn-primary" data-dismiss="modal">×</button>
                                        <?php
                                        if (!isset($_SESSION['user_id'])) {
                                            echo '<h3>Please Login to send a message</h3>';
                                        } else {
                                        ?>
                                            <div class="form-box">
                                                <form method="POST" action="sendMessage.php">
                                                    <input type="hidden" name="send_to" value=<?php echo $user_id; ?>>

                                                    <input type="hidden" name="send_by" value=<?php
                                                                                                if (isset($_SESSION['user_id']) != "")
                                                                                                    echo $_SESSION['user_id'];
                                                                                                ?>>
                                                    <textarea placeholder="Type your Message..." name="chat_msg" id="chat" cols="30" style="resize:none; width:100%; border:1px solid #DFDFDF" required></textarea>
                                                    <br />
                                                    <button type="submit" name="send">Send</button>
                                                </form>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <!-- <div class="modal fade login-modal" id="editCommentModal">
                            <div class="modal-dialog modal-dialog-centered" style="max-width: 767px;">
                                <div class="modal-content">

                                   
                                    <div class="modal-body">
                                        <button type="button" class="close btn btn-primary" data-dismiss="modal">×</button>
                                        <div class="form-box">
                                            You must be logged in.
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> -->




                        <footer class="footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="logo-box">
                                            <img src="img/logo1.png" alt="petbazzar" class="img-fluid">
                                        </div>
                                        <p>Only for Islamabad & Rawalpindi petbazzar.com is one of the reputable and devoted website that offers genuine services for your beloved pets.</p>
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

                        <!-- Swiper JS -->
                        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

                        <!-- Initialize Swiper -->
                        <script>
                            var swiper = new Swiper(".mySwiper", {
                                spaceBetween: 10,
                                slidesPerView: 4,
                                freeMode: true,
                                watchSlidesProgress: true,
                            });
                            var swiper2 = new Swiper(".mySwiper2", {
                                spaceBetween: 10,
                                navigation: {
                                    nextEl: ".swiper-button-next",
                                    prevEl: ".swiper-button-prev",
                                },
                                thumbs: {
                                    swiper: swiper,
                                },
                            });
                        </script>



                        <div class="icon-box">

                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                            <a href="https://wa.me/923058902090" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

                        </div>

                    </body>

                    </html>
                <?php
                }
            } else {
                ?>

                <script>
                    console.log("Owner of this pet might have deleted his Account.")
                </script>
<?php
            }
        }
    }
}

?>