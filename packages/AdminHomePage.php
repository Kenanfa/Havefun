<!DOCTYPE html>


<title>Havefun</title>
<html>
<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="../includes/css/home.css" rel="stylesheet">


<?php
include 'Database.php';
$database = new Database();
$randomEvents = $database->getRandomEvents();
$list_catgs_query = "Select Category from Event group by Category";
?>



<ul class="w3-navbar w3-white w3-large">
    <li class="shrift"><a href="AdminHomePage.php" class="w3-black"></i>HaveFun</a></li>
    <li class="shrift"><a href="AdminProfile.php">Profile</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="logout.php">Sign Out</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="CreateEvent.php">Create An Event</a></li>
</ul>


<body>
<div>
    <div class="container matgin-top" id="Events">
        <h3 class="shrift">Search Your Event</h3>
    </div>

    <form class="w3-row-padding" method="post" action="SearchIndexForSignedIn.php">
        <div>
            <input class="EventDate2"  name = "from" type="date" placeholder="Search from">    <!--  Bro do what you want here but just make sure that
             you put the date boxes in order:  Date FROM  --- Date TO  -->
        </div>
        <div class="w3-col m3">
            <input class="EventDate"  name = "to" type="date" placeholder="To">
            <input class="City" name = "city" type="text" placeholder="City">
            <input class="Place" name = "place" type="text" placeholder="Place">
            <button  type="submit" class="w3-btn-block">Search</button></form>
    <select class="dropdown" name="category" id="inputs">
        <option value="All">All Categories</option>
        <?php $result = $database->performQuery($list_catgs_query);
        while($row = $result->fetch_assoc()) { ?>
            <option value=<?php echo $row["Category"]; ?>> <?php echo $row["Category"]; ?></option>
        <?php } ?>
    </select>
        </div>
    </div>
</div>

<hr>
<h2 class="shrift" style="font-size: 45px">Featured Events</h2>


<div class="content padding" >
    <form  class="login-form" method="POST" action="EventForSignedIn.php">
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
        
</body>
</html>


        <?php include 'Footer.php';?>



