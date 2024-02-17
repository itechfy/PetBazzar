<?php
session_start();

if (isset($_SESSION['confirmed']) === 0) {
  session_destroy();
  header("Location: login.php?verifyNow=true");
}
if (isset($_SESSION['typ'])) {
  if ($_SESSION['typ'] === 'Doctor') {
?>
    <!DOCTYPE html>

    <html lang="en" dir="ltr">

    <head>
      <meta charset="UTF-8">

      <link rel="stylesheet" href="css/style.css">

      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
      <title>Doctor Panel</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>

    <body>
      <div class="sidebar">
        <div class="logo-details">
          <i class='bx'></i>
          <span class="logo_name">Doctor Panel</span>
        </div>
        <ul class="nav-links">
          <li>
            <a href="#" class="active">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="consultationRequests.php">
              <i class='bx bx-list-ul'></i>
              <span class="links_name">Previous Requests</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-pie-chart-alt-2'></i>
              <span class="links_name">Ratings</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-user'></i>
              <span class="links_name">Clients</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-message'></i>
              <span class="links_name">Messages</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-cog'></i>
              <span class="links_name">Settings</span>
            </a>
          </li>
          <li class="log_out">
            <a href="logout.php">
              <i class='bx bx-log-out'></i>
              <span class="links_name">Log out</span>
            </a>
          </li>
        </ul>
      </div>
      <section class="home-section">
        <nav>
          <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
          </div>
          <div class="search-box">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search'></i>
          </div>
          <div class="profile-details">
            <span class="admin_name">
              <?php
              if (isset($_SESSION['user_id']) != "") {
                echo $_SESSION['fname'];
              }
              ?>
            </span>
          </div>
        </nav>

        <div class="home-content">
          <div class="overview-boxes">
            <div class="box">
              <div class="right-side">
                <div class="box-topic">Pending Requests</div>
                <div class="number"></div>

              </div>
              <i class='bx bxs-cart-add cart two'></i>
            </div>


      </section>

      <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
          sidebar.classList.toggle("active");
          if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
          } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
      </script>

    </body>

    </html>
<?php
  } else {
    header('Location:index.php');
  }
} else {
  echo "404, Page doesn't exists";
}
?>