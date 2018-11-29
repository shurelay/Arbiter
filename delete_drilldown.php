<?php
/**
 * Created by PhpStorm.
 * User: aidanmaddox
 * Date: 9/20/18
 * Time: 2:27 PM
 */


if(empty($_REQUEST["recordid"])){
    echo"ERROR. No record id exists.";
    exit();
}
else{
    echo "About to delete a Item record.";
}

if($_REQUEST["confirm"]!="yes") {
    echo "Please confirm you want to delete.";

    ?>
    <form action="">
        <input type="hidden" name="confirm" value="yes"/>
        <input type="hidden" name="recordid" value="<?php echo $_REQUEST["recordid"]?>"/>
        <label>Are you suer you want to delete?</label>
        <input type = "submit"  value="Yes"/>

    </form>

<?php
    exit();
}
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


$sql = "DELETE FROM items WHERE id=".$_REQUEST["recordid"];

echo "<hr>". $sql."<hr>";

$results = $mysql->query($sql);
if(!$results){
    echo "ERROR. Did not delete the schedule event. Something went wrong.";
    exit();
}
echo "Your schedule event was deleted.";

?>

<div>
    <a href="search_drilldown.php">Back to Search</a>
</div>
