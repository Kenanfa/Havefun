<?php
include 'Database.php';
$database = new Database();
$randomEvents = $database->getRandomEvents();
$list_catgs_query = "Select Category from Event group by Category";
include 'Header.php';
?>
<link href="../includes/css/Home.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<body>
<div>
    <div class="container matgin-top" id="Events">
        <h3 align="center" style="font-family: Lobster; font-size: 25px;" >Search Your Event</h3>
    </div>

    <form class="w3-row-padding" method="post" action="Search.php">
        <div>
            <input class="EventDate2" name = "from" type="date" placeholder="Search from">    <!--  Bro do what you want here but just make sure that
             you put the date boxes in order:  Date FROM  --- Date TO  -->
        </div>
        <div class="w3-col m3">
            <input class="EventDate" name = "to" type="date" placeholder="To">
            <input class="City" name = "city"type="text" placeholder="City">
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
    </form>
    </div>

    <hr>
    <h2 style="font-family: Lobster; font-size: 45px; ">Featured Events</h2>


    <div class="content padding" >
<form  class="login-form" method="POST" action="Event.php">
        <div class="first">
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" class="imager" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%"  alt="Submit" />
                </div>
            </div>
            <?php 
            $row = $randomEvents->fetch_assoc(); ?>
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

