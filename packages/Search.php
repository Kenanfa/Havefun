<?php
include 'Database.php';
$database = new Database();

$dateFrom = $_POST["from"];
$dateTo = $_POST["to"]; 
$city = $_POST["city"];
$place = $_POST["place"];
$category = $_POST["category"];


echo $dateFrom;
echo $dateTo;
echo $category;
echo $city;
echo $place;

