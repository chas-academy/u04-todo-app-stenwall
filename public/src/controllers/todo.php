<?php
declare(strict_types=1);
namespace App\controllers;
include_once (__DIR__ . '/../models/todo.php');
include_once (__DIR__ . '/../views/views_functions.php');
use App\views;

function handleCreateTodo() {
		
	$errors = checkForm();
	if (!empty($errors)) {
		views\oops($errors);
	} else {
		// $listId = $_POST['list_id'];
		$todoTitle = $_POST['todo-title'];
		$todoDesc = $_POST['description'];
		createTodo($todoTitle, $todoDesc); 
		views\showTodoCreated($todoTitle, $todoDesc);
	}
}

function checkForm()
{
	$errorMessages = [];
	// if (empty(trim($_POST["list_id"]))) {
	// 	$errorMessages[] = "You need to choose a list";
	// }
	if (empty(trim($_POST["todo-title"]))) {
		$errorMessages[] = "The todo have to have a title";
	}
	if (empty(trim($_POST["description"]))) {
		$errorMessages[] = "The todo have to have a description";
	}
	return $errorMessages;
}