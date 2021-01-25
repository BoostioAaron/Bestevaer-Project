<?php
$host = 'localhost';
$dbname = 'bestevaer';
$username = 'root';
$password = '';

$conStr = "mysql:host=$host;dbname=$dbname";
$con = new PDO ($conStr, $username, $password);
?>

