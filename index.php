<!DOCTYPE html>
<?php
session_start();
session_destroy();
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
			<a href="check.php">Your Info</a>
			<a href="saved.php">Saved Data</a>
			<a href="settings.php">Settings</a>
		</div>
		<?php
			echo "<strong>"."Welcome back: ". $_GET["yourname"]."</strong>";
		?>

		<p>Links to other pages above or below</p>

		<form action="login.php">
			<input type="submit" name ="loggin" class="button" value="Log In">
		</form>
</body>
</html>
