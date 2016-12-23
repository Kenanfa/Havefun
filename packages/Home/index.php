<!DOCTYPE html>
<html>
<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../../includes/css/Home.css" rel="stylesheet">

<?php
include 'Database.php';
$database = new Database();
$list_catgs_query = "Select Category from Event group by Category";
?>

<body>

<!-- Navigation Bar -->
<ul class="w3-navbar w3-white w3-large">
    <li><a href="#" class="w3-black"></i>HaveFun</a></li>
    <li class=><a href="../About/index.php">About</a></li>
    <li><a href="#contact">Contact</a></li>
    <li class="w3-right w3-light-grey"><a href="../Login/index1.php">Sign in</a></li>

</ul>

<div class="content" style="max-width: :1500px;">

    <div class="container matgin-top" id="Events">
        <h3>Search Your Event</h3>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col m3">
            <label><i class="fa fa-calendar-o"></i>Event Date</label>
            <input class="w3-input w3-border" type="text" placeholder="DD-MM-YY">
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
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> Istanbul Concert</div>
                    <img src="../img/Concert.jpg" alt="Concert" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Arsenal-Chelsea</div>
                    <img src="../img/Sport.jpg" alt="Sport" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">International Festival</div>
                    <img src="../img/Music.jpg" alt="Music" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Modern Theater</div>
                    <img src="../img/Theater.jpg" alt="Theater" style="width:100%"">
                </div>
            </div>

        </div>



        <div class="footer">Havefun.com &copy; 2016</div>


    <div class="mainselection">
        <select name="State" id="inputs">
            <option value="">All Categories</option>
            <?php $result = $database->selectQuery($list_catgs_query);
            while($row = $result->fetch_assoc()) { ?>
            <option value=<?php echo $row["Category"]; ?>> <?php echo $row["Category"]; ?></option>
            <?php } ?>
        </select>
    </div>





</body>

</html>