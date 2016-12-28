<?php

include 'Database.php';
$database = new Database();

$username = $_POST["username"];
$password = $_POST["password"];
session_start();

if(!$database->userExists($username)){
    ?>
    <script>
        alert("there is no such username!!!!");
        window.location.href = "SignIn.php";
    </script>
    <?php


    
}else if(!$database->passwordCorrect($password)){
    ?>
    <script>
        alert("the password is incorrect!!!");
        window.location.href = "SignIn.php";
    </script>
    <?php

    
}else{
    $_SESSION["sign_in_status"] = "y";
    $_SESSION["currentUser"] = $username;

    if($database->isAdmin($username)){
        header('Location: AdminProfile.php');
    }else{
        header('Location: UserProfile.php');
    }
}
