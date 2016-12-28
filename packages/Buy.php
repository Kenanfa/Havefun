<?php
include 'Database.php';
$database = new Database();
session_start();
if(isset($_SESSION['status'])) {
    $status = $_SESSION['status'];
    $username = $_SESSION['currentUser'];
}
$eventID = $_POST["eventID"];



if(isset($_SESSION['status']) && $status == 1){
    $user = $database->getUser($username);
    $query = "insert into Tickets_purchased (Event_ID , User_ID) VALUES ( " . $eventID . " , ".$user["ID"]." );";
    $database->performQuery($query);
        $database->ticketBought($eventID);
        if($database->isAdmin($username)){
            ?>
            <script>
                alert("You have succesfully purchased a ticket!!!");
                window.location.href = "AdminHomePage.php";
            </script>

            <?php
        }else
        {
        ?>
        <script>
            alert("You have succesfully purchased a ticket!!!");
            window.location.href = "UserHome.php";
        </script>

        <?php
    }

}else{
    ?>
    <script>
        window.location.href = "signIn.php";
    </script>
<?php
}