<?php
session_start();
			
?>

<?php
//LOGIN
$user='root';
$password='salainen';

//Connection
$datab='a1704571';
$dsn="mysql:host=localhost;charset=UTF8;dbname=$datab";

//Connectionopen
$pdo=new PDO($dsn, $user, $password);

	//Insert Into database

$insertName =$_SESSION["fullname"];
$insertAccount =$_SESSION["account"];
$insertPasscode =$_SESSION["passcode"];
$insertEmail =$_SESSION["emailaddr"];
$insertComment =$_SESSION["comment"];

$pdoSta=$pdo->prepare("INSERT INTO logininfo(fullname, accountnumber, passcode, email, why_apply) VALUES(:fullname, :accountnumber, :passcode, :email, :why_apply);
");
$pdoSta->bindParam(':fullname', $insertName);
$pdoSta->bindParam(':accountnumber', $insertAccount);
$pdoSta->bindParam(':passcode', $insertPasscode);
$pdoSta->bindParam(':email', $insertEmail);
$pdoSta->bindParam(':why_apply', $insertComment);
$pdoSta->execute();
header('location: saved.php');
exit();
?>
