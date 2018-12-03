<?php
ob_start();
require_once "login.php";
session_start();
if (isset($_POST["submit"])) {
$_SESSION["fullname"] = $_POST["fullname"];
$_SESSION["account"] = $_POST["account"];
$_SESSION["passcode"] = $_POST["passcode"];
$_SESSION["emailaddr"] = $_POST["emailaddr"];
$_SESSION["comment"] = $_POST["comment"];
$_SESSION["emailErr"] = $emailaddrErr;
$_SESSION["nameErr"] = $nameErr;
$_SESSION["accountErr"] = $accountErr;
$_SESSION["passcodeErr"] = $passcodeErr;
$_SESSION["commentErr"] = $commentErr;	
}
?>	

<!DOCTYPE html>
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
		<a href="settings.php">Settings</a>
		</div>




			<h2>Log in here</h2>
			<form method="post" action="redirect.php" class="inputform" id="formula"><br> 
				<input type="text" name="fullname" placeholder="Full name" class="inputfield" value="<?php echo ($_SESSION["fullname"]);?>">
	  			<span class="error">* <?php echo $_SESSION["nameErr"];?></span>
	  			<br><br>
	  			<input type="text" name="account" placeholder="Account Number" class="inputfield" value="<?php echo ($_SESSION["account"]);?>">
	  			<span class="error">* <?php echo $_SESSION["accountErr"];?></span>
	  			<br><br>
	  			<input type="text" name="passcode" placeholder="Passcode" class ="inputfield" value="<?php echo ($_SESSION["passcode"]);?>">
	  			<span class="error">* <?php echo $_SESSION["passcodeErr"];?></span><br><br>
				<input type="text" name="emailaddr" placeholder="Type your email here" class="inputfield" value="<?php echo ($_SESSION["emailaddr"]);?>">
 				<span class="error">* <?php echo $_SESSION["emailErr"];?></span><br><br>
				<textarea name ="comment" placeholder ="Why are you applying" class ="inputfield"><?php echo ($_SESSION["comment"]);?></textarea>
				<span class="error">* <?php echo $_SESSION["commentErr"];?></span><br><br>
				<input type="submit" name="submit" value="Submit" class= "button">
				<input type="reset" name= "Klear" value="Clear" class="button">
			</form>
			<br>
				 <p>Please fill all fields marked with a *</p>

	</body>
	</html>

