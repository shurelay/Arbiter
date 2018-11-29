<?php
$host = "webdev.iyaserver.com";
$userid = "agmaddox";
$userpw = "Trident1925";
$db = "agmaddox_arbiter";


$mysql = new mysqli(
    $host,
    $userid,
    $userpw,
    $db
);
?>

<html>
<head>
    <title>
        Sign Up
    </title>
    <link rel="stylesheet" href="https://use.typekit.net/spx4gxx.css">
    <link rel="stylesheet" type='text/css' href="styles.css">
    <style>
        #outercontainer {
            width: 420px;
            padding: 15px;
            margin: auto;
            margin-top: 6%;
            text-align: center;
            background-color: white;
        }

        .alertText {

            font-family: aktiv-grotesk, sans-serif;
            font-weight: 500;
            font-style: normal;
            font-size: 11pt;
            margin-bottom: 3%;

        }

        a {
            color: black;
        }

    </style>
</head>
<body>
<?php include "headerNav.php"; ?>
<div id="outercontainer">
    <div class="alertText">
        <?php
        if ($mysql->connect_errno) {
            echo "db connection error : " . $mysql->connect_error;
            exit();
        }


        // stop direct to results page
        if (empty($_REQUEST['newUsername'])) {
            echo "Please enter a new username on the <a href=\"signUp.php\">Sign Up</a> page";
            exit();
        }


        if (empty($_REQUEST['newPassword'])) {
            echo "Please enter a new password on the <a href=\"signUp.php\">Sign Up</a> page";
            exit();
        }

        ?>


        <?php
        $sql = "
INSERT INTO users
(user, password, level)
VALUES
('" . $_REQUEST["newUsername"] . "','" . $_REQUEST["newPassword"] . "',1)";


        $results = $mysql->query($sql);

        echo $sql;
        echo "<hr>";

        if (!$results) {
            echo $mysql->error;
            exit();
        } else {
            echo "I have added user " . $_REQUEST["newUsername"];
        }
        ?>
    </div>
    <div>

</body>

<html>