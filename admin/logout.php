<?php
/**
 * Created by PhpStorm.
 * User: aidanmaddox
 * Date: 11/1/18
 * Time: 2:45 PM
 */
// logout routine
session_start();
unset($_SESSION["loggedin"]);
echo "LOGGED OUT";



?>

<html>
<br/>
Return to login page:
<a href="adminmain.php">Login Page</a>
</html>
