<?php

	session_start();
	//$_SESSION["password"] = "password";
	//$_SESSION["loggedin"] = false;

	if($_SESSION["loggedin"] == true){
	    echo "Access Granted";
    }
    else if (!empty($_REQUEST["password"])) {
        if($_REQUEST["password"]=="password") {
            // VALID login
            $_SESSION["loggedin"]="yes";
        }
        else {
            // INVALID login
            echo "ERROR. WRONG PASSWORD";
            echo "<br/>Return to Login Page:<br/>"."<a href='adminmain.php'>Login Page</a>";
            exit();

        }
    }
    else 	{ // NOT logged in and has NOT submitted form/login
        // include login form
        include "loginform.php";
        exit();
        // STOP the page
    }

	?>

<!---->
<!--<html>-->
<!--<head>-->
<!--    <style>-->
<!--        #text{-->
<!--            text-align: center;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<div id="text">-->
<!--<h1>Welcome</h1>-->
<!--<h3>You have successfully logged into this wonderful page!</h3>-->
<!--</div>-->
<!---->
<!---->
<!--<form action="logout.php" method="post">-->
<!--Click to logout.-->
<!--    <input type="submit" name="logout">-->
<!---->
<!--</form>-->
<!---->
<!---->
<!--</html>-->
<!---->


