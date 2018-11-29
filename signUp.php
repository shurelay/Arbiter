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


if ($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}

?>


<html>

<title>Sign Up</title>
<link rel="stylesheet" href="https://use.typekit.net/spx4gxx.css">
<link rel="stylesheet" type='text/css' href="styles.css">


<style>
    /*body{*/
        /*background-color: #d8d8d8;*/
    /*}*/
    /*#outercontainer {*/
    /*width: 420px;*/
    /*padding: 15px;*/
    /*margin: auto;*/
    /*margin-top: 6%;*/
    /*text-align: center;*/
    /*background-color: white;*/
    /*}*/



    /*.submit {*/
        /*border: #333333 2px solid;*/
        /*padding: 10px;*/
        /*padding-left: 30px;*/
        /*padding-right: 30px;*/
        /*width: 125px;*/
        /*font-family: aktiv-grotesk, sans-serif;*/
        /*font-weight: 500;*/
        /*font-style: normal;*/
        /*font-size: 11pt;*/
        /*margin: auto;*/
        /*transition: all 0.7s;*/
        /*cursor: hand;*/
        /*margin-top: 3%;*/
    /*}*/

    /*.submit:hover {*/
        /*background-color: #333333;*/
        /*color: white;*/
    /*}*/

    .formField {

        width: 500px;
        height: 40px;
        font-family: aktiv-grotesk, sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 11pt;
        border: none;
        padding-left: 13px;
        background-color: white;
        /*border-radius: 10px;*/

    }

    .subhead {
        font-family: Tiempos Fine Test;
        src: url("TiemposFineTest-Black.otf");
        font-size:40pt;

    }
</style>
</head>
<body>

<?php include "headerNav.php"; ?>
<!--<div id="upperContainer">-->
<!--    <div class="subhead">Sign Up</div>-->
<!--    <form action="signUpAdd.php">-->
<!--        <input type="text" class="formField" name="newUsername" placeholder="Username">-->
<!--        <br><br>-->
<!--        <input type="text" class="formField" name="newPassword" placeholder="Password">-->
<!--        <br><br>-->
<!--        <input type="submit" class="submit" value="Sign Up">-->
<!--    </form>-->
<!--</div>-->
<div id="upperContainer">
    <div class="subhead">Sign Up</div>
    <form action="signUpAdd.php">
        <br><br>
        <input type="text" class="formField" name="newUsername" placeholder="Username">
        <br><br>
        <input type="text" class="formField" name="newPassword" placeholder="Password">

        <br>
        <input type="submit" class="buttonBig" value="Sign Up">

    </form>
</div>


</body>
</html>