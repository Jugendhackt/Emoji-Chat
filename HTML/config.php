<?php
//Datenbank
$dbhost='localhost';
$dbuser='127.0.0.1';
$dbpass='';
$dbname='test';
//Datenbank Verbindung
$dbconnect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('Could not connect to server.' );
mysqli_set_charset($dbconnect, "utf8")
?>
