<?php
include 'Database.php';
$database = new Database();

$dateFrom = $_POST["from"];
$dateTo = $_POST["to"]; 
$city = $_POST["city"];
$place = $_POST["place"];
$category = $_POST["category"];

$selectedCriteria = array();

if(isset($_POST["place"])&&!empty($_POST["place"])) {
    $placeResults = $database->getPlaceEvents($place);
    array_push($selectedCriteria, $placeResults);
}

if(isset($_POST["city"])&&!empty($_POST["city"])) {
    $cityResults = $database->getCityEvents($city);
    array_push($selectedCriteria, $cityResults);
}

if( (isset($_POST["from"])&&!empty($_POST["from"])) && (isset($_POST["to"])&&!empty($_POST["to"]))) {
    $dateResults = $database->getDateEventsFromTo($dateFrom, $dateTo);
    array_push($selectedCriteria, $dateResults);
}else if ((isset($_POST["from"])&&!empty($_POST["from"]))) {
    $dateResults = $database->getDateEventsFrom($dateFrom);
    array_push($selectedCriteria, $dateResults);
}else if ((isset($_POST["to"])&&!empty($_POST["to"]))) {
    $dateResults = $database->getDateEventsTo($dateTo);
    array_push($selectedCriteria, $dateResults);
}

if(!($_POST["category"] === "All")) {
    $categoryResults = $database->getCategoryEvents($category);
    array_push($selectedCriteria, $categoryResults);
}




 session_start();
$events = array();
if(count($selectedCriteria)>0){
    for($i = 0 ; $i<count($selectedCriteria[0]);$i++){
        $event = $selectedCriteria[0][$i];
        $isMutual = false;
        for($j = 1 ; $j<count($selectedCriteria);$j++){
            for($k = 0 ; $k<count($selectedCriteria[$j]);$k++){
                if($event )
                    $isMutual = true;
            }
        }
        if($isMutual)
            array_push($events,$event);
    }

    $_SESSION['searchResults']= $database->getCityEvents("Miami");

}else{
    $events = $database->getAllEvents();
}
$_SESSION['searchResults'] = $events;

?>
<script>
window.location.href = "SearchIndex.php";
</script>
