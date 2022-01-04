<!DOCTYPE html>
<html>
<head>
	<title>Bon Appetit</title>
		<link rel="stylesheet" type="text/css" href="./main.css">
</head>
<body class="Burger">
	<h1 class = "Logo">Bon Appétit</h1>

	<ul>
		<li><a href="./index.php">Home</a></li>
		<li><a href="./AdminLogin.php">Admin log-in</a></li>
		<li><a href="./itemProfilePage.php">Explore places</a></li>
		<li style="float:right"><a class="active" href="./AboutUs.php">About us</a></li>

	</ul>
	
		<br><br><br><br>
		<div align="center">
<form class="form-style-4" action="./login.php" method="POST" style="background:0; border:0">
			<div class="container">
				<img src="../Images/Login.png" width="150" height="150">
				<br>
		<p style="color:white;">Username:</p>		
		<input type="text" name="Username" placeholder="Username" class="input">
			<br>
			<p style="color:white;">Password:</p>
		<input type="password" name="Password" placeholder="Password" class="input">
		<br>

<button class="button" style="vertical-align:middle" name="Login"><span>Login </span></button>
</div>
</div>
</form>


		</ul>
		
		
</body>
</html>
