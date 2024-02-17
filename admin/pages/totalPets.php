<?php
session_start();

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
    <style>
        .products_table th,
        .products_table td {

            padding: 0.5rem 1rem;
            font-size: 16px
        }

        .add-product {
            background: #DFDFDF;
            display: flex;
            flex-wrap: wrap;
            column-gap: 5px;
            align-items: center;
            margin-top: 20px;

        }

        .add-product input,
        .add-product input label,
        .add-product select,
        .add-product button {

            font-size: 13px;
            border: 1px solid #DFDFDF;

        }

        .add-product button {
            border: 1px solid black;
            outline: none;
            color: white;
            background: #0A2558;
            width: 50px;

        }

        .add-product input {
            width: 200px;
            height: 40px
        }

        .productImg {
            display: flex;
            color: white;
            background: #0A2558;

        }
    </style>
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
                <a href="#" class="active">
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
                <span class="dashboard">Products</span>
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


            <div style="width:100%; padding:1em; border-radius: 4px; background-color:white;">
                <div class="recent-sales">
                    <div class="title"><i class='bx bxs-store'></i> Registered Pets</div>


                    <div class="sales-details">
                        <table class="products_table">

                            <tr>
                                <th style="width: max-content; text-align: left;">Pet Image</th>
                                <th style="width: max-content; text-align: left;">Pet Name</th>
                                <th style="width: max-content; text-align: left;">Pet Owner</th>
                                <th style="width: max-content; text-align: left;">Contact no</th>
                                <th style="width: max-content; text-align: left;">Price</th>
                                <th style="width: max-content; text-align: left;">Category</th>
                            </tr>
                            <?php

                            require_once "../../connect.php";
                            $result = mysqli_query($conn, "SELECT * FROM pets");
                            if (!empty($result)) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";

                                    echo "<td style='width: max-content; text-align: left;'>";
                                    echo "<img src='../../" . json_decode($row['img'])[0] . "' width='50'/>";
                                    echo "</td>";
                                    $uid = $row['pet_id'];
                                    echo "<td style='width: max-content; text-align: left;'>";
                                    echo $row['ttle'];
                                    echo "</td>";
                                    echo "<td style='width: max-content; text-align: left;'>";
                                    echo $uid;
                                    echo "</td>";
                                    echo "<td style='width: max-content; text-align: left;'>";
                                    echo $row['contact'];
                                    echo "</td>";
                                    echo "<td style='width: max-content; text-align: left;'>";
                                    echo $row['price'];
                                    echo "</td>";
                                    echo "<td style='width: max-content; text-align: left;'>";
                                    echo $row['cate'];
                                    echo "</td>";

                                    echo "<td style='width: max-content; text-align: left;'>";
                                    echo "<a href='../../deletePet.php?uid=$uid' class='btn btn-sm btn-outline-primary text-uppercase'>Delete</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No Data</td></tr>";
                            }
                            ?>
                        </table>
                    </div>
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
    <script>
        function editRow(row) {
            // Get the row data
            var rowData = row.parentNode.parentNode;

            // Create input fields for each cell
            //index[2], index[3] have select elements

            for (var i = 1; i < rowData.cells.length - 2; i++) {
                if (i == 2 || i == 3) {
                    var options = i === 2 ? ["cat", "dog", "bird"] : ['pet_food', 'pet_accessories'];
                    var cell1 = rowData.cells[i];
                    var select = document.createElement("select");

                    // Populate select options

                    for (var j = 0; j < options.length; j++) {
                        var option = document.createElement("option");
                        option.text = options[j];
                        select.add(option);
                    }

                    select.value = cell1.innerText;
                    cell1.innerText = "";
                    cell1.appendChild(select);
                } else {
                    var cell = rowData.cells[i];
                    var input = document.createElement("input");
                    input.type = "text";
                    input.value = cell.innerText;
                    input.style.width = "100px"
                    cell.innerText = "";
                    cell.appendChild(input);
                }


            }

            // Replace edit button with save button
            var editBtn = row.parentNode;
            editBtn.innerHTML = "<button onclick='saveRow(this)' class='btn btn-sm btn-outline-primary text-uppercase'>Save</button>";
        }

        function saveRow(row) {
            // Get the row data
            var rowData = row.parentNode.parentNode;

            // Update the table with new values
            for (var i = 1; i < rowData.cells.length - 2; i++) {
                var cell = rowData.cells[i];
                var input = cell.firstChild;
                cell.innerText = input.value;
            }

            // Replace save button with edit button
            var saveBtn = row.parentNode;
            saveBtn.innerHTML = "<button onclick='editRow(this)' class='btn btn-sm btn-outline-primary text-uppercase'>Edit</button>";
        }
    </script>

</body>

</html>