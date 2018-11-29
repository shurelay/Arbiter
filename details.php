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


echo "Returning class details for ".
    $_REQUEST["recordid"];




$sql = "SELECT * from view_with_url WHERE id=".
    $_REQUEST["recordid"];

$results = $mysql->query($sql);

$currentrow= $results->fetch_assoc();
echo "<h1> Name: ".$currentrow["name"]."</h1>";
echo " in the category of ".$currentrow["tag"];

//echo "<img src='".$currentrow['url']."' style='width:500px'>";

?>

<hr>

