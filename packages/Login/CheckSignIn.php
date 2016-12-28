<?php

include '../Home/Database.php';
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
    if($database->isAdmin($username)){
        $_SESSION["sign_in_status"] = true;
        $_SESSION["currentUser"] = $username;
        
        header('Location: ../User/AdminProfile.php');
    }else{
        header('Location: ../User/UserProfile.php');
    }
}
