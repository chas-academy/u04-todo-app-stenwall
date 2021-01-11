<?php
declare(strict_types=1);
include (__DIR__ . '/../models/todolist.php');
include (__DIR__ . '/../views/view_functions.php');

function handleCreateList() {
		
	$errors = checkForm();
	if (!empty($errors)) {
		oops($errors);
	} else {
		$listTitle = $_POST['list-title'];
		$newList = createList($listTitle);
		showListCreated($newList);
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

