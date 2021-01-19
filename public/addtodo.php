<?php
declare(strict_types=1);
include_once (__DIR__ . '/src/views/views_functions.php');
include_once (__DIR__ . '/src/controllers/todo.php');

use App\controllers;
use App\views;

views\showHeader();

controllers\handleCreateTodo();

views\showFooter();

?>
