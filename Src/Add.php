<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add page</title>
    <link rel="stylesheet" type="text/css" href="./main.css">

  </head>
  <body class="background">
		<h1 class = "Logo">Bon Appétit</h1>
    <ul>
  		<li><a href="./index.php">Home</a></li>
  	  <li><a href="./AdminLogin.php">Admin log-in</a></li>
	  <li><a href="./itemProfilePage.php">Explore places</a></li>
  	  <li style="float:right"><a class="active" href="./AboutUs.php">About us</a></li>
  </ul>



  <br>
  <br>
  <div align="center">
  <form class="form-style-4" action="./AddItem.php" method="POST">
  <label for="field1">
  <span>Enter ID:</span><input type="text" name="ID" required="true" />
  </label>

  <label for="field2">
  <span>Name:</span><input type="text" name="Name" required="true" />
  </label>

  <label for="field3">
  <span>Enter URL Logo:</span><input type="text" name="Logo" required="true" />
  </label>

  <label for="field4">
  <span>Enter Description:</span><textarea name="Description" onkeyup="adjust_textarea(this)" required="true"></textarea>
  </label>

  <label for="field5">
  <span>Enter Category ID:</span><textarea name="CategoryID" onkeyup="adjust_textarea(this)" required="true" placeholder= "Resturant=1  Cafe=2  Lounge=3 "></textarea>
  </label>

  <label for="field6">
  <span>Forsquare rating:</span><textarea name="Forsquare" onkeyup="adjust_textarea(this)" required="true"></textarea>
  </label>

  <label for="field7">
  <span>Yelp rating:</span><textarea name="Yelp" onkeyup="adjust_textarea(this)" required="true"></textarea>
  </label>

  <label for="field8">
  <span>Opentable rating:</span><textarea name="Opentable" onkeyup="adjust_textarea(this)" required="true" ></textarea>
  </label>

  <label for="field6">
  <span>Enter Address: </span><textarea name="Address" onkeyup="adjust_textarea(this)" required="true"></textarea>
  </label>

  <label>
  <span> </span><input type="submit" name = "Add" value=" Add " style="margin-left:150px; width:100px;"/>
  </label>
  </form>
</div>

  </body>
</html>
