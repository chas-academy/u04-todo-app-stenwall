<?php
declare(strict_types=1);
namespace App\views;
// this file contains all the functions for showing HTML (views)

function addNewList()
{ ?>
	<!-- Form for adding list -->
	<form action="addlist.php" method="POST" id="list-form">
		<div id="grid-container">
			<h2>Add new list</h2>
			<div class="list-title">
				<label for=" list-title">Title</label>
				<input type="text" id="list-title" name="list-title">
			</div>
			<button type="submit" id="submit">Add list</button>
		</div>
	</form>
<?php
}

function addNewTodo()
{ ?>
	<!-- Form for adding todo -->
	<form action="addtodo.php" method="POST" id="todo-form">
		<div id="grid-container">
			<h2>Add new todo</h2>
			<div class="list">
				<label for="list">Choose a list</label>
				<select id="list" name="list" form="todo-form">
					<option value="">--Choose a list--</option>
				</select>
			</div>
			<div class="title">
				<label for="todo-title">Title</label>
				<input type="text" id="todo-title" name="todo-title">
			</div>
			<div class="description">
				<label for="description">Description</label>
				<input type="text" id="description" name="description">
			</div>
			<button type="submit" id="submit">Add todo</button>

		</div>
	</form>
<?php
}

// function for showing error messages
function oops(array $errormessages)
{
	echo "<h1>Oops, something went wrong!</h1>";
		foreach ($errormessages as $message) {
			echo "<p>{$message}</p";
		}
}

function showListCreated(string $title)
{
	echo "<h1>Congrats!</h1>";
	echo "<p>You've just created the list {$title}</p>";
}

?>