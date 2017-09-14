<?php
$title = "Login";
require "includes/header.php"; 
?> 
<div class="container">	
</div>
<aside class="container">
	<form id="login" action="includes/checkLogin.php"
	method="POST">
	<div class="row">
		<label for="formUsername" class="col-sm-4 col-sm-offset-4">Indtast brugernavn</label>
		<br>
		<input type="text" class="col-sm-4 col-sm-offset-4"  placeholder="Brugernavn.."  name="formUsername">
		<br>
		<label for="formPassword" class="col-sm-4 col-sm-offset-4">Indtast password</label>
		<br>
		<input type="password" class="col-sm-4 col-sm-offset-4"  placeholder="Password.."  name="formPassword">
		<br>
		<input type="submit" class="btn btn-success col-sm-2 col-sm-offset-5" value="Log ind">
	</div>
</form>

<?php
//Hvis login er tom så får man en fejlbesked
 if (isset($_SESSION['loginTom'])&& $_SESSION['loginTom'] == true) {
	?> <h4 class="col-sm-4 col-sm-offset-4 errorMsg">Felterne må IKKE være tomme</h4>

	<?php } ?>  
</aside>

<?php require "includes/footer.php" ?>