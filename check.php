<!DOCTYPE html>


<?php
require_once "check.php";
session_start();
if (isset($_POST["submit"])) {
$_SESSION["fullname"] = $_POST["fullname"];
$_SESSION["account"] = $_POST["account"];
$_SESSION["passcode"] = $_POST["passcode"];
$_SESSION["emailaddr"] = $_POST["emailaddr"];
$_SESSION["comment"] = $_POST["comment"];			
} 
?>




	<html lang="en">
		<head>
		        <meta charset="utf-8"/>
		        <title>FakeBank</title>
		        <meta property="site_name" content="site_content">
		        <link rel="stylesheet" href ="css/styles.css">
			<link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"> 
		</head>
<body>
<h1>Fake Bank</h1>

		<div class="topnav">
		<a href="index.php">Front Page</a>
	  	<a href="login.php">Log In</a>
		</div>

	<h2>Is everything correct?</h2>



<?php
echo "<p>". "Your name:   " .$_SESSION["fullname"]. "</p>";
echo "<p>". "Your account number:   " .$_SESSION["account"]. "</p>";
echo "<p>". "Your passcode:    " .$_SESSION["passcode"]. "</p>";
echo "<p>". "Your e-mail address:   " .$_SESSION["emailaddr"]. "</p>";
echo "<p>". "Why you're registering:   " .$_SESSION["comment"]. "</p>";
?>
<div>

<form action="redirect2.php">
	<input type="submit" name="loggin" class="button" value="Save">
</form>

<form action="login.php">
	<input type="submit" name="loggin" class="button" value="Change Input">
</form>

<form action="index.php">
	<input type="submit" name="loggin" class="button" value="Cancel">
</form>


</div>

</body>
</html>
