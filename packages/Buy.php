<?php
session_start();
if(isset($_SESSION["sign_in_status"])) {
    $sign_in_status = $_SESSION["sign_in_status"];
    $currentUser = $_SESSION["currentUser"];
}
$eventID = $_POST["eventID"];

if(isset($_SESSION["currentUser"])){
    $query = "insert into Tickets_purchased (Event_ID , User_ID) VALUES ( " . $eventID . " , ".$currentUser["ID"]." );";
    if ($database->performQuery($query) == true) {
        $database->ticketBought($eventID);
        if($isAdmin){
            ?>
            <script>
                alert("You have purchased a ticket for  <?php echo $event["Name"] ?>");
                window.location.href = "AdminHomePage.php";
            </script>

            <?php
        }else
        {
        ?>
        <script>
            alert("You have purchased a ticket for  <?php echo $event["Name"] ?>");
            window.location.href = "../Profile/UserHomePage.php";
        </script>

        <?php
    }
        }
    echo "could not insert to table!";

}else{
    ?>
    <script>
       // window.location.href = "../Login/test.php";
    </script>
<?php
    echo $eventID;

}