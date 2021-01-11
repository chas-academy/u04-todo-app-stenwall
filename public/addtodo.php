<?php
include (__DIR__ . '/src/controllers/todo.php');
use App\controllers;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.min.css">
	<title>Todos</title>
</head>

<body>

<div class="message-container">
<?php
controllers\handleCreateTodo();
?>
</div>

</body>

</html>