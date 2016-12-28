<!DOCTYPE html>
<?php
include '../Home/Database.php';
$database = new Database();
$eventID = $_POST["eventID"];
$event = $database->getEvent($eventID);
session_start();
$sign_in_status = $_SESSION["sign_in_status"];
$currentUser = $_SESSION["currentUser"];
include '../Header.php';
?>
<html>
<title> <?php echo $event["Name"]; ?> </title>
<link href="../../includes/css/event.css" rel="stylesheet">

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
