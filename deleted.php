<?php
session_start();
if (isset($_POST["delete"])) {
$_SESSION['testi2'] = $_POST["id2"];
$testi2 = $_SESSION['testi2'];
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
<p>The data entry you selected was successfully removed!</p>
<form action="saved.php">
			<input type="submit" name ="loggin" class="button" value="Go Back!">
		</form>


<?php
//LOGIN
$user='root';
$password='salainen';

//COnnection
$datab='a1704571';
$dsn="mysql:host=localhost;charset=UTF8;dbname=$datab";

//Connectionopen
$pdo=new PDO($dsn, $user, $password);
$pdoStat=$pdo->prepare("DELETE FROM logininfo WHERE id = ".$testi2."");
$pdoStat->execute();
exit();
session_destroy();
?>

</body>
</html>
