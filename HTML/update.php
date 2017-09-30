<?php
include("config.php");

if(!empty($_POST['emoji'])){

	$sql = "INSERT INTO `emoji`(`code`,`name`) VALUES ('".$_POST['emoji']."','".$_POST['name']."')";
	mysqli_query( $dbconnect, $sql );

	header("location:auslesen.php");
}
?>