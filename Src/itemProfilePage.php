<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bon Appétit</title>
    <link rel="stylesheet" href="./main.css">
  </head>
  <body class="itemBackground">
  <h1 class = "Logo">Bon Appétit</h1>
  <ul>
    <li><a href="./index.php">Home</a></li>
    <li><a href="./AdminLogin.php">Admin log-in</a></li>
	<li><a href="./ShowReview.php">Show Reviews</a></li>
    <li style="float:right"><a class="active" href="..//main.css">About us</a></li>
  </ul>

		 <?php
	

$user = 'root';
$pass = '';
$db = 'bonapetit_db';

$db = new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");




$sqlItem = "SELECT * FROM item";

$result = $db->query($sqlItem);

if($result->num_rows > 0) {
	$result1 = mysqli_fetch_array($result); 
while($row = $result->fetch_assoc())
{
?>
<div>
<div>


<br>
		<!-- Image from DataBase -->
<img id='temProfileFloat' src=<?php echo $row['logo']; ?> alt='' width="200" height=" height="200" style="float: left;">
<?php 
//Break Down The Item Category by it ID
	if($row['CategoryID'] == 1){
	?>
	 <p id='ItemProfileP'><span style = 'color:lightgrey;'>Type: </span>Resturant</p>	
	<?php } ?>
	
	<?php 
	if($row['CategoryID'] == 2){
	?>
	 <p id='ItemProfileP'><span style = 'color:lightgrey;'>Type: </span>Cafe</p>	
	<?php } ?>
	
	<?php 
	if($row['CategoryID'] == 3){
	?>
	 <p id='ItemProfileP'><span style = 'color:lightgrey;'>Type: </span>Lounge</p>	
	<?php } ?>
		 <p id='ItemProfileP'><span style = 'color:lightgrey;'>ID: </span><?php echo $row['ID']; ?> </p>	
	 <p id='ItemProfileP'><span style = 'color:lightgrey;'>Name: </span><?php echo $row['name']; ?> </p>	
 <p id='ItemProfileP'><span style = 'color:lightgrey;'>Descrption: </span><?php echo $row['description']; ?></p>
    <p id='ItemProfileP'><b>Forsquare Rating: <span style='color:#92bd4e;'><?php echo $row['foursquare_Rating']; ?></b></p>
	<p id='ItemProfileP'><b>Yelp Rating: <span style='color:#92bd4e;'><?php echo $row['yelp_Rating']; ?></b></p>
	<p id='ItemProfileP'><b>Opentable Rating: <span style='color:#92bd4e;'><?php echo $row['opentable_Rating']; ?></b></p>
    <p style= 'color:#37b030; margin-left: 270px;'><span style='color:#ececec;'>Location: </span><?php echo $row['Location']; ?></p>
	<br>
	<?php echo "<p style='margin-left: 400px; color:grey;'>______________________________________________________________</p>";?>
</div>
	<br>
</div>
<?php 
}}
?>
		
	
<div align="center">
  <h1 style = "color:lightgrey;">Enter Your Review</h1>
  <form class="form-style-4" action="./insert.php" method="POST" style="background:0; border:0; align:center;">
  <label for="field1">
  <span>Enter ID:</span><input type="text" name="ID" required="true" />
  </label>
  
  <label for="field2">
  <span>Name:</span><input type="text" name="Name" required="true" />
  </label>
  
  <label for="field4">
  <span>Enter Your Review:</span><textarea name="Review" onkeyup="adjust_textarea(this)" required="true"></textarea>
  </label>

  <label for="field3">
  <span>Enter Your Rate:</span><input type="text" name="Rate" required="true" />
  </label>


  <label>
  <span> </span><input type="submit" name = "add" value=" Add " style="margin-left:150px; width:100px;"/>
  </label>
  </form>
</div>
  </body>
</html>
