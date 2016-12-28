<!DOCTYPE html>
<html>
<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="../../includes/css/header.css" rel="stylesheet">

<?php
include '../Home/Database.php';
$database = new Database();
$randomEvents = $database->getRandomEvents();
$list_catgs_query = "Select Category from Event group by Category";
session_start();
?>
<script>
    function signOut() {
        <?php  $_SESSION["sign_in_status"] = false; ?>
        window.location.href = "SignUp.php";
    }
</script>

<ul class="w3-navbar w3-white w3-large">
    <li class="shrift"><a href="../Profile/AdminHomePage.php" class="w3-black"></i>HaveFun</a></li>
    <li class="shrift"><a href="../User/AdminProfile.php">Profile</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="../Login/SignIn.php">Sign Out</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="../Event/CreateEvent.php">Create An Event</a></li>
</ul>

<link href="../../includes/css/Home.css" rel="stylesheet">

<body>
<div>
    <div class="container matgin-top" id="Events">
        <h3>Search Your Event</h3>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col m3">
            <input class="EventDate" type="date" placeholder="Event Date">
            <input class="City" type="text" placeholder="City">
            <input class="Place" type="text" placeholder="Place">
            <button class="w3-btn-block">Search</button>

            <select class="dropdown" name="State" id="inputs">
                <option value="dropdown" >All Categories</option>
                <?php $result = $database->performQuery($list_catgs_query);
                while($row = $result->fetch_assoc()) { ?>
                    <option value=<?php echo $row["Category"]; ?>> <?php echo $row["Category"]; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<hr>
<h2>Featured Events</h2>


<div class="content padding" >
    <form  class="login-form" method="POST" action="../Event/Event.php">
        <div class="first">
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" class="imager" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%"  alt="Submit" />
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" class="imager" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%"  alt="Submit" />
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" class="imager" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%"  alt="Submit" />
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" class="imager" src=<?php echo $row["Picture"]; ?>  name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%"  alt="Submit" />
                </div>
            </div>

        </div>

        <div class="footer">Havefun.com &copy; 2016</div>
</body>
</html>

        <?php include '../Footer.php';?>



