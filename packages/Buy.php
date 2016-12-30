<?php
include 'Database.php';
$database = new Database();
session_start();
if(isset($_SESSION['status'])) {
    $status = $_SESSION['status'];
    $username = $_SESSION['currentUser'];
}
$eventID = $_POST["eventID"];
$ntickets = $_POST["ntickets"];



if(isset($_SESSION['status']) && $status == 1){
    if($database->getNumOfTickets($eventID)>0) {
        for($i = 0 ; $i<$ntickets ; $i++) {

            $query = "insert into Tickets_purchased (Event_ID , Username) VALUES ( " . $eventID . " , \"" . $username . "\" );";
            $database->ticketBought($eventID);
        }
        if ($database->isAdmin($username)) {
            ?>
            <script>
                alert("You have succesfully purchased your ticket!!!");
                window.location.href = "AdminHomePage.php";
            </script>
            <?php
            echo $query;
        } else {
            ?>
            <script>
                alert("You have succesfully purchased your ticket!!!");
                window.location.href = "UserHome.php";
            </script>

            <?php
        }
    }else{
        if ($database->isAdmin($username)) {
            ?>
            <script>
                alert("Sorry.. tickets are SOLDOUT!!!");
                window.location.href = "AdminHomePage.php";
            </script>

            <?php
        }else{
            ?>
            <script>
                alert("Sorry.. tickets are SOLDOUT!!!");
                window.location.href = "UserHome.php";
            </script>

            <?php
        }
    }
}else {
        ?>
        <script>
            window.location.href = "signIn.php";
        </script>
        <?php

}