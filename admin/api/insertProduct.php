<?php
require_once "../../connect.php";
if (isset($_POST['addProduct'])) {
    $product_name = $_POST['product_name'];
    $product_for = $_POST['product_for'];
    //  $email = strtolower($_POST['email']);
    $category = $_POST['category'];
    $price = $_POST['price'];


    $imgname = $_FILES['img']['name'];
    $target_dir = "../pages/images/products/";
    $extension = pathinfo($imgname, PATHINFO_EXTENSION);
    $randomno = rand(1000000000, 2000000000);
    $rename = 'img' . date('Ymd') . $randomno;
    $newname = $rename . '.' . $extension;
    $filename = $_FILES['img']['tmp_name'];
    $target_file = $target_dir . $newname;



    if (move_uploaded_file($filename, $target_dir . $newname)) {
        if (mysqli_query($conn, "INSERT INTO products(product_name, product_for, category, price, image) VALUES('" . $product_name . "', '" . $product_for . "', '" . $category . "','" . $price . "',  '" . $newname . "')")) {
            $success = "success";
            header("location: ../pages/products.php?success=$success");
            exit();
        } else {
            echo mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
