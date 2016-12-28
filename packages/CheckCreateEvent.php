<?php
include 'Database.php';
$database = new Database();

$name = $_POST["Name"];
$date = $_POST["Date"];
$time = $_POST["Time"];
$place = $_POST["Place"];
$city = $_POST["City"];
$country = $_POST["Country"];
$numticket = $_POST["Numticket"];
$link = $_POST["Link"];
$category = $_POST["Category"];
$price = $_POST["Price"];

session_start();
$user = $database->getUser($_SESSION['currentUser']);

$placeQuery = "insert into place (Name, City , Country ) VALUES ( \"".$place."\" , \"" .$city."\" , \"" .$country.   "\" )";
$query = "insert into event (Name, Date, Time, Place_Name, Picture, Category, num_of_tickets_left, Creator_ID, Ticket_price) VALUES ( \"" . $name . "\" , \"" . $date . "\" , " . $time . " , \"" . $place . "\" , \"" . $link . "\" , \"" . $category ."\" , " . $numticket. " , " . $user["ID"]. " , " . $price ." );";

$database->performQuery($placeQuery);
$database->performQuery($query);
header('Location: AdminProfile.php');