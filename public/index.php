<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<h1>Todos!</h1>

	<!-- Form for adding list -->
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="list-form">
		<div id="grid-container">
			<h2>Add new list</h2>
			<div class="list-title">
				<label for=" list-title">Title</label>
				<input type="text" id="list-title" name="list-title">
			</div>
			<button type="submit" id="submit">Add list</button>
		</div>
	</form>

	<!-- Form for adding todo -->
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="todo-form">
		<div id="grid-container">
			<h2>Add new todo</h2>
			<div class="list">
				<label for="list">Choose a list</label>
				<select id="list" name="list" form="todo-form">
					<option value="">--Choose a list--</option>
				</select>
			</div>
			<div class="title">
				<label for=" todo-title">Title</label>
				<input type="text" id="todo-title" name="todo-title">
			</div>
			<div class="description">
				<label for="description">Description</label>
				<input type="text" id="description" name="description">
			</div>
			<button type="submit" id="submit">Add todo</button>

		</div>
	</form>

</body>

</html>