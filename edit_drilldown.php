<?php

if(empty($_REQUEST['recordid'])) {
    echo "Please go through <a href='adminposts.php'>search</a> page.";
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
?>
<html>
<head>
    <title>Drill down: Arbiter</title>
    <style>


        #container {
            padding: 30px;
            margin-top: 100px;
            background-color: grey;
            width: 650px;
            text-align: left;
            color:white;
        }

        .label {
            float:left;
            clear:both;
            width: 120px;
        }
        .title {
            width: 500px;

            float:left;
        }

        .link {
            width: 100px;
            float:left;
            margin-left: 50px;


        }

    </style>
</head>
<body>
<div id="container">
    <h1> Post Item Edit<hr></h1>

    <?php
    //
    //echo $_REQUEST["recordid"];

    $sql = "SELECT * from with_id WHERE id = " .
        $_REQUEST['recordid'];

    $results = $mysql->query($sql);

    if(!$results) {
        echo "<hr>Your SQL:<br> " . $sql . "<br><br>";
        echo "SQL Error: " . $mysql->error . "<hr>";
        exit();
    }

//    $name_sql = "SELECT * FROM names";
//    $name_results = $mysql->query($name_sql);
//    if(!$name_results) {
//        echo "<hr>Your SQL:<br> " . $name_sql . "<br><br>";
//        echo "SQL Error: " . $mysql->error . "<hr>";
//        exit();
//    }

    $tag_sql = "SELECT * FROM tags";
    $tag_results = $mysql->query($tag_sql);
    $tagdata = $tag_results->fetch_assoc();

    if(!$tag_results) {
        echo "<hr>Your SQL:<br> " . $tag_sql . "<br><br>";
        echo "SQL Error: " . $mysql->error . "<hr>";
        exit();
    }

    $user_sql="SELECT * FROM users";
    $user_results = $mysql->query($user_sql);
    $userdata = $user_results->fetch_assoc();

    if(!$user_results) {
        echo "<hr>Your SQL:<br> " . $user_sql . "<br><br>";
        echo "SQL Error: " . $mysql->error . "<hr>";
        exit();
    }


    while($currentrow = $results->fetch_assoc()) {
        ?>
        <form action="update_drilldown.php" id="adminForm">



<!--        <em>Name:</em>-->
<!--            --><?php //echo $currentrow['name']; ?>
<!--            <select name="name">-->
<!--                <option> --><?php //echo $currentrow['name']; ?><!--</option>-->
<!--                --><?php
//                    while($namerow = $name_results->fetch_assoc()){
//                       echo "<option value='". $namerow["name_id"] ."'>".
//                         $namerow["name"]."</option>";
//                }
//                ?>
<!--            </select>-->

            <em>Name:</em><strong>
                <input type="text" name="name" value="<?php echo $currentrow['name']; ?>"/>

            </strong>
            <br>
            <br>


            <em>Details:</em><strong><br>
                <textarea name="details" rows="5" cols="55" form="adminForm"><?php echo $currentrow['details']; ?></textarea>

            </strong>
            <br>
            <br>
            <em>Post Tag:</em>
<!--            --><?php //echo $currentrow['tag']; ?>
            <select name="tag">
<!--                <option> --><?php //echo $currentrow['tag']; ?><!--</option>-->

<!--                <option value='--><?php //echo $tagdata['tag_id']; ?><!-- ' selected='1'>-->
<!--                --><?php //echo $currentrow['tag'] ?>
<!--                </option>-->

                <?php
                while($tagrow = $tag_results->fetch_assoc()){
                    echo "<option value='". $tagrow["tag_id"] ."'>".
                        $tagrow["tag"]."</option>";
                }
                ?>
            </select>
            <br>
            <br>
            <em>User:</em>


            <select name="user" style="width: 100px">

<!--                <option value='--><?php //echo $userdata['user_id']; ?><!-- ' selected='1'>-->
<!--                    --><?php //echo $currentrow['user'] ?>
<!--                </option>-->

                <?php
                while($userrow = $user_results->fetch_assoc()){
                    echo "<option value='". $userrow["user_id"] ."'>".
                        $userrow["user"]."</option>";
                }
                ?>
            </select>
            <br>
            <br>
            <em>Likes:</em><strong>
                <input type="number" name="likes" value="<?php echo $currentrow['likes']; ?>"/>

            </strong>

            <br>
            <br>
            <input type="hidden" name="recordid" value="<?php echo $_REQUEST["recordid"]; ?>">
            <input type="submit" name="submit" />


        </form>
        <?php
    } // end loop
    ?>
</div>

</body></html>
