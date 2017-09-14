<?php 
session_start();
//Erklær variabler ud fra formens input
$formHeading = $_POST['heading'];
$formImgSrc = $_POST['imgSrc'];
$formImgAlt = $_POST['imgAlt'];
$formDescription = $_POST['description'];
$userId = $_SESSION['userId'];

require_once "connect.php";
//Laver en statement som skal blive udført længere nede
$statement = $dbh->prepare
("INSERT INTO articles(heading, imgSrc, imgAlt, authorId, description)
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