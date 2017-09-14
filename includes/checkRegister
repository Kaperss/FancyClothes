<?php 
require "../header.php";
$title = "Register";
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