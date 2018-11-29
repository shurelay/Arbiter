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

$sql = "SELECT * FROM view_with_url WHERE name LIKE '%" . $_REQUEST['name'] . "%'";


if ($_REQUEST['tag'] != "ALL") {
    $sql .= " AND tag ='" . $_REQUEST["tag"] . "'";
}


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
            float: left;
            overflow: hidden;
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
            position: absolute;
            /*top: 530px;*/
            top: 50px;
            width: 500px

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
<div id="nav" ; class="mb-6" style="background-color: #f5f5f5;">
    <div id="logo"><a href="frontPage.php" style="color: black">Arbiter</a></div>
</div>
<br><br><br>
<div class="row">
    <div class="col-sm-2">

    </div>


    <div class="col-sm-8">
        <?php


        echo "You searched for posts named ' " . $_REQUEST['name'] . " ', with the tag: " . $_REQUEST["tag"] . "<br>" . "Check out these <strong>" .
            $results->num_rows .
            " results.</strong><br><br>";

        while ($currentrow = $results->fetch_assoc()) {


            echo "<div class='imgBigBox'><div class='imgBox'><img class='boxImg' src='" . $currentrow['url'] . "'>" .

                "<div class='title'><strong>" . "<br>" .
                "<a href='details.php?recordid=" . $currentrow["id"] . "'>" .
                $currentrow["name"] . "</a>" . "</strong>" .
                " in " . $currentrow['tag'] . "</em></div></div></div>";



            echo "<br><br><br>";

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
        ?>
    </div>
    <div class="col-sm-2">

    </div>

</div>
</body>