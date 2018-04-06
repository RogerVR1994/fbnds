<?php 
	$dbHost = "localhost";
	$dbName = "test";
	$dbUser = "root";
	$dbPassword = "prst3977";
	try{
		$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e){
		echo $e->getMessage();
	}
?>