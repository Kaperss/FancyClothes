<?php require "includes/header.php"; 
$title = "Login";
//Får data fra login formen
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];
require "includes/connect.php";
//Henter fra users og finder passende oplysninger
$statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ? AND dbPassword = ?");

$statement->bindParam(1, $formUsername);
$statement->bindParam(2, $formPassword);
$statement->execute();

?> 
<div class="container">
	<?php
	if (empty($row = $statement->fetch()) ){
//Forkerte oplysninger så sker dette
		echo "<p class='col-sm-4 col-sm-offset-4 errorMsg'> Fejl i brugernavn eller password!</p>";
	}
	else {
	// Event hvis login lykkes	
		echo "<p class='col-sm-4 col-sm-offset-4'>Yes, logger dig ind..<p>";
		$_SESSION['username'] = $row['dbUsername'];
		$_SESSION['password'] = $row['dbPassword'];
		$_SESSION['accLevel'] = $row['accLevel'];
		$_SESSION['userId'] = $row['userId'];
		header("Refresh:2; url=index.php", true, 303);
	}
	$dbh = null;
	?> 
</div>
	<aside class="container">
		<form id="login" action="<?php echo $_SERVER['PHP_SELF']; ?>"
			method="post">
			<div class="row">
				<label for="formUsername">Indtast brugernavn</label>
				<input type="text" class="col-sm-4 col-sm-offset-4"  placeholder="Brugernavn.."  name="formUsername">
				<br>
				<label for="formPassword">Indtast password</label>
				<input type="password" class="col-sm-4 col-sm-offset-4"  placeholder="Password.."  name="formPassword">
				<br>
				<input type="submit" class="btn btn-success col-12" value="Log ind">
			</div>
		</form>  
	</aside>

<?php require "includes/footer.php" ?>