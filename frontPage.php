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
//if(empty($_REQUEST['dateAfter'])) {
//
//    header('Location: search.php');
//    exit();
//}
if ($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}


?>


<html>
<head>
    <title>Arbiter</title>

    <link rel="stylesheet" href="https://use.typekit.net/spx4gxx.css">
    <link rel="stylesheet" type='text/css' href="styles.css">
    <style>
    </style>
</head>
<body>
<?php


//$count = "SELECT * FROM with_id";
//echo $Count;
//$countResults = $mysql->query($Count);
////echo $countResults;
//$idCount= $countResults->fetch_assoc();
//$result = mysql_query("SELECT * FROM table1");
//$num_rows = mysql_num_rows($result);
//
//echo "$num_rows Rows\n";
$largestIndex = 6;
$random1 = $largestIndex;
$random2 = $random1 - 1;
$random3 = $random2 - 1;
$random4 = $random3 - 1;
$random5 = $random4 - 1;
$random6 = $random5 - 1;


?>
<?php include "headerNav.php"; ?>
<?php include "miniLogin.php"; ?>

<div id="upperContainer">
    <div class="header">
        Design Feedback.<br>
        Lightning Fast.
    </div>
    <div class="buttonBig">
        <center>Explore Now</center>
    </div>


</div><!--upper-->
<div id="lowerContainer">
    <div class="subhead">
        Categories
        <br><br>
    </div>
    <div class="buttonSmall">#All</div>
    <div class="buttonSmall">#Branding</div>
    <div class="buttonSmall">#Typography</div>
    <div class="buttonSmall">#Illustration</div>
    <div class="buttonSmall">#Mobile UI/UX</div>
    <div class="buttonSmall">#Packaging</div>
    <br><br>
    <div id="galleryContainer">

        <div class="galleryMedium"
             style="background-image:url('<?php $sql = "SELECT * FROM with_id WHERE id='" . $random1 . "'";
             $results = $mysql->query($sql);
             $currentrow = $results->fetch_assoc();
             echo $currentrow["url"]; ?> ');background-position: center;background-size: cover">

            <!--            --><?php
            //            $sql = 		"SELECT * FROM with_id WHERE id=3";
            //            //echo $sql;
            //
            //
            //
            //            $results = $mysql->query($sql);
            //            //echo $results;
            //            $currentrow = $results->fetch_assoc();
            //            echo "<img src='".$currentrow["url"]."' style='max-width:90%;max-height:90%;z-index:-4'>";
            //            //echo $currentrow["url"];
            //
            //
            //            ?>

            <div class="galleryTag">
                <img src="favorite-heart-button.png" align="top">
                &ensp;300
                &emsp;<img src="add-comment-button.png" align="top">
                &ensp; 50
            </div>
        </div><!--med-->

        <div class="gallerySmall"
             style="background-image:url('<?php $sql = "SELECT * FROM with_id WHERE id='" . $random2 . "'";
             $results = $mysql->query($sql);
             $currentrow = $results->fetch_assoc();
             echo $currentrow["url"]; ?> ');background-position: center;background-size: cover">
            <div class="galleryTag"><img src="favorite-heart-button.png" align="top">
                &ensp;300
                &emsp;<img src="add-comment-button.png" align="top">
                &ensp; 50
            </div>

        </div><!--small-->
        <div class="gallerySmall"
             style="background-image:url('<?php $sql = "SELECT * FROM with_id WHERE id='" . $random3 . "'";
             $results = $mysql->query($sql);
             $currentrow = $results->fetch_assoc();
             echo $currentrow["url"]; ?> ');background-position: center;background-size: cover">
            <div class="galleryTag"><img src="favorite-heart-button.png" align="top">
                &ensp;300
                &emsp;<img src="add-comment-button.png" align="top">
                &ensp; 50
            </div>

        </div><!--small-->
        <div class="gallerySmall"
             style="background-image:url('<?php $sql = "SELECT * FROM with_id WHERE id='" . $random4 . "'";
             $results = $mysql->query($sql);
             $currentrow = $results->fetch_assoc();
             echo $currentrow["url"]; ?> ');background-position: center;background-size: cover">
            <div class="galleryTag"><img src="favorite-heart-button.png" align="top">
                &ensp;300
                &emsp;<img src="add-comment-button.png" align="top">
                &ensp; 50
            </div>

        </div><!--small-->
        <div class="gallerySmall"
             style="background-image:url('<?php $sql = "SELECT * FROM with_id WHERE id='" . $random5 . "'";
             $results = $mysql->query($sql);
             $currentrow = $results->fetch_assoc();
             echo $currentrow["url"]; ?> ');background-position: center;background-size: cover">
            <div class="galleryTag"><img src="favorite-heart-button.png" align="top">
                &ensp;300
                &emsp;<img src="add-comment-button.png" align="top">
                &ensp; 50
            </div>

        </div><!--small-->
        <div class="galleryBig"
             style="background-image:url('<?php $sql = "SELECT * FROM with_id WHERE id='" . $random6 . "'";
             $results = $mysql->query($sql);
             $currentrow = $results->fetch_assoc();
             echo $currentrow["url"]; ?> ');background-position: center;background-size: cover">>
            <div class="galleryTag"><img src="favorite-heart-button.png" align="top">
                &ensp;300
                &emsp;<img src="add-comment-button.png" align="top">
                &ensp; 50
            </div>
        </div><!--big-->

    </div><!--galleryContainer-->
    <div class="buttonBig">
        <center>See More</center>
    </div>
</div><!--lower-->
<div id="footer">
    © 2018 Rikko Suave Inc
</div><!--footer-->

</body>
</html>