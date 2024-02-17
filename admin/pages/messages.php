<?php
session_start();
if (isset($_SESSION['typ'])) {
    if ($_SESSION['typ'] === "Admin") {
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
            <title>Admin Panel</title>
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
                        <a href="registeredusers.php">
                            <i class='bx bx-user'></i>
                            <span class="links_name">Users</span>
                        </a>
                    </li>

                    <li>
                        <a href="messages.php" class="active">
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
                        <span class="dashboard">Messages</span>
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

                <div class="home-content" style="width:100%;">


                    <div class="sales-boxes" style="width:100%;">
                        <div class="recent-sales box" style="width:100%;">
                            <div class="title"><i class='bx bx-message-dots'></i> Messages</div>
                            <br>

                            <div class="sales-details">
                                <?php
                                require_once "../../connect.php";
                                $result = mysqli_query($conn, "SELECT * FROM admin_inbox");
                                if (!empty($result)) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $fullName = $row['fullName'];
                                        $email = $row['email'];
                                        $subject = $row['subject'];
                                        $message = $row['message'];

                                ?>
                                        <div style="width:100%;">
                                            <span style="font-size:13px;"><b>From:</b> <?php echo $fullName; ?> &nbsp;&nbsp;<b>Email:</b> <?php echo $email; ?></span>
                                            <div>
                                                <h3 style="font-size: 16px; margin:10px 0;"><u>Title: <?php echo $subject; ?></u></h3>
                                                <p style="font-size: medium;display:block;width:100%; background-color:#eeeeee;border-radius:5px; padding:0.5rem;"><?php echo $message; ?></p>
                                            </div>
                                        </div>
                                <?php

                                    }
                                } else {
                                    echo "No Messages Yet!";
                                } ?>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <br>

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
        header("Location: index.php");
    }
} else {
    echo "404, Page doesn't exists";
} ?>