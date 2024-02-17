<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/SMTP.php';

require_once "connect.php";


if (isset($_POST['signup'])) {
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = strtolower($_POST['email']);
    $pwd = $_POST['pwd'];
    $typ = $_POST['typ'];
    $status = "Disabled";
    //Searched location details of doctor
    $lat = (float) $_POST['lat'] ?? 0;
    $long = (float) $_POST['long'] ?? 0;
    $location_name = $_POST['location_name'] ?? '';
    // Generate confirmation code
    $confirmation_code = md5(uniqid(rand(), true));
    $target_dir = "uploads/";


    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '" . $email . "'");
    if ($row = mysqli_fetch_array($result)) {
        $error = "error1";
        header("location: register.php?error=$error");
    } else {
        if ($typ == "Doctor") {
            $imgname = $_FILES['img']['name'];
            $extension = pathinfo($imgname, PATHINFO_EXTENSION);
            $randomno = rand(0, 1000000000);
            $rename = 'img' . date('Ymd') . $randomno;
            $newname = $rename . '.' . $extension;
            $filename = $_FILES['img']['tmp_name'];
            $test = $target_dir . $imgname;
            $target_file = $target_dir . $newname;
            //Profile picture
            $dp = $_FILES['dp']['name'];
            $extensiondp = pathinfo($dp, PATHINFO_EXTENSION);

            $renamedp = 'dp' . date('Ymd') . $randomno;
            $newnamedp = $renamedp . '.' . $extensiondp;
            $filenamedp = $_FILES['dp']['tmp_name'];
            $testdp = $target_dir . $dp;
            $target_filedp = $target_dir . $newnamedp;
            if ($test != "uploads/") {
                if (move_uploaded_file($filename, 'uploads/' . $newname) && move_uploaded_file($filenamedp, 'uploads/' . $newnamedp)) {
                    if (mysqli_query($conn, "INSERT INTO users(fname, phone, email ,pwd, typ, proof, status,confirmation_code,confirmed,profilePicture,lat,lon,location_name) VALUES('" . $fname . "', '" . $phone . "', '" . $email . "', '" . md5($pwd) . "', '" . $typ . "', '" . $target_file . "', '" . $status . "', '" . $confirmation_code . "', 0,'" . $target_filedp . "'," . $lat . "," . $long . ",'" . $location_name . "')")) {
                        // SMTP configuration
                        $smtp_username = 'petbazzaar@gmail.com';
                        $smtp_password = 'oldtdfpfpkbdwoji';
                        $smtp_host = 'smtp.gmail.com';
                        $smtp_port = 465;
                        $smtp_security = 'ssl';

                        // Email configuration
                        $to = $email;
                        $subject = 'Confirm your Email Address - PetBazzar';

                        $mail = new PHPMailer(true);

                        // Set up SMTP
                        $mail->isSMTP();
                        $mail->Host = $smtp_host;
                        $mail->SMTPAuth = true;
                        $mail->Username = $smtp_username;
                        $mail->Password = $smtp_password;
                        $mail->SMTPSecure = $smtp_security;
                        $mail->Port = $smtp_port;

                        // Set up email content
                        $mail->setFrom($smtp_username);
                        $mail->addAddress($to);

                        $mail->isHTML(true);

                        $mail->Subject = $subject;

                        $url = 'https://www.petbazzar.store/confirm.php?email=' . $email . '&token=' . $confirmation_code;
                        require_once "template/email-template.php";

                        $mail->Body = $template;

                        // Send the email
                        if (!$mail->send()) {
                            header("Location: login.php?error=failed");
                        } else {
                            // Redirect to confirmation page
                            header("Location: login.php?verifyNow=true");
                        }
                        exit();
                    } else {
                        echo mysqli_error($conn);
                    }
                } else {
                }
            } else {
                $error = "error";
                header("location: register.php?error=$error");
                exit();
            }
        } else if ($typ == "User") {
            //Profile picture
            $dp = $_FILES['dp']['name'];
            $extensiondp = pathinfo($dp, PATHINFO_EXTENSION);
            $randomno2 = rand(0, 1000000000);

            $renamedp = 'dp' . date('Ymd') . $randomno2;
            $newnamedp = $renamedp . '.' . $extensiondp;
            $filenamedp = $_FILES['dp']['tmp_name'];
            $testdp = $target_dir . $dp;
            $target_filedp = $target_dir . $newnamedp;
            if (move_uploaded_file($filenamedp, 'uploads/' . $newnamedp)) {

                if (mysqli_query($conn, "INSERT INTO users(fname, phone, email ,pwd, typ, confirmation_code,confirmed,profilePicture) VALUES('" . $fname . "', '" . $phone . "', '" . $email . "', '" . md5($pwd) . "', '" . $typ . "', '" . $confirmation_code . "', 0,'" . $target_filedp . "')")) {
                    // SMTP configuration
                    $smtp_username = 'petbazzaar@gmail.com';
                    $smtp_password = 'oldtdfpfpkbdwoji';
                    $smtp_host = 'smtp.gmail.com';
                    $smtp_port = 465;
                    $smtp_security = 'ssl';

                    // Email configuration
                    $to = $email;
                    $subject = 'Confirm your Email Address - PetBazzar';

                    $mail = new PHPMailer(true);

                    // Set up SMTP
                    $mail->isSMTP();
                    $mail->Host = $smtp_host;
                    $mail->SMTPAuth = true;
                    $mail->Username = $smtp_username;
                    $mail->Password = $smtp_password;
                    $mail->SMTPSecure = $smtp_security;
                    $mail->Port = $smtp_port;

                    // Set up email content
                    $mail->setFrom($smtp_username);
                    $mail->addAddress($to);

                    $mail->isHTML(true);

                    $mail->Subject = $subject;

                    $url = 'http://localhost/petbazzar/confirm.php?email=' . $email . '&token=' . $confirmation_code;
                    require_once "template/email-template.php";

                    $mail->Body = $template;

                    // Send the email
                    if (!$mail->send()) {
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        echo '<script>console.log("Email sent successfully.")</script>';
                    }

                    // Redirect to confirmation page
                    header("Location: login.php?verifyNow=true");
                    exit();
                } else {
                    echo mysqli_error($conn);
                }
            }
        }
    }
    mysqli_close($conn);
}
