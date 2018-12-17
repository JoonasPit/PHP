<?php

session_start();

$insertName =$_SESSION["fullname"];
$insertAccount =$_SESSION["account"];
$insertPasscode =$_SESSION["passcode"];
$insertEmail =$_SESSION["emailaddr"];
$insertComment =$_SESSION["comment"];
class loginPDO{
	
	

	function allInfo() {

		//LOGIN
		$user='root';
		$password='salainen';

		//COnnection
		$datab='a1704571';
		$dsn="mysql:host=localhost;charset=UTF8;dbname=$datab";

		$pdo = new PDO($dsn, $user, $password);
		
		$pdoStat =$pdo->prepare('SELECT * FROM logininfo;');
			
		$pdoStat->execute();
			
		$hits = $pdoStat->fetchAll();

		foreach($hits as $row) {
		$seppo = $row['id'];
	// for testing	echo "<p>".$row['fullname']." | ".$row['accountnumber']." | ".$row['passcode']. " | ".$row['email']. " | ".$row['why_apply']. "</p>\n";

		echo "<p>".$row['fullname'].
		"<form action='select.php' method='post'>".
		  "<input type='hidden' name='id' value='$seppo'>".
		"<input type='submit' name='nayta' value='Näytä'>".

		"</form>".  
		"<form action='deleted.php' method='post'>".
		  "<input type='hidden' name='id2' value='$seppo'>".
		"<input type='submit' name='delete' value='Poista'>".
		"</form>".
		"</p>\n";
		$_SESSION["testi"] = $_POST['id'];
		$_SESSION["testi2"] = $_POST['id2'];
		$pekka = $_SESSION["testi"];

		}

	
	}

	 function insertInfo(){

		$sql = "INSERT INTO logininfo(fullname, accountnumber, passcode, email, why_apply) VALUES(:fullname, :accountnumber, :passcode, :email, :why_apply);";
		
			// Valmistellaan SQL-lause
			if (! $stmt = $this->db->prepare ( $sql )) {
			$virhe = $this->db->errorInfo ();
			throw new PDOException ( $virhe [2], $virhe [1] );
		$stmt->bindParam(':fullname', $insertName);
		$stmt->bindParam (':accountnumber', $insertAccount);
		$stmt->bindParam (':passcode', $insertPasscode);
		$stmt->bindParam (':email', $insertEmail);
		$stmt->bindParam (':why_apply', $insertComment);

		}
					}
}			
?>
