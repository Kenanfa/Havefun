<!DOCTYPE html>
<?php
include '../Home/Database.php';
$database = new Database();
$eventID = $_POST["eventID"];
?>
<html>
<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../includes/css/event.css" rel="stylesheet">
<ul class="w3-navbar w3-white w3-large">
    <li><a href="../Home/index.php" class="w3-black"></i>HaveFun</a></li>
    <li class=><a href="../About/About.php">About</a></li>
    <li><a href="../Contact/contact.php">Contact us</a></li>
    <li class="w3-right w3-light-grey"><a href="../Login/SignIn.php">Sign in</a></li>
</ul>



<h2>Event Information</h2>

    <div class="login-page">
        <div class="form">

            <form class="Event-form" method="POST" action="../Login/SignIn.php">
                <img src="../img/Sport.jpg" alt="Sport" height="132" width="440">
                <h4>Event ID:</h4>
                <h4>Event Name: <h4/>
                    <h4>Event Category: <h4/>
                        <button class="btn" type="submit" >Buy Tickets</button>
                <p class="message"><a href="../Login/SignUp.php">Not Registered? Create An Account.</a></p>
            </form>
        </div>
    </div>

<div class="footer">Havefun.com &copy; 2016</div>
