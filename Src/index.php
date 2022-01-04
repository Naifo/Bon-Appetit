<!DOCTYPE html>
<html>
<head>
	<title>Bon Appetit</title>
	<link rel="stylesheet" type="text/css" href="./main.css">
</head>
<body class="background">
			<h1 class = "Logo">Bon Appétit</h1>
	<ul>
		<li><a href="./index.php">Home</a></li>
	  <li><a href="./AdminLogin.php">Admin log-in</a></li>
	  <li style="float:right"><a class="active" href="./AboutUs.php">About us</a></li>
</ul>

		<br></br>
		<br></br>
	<h1 class = "Qoute">"Ask not what you can do for your country. Ask what's for lunch." <br></br>-Orson Welles</h1>

		<a class="button" style="vertical-align:middle" href = "./itemProfilePage.php"><span>Explore places </span></a>
		 <?php
	

$user = 'root';
$pass = '';
$db = 'bonapetit_db';

$db = new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");



$sql = "SELECT name FROM item";

$result = mysqli_query($db,$sql) or die ("Bad Query: $sql");

while($row = mysqli_fetch_assoc($result)){
	
	
echo "<a href='./itemList.php'><p style = 'color:lightgrey;'>{$row['name']}</p></a>";	
	
}

?>
		<br></br>
		<br></br>
		<br></br><br></br>

</body>
</html>
