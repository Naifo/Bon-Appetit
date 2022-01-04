<?php
$host = "localhost";
$username = "root";
$password = "";
$database_in_use = "bonapetit_db";


$link = new mysqli($host, $username, $password, $database_in_use);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//$image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); //SQL Injection defence!
$ID = mysqli_real_escape_string($link, $_POST['ID']);
$Name = mysqli_real_escape_string($link, $_POST['Name']);
$Logo = mysqli_real_escape_string($link, $_POST['Logo']);
$Description = mysqli_real_escape_string($link, $_POST['Description']);
$CategoryID = mysqli_real_escape_string($link, $_POST['CategoryID']);
$Forsquare = mysqli_real_escape_string($link, $_POST['Forsquare']);
$Yelp = mysqli_real_escape_string($link, $_POST['Yelp']);
$Opentable = mysqli_real_escape_string($link, $_POST['Opentable']);
$Address = mysqli_real_escape_string($link, $_POST['Address']);

$sql = "INSERT INTO `item` (`ID`,`name`,`logo`,`description`,`CategoryID`,`foursquare_Rating`,`yelp_Rating`,`opentable_Rating`,`Location`) VALUES ('$ID','$Name','$Logo','$Description','$CategoryID','$Forsquare','$Yelp','$Opentable','$Address')";
if(mysqli_query($link, $sql)){

   echo "Records inserted successfully.";
     header("Location: Add.php");

} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>