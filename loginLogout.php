
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
<body>
<div id="nav" ;>
    <div id="logo">Arbiter</div>
    <!--page 1`-->

    <div class="navLink">
        <a href="../public_html/Arbiter/search.php" style="text-decoration: none; color: #333333;">Search</a> &emsp;&ensp;
        <a href="dog.com" style="text-decoration: none; color: #333333;">Give Feedback</a> &emsp;&ensp;
        <a href="cat.com" style="text-decoration: none; color: #333333;">Get Feedback</a> &emsp;&ensp;
        <a href="login.php" style="text-decoration: none; color: #333333;">Login</a>
    </div>
</div><!--nav-->
<div class="upperContainer">
    <?php
    // logout routine
    session_start();
    unset($_SESSION["loggedin"]);
    echo "<div id=\"upperContainer\" style=\"font-family:aktiv-grotesk;font-weight: 500\">";
    echo "goodbye friend come back soon";
    ?>


    <form action="login.php" method="post">
        <button name="logout" class="buttonBig" input type="submit">Login </button><br>
        <!--        <input type="submit" value="log out">-->
    </form>

<!---->
<!--    <form action="login.php" method="post"-->
<!--    <input type="button" name="login"><br> <input type="submit" value="back to login">-->
<!--    </form>-->
</div>
</body>
</html>

