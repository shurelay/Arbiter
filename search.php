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

if ($mysql->connect_errno) {
    echo "db connection error : " . $mysql->connect_error;
    exit();
}
?>

<html>
<head>


    <title>Search</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/spx4gxx.css">
    <link rel="stylesheet" type='text/css' href="styles.css">

</head>
<body style="background-color: #f5f5f5; font-family: 'Aktiv Grotesk'; font-weight: 400;">
<div id="nav" ; class="mb-6" style="background-color: #f5f5f5;">
    <div id="logo"><a href="frontPage.php" style="color: black">Arbiter</a></div>
</div>
<br><br><br>

<div class="container mt-6">
    <div class="header">Search hundreds of designs.</div>
    <div class="row mt-5" , style=" padding-left:10px;" ;>
        <!--        <div class="col-md-4">-->
        <!---->
        <!---->
        <!--        </div>-->
        <!---->
        <!--        <div class="col-md-4";>-->

        <form action="results.php">

            Name:
            <br>
            <input type="text" name="name"
                   style="border: #333333 solid 2px; border-radius: 0px; width:680px; height: 30px;">
            <br>
            <?php

            $sql = "
          SELECT * FROM agmaddox_arbiter.tags
          WHERE tag != '' AND tag != ' ' 
          ORDER BY tag";

            $results = $mysql->query($sql);

            if (!$results) {
                echo "SQL error: " . $mysql->error;
                exit();
            }
            ?>
            <br>
            <br>
            Tag:<br>
            <select name="tag" class="mb-0">
                <option value="ALL">Select a tag</option>
                <option value="ALL">All</option>
                <?php
                while ($currentrow = $results->fetch_assoc()) {
                    echo "<option>" . $currentrow['tag'] . "</option>";
                }
                ?>
            </select><br>
            <input type="submit" name="Explore Now" class="buttonBig"">


        </form>
        <div class="col-md-4">

        </div>
    </div>
</div>
</div>
</div>
</body>
</html>