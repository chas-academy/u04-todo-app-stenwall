<?php
declare(strict_types=1);

namespace App\views;

include_once (__DIR__ . '/../models/todolist.php');
include_once (__DIR__ . '/../models/todo.php');

use App\models;

//======================================================================
// THIS FILE CONTAINS ALL FUNCTIONS FOR SHOWING HTML
//======================================================================

/* The functions are sorted as follows: 
* - Basics
* - Forms
* - Creating data
* - Reading data
* - Updating data
* - Deleting data
*/

//-----------------------------------------------------
// Basics
//-----------------------------------------------------

function showHeader()
{
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";

    echo "<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' type='text/css' href='/../../css/styles.min.css'>
        <title>Todos</title>
        </head>";

    echo "<body>";

    echo "<h1>Todos!</h1>";
}

function showFooter()
{
    echo "</body>";

    echo "</html>";
}

//-----------------------------------------------------
// Forms
//-----------------------------------------------------

// Form for making list
function addNewList()
{
    echo "<form action='addlist.php' method='POST' id='list-form'>";
    echo "<div class='grid-container' id='list-grid'>";

    echo "<h2 class='full-width'>Add new list</h2>";

    echo "<div class='list-title'>
        <label for=' list-title'>Title</label>
        <input type='text' id='list-title' name='list-title'>
        </div>";

    echo "<button type='submit' id='submit'>Add list</button>";

    echo "</div>";
    echo "</form>";
}

// Form for making todo
function addNewTodo()
{
    echo "<form action='addtodo.php' method='POST' id='todo-form'>";
    echo "<div class='grid-container'>";

    echo "<h2 class='full-width'>Add new todo</h2>";

    echo "<div class='list'>
        <label for='list-id'>Choose a list</label>
        <select id='list-id' name='list-id' form='todo-form'>
        <option value=''>--Choose a list--</option>";

    showAvailableLists(models\getLists());

    echo "</select>";
    echo "</div>";

    echo "<div class='title'>
        <label for='todo-title'>Title</label>
        <input type='text' id='todo-title' name='todo-title'>
        </div>";

    echo "<div class='description'>
        <label for='description'>Description</label>
        <input type='text' id='description' name='description'>
        </div>";

    echo "<button type='submit' id='submit'>Add todo</button>";

    echo "</div>";
    echo "</form>";
}

// function for showing available lists when making new todo
function showAvailableLists(array $lists)
{
    foreach ($lists as $list) {
        echo "<option value='{$list['id']}'>{$list['title']}</option>";
    }
}

// form for updating/deleting list and todo data
function editList(string $listTitle, string $listId, array $todos)
{
    echo "<form action='listedited.php' method='POST' id='edit-form'>
        <div class='grid-container'>";

    echo "<h2>Edit list <span>{$listTitle}</span></h2>";

    echo "<a href='listdeleted.php?listid={$listId}&listtitle={$listTitle}'
            class='button'>Delete list</a>";

    echo "<div class='list-title full-width'>
        <label for='list-title'>List-title</label>
        <input type='text' id='list-title' 
            name='list-title' value='{$listTitle}'>
        <input id='list-id' name='list-id' type='hidden' value='{$listId}'>
        </div>";

    foreach ($todos as $todo) {
        $todoTitle = $todo['task_title'];
        $todoDesc = $todo['task_desc'];
        $todoId = $todo['id'];
        $completed = $todo['completed'];

        echo "<h3>Edit todo <span>$todoTitle</span></h3>";

        echo "<a href='tododeleted.php?todoid={$todoId}&todotitle={$todoTitle}
                &listtitle={$listTitle}'
                class='button todo-btn'>Delete todo</a>";

        echo "<div class='title'>
            <label for='todo-title'>Title</label>
            <input type='text' id='todo-title' 
                name='task_title{$todoId}' value='{$todoTitle}'>
            </div>";

        echo "<div class='completed'>
            <p>Completed</p>
            <div class='radio-container'>";

        if ($completed == '1') {
            echo "<input type='radio' id='yes{$todoId}' value='1'
                    name='completed{$todoId}' checked>
                <label for='yes{$todoId}'>Yes</label>
                <input type='radio' id='no{$todoId}' value='0'
                    name='completed{$todoId}'>
                <label for='no{$todoId}'>No</label>";
        } else {
            echo "<input type='radio' id='yes{$todoId}' value='1'
                    name='completed{$todoId}'>
                <label for='yes{$todoId}'>Yes</label>
                <input type='radio' id='no{$todoId}' value='0'
                    name='completed{$todoId}' checked>
                <label for='no{$todoId}'>No</label>";
        }

        echo "</div>";
        echo "</div>";

        echo "<div class='description full-width'>
            <label for='description'>Description</label>
            <textarea id='description' name='task_desc{$todoId}'
                rows='3'>{$todoDesc}</textarea>
            </div>";
    }

    echo "<button type='submit' id='submit'>Save changes</button>";

    echo "</div>";
    echo "</form>";
}

