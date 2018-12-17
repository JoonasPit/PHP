<?php
session_start();
if (isset($_POST["nayta"])) {
$_SESSION['testi'] = $_POST["id"];
$testi2 = $_SESSION['testi'];
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


<?php
//LOGIN
$user='root';
$password='salainen';

//COnnection
$datab='a1704571';
$dsn="mysql:host=localhost;charset=UTF8;dbname=$datab";

//Connectionopen
$pdo=new PDO($dsn, $user, $password);
$pdoStat=$pdo->prepare("SELECT * FROM logininfo WHERE id = ".$testi2."");
$pdoStat->execute();
$hits=$pdoStat->fetchAll();


foreach($hits as $row) {
 echo "<p> Full Name: ".$row['fullname']. "</p>\n";
echo "<p> Account Number: ".$row['accountnumber']. "</p>\n";
echo "<p>Passcode: ".$row['passcode']. "</p>\n";
echo "<p>E-Mail: ".$row['email']. "</p>\n";
echo "<p> Why they applied: ".$row['why_apply']. "</p>\n";
}
session_destroy();
?>
<form action="saved.php">
			<input type="submit" name ="loggin" class="button" value="Go Back!">
		</form>


</body>
</html>

