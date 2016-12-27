
<!DOCTYPE html>
<html>

<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<ul class="w3-navbar w3-white w3-large">
    <li><a href="../Profile/UserHome.php" class="w3-black"></i>HaveFun</a></li>
    <li class=><a href="../User/UserProfile.php">Profile</a></li>
    <li class="w3-right w3-light-grey"><a href="../Home/index.php">Sign Out</a></li>

</ul>
<link href="../../includes/css/Home.css" rel="stylesheet">

<body>
<div class="content" style="max-width: :1500px;">

    <div class="container matgin-top" id="Events">
        <h3>Search Your Event</h3>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col m3">
            <label><i class="fa fa-calendar-o"></i>Event Date</label>
            <input class="w3-input w3-border" type="date" name="date">

        </div>
        <div class="w3-col m3">
            <label><i class=""></i>City</label>
            <input class="w3-input w3-border" type="text" placeholder="City">
        </div>

        <div class="w3-col m2">
            <label><i class=""></i>Place</label>
            <input class="w3-input w3-border" type="number" placeholder="Place">
        </div>



        <div class="w3-col m2">
            <button class="w3-btn-block">Search</button>
        </div>
    </div>
    <h2>Featured Events</h2>


    <div class="content padding" >

        <div class="w3-row-padding">
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <a href="../Event/Event.php">
                        <img src=<?php echo $row["Picture"]; ?> alt=<?php echo $row["Category"]; ?> style="width:100%">
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"><?php echo $row["Name"]; ?></div>
                    <a href="../Event/Event.php">
                        <img src=<?php echo $row["Picture"]; ?> alt=<?php echo $row["Category"]; ?> style="width:100%">
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"><?php echo $row["Name"]; ?></div>
                    <a href="../Event/Event.php">
                        <img src=<?php echo $row["Picture"]; ?> alt=<?php echo $row["Category"]; ?> style="width:100%">
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"><?php echo $row["Name"]; ?></div>
                    <a href="../Event/Event.php">
                        <img src=<?php echo $row["Picture"]; ?> alt=<?php echo $row["Category"]; ?> style="width:100%"">
                </div>
            </div>

        </div>


        <div class="mainselection">
            <select name="State" id="inputs">
                <option value="">All Categories</option>
                <?php $result = $database->selectQuery($list_catgs_query);
                while($row = $result->fetch_assoc()) { ?>
                    <option value=<?php echo $row["Category"]; ?>> <?php echo $row["Category"]; ?></option>
                <?php } ?>
            </select>
        </div>

        <?php include '../Footer.php';?>



</body>

</html>