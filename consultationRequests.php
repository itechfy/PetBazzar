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

            <style>
                .consultation-request {
                    display: flex;
                    width: 100%;
                    justify-content: space-between;
                    align-items: center;
                    padding: 10px;
                    border: 1px solid #ccc;
                    background-color: white;
                    margin-bottom: 10px;
                }

                .consultation-request-info {
                    flex-grow: 1;
                    font-size: 16px;
                }

                .consultation-request-action {
                    display: flex;
                    align-items: center;
                }

                .consultation-request-action form {
                    display: flex;
                }

                .consultation-request-action button {
                    margin-left: 10px;
                    padding: 5px 10px;
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    border-radius: 3px;
                    cursor: pointer;
                }

                .consultation-request-action button:hover {
                    background-color: #0069d9;
                }
            </style>
        </head>

        <body>
            <div class="sidebar">
                <div class="logo-details">
                    <i class='bx'></i>
                    <span class="logo_name">Doctor Panel</span>
                </div>
                <ul class="nav-links">
                    <li>
                        <a href="doctorpanel.php">
                            <i class='bx bx-grid-alt'></i>
                            <span class="links_name">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="active">
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

                        <?php
                        require_once "connect.php";
                        if (isset($_SESSION['user_id']) !== '') {
                            $doctorId = $_SESSION['user_id'];
                            $sql = "SELECT * FROM consult_doctor WHERE status = 'pending' AND doctorId = $doctorId ORDER BY doctorId DESC";

                            $result = mysqli_query($conn, $sql);
                            if (!empty($result)) {
                                while ($row = mysqli_fetch_array($result)) {
                                    $userId = $row['userId'];
                                    $problem = $row['problem'];
                                    $petOwner = $row['petOwner'];
                                    $phoneNumber = $row['phoneNumber'];

                        ?>

                                    <div class="consultation-request">
                                        <div class="consultation-request-info">
                                            <h6><?php echo $petOwner ?> (<?php echo $phoneNumber ?>)</h6>
                                            <p>Medical issue: <?php echo $problem ?></p>
                                        </div>
                                        <div class="consultation-request-action">
                                            <form method="post" action="updateConsultationStatus.php">
                                                <input type="hidden" name="userId" value="<?php echo $userId ?>">
                                                <button type="submit" name="status" value="accepted" style="background-color: green;">Accept</button>
                                                <button type="submit" name="status" value="declined" style="background-color:red;">Decline</button>
                                            </form>
                                        </div>
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>
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