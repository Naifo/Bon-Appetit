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


$sql = "DELETE FROM `item` WHERE `ID` = $ID";
if(mysqli_query($link, $sql)){

   echo "Records Deleted successfully.";
     header("Location: Delete.php");

} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>