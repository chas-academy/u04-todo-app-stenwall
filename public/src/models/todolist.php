<?php
namespace App\models;
require_once (__DIR__ . ' /../../db.php');


// Create
function createList(string $title)
{
	$pdo = connectDB();
	$sql = "INSERT INTO lists (user_id, title) VALUES (:user_id, :title)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['user_id' => 1, 'title' => $title]);
}

// Read
function getLists()
{
	$pdo = connectDB();
	$sql = "SELECT id, title FROM lists";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$lists = $stmt->fetchAll();
	return $lists;
	
// 	$lists = $pdo->query("SELECT id, title FROM lists;")->fetchAll();
// 	var_dump($lists);
// 	$query = <<<SQL
// 	SELECT id, title FROM lists;
// SQL;
// 	$stmt = $pdo->prepare($query);
// 	$result = $stmt->execute();

// 	var_dump($result);
}


