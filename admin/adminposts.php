<?php
include "login.php";
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

$sql = "SELECT * FROM with_id";





//$sql .=		" ORDER BY " . $_REQUEST['sortorder'];


$results = $mysql->query($sql);


if (!$results) {
    echo "SQL error: " . $mysql->error;
    exit();
}

?>

<html>
<head>
    <link rel="stylesheet" type='text/css' href="styles.css">
    <style>
        .imgBigBox {

            overflow: hidden;
            height: 250px;
            width: 250px;
            background-position: center;
            background-size: cover;
            margin: 10px;
            margin-left: 50px;
            margin-bottom: 25px;
        }

        .imgBox {
            background-color: red;
            /*float: left;*/
            overflow: hidden;
            width: 500px;
            margin: 20px;
            height: 500px;

        }

        .boxImg {
            /*height: 30vw;*/
            height: 500px;
            object-fit: contain;
            display: block;
            margin: auto;

        }

        .title {
            background-color: #f5f5f5;
            padding-left: 20px;
            height: 70px;
            font-size: 15pt;

            /*top: 530px;*/


        }
        .title a{
            font-size: 20pt;
            color: slategray;
        }
        .title a:hover{
            color: #000;
            transition-duration: 250ms;
        }

        .itemRow{
            margin-left: 50px;
            margin-right: 50px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/spx4gxx.css">


</head>
</html>
<body style="background-color: #f5f5f5;font-family: 'Aktiv Grotesk'; font-weight: 400;">
<div class="navLink">
    <a href="adminmain.php" style="text-decoration: none; color: #333333;">Admin Home</a> &emsp;&ensp;
    <a href="adminposts.php" style="text-decoration: none; color: #333333;">Posts</a> &emsp;&ensp;
    <a href="#" style="text-decoration: none; color: #333333;">Users</a> &emsp;&ensp;
    <a href="#" style="text-decoration: none; color: #333333;">Tags</a> &emsp;&ensp;
    <a href="#" style="text-decoration: none; color: #333333;">Comments</a> &emsp;&ensp;



</div>
</div><!--nav-->
<br><br><br>



<?php


echo "Number of Posts: ".$results->num_rows;

while ($currentrow = $results->fetch_assoc()) {
    // echo "<div class='imgBigBox' style='background-image: url( ".$currentrow['url'].")'><div class='imgBox'><img class='boxImg' src='" . $currentrow['url'] . "'>" .
    echo "<hr>";
    echo "<div class='row itemRow'>";
    echo "<div class='imgBigBox' style='background-image: url( ".$currentrow['url'].")'></div>";
    echo "<br>";
    echo   "<div class='title'><strong>" . "<br>" .
        "<a href='details.php?recordid=" . $currentrow["id"] . "'>" .
        $currentrow["name"] . "</a>" . "</strong><br>". $currentrow['tag'] ."<br>".
        "<a href='details_drilldown.php?recordid=".$currentrow["id"]."'>Details</a>  " . " | ".
        "<a href='edit_drilldown.php?recordid=".$currentrow["id"]."'>Edit</a>  " . " | ".
        "<a href='delete_drilldown.php?recordid=".$currentrow["id"]."'>Delete</a>  ".
        "</em></div></div></div>";




    echo "</div>";

}

while ($currentrow = $results->fetch_assoc()) {
    echo "" .
        $currentrow['name'] . " --- Location --- " .

        $currentrow["location"] .
        " --- Class type --- " .
        $currentrow["type"] .
        " --- Date --- " .
        $currentrow["date"] .
        "</em><br>";
}
include "logoutform.php";
?>



</div>
</body>