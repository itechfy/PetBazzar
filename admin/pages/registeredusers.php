<?php
session_start();
if (isset($_SESSION['typ'])) {
  if ($_SESSION['typ'] !== 'Admin') {
    session_destroy();
    header("Location: login.php");
  }
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="../../css/style.css">

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../css/vendors/bootstrap-float-labels.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/vendors/slick.css">
  <link rel="stylesheet" href="../../css/vendors/animate.css">
  <link rel="stylesheet" href="../../css/vendors/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="../../css/vendors/bootstrap-datepicker.min.css">

  <link href="../../css/app.css?v=5" rel="stylesheet">
  <link href="../../css/custom.css?v=6" rel="stylesheet">
  <link href="../../css/responsive.css?v=5" rel="stylesheet">

  <link href="../../css/smartbanner.css" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32..png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon-16.png">
  <title>Registered Users</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx'></i>
      <span class="logo_name">PetBazzar</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../../adminpanel.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="products.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Products</span>
        </a>
      </li>
      <li>
        <a href="orders.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Order list</span>
        </a>
      </li>

      <li>
        <a href="totalPets.php">
          <i class='bx bx-book-alt'></i>
          <span class="links_name">Pets</span>
        </a>
      </li>
      <li>
        <a href="registeredusers.php" class="active">
          <i class='bx bx-user'></i>
          <span class="links_name">Users</span>
        </a>
      </li>

      <li>
        <a href="messages.php">
          <i class='bx bx-message'></i>
          <span class="links_name">Messages</span>
        </a>
      </li>

      <li class="log_out">
        <a href="../../logout.php">
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
        <span class="dashboard">Registered Users</span>
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
            <div class="box-topic">Total Users</div>
            <div class="number"><?php
                                require_once "../../connect.php";
                                function registredMemberCount($conn)
                                {
                                  $sql = "SELECT COUNT(user_id) FROM users WHERE typ = 'User' OR typ = 'Doctor'";
                                  $result = mysqli_query($conn, $sql);
                                  $rows = mysqli_fetch_row($result);
                                  return $rows[0];
                                }
                                echo registredMemberCount($conn);

                                ?></div>
          </div>
          <i class='bx bx-user cart two'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">

          <div class="title"><i class='bx bx-user'></i>Registered Users</div>
          <div class="sales-details">
            <table>
              <tr>
                <th style="width: 150px; text-align: center;"></th>
                <th style="width: 150px; text-align: center;">Users</th>
                <th style="width: 150px; text-align: center;">Type</th>
                <th style="width: 150px; text-align: center;">Delete</th>
                <th style="width: 150px; text-align: center;">View Proof</th>
              </tr>

              <?php
              require_once "../../connect.php";
              $result = mysqli_query($conn, "SELECT * FROM users WHERE typ = 'User' OR typ = 'Doctor'");
              if (!empty($result)) {
                while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td style='width: 150px; text-align: center;'>";
                  echo "</td>";
                  echo "<td style='width: 150px; text-align: center;'>";
                  echo $row['email'];
                  echo "</td>";
                  $uid = $row['user_id'];
                  echo "<td style='width: 150px; text-align: center;'>";
                  echo $row['typ'];
                  echo "</td>";
                  echo "<td style='width: 150px; text-align: center;'>";
                  echo "<a href='deleteuser.php?uid=$uid' class='btn btn-sm btn-outline-primary text-uppercase'>Delete</a>";
                  echo "</td>";
                  if ($row['typ'] == "Doctor") {
                    echo "<td style='width: 150px; text-align: center;'>";
                    echo "<a href='viewproof.php?uid=$uid' class='btn btn-sm btn-outline-primary text-uppercase'>View Proof</a>";
                    echo "</td>";
                  }
                }
              }
              ?>
            </table>
          </div>
        </div>
      </div>
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