<?php
include_once (__DIR__ . '/src/views/header.php');
include_once (__DIR__ . '/src/controllers/todolist.php');
use App\controllers;

echo "<div class='message-container'>";

controllers\handleDeleteList();

echo "</div>";


include_once (__DIR__ . '/src/views/footer.php');
?>