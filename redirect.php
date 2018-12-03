<?php
ob_start();
require_once "redirect.php";
session_start();
if (isset($_POST["submit"])) {
$_SESSION["fullname"] = $_POST["fullname"];
$_SESSION["account"] = $_POST["account"];
$_SESSION["passcode"] = $_POST["passcode"];
$_SESSION["emailaddr"] = $_POST["emailaddr"];
$_SESSION["comment"] = $_POST["comment"];
} 
?>			


<?php


		//php error messages and input validation

		$nameErr = $accountErr  = $passcodeErr = $commentErr = $emailaddrErr = "";
		$name = $account = $passcode = $comment = $emailaddr = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

	  	if(strlen($_POST["fullname"]) < 3) {
		$nameErr = "Too short";
			} 
	  	else {
	    	$name = test_input($_POST["fullname"]);
	  		}
	  
	  	if (is_numeric($_POST["account"])) {
	    	$account = test_input($_POST["account"]);
	  		} 
		else {
	    	$accountErr = "Only numbers please";
	  		}
	    
	  	if (empty($_POST["passcode"])) {
	   	$passcodeErr = "Please enter your passcode";
	  		} 
		else {
		$passcode = test_input($_POST["passcode"]);
	  		}

	  	if(preg_match("/^[a-zA-Z '\n\r]*$/",$_POST["comment"])){
		$comment = test_input($_POST["comment"]);
		}
		else {
		$commentErr = "No special characters";
			}
		if (!filter_var($_POST["emailaddr"], FILTER_VALIDATE_EMAIL)) {
		$emailaddrErr = "Not a valid email";
			} 
		else {
		$emailaddr = test_input($_POST["emailaddr"]);
			}
	}
	
if ($nameErr == "" && $accountErr == "" && $passcodeErr == "" && $commentErr == "" && $emailaddrErr == "" ){
	header('location: check.php');
}
else {
	header('location:login.php');
	$_SESSION["emailErr"] = $emailaddrErr;
	$_SESSION["nameErr"] = $nameErr;
	$_SESSION["accountErr"] = $accountErr;
	$_SESSION["passcodeErr"] = $passcodeErr;
	$_SESSION["commentErr"] = $commentErr;		
}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	?>
