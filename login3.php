
<?php
//            page 2 if wrong password
session_start();
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

if($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}
?>

<html>
<head>
    <title>Arbiter Login Page</title>
    <link rel="stylesheet" href="https://use.typekit.net/spx4gxx.css">
    <link rel="stylesheet" type='text/css' href="styles.css">


    <style>

    </style>
</head>

<body>
<div id="nav" ;>
<!--    <div id="logo">Arbiter</div>-->


    <div style="font-family:aktiv-grotesk;font-weight: 500">
        <?php
        if($_SESSION["loggedin"] == "yes") {
            echo "You have logged in";
        }
        else if (!empty($_REQUEST["password"])) {
            if($_REQUEST["password"]=="ARBITER_ROX") {
                $_SESSION["loggedin"]="yes";
            }
            else {
                echo "You entered an incorrect username or password.".

                    "<form action=\"login.php\" method=\"post\"
          <br> <input type=\"submit\" value=\"try again\" class=\"buttonBig\">
</form>";
                exit();
            } }
        else {
            include "login.php";
            exit();
        }
        ?>
</div>

</body>
</html><?php
