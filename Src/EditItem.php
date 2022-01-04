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
$ID = mysqli_real_escape_string($link, $_POST['field1']);
$Name = mysqli_real_escape_string($link, $_POST['field2']);
$Logo = mysqli_real_escape_string($link, $_POST['field3']);
$Description = mysqli_real_escape_string($link, $_POST['field4']);
$CategoryID = mysqli_real_escape_string($link, $_POST['field5']);
$Forsquare = mysqli_real_escape_string($link, $_POST['field6']);
$Yelp = mysqli_real_escape_string($link, $_POST['field7']);
$Opentable = mysqli_real_escape_string($link, $_POST['field8']);
$Address = mysqli_real_escape_string($link, $_POST['field9']);

$sql = "UPDATE item SET `ID` = '$ID', `name` = '$Name',`logo` = '$Logo',`description` = '$Description',`CategoryID` = '$CategoryID',`foursquare_Rating` = '$Forsquare',`yelp_Rating` = '$Yelp',`opentable_Rating` = '$Opentable',`Location` = '$Address' WHERE `ID` = '$ID'";
if(mysqli_query($link, $sql)){

   echo "Records inserted successfully.";
     header("Location: ItemList.php");

} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>