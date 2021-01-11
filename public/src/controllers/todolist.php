<?php
declare(strict_types=1);
namespace App\controllers;
include (__DIR__ . '/../models/todolist.php');
include (__DIR__ . '/../views/views_functions.php');
use App\views;

function handleCreateList() {
		
	$errors = checkForm();
	if (!empty($errors)) {
		views\oops($errors);
	} else {
		$listTitle = $_POST['list-title'];
		createList($listTitle);
		views\showListCreated($listTitle);
	}
}

function checkForm()
{
	$errorMessages = [];
	if (empty(trim($_POST["list-title"]))) {
		$errorMessages[] = "The list have to have a title";
	}
	return $errorMessages;
}

