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
$name = mysqli_real_escape_string($link, $_POST['Username']);
$pass = mysqli_real_escape_string($link, $_POST['Password']);

$query = "SELECT * FROM admin WHERE username = '$name' AND password = '$pass' ";

$result = mysqli_query($link,$query);

$row = mysqli_fetch_array($result);
//Check if the entered username and password is correct or not to allow the admin to have access to certain perimssoins 
if($row['username'] == $name && $row['password'] == $pass){
	
			 header("Location: AdminControlPanel.php");
}
else{
		echo "Login Fail";
		 header("Location: AdminLogin.php");
}

?>