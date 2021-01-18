<?php
declare(strict_types=1);
namespace App\controllers;
include_once (__DIR__ . '/../models/todolist.php');
include_once (__DIR__ . '/../views/views_functions.php');
use App\views;
use App\models;

function handleCreateList() {
		
	$errors = checkListForm();
	if (!empty($errors)) {
		views\oops($errors);
	} else {
		$listTitle = $_POST['list-title'];
		models\createList($listTitle);
		views\showListCreated($listTitle);
	}
}

function checkListForm()
{
	$errorMessages = [];
	if (empty(trim($_POST["list-title"]))) {
		$errorMessages[] = "The list have to have a title";
	}
	return $errorMessages;
}

function handleEditList() {
	
	$listId = $_GET['listid'];
	$listTitle = $_GET['listtitle'];

	$todos = models\getTodosByListId($listId);

	views\editList($listTitle, $listId,$todos);
}

function handleUpdateList() {

	$listId = $_POST['list-id'];
	$listTitle = $_POST['list-title'];

	models\updateList($listTitle, $listId);
}

