
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
<!--page 2`-->
<body>

<div id="nav" ;>
    <div id="logo">Arbiter</div>


    <div class="navLink">
            <?php
//            page 2 if correct password
            $_REQUEST["userpassword"];
            ?>
        <a href="../public_html/Arbiter/search.php" style="text-decoration: none; color: #333333;">Search</a> &emsp;&ensp;
        <a href="dog.com" style="text-decoration: none; color: #333333;">Give Feedback</a> &emsp;&ensp;
        <a href="cat.com" style="text-decoration: none; color: #333333;">Get Feedback</a> &emsp;&ensp;
        <a href="login.php" style="text-decoration: none; color: #333333;">Login</a>
    </div>
</div><!--nav-->
<div id="upperContainer">

    <?php
    session_start();
    include "login3.php";
    ?>

    <div class="upperContainer" style="font-family:aktiv-grotesk;font-weight: 500">

    <form action="loginLogout.php" method="post">
    <button name="logout" class="buttonBig" input type="submit">Log Out </button><br>
<!--        <input type="submit" value="log out">-->
    </form>
</div>


</body>
    </html><?php
/**
 * Created by PhpStorm.
 * User: danielleboyce
 * Date: 11/19/18
 * Time: 1:53 AM
 */