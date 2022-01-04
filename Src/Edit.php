<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit page</title>
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
  <br>
  
  <div align="center">
  <form class="form-style-4" action="./EditItem.php" method="POST">
    <span style="color:red; font-size:12px;">Enter item ID then click Edit</span><br><br>
  <label for="field1">
  <span>Enter ID:</span><input type="text" name="field1" required="true" />
  </label>

  <label for="field2">
  <span>Name:</span><input type="text" name="field2"/>
  </label>

  <label for="field3">
  <span>Enter URL Logo:</span><input type="text" name="field3"/>
  </label>

  <label for="field4">
  <span>Enter Description:</span><textarea name="field4" onkeyup="adjust_textarea(this)"></textarea>
  </label>

  <label for="field5">
  <span>Enter Category ID:</span><textarea name="field5" onkeyup="adjust_textarea(this)" placeholder= "Resturant=1  Cafe=2  Lounge=3 "></textarea>
  </label>

  <label for="field6">
  <span>Forsquare rating:</span><textarea name="field6" onkeyup="adjust_textarea(this)"></textarea>
  </label>

  <label for="field7">
  <span>Yelp rating:</span><textarea name="field7" onkeyup="adjust_textarea(this)"></textarea>
  </label>

  <label for="field8">
  <span>Opentable rating:</span><textarea name="field8" onkeyup="adjust_textarea(this)" ></textarea>
  </label>

  <label for="field6">
  <span>Enter Address: </span><textarea name="field9" onkeyup="adjust_textarea(this)"></textarea>
  </label>

  <label>
  <span> </span><input type="submit" value=" ِEdit " style="margin-left:150px; width:100px;"/>
  </label>
  </form>
  </div>
  </body>
</html>
