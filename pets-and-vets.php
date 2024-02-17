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
        Find Vets Online in Islamabad/Rawalpindi | Vets Near Me
    </title>
    <meta name="description" content="Find qualified vets online in Islamabad/Rawalpinid">
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
    <meta property="og:url" content="pets-and-vets.php" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/smartbanner.js"></script>
    <!-- <script src="js/search-map.js" defer="defer"></script> -->


    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>
        var Query = 'Vet clinics in Islamabad'
        var category = 'health'
        var urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has("search_term")) {
            if (urlParams.get("search_term") !== '') {
                Query = urlParams.get("search_term");

            }
        }
        if (urlParams.has("city") && urlParams.has("type")) {
            if (urlParams.get("type") !== '' && urlParams.get("city") !== '') {

                Query = urlParams.get("type") + ' in ' + urlParams.get("city");
                //select element with type|city

            }
        }





        var mapInstance;

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 33.40,
                    lng: 73.10
                },
                styles: [{
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }]
            });
            mapInstance = map

            if (map) {
                var service = new google.maps.places.PlacesService(map);
                service.textSearch({
                    query: Query,
                    type: ['health', 'shop'],
                }, function(results, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        var bounds = new google.maps.LatLngBounds();
                        for (var i = 0; i < results.length; i++) {
                            createMarker(results[i], map);
                            bounds.extend(results[i].geometry.location);
                        }
                        map.fitBounds(bounds);
                    }
                });
            }
        }
        var directionsRenderer = new google.maps.DirectionsRenderer({
            suppressMarkers: true
        });

        function createCard(place) {
            // create a new div element to hold the card
            var card = document.createElement('div');
            card.className = 'location-card'
            card.className = 'card';
            card.style.cursor = 'pointer';


            // create a new div element to hold the card body
            var cardBody = document.createElement('div');
            cardBody.className = 'card-body';

            // create a new h5 element to hold the name of the place
            var name = document.createElement('h6');
            name.className = 'card-title';
            name.textContent = place.name;

            // create a new p element to hold the address of the place
            var address = document.createElement('p');
            address.className = 'card-text';
            address.textContent = place.formatted_address;
            address.style.fontSize = "16px";

            // append the name and address elements to the card body
            cardBody.appendChild(name);
            cardBody.appendChild(address);

            // append the card body to the card
            card.appendChild(cardBody);

            // append the card to the card container
            var cardContainer = document.getElementById('result-card-list');
            cardContainer.appendChild(card);

            // add a click listener to the card to open the marker and show directions
            card.addEventListener('click', function() {
                var prevSelected = $(".card-body2");
                if (prevSelected) {
                    prevSelected.removeClass('card-body2')
                }


                $(this).addClass('card-body2')
                // create a new marker object for the place
                var marker = new google.maps.Marker({
                    map: mapInstance,
                    position: place.geometry.location
                });

                // create a new infowindow object for the marker
                var infowindow = new google.maps.InfoWindow({
                    content: place.name
                });


                // open the infowindow
                infowindow.open(mapInstance, marker);

                // center the map on the marker and zoom in
                mapInstance.setCenter(place.geometry.location);
                mapInstance.setZoom(15);

                if (navigator.geolocation) {


                    navigator.geolocation.getCurrentPosition(function(position) {
                        var myLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                        var directionsService = new google.maps.DirectionsService();

                        // bind the directions renderer to the map
                        directionsRenderer.setDirections(null);
                        directionsRenderer.setMap(null);
                        directionsRenderer.setMap(mapInstance);

                        // create a new request for directions
                        var request = {
                            origin: myLatLng,
                            destination: place.geometry.location,
                            travelMode: google.maps.TravelMode.DRIVING
                        };

                        // send the request to the directions service
                        directionsService.route(request, function(result, status) {
                            if (status == google.maps.DirectionsStatus.OK) {
                                // display the directions on the map
                                directionsRenderer.setDirections(result);
                            }
                        });
                    })

                }
                infowindow.close()
            });

        }

        //When markers are displayed, we're getting place name and creating card
        function createMarker(place, map) {
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location
            });

            var infowindow = new google.maps.InfoWindow({
                content: place.name
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
            // create a card for the place
            createCard(place);
        }
    </script>

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
<style>
    .right-box {
        flex: 1;
    }

    #map {
        width: 100%;
        min-width: 280px;
        height: 400px;
    }

    .card-body:hover,
    .card-body2 {
        background-color: #DFDFDF;
        border-left: 2px solid red;
    }
</style>

<body onload="initMap()">


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
                            <li class="nav-item active">
                                <a class="nav-link" href="pets-and-vets.php">Pets and Vets <span class="sr-only">(current)</span></a>
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
        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">Pets and Vets</li>
                </ol>
            </nav>
        </div>
        <div class="container" style="display:flex; flex-wrap:wrap">
            <div class="find-vet-shop-box">
                <div class="left-box border-box">
                    <div class="left-box-header">
                        <div class="left-box-header-inner">
                            <h2 class="box-title">Find Pet and vet clinic</h2>

                        </div>
                        <form action="pets-and-vets.php">
                            <div class="form-group input-group icon-group">

                                <input type="text" class="form-control" placeholder="Name" name="search_term" value="">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-link" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <hr>

                        <form action="pets-and-vets.php">
                            <p>Or</p>
                            <div class="row align-items-center">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select id="my-selector" class="form-control form-control-md" name="city" required>
                                            <option value="" disabled>Choose City</option>
                                            <option class="opt" value="Islamabad">Islamabad</option>
                                            <option class="opt" value="Rawalpindi">Rawalpindi</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="form-group checkboxes">
                                        <label class="custom-checkbox dark font-size-sm">
                                            <input type="radio" name="type" value="Pet Shop">
                                            <span class="checkmark"></span>
                                            <span class="text text-uppercase">Pet Shop</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="form-group checkboxes">
                                        <label class="custom-checkbox dark font-size-sm">
                                            <input type="radio" name="type" value="Vet Clinic" checked>
                                            <span class="checkmark"></span>
                                            <span class="text text-uppercase">Vet Clinic</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="form-group checkboxes">
                                        <button type="submit" class="btn btn-sm btn-secondary text-uppercase">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="left-box-body">
                        <div id="result-card-list" style="max-height: 500px; overflow-y:scroll;">

                        </div>
                    </div>
                </div>
            </div>
            <div class="right-box">
                <!-- <div id='map'></div> -->
                <div id="map" style="height: 500px; width: 100%;"></div>
            </div>
        </div>

    </div>


    </br>
    </br>

    </div>



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
    <script async src="js/app.js"></script>


    <script>
        const city = urlParams.get('city')
        const selector = document.getElementById('my-selector');
        for (let i = 0; i < selector.options.length; i++) {
            const option = selector.options[i];

            // If the option's value matches the selectedOption, set it as selected
            if (option.value === city) {
                option.selected = true;
                break;
            }
        }

        //for selecting radio
        const type = urlParams.get('type')
        const radios = document.querySelectorAll(`input[type="radio"][value="${type}"]`);
        if (radios.length > 0) {
            radios[0].checked = true;
        }

        $('[name="search_term"]').val(urlParams.get("search_term"))
    </script>









    <div class="icon-box">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/923058902090" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

    </div>

</body>

</html>