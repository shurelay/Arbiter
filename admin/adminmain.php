<?php
include "login.php";
?>

<html>
<head>
    <title>Arbiter Admin</title>
    <link rel="stylesheet" href="https://use.typekit.net/spx4gxx.css">
    <link rel="stylesheet" type='text/css' href="../styles.css">

    <style>

    </style>
</head>
<body>

<div id="nav" >
<div id="logo">Arbiter</div>


<div class="navLink">
    <a href="adminmain.php" style="text-decoration: none; color: #333333;">Admin Home</a> &emsp;&ensp;
    <a href="adminposts.php" style="text-decoration: none; color: #333333;">Posts</a> &emsp;&ensp;
    <a href="#" style="text-decoration: none; color: #333333;">Users</a> &emsp;&ensp;
    <a href="#" style="text-decoration: none; color: #333333;">Tags</a> &emsp;&ensp;
    <a href="#" style="text-decoration: none; color: #333333;">Comments</a> &emsp;&ensp;



</div>
</div><!--nav-->
<br>
<br>
<center>
<h4> Welcome to the admin page </h4>
<p>Here you can edit Posts, Users, Tags, and Comments. </p>
</center>
<?php

include "logoutform.php";
?>
</body>
<?php
/**
 * Created by PhpStorm.
 * User: aidanmaddox
 * Date: 11/18/18
 * Time: 10:19 PM
 */