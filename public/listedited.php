<?php
include_once (__DIR__ . '/src/views/header.php');
include_once (__DIR__ . '/src/controllers/todo.php');
include_once (__DIR__ . '/src/controllers/todolist.php');
use App\controllers;
use App\views;

echo "<div class='message-container'>";

controllers\handleUpdateTodo();
controllers\handleUpdateList();


echo "</div>";


include_once (__DIR__ . '/src/views/footer.php');
?>