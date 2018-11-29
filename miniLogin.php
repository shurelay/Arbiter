
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
    <title>Login</title>
    <link rel="stylesheet" href="https://use.typekit.net/spx4gxx.css">
    <link rel="stylesheet" type='text/css' href="styles.css">

    <style>
        .outerContainer{
            width: 300px;
            padding: 5px;
            text-align: center;
            overflow: auto;
            position: fixed;
            bottom: 0px;
            right: 0px;
            border: #333333 2px solid;
            background-color: #d8d8d8;
        }


        .formField {

            width: 200px;
            height: 30px;
            font-family: aktiv-grotesk, sans-serif;
            font-weight: 500;
            font-style: normal;
            font-size: 7pt;
            border: none;
            padding-left: 6px;
            background-color: white;
            /*border-radius: 10px;*/

        }


        #submit{
            float: none;
            margin: auto;
            margin-top: 10px;
            border: #333333 2px solid;
            padding:5px;
            padding-left: 30px;
            padding-right:30px;
            width: 100px;
            font-family: aktiv-grotesk, sans-serif;
            font-weight: 500;
            font-style: normal;
            font-size: 7pt;
            transition: all 0.7s;
            cursor: hand;
        }


        #submit:hover{
            background-color: #333333;
            color: white;
        }

    </style>
</head>

<body>

<div class="outerContainer">
    <form action="login2.php" method="post">
        <br><br>
        <input type="text" class="formField" name="username" placeholder="Username">
        <br><br>
        <input type="text" class="formField" name="userpassword" placeholder="Password">
        <br>
        <input type="submit" id="submit" value="Log In">
    </form>


</div>


</body>
</html>


