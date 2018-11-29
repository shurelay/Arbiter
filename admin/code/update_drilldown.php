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








$sql = "UPDATE items SET " .
//    " name = '" . $_REQUEST["name"]."',".
//    " details = '". $_REQUEST["details"]."' , " ;


    " name = '" . $_REQUEST["name"] . " ', " .
    " details = '" . $_REQUEST["details"]	 ."' , " .
   " tag_id = " . $_REQUEST["tag"]	 ." , " .
    " user_id = " . $_REQUEST["user"]	 ." , " .
    " likes = " . $_REQUEST["likes"].
    " WHERE id = " . $_REQUEST["recordid"].";";


echo "Returning class details for ".
    $_REQUEST["recordid"];


echo "<hr>".$sql."<hr>";


$results = $mysql->query($sql);

if(!$results){
    echo "Could not save changes";
    echo $mysql->error;
    exit();


}

echo "Changes Saved";

?>

<div>
    <a href="adminposts.php">Return to Posts Page</a>
</div>