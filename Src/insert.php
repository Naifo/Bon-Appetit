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
//Take input from form
$ID = mysqli_real_escape_string($link, $_POST['ID']);
$name = mysqli_real_escape_string($link, $_POST['Name']);
$review = mysqli_real_escape_string($link, $_POST['Review']);
$rate = mysqli_real_escape_string($link, $_POST['Rate']);
//Query
$sql = "INSERT INTO `review` (`item_ID`,`name`,`body`,`rating`) VALUES ('$ID','$name', '$review','$rate')";
if(mysqli_query($link, $sql)){

   echo "Records inserted successfully.";
     header("Location: index.php");

} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>