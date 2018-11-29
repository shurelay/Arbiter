
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
<div id="upperContainer">
    <div class="header">
        Login</div>
    <form action="login2.php" method="post">
        <br><br>
        <input type="text" name="username"style="width:500px; height:30px" value="   Username" name="username">
        <br><br>
        <input type="text" name="password"style="width:500px; height:30px" value="  Password" name="userpassword">
        <br>
        <input type="submit" div class="buttonBig">
    </form>
</div>


</body>
</html>