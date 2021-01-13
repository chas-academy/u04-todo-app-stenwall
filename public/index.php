<?php
include_once (__DIR__ . '/src/views/header.php');
// include (__DIR__ . '/autoloader.php');
include (__DIR__ . '/src/views/views_functions.php');
include (__DIR__ . '/src/models/todolist.php');

use App\views;
use App\models;

views\addNewList();
views\addNewTodo();

models\getLists();



include_once (__DIR__ . '/src/views/footer.php');
?>





