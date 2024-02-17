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


  <meta name="description" content="Move pet or relocate your pet in Islamabad/Rawalpindi and abroad with pet transportation and shipping company Islamabad/Rawalpindi. Pet passport and pet custom clearance service is also available.">





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
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <title>Consult Doctor</title>
  <script type="module" crossorigin src="/assets/index-24fe521f.js"></script>
  <link rel="stylesheet" href="./assets/index-08a4a912.css" />
  <meta property="og:url" content="consult-doctor" />
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
    // Define the user's location
    $(document).ready(function() {

      const isLoggedin = <?php
                          if (!isset($_SESSION['user_id'])) {
                            echo "false";
                          } else {
                            echo "true";
                          }
                          ?>;
      if (isLoggedin) {
        // Define the maximum distance between the user's location and a doctor's location
        var maxDistance = 5000; // in meters | 5km

        // Calculate the distance between two points using the Haversine formula
        function calculateDistance(lat1, lon1, lat2, lon2) {
          var R = 6371; // Earth's radius in kilometers
          var dLat = deg2rad(lat2 - lat1);
          var dLon = deg2rad(lon2 - lon1);
          var a =
            Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);
          var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
          var d = R * c * 1000; // distance in meters
          return d;
        }

        function deg2rad(deg) {
          return deg * (Math.PI / 180);
        }

        var userLocation = {
          latitude: 37.7749,
          longitude: -122.4194
        };

        //fetch doctors and store in array
        let doctors = []
        let nearbyDoctors = []

        var html = ``;

        fetch("getDoctors.php")
          .then((response) => response.json())
          .then((data) => {
            // Try to get the user's current location
            if (data && navigator.geolocation) { //user has allowed location
              navigator.geolocation.getCurrentPosition(
                (position) => {
                  const {
                    latitude,
                    longitude
                  } = position.coords;
                  userLocation.latitude = latitude;
                  userLocation.longitude = longitude;

                  doctors = data;
                  // Filter the list of doctors based on their distance from the user's location
                  nearbyDoctors = doctors.filter(function(doctor) {
                    var distance = calculateDistance(userLocation.latitude, userLocation.longitude, parseFloat(doctor.lat), parseFloat(doctor.lon));
                    return distance <= maxDistance;
                  });

                  if (nearbyDoctors.length > 0) {
                    $('#consult-form').show()
                    nearbyDoctors.forEach(function(doctor) {
                      html += `<div class="mt-3 relative transition-transform" style="position:relative;">
              <input class="opacity-0 absolute doc_id" name="doctorId" value="${doctor.user_id}" id="doc_id${doctor.user_id}" type="checkbox" required />
              <label for="doc_id${doctor.user_id}" class="cursor-pointer">
                <div class="card pointer-events-none w-full rounded-lg grid grid-cols-12 bg-white my-2">
                  <svg class="absolute top-5 right-5 p-[3px] md:p-0" width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 16L3 12L4.41 10.59L7 13.17L13.59 6.58L15 8M9 0L0 4V10C0 15.55 3.84 20.74 9 22C14.16 20.74 18 15.55 18 10V4L9 0Z" fill="" />
                  </svg>
                  <div class="col-span-6 xl:col-span-4 md:col-span-12 sm:col-6 p-5 md:pb-0 xl:pb-5 pb-5">
                    <img class="w-full rounded-lg h-full inset-0 object-cover" src="${doctor.profilePicture}" alt="" />
                  </div>
                  <div class="grid grid-cols-12 sm:col-span-12 col-span-6 xl:col-span-4 xl:py-10 md:py-3 py-5 px-0 sm:px-5">
                    <div class="col-span-12 md:col-span-6 xl:col-span-12">
                      <h3 class="md:text-base font-semibold text-sm">${doctor.fname}</h3>
                      <!-- <p class="pointer-events-none bg-[#d2d2d2] text-red inline-block rounded-full px-2 text-xsm">
                        Dermatologist
                      </p> -->
                    </div>
                    <div class="md:flex pt-3 p-0 md:pl-3 mt-auto md:pt-0 xl:pt-10 col-span-12 md:col-span-6 xl:col-span-12">
                      <div class="md:my-auto">
                        <p class="text-small">Location - ${doctor.location_name}</p>
                        <p class="py-1 text-ssm font-semibold">${doctor.phone}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </label>
              <div style="position:absolute;bottom:5px;left:0;box-shadow: 0 0 10px #ccc;width:100%;height:max-content; font-size:13px; padding:0.5em 3px; background-color:white; display:flex;">
             <div style="flex:1;"> <a href="https://www.google.com/maps/search/?api=1&query=${doctor.location_name}+${doctor.lat},${doctor.lon}" target="_blank">Go to Location </a></div>
              <a href="tel:${doctor.phone}" style="text-align:right; margin-left:auto">Call on Number</a>
</div>
            </div>`;
                    });

                  } else {
                    html += "<p>No nearby doctors found.</p>";
                    html += "<hr><br><h3>Other Doctors</3>";
                    if (doctors.length > 0) {
                      $('#consult-form').show()
                      doctors.forEach(function(doctor) {
                        html += `<div class="mt-3 relative transition-transform" style="position:relative;">
              <input class="opacity-0 absolute doc_id" name="doctorId" value="${doctor.user_id}" id="doc_id${doctor.user_id}" type="checkbox" required />
              <label for="doc_id${doctor.user_id}" class="cursor-pointer">
                <div class="card pointer-events-none w-full rounded-lg grid grid-cols-12 bg-white my-2">
                  <svg class="absolute top-5 right-5 p-[3px] md:p-0" width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 16L3 12L4.41 10.59L7 13.17L13.59 6.58L15 8M9 0L0 4V10C0 15.55 3.84 20.74 9 22C14.16 20.74 18 15.55 18 10V4L9 0Z" fill="" />
                  </svg>
                  <div class="col-span-6 xl:col-span-4 md:col-span-12 sm:col-6 p-5 md:pb-0 xl:pb-5 pb-5">
                    <img class="w-full rounded-lg h-full inset-0 object-cover" src="${doctor.profilePicture}" alt="" />
                  </div>
                  <div class="grid grid-cols-12 sm:col-span-12 col-span-6 xl:col-span-4 xl:py-10 md:py-3 py-5 px-0 sm:px-5">
                    <div class="col-span-12 md:col-span-6 xl:col-span-12">
                      <h3 class="md:text-base font-semibold text-sm">${doctor.fname}</h3>
                      <!-- <p class="pointer-events-none bg-[#d2d2d2] text-red inline-block rounded-full px-2 text-xsm">
                        Dermatologist
                      </p> -->
                    </div>
                    <div class="md:flex pt-3 p-0 md:pl-3 mt-auto md:pt-0 xl:pt-10 col-span-12 md:col-span-6 xl:col-span-12">
                      <div class="md:my-auto">
                        <p class="text-small">Location - ${doctor.location_name}</p>
                        <p class="py-1 text-ssm font-semibold">${doctor.phone}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </label>
              <div style="position:absolute;bottom:5px;left:0;box-shadow: 0 0 10px #ccc;width:100%;height:max-content; font-size:13px; padding:0.5em 3px; background-color:white; display:flex;">
             <div style="flex:1;"> <a href="https://www.google.com/maps/search/?api=1&query=${doctor.location_name}+${doctor.lat},${doctor.lon}" target="_blank">Go to Location </a></div>
              <a href="tel:${doctor.phone}" style="text-align:right; margin-left:auto">Call on Number</a>
</div>
            </div>`;
                      })
                    } else {
                      html += "<p>No other doctors found.</p>";
                    }
                  }

                  // Display the list of doctors in the DOM
                  var doctorsDiv = document.getElementById("style-13");
                  doctorsDiv.innerHTML = html;
                  document.getElementById('doctorsCount').innerText = nearbyDoctors.length ?? doctors.length
                },
                () => {
                  console.error("Unable to retrieve your location.");
                  doctors = data;
                  html += "<hr><br><h3>Other Doctors (Allow location to get nearby)</3>";
                  if (doctors.length > 0) {
                    $('#consult-form').show()
                    doctors.forEach(function(doctor) {
                      html += `<div class="mt-3 relative transition-transform" style="position:relative;">
              <input class="opacity-0 absolute doc_id" name="doctorId" value="${doctor.user_id}" id="doc_id${doctor.user_id}" type="checkbox" required />
              <label for="doc_id${doctor.user_id}" class="cursor-pointer">
                <div class="card pointer-events-none w-full rounded-lg grid grid-cols-12 bg-white my-2">
                  <svg class="absolute top-5 right-5 p-[3px] md:p-0" width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 16L3 12L4.41 10.59L7 13.17L13.59 6.58L15 8M9 0L0 4V10C0 15.55 3.84 20.74 9 22C14.16 20.74 18 15.55 18 10V4L9 0Z" fill="" />
                  </svg>
                  <div class="col-span-6 xl:col-span-4 md:col-span-12 sm:col-6 p-5 md:pb-0 xl:pb-5 pb-5">
                    <img class="w-full rounded-lg h-full inset-0 object-cover" src="${doctor.profilePicture}" alt="" />
                  </div>
                  <div class="grid grid-cols-12 sm:col-span-12 col-span-6 xl:col-span-4 xl:py-10 md:py-3 py-5 px-0 sm:px-5">
                    <div class="col-span-12 md:col-span-6 xl:col-span-12">
                      <h3 class="md:text-base font-semibold text-sm">${doctor.fname}</h3>
                      <!-- <p class="pointer-events-none bg-[#d2d2d2] text-red inline-block rounded-full px-2 text-xsm">
                        Dermatologist
                      </p> -->
                    </div>
                    <div class="md:flex pt-3 p-0 md:pl-3 mt-auto md:pt-0 xl:pt-10 col-span-12 md:col-span-6 xl:col-span-12">
                      <div class="md:my-auto">
                        <p class="text-small">Location - ${doctor.location_name}</p>
                        <p class="py-1 text-ssm font-semibold">${doctor.phone}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </label>
              <div style="position:absolute;bottom:5px;left:0;box-shadow: 0 0 10px #ccc;width:100%;height:max-content; font-size:13px; padding:0.5em 3px; background-color:white; display:flex;">
             <div style="flex:1;"> <a href="https://www.google.com/maps/search/?api=1&query=${doctor.location_name}+${doctor.lat},${doctor.lon}" target="_blank">Go to Location </a></div>
              <a href="tel:${doctor.phone}" style="text-align:right; margin-left:auto">Call on Number</a>
</div>
            </div>`;
                    })
                  } else {
                    html += "<p>No other doctors found.</p>";
                  }

                  // Display the list of doctors in the DOM
                  var doctorsDiv = document.getElementById("style-13");
                  doctorsDiv.innerHTML = html;
                  document.getElementById('doctorsCount').innerText = doctors.length
                }
              );


            }
            //if user has not allowed permission
            else {
              doctors = data;
              html += "<hr><br><h3>Other Doctors (Allow location to get nearby)</3>";
              if (doctors.length > 0) {
                $('#consult-form').show()
                doctors.forEach(function(doctor) {
                  html += `<div class="mt-3 relative transition-transform" style="position:relative;">
              <input class="opacity-0 absolute doc_id" name="doctorId" value="${doctor.user_id}" id="doc_id${doctor.user_id}" type="checkbox" required />
              <label for="doc_id${doctor.user_id}" class="cursor-pointer">
                <div class="card pointer-events-none w-full rounded-lg grid grid-cols-12 bg-white my-2">
                  <svg class="absolute top-5 right-5 p-[3px] md:p-0" width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 16L3 12L4.41 10.59L7 13.17L13.59 6.58L15 8M9 0L0 4V10C0 15.55 3.84 20.74 9 22C14.16 20.74 18 15.55 18 10V4L9 0Z" fill="" />
                  </svg>
                  <div class="col-span-6 xl:col-span-4 md:col-span-12 sm:col-6 p-5 md:pb-0 xl:pb-5 pb-5">
                    <img class="w-full rounded-lg h-full inset-0 object-cover" src="${doctor.profilePicture}" alt="" />
                  </div>
                  <div class="grid grid-cols-12 sm:col-span-12 col-span-6 xl:col-span-4 xl:py-10 md:py-3 py-5 px-0 sm:px-5">
                    <div class="col-span-12 md:col-span-6 xl:col-span-12">
                      <h3 class="md:text-base font-semibold text-sm">${doctor.fname}</h3>
                      <!-- <p class="pointer-events-none bg-[#d2d2d2] text-red inline-block rounded-full px-2 text-xsm">
                        Dermatologist
                      </p> -->
                    </div>
                    <div class="md:flex pt-3 p-0 md:pl-3 mt-auto md:pt-0 xl:pt-10 col-span-12 md:col-span-6 xl:col-span-12">
                      <div class="md:my-auto">
                        <p class="text-small">Location - ${doctor.location_name}</p>
                        <p class="py-1 text-ssm font-semibold">${doctor.phone}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </label>
              <div style="position:absolute;bottom:5px;left:0;box-shadow: 0 0 10px #ccc;width:100%;height:max-content; font-size:13px; padding:0.5em 3px; background-color:white; display:flex;">
             <div style="flex:1;"> <a href="https://www.google.com/maps/search/?api=1&query=${doctor.location_name}+${doctor.lat},${doctor.lon}" target="_blank">Go to Location </a></div>
              <a href="tel:${doctor.phone}" style="text-align:right; margin-left:auto">Call on Number</a>
</div>
            </div>`;
                })
              } else {
                html += "<p>No other doctors found.</p>";
              }

              // Display the list of doctors in the DOM
              var doctorsDiv = document.getElementById("style-13");
              doctorsDiv.innerHTML = html;
              document.getElementById('doctorsCount').innerText = doctors.length

            }
          }).catch((error) => {
            console.log(error)
            var doctorsDiv = document.getElementById("style-13");
            doctorsDiv.innerHTML = '<p>Something went wrong, while processing doctors list.</p>';
            $('#consult-form').hide()
          })



      } else {
        document.getElementById("style-13").innerHTML = '<p>Please Login to Continue</p>'
        $('#consult-form').hide()

      }

    })
  </script>


  <style>
    .radar {
      /* background: url(https://gtms03.alicdn.com/tps/i3/TB1Vet9IVXXXXbuapXXb2YSIVXX-567-567.png) no-repeat 50% 50%; */
      width: 284px;
      height: 284px;
      position: relative;
      background-size: 284px 284px;
      position: absolute;
      left: 50%;
      top: 50%;
      margin-left: -142px;
      margin-top: -142px;
    }

    .radar:hover {
      background: none;
    }

    .radar .pointer {
      position: absolute;
      z-index: 1024;
      left: 10.5820106%;
      right: 10.5820106%;
      top: 10.5820106%;
      bottom: 50%;
      will-change: transform;
      transform-origin: 50% 100%;
      border-radius: 50% 50% 0 0/100% 100% 0 0;
      background-image: linear-gradient(135deg, rgba(5, 162, 185, 0.8) 0%, rgba(0, 0, 0, 0.02) 70%, rgba(0, 0, 0, 0) 100%);
      -webkit-clip-path: polygon(100% 0, 100% 10%, 50% 100%, 0 100%, 0 0);
      clip-path: polygon(100% 0, 100% 10%, 50% 100%, 0 100%, 0 0);
      -webkit-animation: rotate360 3s infinite linear;
      animation: rotate360 3s infinite linear;
    }

    .radar .pointer:after {
      content: "";
      position: absolute;
      width: 50%;
      bottom: -1px;
      border-top: 2px solid rgba(0, 231, 244, 0.8);
      box-shadow: 0 0 3px rgba(0, 231, 244, 0.6);
      border-radius: 9px;
    }

    .shadow {
      position: absolute;
      left: 11%;
      top: 11%;
      right: 11%;
      bottom: 11%;
      margin: auto;
      border-radius: 9999px;
      box-shadow: 0 0 66px 6px #a51414;
      -webkit-animation: shadow 1s infinite ease;
      animation: shadow 1s infinite ease;
    }

    @-webkit-keyframes rotate360 {
      0% {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(-360deg);
      }
    }

    @keyframes rotate360 {
      0% {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(-360deg);
      }
    }

    @-webkit-keyframes shadow {
      0% {
        opacity: 0;
      }

      50% {
        opacity: 1;
      }

      to {
        opacity: 0;
      }
    }

    @keyframes shadow {
      0% {
        opacity: 0;
      }

      50% {
        opacity: 1;
      }

      to {
        opacity: 0;
      }
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
          <a href="cart.php" class="btn btn-primary btn-block">View Cart</a>
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
                <a class="nav-link petstore-link" href="pet-store.1.html">Food Store</a>
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
                <a class="nav-link" href="pets-and-vets.html">Pets and Vets</a>
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
      <div class="box no-border" id="jazzCashValidationErrorsDiv" style="display: none;">
        <div class="box-tools">
          <p class="alert alert-warning alert-dismissible">
            <span id="jazzCashValidationErrorsMsg"></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          </p>
        </div>
      </div>
      <!------Consult Doctor Area starts here------------>

      <section class="bg-[#f9f9f9] min-h-screen max-w-[1400px] m-auto">
        <?php
        if (isset($_GET['consulted'])) {
        ?>
          <div class="text-center text-base py-12 md:py-20" style="margin-top: 20%; display:flex;gap:10px;flex-wrap:wrap; justify-content:center">
            <h2 class="text-[#333333] text-lg font-bold">
              You request has been submitted for consultancy
            </h2>
            <img src="img/checkmark.png" width="50px">
          </div>
        <?php
        } else {
        ?>

          <div class="text-center text-base py-12 md:py-20">
            <h2 class="text-[#333333] text-lg font-bold">
              Seeking Veterinary Care for Your Pet
            </h2>
          </div>

          <form method="post" action="consult-api.php" class="grid grid-cols-12 md:gap-16">
            <div class="md:col-span-6 col-span-12">
              <div class="grid grid-cols-12 md:mb-8" style="align-items:center;">
                <div class="col-span-6 flex flex-col text-xsm md:text-sm">
                  <h2 class="font-semibold">
                    List of Doctors near me (<span class="text-[#E85B47]" id="doctorsCount">0</span>)
                  </h2>
                  <p class="text-[#8F8F8F]">Select any 1</p>
                </div>
                <!-- <div class="md:col-span-6 col-span-6">
                <select id="countries" name="country" class="bg-white py-4 border w-full text-[#8F8F8F] text-xsm md:text-ssm focus:outline-none focus:border-blue-400 rounded-lg focus:ring-blue-500 block p-2.5 shadow-none">
                  <option selected hidden>Select City</option>
                  <option value="US">United States</option>
                  <option value="CA">Canada</option>
                  <option value="FR">France</option>
                  <option value="DE">Germany</option>
                </select>
              </div> -->
              </div>
              <div id="style-13" class="max-h-[16rem] md:max-h-[33rem] p-2 md:p-4 pt-0 mt-4 overflow-auto pr-4">
                <!------Nearby Doctors list will append here------------>
                <div class="radar">
                  <div class="pointer"></div>
                  <div class="shadow"></div>
                </div>
              </div>
            </div>
            <?php
            if (isset($_SESSION['user_id']) !== '') {
            ?>
              <div class="col-span-12 md:col-span-6" id="consult-form" style="display: none;">
                <div class="pt-5">
                  <h3 class="text-xsm font-semibold">
                    What is the problem with your PET?
                  </h3>
                  <textarea class="text-xsm lg:text-sm w-full bg-[#f9f9f9] border-2 focus:border-blue-400 rounded-[8px] my-2 resize-none focus:outline-none p-3 placeholder:font-semibold" name="problem" id="" cols="30" rows="6" placeholder="Explain briefly your pet’s problem...." required></textarea>
                </div>
                <div class="pt-3">
                  <h3 class="text-xsm font-semibold">Who’s the PET Owner?</h3>
                  <input required type="text" placeholder="Pet Owner Name" class="w-full text-xsm lg:text-sm bg-[#f9f9f9] focus:border-blue-400 focus:outline-none border-2 rounded-[8px] p-4 my-2 placeholder:font-semibold" name="petOwner" />
                </div>
                <div class="pt-3">
                  <h3 class="text-xsm font-semibold">Any Phone number?</h3>
                  <input required type="text" placeholder="Phone number *" class="w-full text-xsm lg:text-sm bg-[#f9f9f9] focus:border-blue-400 focus:outline-none border-2 rounded-[8px] p-4 my-2 placeholder:font-semibold" name="phoneNumber" />
                </div>
                <div class="py-2 mb-5">
                  <button class="w-full text-ssm md:text-sm text-white lg:text-base font-bold md:p-5 p-3 bg-[#E85B47]" type="submit" name="consultNow">
                    Submit Your Request
                  </button>
                </div>
              </div>
            <?php
            } else {
            ?>
              <div class="text-center text-base py-12 md:py-20">
                <h2 class="text-[#333333] text-lg font-bold">
                  Please Login to continue
                </h2>
              </div>
            <?php
            }
            ?>
          </form>
        <?php
        }
        ?>
      </section>

      <!------Consult Doctor Area Ends here------------>

    </div>

    <footer class=" footer">
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
      function enableBtn() {
        document.getElementById("button1").disabled = false;
      }
    </script>
    <script>
      const checkboxes = document.querySelectorAll('input[type="checkbox"]');

      checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", () => {
          if (checkbox.checked) {
            checkboxes.forEach((c) => {
              if (c !== checkbox) {
                c.checked = false;
              }
            });
          }
        });
      });
    </script>
    <script>
      $(".datepicker").datepicker({
        startDate: '0d',
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true

      });
      $("#type_id").on("change", function() {
        loadBreeds($(this).val());
      });
      if ($("#type_id").length > 0) {
        loadBreeds($("#type_id").val());
      }

      function loadBreeds(typeId) {
        $("#image-loader").css("display", "block");
        $.ajax({
          type: "GET",
          url: 'load-breeds?type_id=' + typeId,
          success: function(data) {
            $("#image-loader").css("display", "none");
            $("#breed-dd").html(data).after(function() {
              var breed_parent = $("#breed-dd").parents(".has-float-label");

              if ($("#breed-dd option[value='" + $("#breed-dd").attr('selec') + "']").val() !== undefined) {
                $("#breed-dd").val($("#breed-dd").attr('selec'));

              }
              breed_parent.removeClass("not-float");
              breed_parent.addClass("float");

            });
          },
          error: function() {
            alert('Error occured, refresh page');
          }
        });
      }
    </script>









    <div class="icon-box">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <a href="https://wa.me/923058902090" class="whatsApp" target="_blank"><i class="fa fa-whatsapp my-whatsApp"></i></a>

    </div>

</body>

</html>