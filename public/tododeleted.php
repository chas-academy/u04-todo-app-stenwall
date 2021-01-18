<?php
include_once (__DIR__ . '/src/views/header.php');
include_once (__DIR__ . '/src/controllers/todo.php');
use App\controllers;

echo "<div class='message-container'>";

controllers\handleDeleteTodo();

echo "</div>";


include_once (__DIR__ . '/src/views/footer.php');
?>