<!DOCTYPE html>
<html>
<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../../includes/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../../includes/css/Home.css" rel="stylesheet">
<script src="../../includes/Bootstrap/js/bootstrap.min.js"></script>
<script src="../../includes/js/jquery-3.1.1.min.js"></script>
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body>

<!-- Navigation Bar -->
<ul class="w3-navbar w3-white w3-large">
    <li><a href="#" class="w3-black"></i>HaveFun</a></li>
    <li><a href="#rooms">Rooms</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
    <li class="w3-right w3-light-grey"><a href="#contact">Sign in</a></li>
</ul>

<div class="content" style="max-width: :1500px;">

    <div class="container matgin-top" id="Events">
        <h3>Events</h3>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col m3">
            <label><i class="fa fa-calendar-o"></i>Event Date</label>
            <input class="w3-input w3-border" type="text" placeholder="Date">
        </div>
        <div class="w3-col m3">
            <label><i class=""></i>City</label>
            <input class="w3-input w3-border" type="text" placeholder="City">
        </div>

        <div class="w3-col m2">
            <select size="1px" style=""><i class="combo-box"></i>Category
        <option value="select">Select</option>
                <option value="Cinema">Cinema</option>
                <option value="Theater">Theater</option>
                <option value="Sports">Sports</option>
                <option value="Music">Music</option>

            </select>

        </div>

        <div class="w3-col m3">
            <label><i class=""></i>Place</label>
            <input class="w3-input w3-border" type="text" placeholder="Place">
        </div>
        <div class="w3-col m2">
            <button class="w3-btn-block">Search</button>
        </div>
    </div>


    <div class="footer">Havefun.com &copy; 2016</div>
</body>
</html>

