<?php
include (__DIR__ . '/autoloader.php');
include (__DIR__ . '/src/views/views_functions.php');

use App\views;

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

	<h1>Todos!</h1>

<?php

views\addNewList();


?>





</body>

</html>