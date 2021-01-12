<?php
include_once (__DIR__ . '/src/views/header.php');
include (__DIR__ . '/autoloader.php');
include (__DIR__ . '/src/views/views_functions.php');

use App\views;


views\addNewList();
views\addNewTodo();



include_once (__DIR__ . '/src/views/footer.php');
?>





