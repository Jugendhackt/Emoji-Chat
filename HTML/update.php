<?php
include("config.php");

if(!empty($_POST['question'])){

	$sql = "INSERT INTO `fragen`(`frage`,`kategorie`) VALUES ('".$_POST['question']."','".$_POST['category']."')";
	mysqli_query( $dbconnect, $sql );

	header("location:auslesen.php");
}
?>