<?php
include 'Database.php';
$database = new Database();
$randomEvents = $database->getRandomEvents();
$list_catgs_query = "Select Category from Event group by Category";

include '../Header.php';
?>
<link href="../../includes/css/Home.css" rel="stylesheet">

<body>
<div>
    <div class="container matgin-top" id="Events">
        <h3>Search Your Event</h3>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col m3">

            <input class="EventDate" type="number" placeholder="Event Date">
            <input class="City" type="text" placeholder="City">
            <input class="Place" type="text" placeholder="Place">
            <button class="w3-btn-block">Search</button>
                <select class="dropdown" name="State" id="inputs">
                    <option value="dropdown">All Categories</option>
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
<h4>deneme</h4>

    <div class="content padding" >
<form  class="login-form" method="POST" action="../Event/Event.php">
        <div class="first">
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%" alt="Submit" />
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%" alt="Submit" />
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%" alt="Submit" />
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%" alt="Submit" />
                </div>
            </div>

        </div>








    <div class="footer">Havefun.com &copy; 2016</div>
</body>

</html>

