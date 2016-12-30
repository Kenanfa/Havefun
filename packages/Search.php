<?php
include 'Database.php';
$database = new Database();

$dateFrom = $_POST["from"];
$dateTo = $_POST["to"]; 
$city = $_POST["city"];
$place = $_POST["place"];
$category = $_POST["category"];

$dateResults = $database->getDateEvents($dateFrom, $dateTo);
$categoryResults = $database->getCategoryEvents($category);
$placeResults = $database->getPlaceEvents($place);
$cityResults = $database->getCityEvents($city);


for($x = 0 ; $x < count($cityResults);$x++){
    echo $cityResults[$x]["Name"];
}