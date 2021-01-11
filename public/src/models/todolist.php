<?php
require_once (__DIR__ . ' /../../db.php');

// Create:
function createList(string $title)
{
	$pdo = connectDB();
	$sql = "INSERT INTO lists (user_id, title) VALUES (:user_id, :title)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['user_id' => 1, 'title' => $title]);
}

