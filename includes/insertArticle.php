<?php 
session_start();
$formHeading = $_POST['heading'];
$formImgSrc = $_POST['imgSrc'];
$formImgAlt = $_POST['imgAlt'];
$formDescription = $_POST['description'];
$userId = $_SESSION['userId'];
//Definer variabler med en tom værdi
$formHeadingErr = $formImgSrcErr = $formImgAltErr = $formAuthorErr = 
$formPublishedErr = $formDescriptionErr = "";

require_once "connect.php";
//Indsætter værdierne i cats-tabelen
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["formHeading"])) {
		$formHeadingErr = "Indtast heading";
	}
	else {
		$name = test_input($_POST["formHeading"]);
	}
}*/
$statement = $dbh->prepare("INSERT INTO cats(heading, imgSrc, imgAlt, authorId,description)
	VALUES(?,?,?,?,?)");
$statement->bindParam(1, $formHeading);
$statement->bindParam(2, $formImgSrc);
$statement->bindParam(3, $formImgAlt);
$statement->bindParam(4, $userId);
$statement->bindParam(5, $formDescription);
$statement->execute();
//Redirect til index
header("location: ../index.php");


?>