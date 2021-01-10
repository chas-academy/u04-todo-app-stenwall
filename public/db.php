<?php
namespace App;

function connectDB() 
{
	// koppla upp oss till db: todolist med PDO
	$host = "localhost";
	$db = "todoapp";
	$user = 'root';
	$pass = 'root';
	$charset = 'utf8';

	// Data Source Name
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

	// $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	try {
    	$pdo = new PDO($dsn, $user, $pass, $options);
    	return $pdo;
	} catch (PDOException $e) {
    	throw new PDOException($e->getMessage(), $e->getCode());
	}
}