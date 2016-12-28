<?php
include 'Database.php';
$database = new Database();

$name = $_POST["Name"];
$date = $_POST["Date"];
$time = $_POST["Time"];
$city = $_POST["City"];
$country = $_POST["Country"];
$numticket = $_POST["Numticket"];
$link = $_POST["Link"];
$category = $_POST["Category"];
$price = $_POST["Price"];

session_start();
$user = $database->getUser($_SESSION['currentUser']);

$placeQuery = "insert into place (Name, )";
$query = "insert into event (Name, Date, Name, Time, Email, Phone_number, isAdmin) VALUES ( \"" . $username . "\" , \"" . $password . "\" , \"" . $name . "\" , \"" . $surname . "\" , \"" . $email . "\" , " . $pNumber ." , " . $isAdmin ." );";