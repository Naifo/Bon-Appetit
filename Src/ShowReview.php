<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reviews page</title>
    <link rel="stylesheet" type="text/css" href="./main.css">

  </head>
  <body class="BackGround">
  <!-- logo -->
		<h1 class = "Logo">Bon Appétit</h1>
    <ul>
	<!-- Navgation Bar -->
  		<li><a href="./index.php">Home</a></li>
  	  <li><a href="./AdminLogin.php">Admin log-in</a></li>
	  <li><a href="./itemProfilePage.php">Explore places</a></li>
  	  <li style="float:right"><a class="active" href="./AboutUs.php">About us</a></li>
  </ul>
  <br>
				 <?php
	

$user = 'root';
$pass = '';
$db = 'bonapetit_db';
		//DataBase Connection
$db = new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");

//Query from review table
$sqlItem = "SELECT * FROM `review`";

$result = $db->query($sqlItem);

if($result->num_rows > 0) {
	$result1 = mysqli_fetch_array($result); 
while($row = $result->fetch_assoc())
{
?>
<div>

		
<img id='temProfileFloat' src=<?php echo $row['logo']; ?> alt='' width="200" height=" height="200" style="float: left;">
<p id='ItemProfileP'><span style = 'color:lightgrey;'>Name: </span><?php echo $row['item_name']; ?> </p>
<p id='ItemProfileP'><span style = 'color:lightgrey;'>Reviewer Name: </span><?php echo $row['Rname']; ?> </p>

<p id='ItemProfileP'><span style = 'color:lightgrey;'>Review: </span><?php echo $row['body']; ?> </p>

<p id='ItemProfileP'><span style = 'color:lightgrey;'>Rate: </span><?php echo $row['rating']; ?> </p>
<?php echo "<p style='margin-left: 400px; color:grey;'>______________________________________________________________</p>";?>



</div>
<?php
}}
?>

  </body>
</html>
