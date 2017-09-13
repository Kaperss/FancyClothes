<?php require "includes/header.php" ?>
<?php 
//Får data fra login formen
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];
require "includes/connect.php";
//Henter fra users og finder passende oplysninger
$statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ? AND dbPassword = ?");

$statement->bindParam(1, $formUsername);
$statement->bindParam(2,$formPassword);
$statement->execute();

if (empty($row = $statement->fetch()) ){
//Forkerte oplysninger så sker dette
	echo "<p class='errorMsg'> FOKKERT brugernavn eller pasord</p>";
	header("Refresh:2; url=index.php", true, 303);
}
else {
	// Event hvis login lykkes	
	echo "<p>IKKE FOKKERT brugernavn eller pasord<p>";
	$_SESSION['username'] = $row['dbUsername'];
	$_SESSION['password'] = $row['dbPassword'];
	$_SESSION['accessLevel'] = $row['accessLevel'];
	$_SESSION['userId'] = $row['userId'];
	header("Refresh:2; url=index.php", true, 303);
}
$dbh = null;
?>
<?php require "includes/footer.php" ?>