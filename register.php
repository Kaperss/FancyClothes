<?php
$title = "Register";
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
					<label for="formUsername" class="col-sm-4 col-sm-offset-4">Indtast brugernavn</label>
					<br>
					<input type="text" class="col-sm-4 col-sm-offset-4"  placeholder="Brugername.."  name="formUsername">
					<br>
					<label for="formPassword1" class="col-sm-4 col-sm-offset-4 m-4" >Indtast kodeord</label>
					<br>
					<input type="password" class="col-sm-4 col-sm-offset-4"  placeholder="Passord.."  name="formPassword1">
					<br>
					<label for="formPassword2" class="col-sm-4 col-sm-offset-4">Indtast kodeord igen</label>
					<br>
					<input type="password"  class="col-sm-4 col-sm-offset-4" placeholder="Passord.. Igen.."  name="formPassword2">
					<br>
					<input type="submit" class="btn btn-success col-sm-2 col-sm-offset-5" value="Send ind">
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
	?> <div class="container registerContainer">
		<div class="col-sm-4 col-sm-offset-4">
			<?php
	 //Kigger efter mangler i registreringen og laver en fejlbesked
			if ($row = $statement->fetch()) {
				echo "<p class='errorMsg'>Fejl - der findes allerede en bruger med det navn!</p>";		
			} else if($formPassword1 != $formPassword2) {
				echo "<p class='errorMsg'>Fejl - SKRIV DET SAMME KODEORD TO GANGE I TRÆK</p>";

			} else if($formUsername == "") {
				echo "<p class='errorMsg'>Fejl - du mangler at indtaste et brugernavn</p>";
			} else if($formPassword1 == "") {
				echo "<p class='errorMsg'>Fejl - du mangler at indtaste et kodeord i første felt</p>";
			} else if($formPassword2 == "") {
				echo "<p class='errorMsg'>Fejl - du mangler at indtaste et kodeord i andet felt</p>";
			}

			else {
				echo 
				"<p>Tillykke med det, du findes nu i denne database! Start med at logge ind..</p>";
				$statement = $dbh->prepare("INSERT INTO users(dbUserName, dbPassword) VALUES(?,?)");
				$statement->bindParam(1, $formUsername);
				$statement->bindParam(2, $formPassword1);
				$statement->execute();
				header("Refresh:2; url=../index.php", true, 303);
			}
			?>
		</div>
		<?php

	}

	?>

	<?php require "includes/footer.php" ?>