//-----------------------------------------------------
// Creating data
//-----------------------------------------------------

// function for view after succesfully adding a new list
function showListCreated(string $title)
{
    echo "<div class='message-container'>";

    echo "<h2 class='full-width'>Congrats!</h2>";

    echo "<p>You've just created the list <b>{$title}</b></p>";

    echo "<a href='index.php' class='button'>Go back</a>";

    echo "</div>";
}

// function for view after succesfully adding a new todo
function showTodoCreated(string $listId, string $title, string $description)
{
    echo "<div class='message-container'>";

    echo "<h2 class='full-width'>Congrats!</h2>";

    echo "<p>You've just created the following todo:</p>
        <p><b>List:</b> {$listId}</p>
        <p><b>Title:</b> {$title}</p>
        <p><b>Description:</b> {$description}</p>";

    echo "<a href='index.php' class='button'>Go back</a>";

    echo "</div>";
}

// function for showing error messages
function oops(array $errormessages)
{
    echo "<div class='message-container'>";

    echo "<h2 class='full-width'>Oops, something went wrong!</h1>";

    foreach ($errormessages as $message) {
        echo "<p>{$message}</p>";
    }

    echo "<a href='index.php' class='button'>Go back</a>";

    echo "</div>";
}

//-----------------------------------------------------
// Reading data
//-----------------------------------------------------

// function for viewing boards with lists and todos in index
function viewListsAndTodos(array $lists)
{
    echo "<div class='todo-grid-container'>";

    foreach ($lists as $list) {
        echo "<section class='message-container' id='todo-board'>";

        echo "<div class='list-header'>
            <h2>{$list['title']}</h2>
            <a href='editlist.php?listid={$list['id']}
                &listtitle={$list['title']}' class='button'>Edit</a>
            </div>";

        $todos = models\getTodosByListId($list['id']);

        foreach ($todos as $todo) {
            if ($todo['completed'] == 1) {
                echo "<section class='todo-done'>";
            } else {
                echo "<section>";
            }

            echo "<h3>{$todo['task_title']}</h3>
                <p>{$todo['task_desc']}</p>
                </section>";
        }

        echo "</section>";
    }

    echo "</div>";
}

//-----------------------------------------------------
// Updating data
//-----------------------------------------------------

function showUpdatedListAndTodos(string $listTitle)
{
    echo "<div class='message-container'>";

    echo "<h2>You have updated the following:</h2>";

    echo "<p><b>List:</b> {$listTitle}</p>";
    echo "<p>...and maybe some todos in it.</p>";

    echo "<a href='index.php' class='button'>Go back</a>";

    echo "</div>";
}

//-----------------------------------------------------
// Deleting data
//-----------------------------------------------------

function showDeletedList(string $listTitle)
{
    echo "<div class='message-container'>";

    echo "<h2>You have deleted the following:</h2>";

    echo "<p><b>List:</b> {$listTitle}</p>";
    echo "<p>...and all the todos in it.</p>";

    echo "<a href='index.php' class='button'>Go back</a>";

    echo "</div>";
}

function showDeletedTodo(string $todoTitle, string $listTitle)
{
    echo "<div class='message-container'>";

    echo "<h2>You have deleted the following:</h2>";

    echo "<p><b>Todo:</b> {$todoTitle}</p>";
    echo "<p><b>From the list:</b> {$listTitle}</p>";

    echo "<a href='index.php' class='button'>Go back</a>";

    echo "</div>";
}

?>
