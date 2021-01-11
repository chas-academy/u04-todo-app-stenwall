<?php
include (__DIR__ . '/src/controllers/todolist.php');
use App\controllers;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Todos</title>
</head>

<body>

<?php
controllers\handleCreateList();
?>

</body>

</html>