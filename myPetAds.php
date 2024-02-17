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
        Pets For Sale in Islamabad/Rawalpindi | Pets Online Store | petbazzar.com </title>
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


    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32..png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16.png">
    <meta property="og:url" content="index.php" />
    <meta property="og:type" content="home" />
    <meta property="og:image" content="img/mini.png" />

    <meta property="og:title" content="Pets For Sale in Islamabad/Rawalpindi | Pets Online Store | petbazzar.com" />
    <meta property="og:description" content="Buy & Sell all Pets Online  in all The Major Cities of Islamabad/Rawalpindi. Find Dogs,Cats, Fish, Birds for Sale in Rawalpindi & Islamabad. Visit petbazzar.com" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/smartbanner.js"></script>
    <script src="js/custom.js" defer="defer"></script>
    <script type="text/javascript">
        $(function() {
            $.smartbanner({
                daysHidden: 0
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Get the link element
            const deleteLink = document.querySelector('.delete-link');

            // Add a click event listener to the link
            deleteLink.addEventListener('click', (event) => {
                // Prevent the default behavior of the link
                event.preventDefault();
                sure = confirm("Are you sure you want to delete?")

                if (sure) {
                    // Get the URL from the href attribute of the link
                    const url = deleteLink.getAttribute('href');

                    // Navigate to the URL
                    window.location.href = url;
                }
            });
        })
    </script>

    <style>
        .menu {
            position: relative;
        }

        .menu-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: #333333;
            background-color: #DFDFDF;
        }

        .menu-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            width: 120px;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            display: none;
        }

        .menu:hover .menu-dropdown {
            display: block;
        }

        .menu-dropdown ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .menu-dropdown li {
            margin: 0;
            padding: 0;
        }

        .menu-dropdown a {
            display: block;
            padding: 5px 0;
            color: #333;
            text-decoration: none;
        }

        .menu-dropdown a:hover {
            background-color: #f7f7f7;
        }
    </style>

</head>

<body>




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
                        <a href="cart.php" class="btn btn-outline-primary mr-auto">Continue
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

                <script>

                </script>
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
                                    <span id="cartItemsCount">0 - Item</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav mr-auto petstore-menu">

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
                            echo '<li class="nav-item active">
                        <a class="nav-link" href="myPetAds.php">My Pets<span class="sr-only">(current)</span></a></li>';
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
    <br><br><br><br><br><br>
    <div class="container listing-page">
        <div id="pet-subview" class="">
            <div class="two-column-layout">


                <div class="right-col">
                    <div class="cards-list-header pets-list-header">
                        <a href="#" class="btn btn-primary filter-btn">
                            <i class="fa fa-filter"></i>
                        </a>


                        <h2 class="found-title">My Pets</h2>

                    </div>
                    <div class="listing-page-sections">
                        <div class="cards-list-landscape views-box active">
                            <?php
                            require_once "connect.php";
                            $userId = $_SESSION['user_id'];
                            $result = mysqli_query($conn, "SELECT * FROM pets WHERE user_id = $userId ORDER BY pet_id DESC");
                            if (!empty($result)) {
                                while ($row = mysqli_fetch_array($result)) {
                                    $pet_id = $row['pet_id'];
                                    $user_id = $row['user_id'];
                                    $img = json_decode($row['img'])[0];
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
                            ?>



                                    <div class="card p-card-landscape" id="pets-list">
                                        <div class="card-body <?php echo $cate; ?>">
                                            <div class="media">
                                                <div class="img-box-main">
                                                    <a href="pet-details.php?pet_id=<?php echo $pet_id; ?>">
                                                        <div class="img-box" style="background-image:url('<?php echo $img; ?>')">
                                                        </div>
                                                    </a>
                                                    <div class="mt-2">
                                                        <div class="date-box mr-auto"><?php echo $timestmp; ?></div>
                                                    </div>
                                                </div>

                                                <div class="media-body">
                                                    <div class="media-body-header">
                                                        <div class="left-box">
                                                            <a class="card-title" href="pet-details.php?pet_id=<?php echo $pet_id; ?>"><?php echo $ttle; ?></a>
                                                        </div>
                                                        <div class="right-box" style="display:flex;gap:5px;">
                                                            <div class="price-box">
                                                                <span>PKR</span> <?php echo $price; ?>
                                                            </div>
                                                            <div class="menu">
                                                                <button class="menu-btn">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </button>
                                                                <div class="menu-dropdown">
                                                                    <a href="deleteMyPet.php?pet_id=<?php echo $pet_id; ?>&user_id=<?php echo $user_id; ?>" class="delete-link">
                                                                        <i class='fas fa-trash' style='color:#e93e2b'></i> Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="card-text">
                                                        <?php echo $descr; ?>
                                                        <a href="pet-details.php?pet_id=<?php echo $pet_id; ?>">See more</a>
                                                    </p>
                                                    <div class="price-box">
                                                        <span>PKR</span><?php echo $price; ?>


                                                    </div>



                                                    <p></p>


                                                    <ul class="pet-feature-list" style="height: 50px;">
                                                        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Color">
                                                            <img src="img/color-icon.png" alt="Color">
                                                            <span><?php echo $clr; ?></span>
                                                        </li>
                                                        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Age">
                                                            <img src="img/age-icon.png" alt="Age">
                                                            <span><?php echo $age; ?></span>
                                                        </li>
                                                        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Vaccination">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 10 15">
                                                                <path class="cls-1" d="M1345.53,304.539a4.831,4.831,0,0,0-7.07,0,6.206,6.206,0,0,0-.47,7.382L1342,318l4-6.068A6.219,6.219,0,0,0,1345.53,304.539Zm-3.49,5.582a1.919,1.919,0,1,1,1.83-1.916A1.874,1.874,0,0,1,1342.04,310.121Z" transform="translate(-1337 -303)"></path>
                                                            </svg>&nbsp;&nbsp;&nbsp;<span><?php echo $locat; ?></span>
                                                        </li>
                                                        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Group">
                                                            <img src="img/pet-group-icon.png" alt="Pet group">
                                                            <span><?php echo $gender; ?></span>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


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