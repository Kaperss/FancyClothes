<?php
if (isset($_SESSION['username'])) {
	header("location:index.php");
}

?>
<?php require "includes/header.php" ?>
<main class="container">

	<div class="row">
	
		<!-- Formular til at skrive data til DB -->
		<aside class="container">
			<form id="register" action="<?php echo $_SERVER['PHP_SELF']; ?>"
				method="post">
				<div class="row">
					<label for="formUsername">Indtast brugernavn</label><input type="text" class="col-sm-12"  placeholder="Brugername.."  name="formUsername">
					<br>
					<label for="formPassword1">Indtast kodeord</label>
					<input type="password" class="col-sm-12"  placeholder="Passord.."  name="formPassword1">
					<br>
					<label for="formPassword2">Indtast kodeord igen</label>
					<input type="password"  class="col-sm-12" placeholder="Passord.. Igen.."  name="formPassword2">
					<br>
					<input type="submit" class="btn btn-success my-2 col-12" value="Send ind">
				</div>
			</form>   
		</aside>
	</form>
</div>
</main>  
<?php 
	if (isset($_POST['formUsername'])) {
		$formUsername = $_POST['formUsername'];
		$formPassword1 = $_POST['formPassword1'];
		$formPassword2 = $_POST['formPassword1'];

		require "includes/connect.php";

	//Findes der allerede en bruger med det brugernavn i db?
		$statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ?");
		$statement->bindParam(1, $formUsername);
		$statement->execute();

		if ($row = $statement->fetch()) {
			echo "<p class='col-12'>Fejl - der findes allerede en bruger med det navn!</p>";		
		} else if($formPassword1 != $formPassword2) {
			echo "<p class='col-12'>Fejl - SKRIV DET SAMME KODEORD TO GANGE I TRÆK BANDEORD OG BROK</p>";
			
		} else {
			echo "<p>Tillykke med det, du findes nu i denne database! Start med at logge ind..</p>";
			header("Refresh:3; url=index.php", true, 303);
			$statement = $dbh->prepare("INSERT INTO users(dbUserName, dbPassword) VALUES(?,?)");
			$statement->bindParam(1, $formUsername);
			$statement->bindParam(2, $formPassword1);
			$statement->execute();

			header("Refresh:3; url=index.php", true, 303);
		}
	}
	?>
	
<?php require "includes/footer.php" ?>