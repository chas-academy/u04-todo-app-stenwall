<?php
include_once (__DIR__ . '/src/views/header.php');
include_once (__DIR__ . '/src/controllers/todolist.php');
use App\controllers;


controllers\handleEditList();


include_once (__DIR__ . '/src/views/footer.php');
?>