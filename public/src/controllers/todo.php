<?php
declare(strict_types=1);
namespace App\controllers;
include_once (__DIR__ . '/../models/todo.php');
include_once (__DIR__ . '/../views/views_functions.php');
use App\views;
use App\models;

function handleCreateTodo() {
		
	$errors = checkTodoForm();
	if (!empty($errors)) {
		views\oops($errors);
	} else {
		$listId = $_POST['list-id'];
		$todoTitle = $_POST['todo-title'];
		$todoDesc = $_POST['description'];
		models\createTodo($listId, $todoTitle, $todoDesc); 
		views\showTodoCreated($listId, $todoTitle, $todoDesc);
	}
}

function checkTodoForm()
{
	$errorMessages = [];
	if (empty($_POST["list-id"])) {
		$errorMessages[] = "You need to choose a list";
	}
	if (empty(trim($_POST["todo-title"]))) {
		$errorMessages[] = "The todo have to have a title";
	}
	if (empty(trim($_POST["description"]))) {
		$errorMessages[] = "The todo have to have a description";
	}
	return $errorMessages;
}

function handleUpdateTodo()
{
	$listId = $_POST['list-id'];
	$todos = models\getTodosByListId($listId);

	foreach ($todos as $todo) {
		$todoId = $todo['id'];

		$todoTitle = $_POST['task_title' . $todoId];
		$todoDesc = $_POST['task_desc' . $todoId];
		$completed = $_POST['completed' . $todoId];

		models\updateTodo($todoTitle, $todoDesc, $completed, $todoId);
	}
	
}

function handleDeleteTodo()
{
	$todoId = $_GET['todoid'];
	$todoTitle = $_GET['todotitle'];

	models\deleteTodo($todoId);
	
	views\showDeletedTodo($todoTitle);
}