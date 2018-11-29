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




$sql = "SELECT * from with_id WHERE id=".
    $_REQUEST["recordid"];

$results = $mysql->query($sql);

$currentrow= $results->fetch_assoc();
echo "<h1> Name: ".
    $currentrow["name"].
    "</h1>";
echo " Details: ".$currentrow["details"] .
    " and is of the type <strong>".
    $currentrow["type"]."</strong>".
    "<br>".
    "Likes: ".$currentrow["likes"]."<br>".
    " End time: ".$currentrow["e_time"]."<br>".
    " Tag: ".$currentrow["tag"]."<br>".
    " User: ".$currentrow["user"]."<br>".
    " URL: ".$currentrow["url"];

?>
<hr>

<?php
   echo "<img src='".$currentrow["url"]."'width='200'>";

