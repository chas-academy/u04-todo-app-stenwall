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
}

// Update
function updateList(string $listTitle, string $listId)
{
	$pdo = connectDB();
	$sql = "UPDATE lists SET title = :title WHERE id = :id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['title' => $listTitle, 'id' => $listId]);
}

// Delete
function deleteListAndTodos(string $listId)
{
	$pdo = connectDB();
	$sql = "DELETE FROM lists WHERE id = :id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['id' => $listId]);
}

