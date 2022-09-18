<html>
<body>

<style>
body {font-family: Arial, Helvetica, sans-serif; font-size: xx-large;
    background-color: rgb(255, 178, 78);
  }

body {
  text-align: center;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}

input {
  background-color: #020303;
  color: rgb(255, 178, 78);
  padding: 20px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

hr {
  border: 1px solid #020202;
  margin-bottom: 25px;
  width: 40%;
}

input:hover {
  opacity:1;
}


 .btn {
  float: center;
  width: 15%;
  font-size: large;
  border-radius: 15px;
}

.container {
  padding: 20px;
}

.clearfix::after {
  content: "";
  clear: both;
}
</style>

<div class="container">

<h1 align="center">Registration Complete!</h1>
<p align="center">See the User's Information.</p>
<hr>
<br>
<?php

echo "<table align=center border=3 rows=7 cols=2";

$firstname = $_GET["firstname"];
	echo "<tr><td><th><h2>First Name: <th><h3> $firstname </td></tr>";
  
$lastname = $_GET["lastname"];
	echo "<tr><td><th><h2>Last Name:  <th><h3> $lastname </td></tr>";
  
$contact = $_GET["contact"];
	echo "<tr><td><th><h2>Contact Number: <th><h3> $contact </td></tr>";

$address = $_GET["address"];
	echo "<tr><td><th><h2>Full Address: <th><h3> $address </td></tr>";

$email = $_GET["email"];
	echo "<tr><td><th><h2>Email Address: <th><h3> $email </td></tr>";

$psw = $_GET["psw"];
	echo "<tr><td><th><h2>Password: <th><h3> $psw </td></tr>";

  echo "</table>";
?>

</div>
<div class="clearfix">
<form action="SIGNUP.html" method="POST"><input type="submit" class="btn" name="back" value="Register Again"></form>
<form action="page.html" method="POST"><input type="submit" class="btn" name="Home" value="Continue to Home"></form>
</div>

</body>
</html>