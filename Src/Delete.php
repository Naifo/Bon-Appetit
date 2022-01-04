<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete page</title>
    <link rel="stylesheet" type="text/css" href="./main.css">

  </head>
  
  <body class="BackGround">
		<h1 class = "Logo">Bon Appétit</h1>
    <ul>
  		<li><a href="./index.php">Home</a></li>
  	  <li><a href="./AdminLogin.php">Admin log-in</a></li>
	  <li><a href="./itemProfilePage.php">Explore places</a></li>
  	  <li style="float:right"><a class="active" href="./AboutUs.php">About us</a></li>
  </ul>
  <br><br><br><br><br><br><br><br><br><br><br>
  <div align="center">
  <form class="form-style-4" action="./DeleteItem.php" method="post">
  <label for="field1">
  <span>Enter ID:</span><input type="text" name="ID" required="true" />
  </label>
  <label>
  <span> </span><input type="submit" value=" Delete " style="margin-left:150px; width:100px;"/>
  </label>
  </form>
  </div>
  </body>
</html>
