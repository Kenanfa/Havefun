<!DOCTYPE html>
<html>
<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../../includes/css/userprofile.css" rel="stylesheet">

<?php session_start() ?>
<script>
    function signOut() {
        <?php  $_SESSION["sign_in_status"] = false; ?>
        window.location.href = "SignUp.php";
    }
</script>

<ul class="w3-navbar w3-white w3-large">
    <li><a href="../Profile/UserHome.php" class="w3-black"></i>HaveFun</a></li>
    <li class=><a href="UserProfile.php">Profile</a></li>
    <button type="button" class="w3-right w3-light-grey"> onclick= <?php     ?>>Sign Out</a></button>

</ul>
<link href="../../includes/css/userprofile.css" rel="stylesheet">
<h1>Personal Information</h1>

<div class="login-page">
    <div class="form">

        <form class="Event-form" method="POST" action="../Login/SignIn.php">
            <h4 class="groove">ID:<h4/>
                <h4 class="groove">Username:<h4/>
                    <h4 class="groove">Password:<h4/>
                        <h4 class="groove">Name:<h4/>
                            <h4 class="groove">Surname:<h4/>
                                <h4 class="groove">Email:<h4/>
                                    <h4 class="groove">Phone Number:<h4/>
                                        <h4 class="groove">Admin or Not:<h4/>

        </form>
    </div>
</div>







<?php include '../Footer.php';?>
