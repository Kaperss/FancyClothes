<?php 
/* Declaration of variableenendcy */
$servername = "localhost";
$dbName ="kapers";
$username ="root";
$password ="";
try{
	/* Forbinder til DB med ovenstående information */
	/*Databasehandler*/$dbh = new PDO("mysql:host=$servername;dbname=$dbName;charset=utf8", $username, $password);


	/*Fejlhandling*/$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch 
(PDOException $e) {
	echo "Konnektion Fejld: " . $e->getMessage();
}
?>