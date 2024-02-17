<?php
session_start();
if (isset($_SESSION['confirmed']) === 0) {
    session_destroy();
    header("Location: login.php?verifyNow=true");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .container {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }
    </style>
</head>

<body>

    <h2>Chat Messages</h2>
    <?php
    require_once "connect.php";
    if (isset($_SESSION['user_id']) && isset($_GET['to']) && $_GET['to'] !== '') {
        $userId = $_SESSION['user_id'];
        $chatWith = $_GET['to'];

        $result = mysqli_query($conn, "SELECT * FROM user_inbox WHERE send_by = $userId AND send_to = $chatWith OR send_by = $chatWith AND send_to = $userId");
        if (!empty($result)) {
            $loggedInUserMessage = false;
            while ($row = mysqli_fetch_array($result)) {
                $textMsg = $row['text'];
                $timestamp = $row['timestamp'];
                if ($row['send_by'] === $userId) {
                    $loggedInUserMessage = true;
                } else {
                    $loggedInUserMessage = false;
                }
    ?>
                <div class=<?php echo $loggedInUserMessage ? "container" : "container darker"; ?>>
                    <img src="img/avatar.png" alt="Avatar" class=<?php echo $loggedInUserMessage ? "" : "right"; ?> style="width:100%;">
                    <p><?php echo $textMsg; ?></p>
                    <span class=<?php echo $loggedInUserMessage ? "time-right" : "time-left"; ?>><?php echo $timestamp; ?></span>
                </div>
    <?php
            }
        }
    } else {
        die();
    }
    ?>
    <form class="container darker" style="position:fixed; z-index:1; bottom:0px; left:50%; transform:translate(-50%,-50%);">
        <textarea placeholder="Type your message..." name="msg" id="" style="width:100%; min-width:320px; height:50px; border:none;resize:none"></textarea>
        <button type="submit">Send</button>
    </form>





</body>

</html>