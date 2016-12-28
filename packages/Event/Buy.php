<?php
session_start();
$sign_in_status = $_SESSION["sign_in_status"];
$currentUser = $_SESSION["currentUser"];
$event = $_SESSION["event"];

if($sign_in_status){
    $query1 = "insert into Tickets_purchased (Event_ID) VALUES ( " . $event["ID"] . " );";
    $query2 = "insert into purchased ( Ticket_ID, User_ID) VALUES ( \"" . $username . "\" , \"" . $password ." );";
    if ($database->performQuery($query) == true) {
        if($isAdmin){
            ?>
            <script>
                alert("You have purchased a ticket for  <?php echo $event["Name"] ?>");
                window.location.href = "../Profile/AdminHomePage.php";
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
        window.location.href = "../Login/SignIn.php";
    </script>
<?php
}