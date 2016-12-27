<!DOCTYPE html>
<html>
<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<ul class="w3-navbar w3-white w3-large">
    <li><a href="../Profile/AdminHomePage.php" class="w3-black"></i>HaveFun</a></li>
    <li class=><a href="../User/AdminProfile.php">Profile</a></li>
    <li class="w3-right w3-light-grey"><a href="../Home/index.php">Sign Out</a></li>
    <li class="w3-right w3-light-grey"><a href="../Event/CreateEvent.php">Create An Event</a></li>
</ul>
<link href="../../includes/css/createevent.css" rel="stylesheet">

<h5>Create Your Event To Show It To The World</h5>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

<div class="testbox">
    <h1>Create Event</h1>

    <form action="/">
        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input type="text" name="name" id="name" placeholder="Event ID" required/>

        <label id="icon" for="ID"><i class="icon-user"></i></label>
        <input type="text" name="name" id="name" placeholder="Event Name" required/>

        <label id="icon" for="Link"><i class="icon-user"></i></label>
        <input type="text" name="name" id="name" placeholder="Picture Link" required/>

        <label id="icon" for="Category"><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="Event Category" required/>

        <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
        <a href="#" class="button">Register</a>
    </form>
</div>


    <?php include '../Footer.php';?>
