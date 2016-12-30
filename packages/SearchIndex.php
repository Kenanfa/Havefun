
<!DOCTYPE html>
<html>

<?php session_start();
$events = $_SESSION['searchResults'];
?>

<title>Search results</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../includes/css/header.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

<ul class="w3-navbar w3-white w3-large">
    <li class="shrift"><a href="index.php" class="w3-black"></i>HaveFun</a></li>
    <li class="shrift"><a href="About.php">About</a></li>
    <li class="shrift"><a href="contact.php">Contact us</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="SignIn.php">Sign in</a></li>

</ul>
<link href="../includes/css/search.css" rel="stylesheet">

<body>
<div class="container matgin-top" id="Events">
    <h3>Searched Events</h3>
</div>

<table>
    <form method="post" action="Event.php"
    <tr>
        <th>Picture</th>
        <th>Event Name</th>
        <th>Place</th>
        <th>Date</th>
    </tr>

    <?php for($i = 0 ; $i < count($events);$i++){?>

    <tr>
     <td>   <input type="image" name="eventID" value="<?php echo $events[$i]["ID"] ?>" src="<?php echo $events[$i]["Picture"] ?>" alt="submit" class="imager" width="200" height="52" ></td>
        <td> <?php echo $events[$i]["Name"] ?></td>
        <td><?php echo $events[$i]["Place_Name"] ?></td>
        <td><?php echo $events[$i]["Date"] ?></td>
    </tr>

    <?php } ?>
    </form>
</table>


    <?php include 'Footer.php';?>

</body>
</html>