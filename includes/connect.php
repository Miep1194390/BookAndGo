<?php

$host ='localhost';
$db = 'bookandgo';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";
$opt = [
	PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false,
];

try {
 	$conn = new PDO ($dsn, $user, $pass,);
} 
catch (PDOExeption  $e) {
	echo $e ->getMessage();
	die ('OEI!, Er is een database probleem');
}

?>
