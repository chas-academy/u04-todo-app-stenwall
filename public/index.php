<?php
declare(strict_types=1);
include_once (__DIR__ . '/src/views/views_functions.php');
include_once (__DIR__ . '/src/models/todolist.php');

use App\views;
use App\models;

views\showHeader();
views\addNewList();
views\addNewTodo();
views\viewListsAndTodos(models\getLists());

models\getLists();

views\showFooter();

?>
