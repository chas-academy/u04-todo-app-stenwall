<?php
namespace App\models;
require_once (__DIR__ . ' /../../db.php');

// Create:
function createTodo(string $listId, string $title, string $description)
{
	$pdo = connectDB();
	$sql = "INSERT INTO todos (user_id, list_id, task_title, task_desc) VALUES (:user_id, :list_id, :task_title, :task_desc)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['user_id' => 1, 'list_id' => $listId, 'task_title' => $title, 'task_desc' => $description]);
}

// Read
function getTodosByListId(string $listId)
{
	$pdo = connectDB();
	$sql = "SELECT id, task_title, task_desc, completed FROM todos WHERE list_id = :list_id  ORDER BY created, completed";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['list_id' => $listId]);
	$todos = $stmt->fetchAll();
	return $todos;
}

// Update
function updateTodo(string $todoTitle, string $todoDesc, string $completed, string $todoId)
{
	$pdo = connectDB();
	$sql = "UPDATE todos SET task_title = :task_title, task_desc = :task_desc, completed = :completed WHERE id = :id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['task_title' => $todoTitle, 'task_desc' => $todoDesc, 'completed' => $completed, 'id' => $todoId]);
}

// Delete
// See also: the function 'deleteListAndTodos()' in 'models/todolist.php'
function deleteTodo(string $todoId)
{
	$pdo = connectDB();
	$sql = "DELETE FROM todos WHERE id = :id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['id' => $todoId]);
}
