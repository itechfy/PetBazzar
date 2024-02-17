<?php
session_start();
require_once "connect.php";
if (isset($_POST['addpet'])) {
  $user_id = $_SESSION['user_id'];
  $ttle = $_POST['ttle'];
  $price = $_POST['price'];
  $locat = $_POST['locat'];
  $descr = $_POST['descr'];
  $cate = $_POST['cate'];
  $clr = $_POST['clr'];
  $breed = $_POST['breed'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $comment = $_POST['comment'];
  $pet_for = $_POST['pet_for'];
  $timestmp = date('d-M-Y-H:i:s', $phptime);
  $contact = $_SESSION['phone'];
  $imagesArray = [];
  $images = $_FILES['images'];
  $isMoved = false;
  for ($i = 0; $i < count($images['name']); $i++) {

    $image_name = $images['name'][$i];
    $image_tmp_name = $images['tmp_name'][$i];
    $image_type = $images['type'][$i];
    $image_size = $images['size'][$i];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image_name);

    if (move_uploaded_file($image_tmp_name, $target_file)) {
      $isMoved = true;
      array_push($imagesArray, $target_file);
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }



  $imgname1 = $_FILES['img1']['name'];
  $extension1 = pathinfo($imgname1, PATHINFO_EXTENSION);
  $randomno1 = rand(2000000000, 3000000000);
  $rename1 = 'img' . date('Ymd') . $randomno1;
  $newname1 = $rename1 . '.' . $extension1;
  $filename1 = $_FILES['img1']['tmp_name'];
  $target_file1 = $target_dir . $newname1;
  if ($isMoved && move_uploaded_file($filename1, 'uploads/' . $newname1)) {
    if (mysqli_query($conn, "INSERT INTO pets(user_id, img, ttle, price, locat, descr, cate, clr, breed, gender, age, comment, timestmp, contact, history,pet_for) VALUES('" . $user_id . "', '" . json_encode($imagesArray) . "', '" . $ttle . "','" . $price . "',  '" . $locat . "', '" . $descr . "', '" . $cate . "', '" . $clr . "', '" . $breed . "', '" . $gender . "', '" . $age . "', '" . $comment . "', '" . $timestmp . "', '" . $contact . "', '" . $target_file1 . "', '" . $pet_for . "')")) {
      $success = "success";
      header("location: addpet.php?success=$success");
      exit();
    } else {
      echo mysqli_error($conn);
    }
  }
  mysqli_close($conn);
}
