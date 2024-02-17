<?php
session_start();
if (isset($_SESSION['confirmed']) === 0) {
    session_destroy();
    header("Location: login.php?verifyNow=true");
}
if (isset($_SESSION['user_id']) != "") {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5273894608737898" crossorigin="anonymous"></script>
        <title>

            Add Pet - petbazzar.com
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

        <script>
            function myFunction() {
                <?php $success = $_GET['success'];
                if ($success != "") {
                ?>
                    alert("Ad Posted Successfully!");
                <?php } ?>
            }
        </script>
        <style>
            /* Modal container styles */
            .modal {
                display: none;
                position: fixed;
                z-index: 99999;
                padding-top: 100px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0, 0, 0);
                background-color: rgba(0, 0, 0, 0.9);
            }

            /* Close button styles */
            .close {
                position: absolute;
                top: 15px;
                right: 35px;
                color: #f1f1f1;
                font-size: 40px;
                font-weight: bold;
            }

            /* Preview image styles */
            .modal-content {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
            }

            /* Caption styles */
            #caption {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
                text-align: center;
                color: #ccc;
                padding: 10px 0;
                height: 150px;
            }

            .borderbox {
                display: block;
                border-style: dashed;
                border-width: 2px;
                height: 300px;
                width: 300px;
                margin: 10px auto;
                background: rgba(255, 255, 255, 0.26);
                border-radius: 16px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(5px);
                -webkit-backdrop-filter: blur(5px);
                border: 1px solid rgba(255, 255, 255, 0.3);

            }

            span.header-3 {
                font-size: 130px;
                text-align: center;
                color: white;
                margin: 4px auto 17px;
            }

            span.paragraph-text {
                font-size: 20px;
                text-align: center;
                color: white;
                text-transform: uppercase;
            }


            .image-container {
                position: relative;
                width: 100px;
                /* set the width of the container */
                height: 100px;
                /* set the height of the container */
                overflow: hidden;
            }

            .selected-image {
                display: block;
                max-width: 100%;
                max-height: 100%;
                margin: 0 auto;
            }

            #image-gallery {
                width: max-content;
                max-width: 85%;
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                margin: 0px auto;
            }

            /* .borderbox {
                height: 90%;
            } */
        </style>
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
        <div class="container auto-fill-page">
            <form class="form-horizontal" role="form" method="POST" action="addpet1.php" autocomplete="false" enctype="multipart/form-data">
                <div class="form-box d-flex text-center" style="flex-wrap:wrap-reverse">
                    <div class="left-box" style="margin-top: 5%; background:url('img/bg1.jpg') no-repeat center; background-size:cover;">
                        <input type="file" accept="images/jpg, images/png" name="images[]" id="file" multiple onchange="displayImages(event.target.files)" style="display:none;">
                        <p><label for="file" style="cursor: pointer;" class="borderbox">
                                <span class="header-3">+</span></br>
                                <span class="paragraph-text">Upload Images <span style="font-size:13px;font-weight:bold;">(MAX 5)</span></span>
                            </label></p>

                        <div id="image-gallery"></div>

                        <div id="preview-modal" class="modal">
                            <span class="close">&times;</span>
                            <img id="preview-image" class="modal-content">
                            <div id="caption"></div>
                        </div>

                        <script>
                            var numSelected = 0

                            function displayImages(files) {
                                // Get the file input

                                // Loop through the files and read them as URLs
                                for (var i = 0; i < files.length; i++) {
                                    if (numSelected >= 5) {
                                        alert("You can only select up to 5 images.");
                                        break;
                                    }

                                    // Read the file as a URL
                                    var reader = new FileReader();
                                    reader.onload = function(event) {
                                        // Create an image element and set its source to the URL
                                        var image = document.createElement("img");
                                        image.src = event.target.result;
                                        image.classList.add("selected-image");

                                        var imageBox = $("<div>").addClass("image-container").append(image);
                                        var link = $("<a>").addClass("image-link").append(imageBox);

                                        // Add the image element to the preview container
                                        $("#image-gallery").append(link);
                                    };
                                    reader.readAsDataURL(files[i]);

                                    // Increment the numSelected variable
                                    numSelected++;
                                }
                            }
                            $(document).on("click", ".image-link", function() {
                                var imageSrc = $(this).find("img").attr("src");
                                $("#preview-image").attr("src", imageSrc);
                                $("#preview-modal").css("display", "block");
                            });
                            $(".close, #preview-modal").on("click", function() {
                                $("#preview-modal").css("display", "none");
                            });
                        </script>
                    </div>
                    <div class="right-box" style="width:100%">
                        <h2 class="box-title text-uppercase font-sm text-primary">PET DETAILS</h2>
                        <br>
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" maxlength="30" placeholder="Title" name="ttle" value="" required="">
                            <label>Title</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="number" class="form-control" placeholder="Price" name="price" value="" required="" min="1" max="99999" oninput="checkInputValue(this)">
                            <label>Price</label>
                        </div>
                        <div class="form-group has-float-label">
                            <Select class="form-control" name="locat" required>
                                <option value="Islamabad">Islamabad</option>
                                <option value="Rawalpindi">Rawalpindi</option>
                            </Select>
                            <label>location</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" placeholder="Description" name="descr" value="" required="">
                            <label>Description</label>
                        </div>
                        <div class="form-group has-float-label">
                            <Select class="form-control" name="cate" required>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                                <option value="Fish">Fish</option>
                                <option value="Bird">Bird</option>

                                <option value="__________" disabled>__________</option>
                                <option value="Camel">Camel</option>
                                <option value="Cow">Cow</option>
                                <option value="Crocodiles">Crocodiles</option>
                                <option value="Deer">Deer</option>
                                <option value="Ferret">Ferret</option>
                                <option value="Frogs &amp; Amphibians">Frogs &amp; Amphibians</option>
                                <option value="Goat &amp; Lamb">Goat &amp; Lamb</option>
                                <option value="Guinea pigs">Guinea pigs</option>
                                <option value="Horse">Horse</option>
                                <option value="Lion">Lion</option>
                                <option value="Lizards &amp; Iguana">Lizards &amp; Iguana</option>
                                <option value="Monkey">Monkey</option>
                                <option value="Mouse Hamsters Rats">Mouse Hamsters Rats</option>
                                <option value="Other">Other</option>
                                <option value="Parrot">Parrot</option>
                                <option value="Rabbit">Rabbit</option>
                                <option value="Snakes">Snakes</option>
                                <option value="Turtles &amp; Tortoise">Turtles &amp; Tortoise</option>
                            </Select>
                            <label>Category</label>
                        </div>
                        <div class="form-group has-float-label">
                            <Select class="form-control" name="clr" required>
                                <option value="Black">Black</option>
                                <option value="Brown">Brown</option>
                                <option value="White">White</option>
                                <option value="Red">Red</option>
                                <option value="Green">Green</option>
                                <option value="Blue">Blue</option>
                                <option value="Orange">Orange</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Other">Other</option>
                            </Select>
                            <label>Color</label>
                        </div>
                        <div class="form-group has-float-label">
                            <Select class="form-control" name="pet_for" required>
                                <option value="sell">Sell</option>
                                <option value="engage">Engage</option>

                            </Select>
                            <label>PET FOR</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" placeholder="Breed" name="breed" value="" required="">
                            <label>Breed</label>


                        </div>
                        <div class="form-group has-float-label">
                            <Select class="form-control" name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Pair">Pair</option>
                            </Select>
                            <label>Gender</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="number" class="form-control" placeholder="Age" name="age" value="" required="" min="1">
                            <label>Age(in Days)</label>
                        </div>
                        <div class="form-group has-float-label">
                            <input type="text" class="form-control" placeholder="comment" name="comment" value="">
                            <label>Other Comments</label>
                        </div>
                        <div class="form-group has-float-label">
                            <span class="text text-capitalize">Pet History</span>
                            <input type="file" accept="image/*" name="img1" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block text-uppercase" name="addpet">
                                ADD PET
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/vendors/slick.min.js"></script>
        <script src="js/vendors/wow.min.js"></script>
        <script src="js/vendors/jquery.mCustomScrollbar.min.js"></script>
        <script src="js/vendors/bootstrap-datepicker.min.js"></script>
        <script src="js/app.js"></script>

        <script>
            var valueToAllow = 0;

            function checkInputValue(input) {
                if (input.value.length === 5) {
                    valueToAllow = input.value
                }
                if (input.value.length > 5) {
                    input.value = valueToAllow
                }

            }
        </script>








        <div class="icon-box">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://wa.me/923058902090" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

        </div>

    </body>

    </html>
<?php
} else {
    header("Location: login.php");
}
?>