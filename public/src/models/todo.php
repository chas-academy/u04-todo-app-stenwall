<?php
require_once (__DIR__ . ' /../../db.php');

// Create:
function createTodo(string $title, string $description)
{
	$pdo = connectDB();
	$sql = "INSERT INTO todos (user_id, list_id, task_title, task_desc) VALUES (:user_id, :list_id, :task_title, :task_desc)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['user_id' => 1, 'list_id' => 1, 'task_title' => $title, 'task_desc' => $description]);
}