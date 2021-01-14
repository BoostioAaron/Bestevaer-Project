<?php
$host = 'localhost';
$dbname = 'bestevaer';
$username = 'root';
$password = '';

$conStr = "mysql:host=$host;dbname=$dbname";
$con = new PDO ($conStr, $username, $password);


/* haal data op uit de database */
$stmt = "SELECT * FROM schepen";
$sth = $con->prepare($stmt);
$sth->execute();






?>
