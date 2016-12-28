<!DOCTYPE html>
<?php
include '../Home/Database.php';
$database = new Database();
$eventID = $_POST["eventID"];
$event = $database->getEvent($eventID);
$place = $database->getPlace($event["Place_ID"]);
session_start();
$sign_in_status = $_SESSION["sign_in_status"];
$currentUser = $_SESSION["currentUser"];

?>
<title> <?php echo $event["Name"]; ?> </title>
<?php include '../Header.php';?>

<html>

<link href="../../includes/css/event.css" rel="stylesheet">

<h2>Event Information</h2>

    <div class="login-page">
        <div class="form">

            <form class="Event-form" method="POST" action="../Login/SignIn.php">
                <img src=<?php echo $event["Picture"]?> alt="Sport" height="132" width="440">
                <h4>Event Name: <?php echo $event["Name"]?></h4>
                <h4>Place :<?php echo $place["Name"]?></h4>
                <h4>Address :<?php echo $place["Address"]?></h4>
                <h4>Event Date :<?php echo $event["Date"]?></h4>
                <h4>Event Time:<?php echo $event["Time"]?></h4>
                <h4>Event Number of tickets left: <?php echo $event["num_of_tickets_left"]?><h4/>
                <button class="btn" type="submit">Buy Tickets</button>
                <p class="message"><a href="../Login/SignUp.php">Not Registered? Create An Account.</a></p>
            </form>
        </div>
    </div>

<div class="footer">Havefun.com &copy; 2016</div>
