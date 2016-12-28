<!DOCTYPE html>
<html>
<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<ul class="w3-navbar w3-white w3-large">
    <li><a href="AdminHomePage.php" class="w3-black"></i>HaveFun</a></li>
    <li class=><a href="AdminProfile.php">Profile</a></li>
    <li class="w3-right w3-light-grey"><a href="index.php">Sign Out</a></li>
    <li class="w3-right w3-light-grey"><a href="CreateEvent.php">Create An Event</a></li>
</ul>
<link href="../includes/css/createevent.css" rel="stylesheet">

<h5>Create Your Event To Show It To The World</h5>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

<div class="testbox">

    <form class="login-form" method="POST" action="CheckCreateEvent.php">
        <label id="icon" for="Name"><i class="icon-shield"></i></label>
        <input type="text" name="name" value="" placeholder="Name" required/>

        <label id="icon" for="Date"><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="Date" required/>

        <label id="icon" for="Time"><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="Time" required/>

        <label id="icon" for="City"><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="City" required/>

        <label id="icon" for="Country"><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="Country" required/>

        <label id="icon" for="Number Of Tickets"><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="Number Of Tickets" required/>

        <label id="icon" for="Link"><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="Picture Link" required/>

        <label id="icon" for="Category"><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="Event Category" required/>

        <label id="icon" for="Link"><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="Price" required/>
<p class="p"> By clicking you agree to the terms and conditions</p>
        <a href="#" class="button">Register</a>
    </form>
</div>


    <?php include 'Footer.php';?>
