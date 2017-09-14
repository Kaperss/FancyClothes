<?php 
$title = "Login";
//Får data fra login formen
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];
require "connect.php";
$statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ? AND dbPassword = ?");
//Henter fra users og finder passende oplysninger
$statement->bindParam(1, $formUsername);
$statement->bindParam(2, $formPassword);
$statement->execute();
if (empty($row = $statement->fetch()) ){
//Forkerte oplysninger så sker dette
		session_start();
		$_SESSION['loginTom'] = true;
		?> <h4 class='col-sm-4 col-sm-offset-4 errorMsg'>Felterne må IKKE være tomme</h4>; <?php
		header("Refresh:2; url=../login.php", true, 303);
	}
	else {
	// Event hvis login lykkes	
		session_start();		
		$_SESSION['username'] = $row['dbUsername'];
		$_SESSION['password'] = $row['dbPassword'];
		$_SESSION['accLevel'] = $row['accLevel'];
		$_SESSION['userId'] = $row['userId'];
		echo "<h4>Du er logget ind! Tillykke med det..</h4>";
		header("Refresh:2; url=../index.php", true, 303);
	}
	$dbh = null;
	?> 
