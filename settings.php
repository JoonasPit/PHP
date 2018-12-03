<!DOCTYPE html>
<?php
$yourname = $_POST["yourname"];
if(($yourname != null)) {
	setcookie("yourname", $yourname, time() + (86400 * 7), "/");
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
		<a href="check.php">Your Info</a>
		<a href="saved.php">Saved Data</a>
		</div>
<h2>Enter your name</h2>

<form action="index.php">
<input type="text" name="yourname" placeholder="Type Your Name" class="inputfield">
<input type="submit" name="submit" value="Submit" class= "button">
</form>

<?php
echo $_COOKIE['keksi'];
?>

</body>
</html>
