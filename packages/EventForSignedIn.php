<!DOCTYPE html>
<?php
include 'Database.php';
$database = new Database();
$eventID = $_POST["eventID"];
$event = $database->getEvent($eventID);
$place = $database->getPlace($event["Place_Name"]);
$_POST["event"]= $event;
session_start();

$isAdmin = $database->isAdmin($_SESSION['currentUser']);
if ($database->isAdmin($_SESSION['currentUser']))
    $ref = "AdminHomePage.php";
else
    $ref = "UserHome.php";
?>

    <title> <?php echo $event["Name"]; ?> </title>

    <html>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../includes/css/event.css" rel="stylesheet">

    <ul class="w3-navbar w3-white w3-large">
        <li class="shrift"><a href="<?php echo $ref ?> " class="w3-black"></i>HaveFun</a></li>
        <li class="shrift"><a href="About.php">About</a></li>
        <li class="shrift"><a href="contact.php">Contact us</a></li>
        <li class="w3-right w3-light-grey shrift"><a href="logout.php">Sign Out</a></li>

    </ul>
<h2>Event Information</h2>

<div class="login-page">
    <div class="form">

        <form class="Event-form" method="POST" action="Buy.php">
            <img src=<?php echo $event["Picture"]?> alt="Sport" height="300" width="440">
            <h4>Event Name: <?php echo $event["Name"]?></h4>
            <h4>Place :<?php echo $place["Name"]?></h4>
            <h4>City :<?php echo $place["City"]?></h4>
            <h4>Event Date :<?php echo $event["Date"]?></h4>
            <h4>Event Time:<?php echo $event["Time"]?></h4>
            <h4>Event Number of tickets left: <?php echo $event["num_of_tickets_left"]?><h4/>
                <button class="btn"  type="submit">Buy Tickets</button>
                <p class="message"><a href="Buy.php">Not Registered? Create An Account.</a></p>
                <input hidden type="password" value=<?php echo $eventID ?>   name="eventID"/>
        </form>
    </div>
</div>

<div class="footer">Havefun.com &copy; 2016</div>
