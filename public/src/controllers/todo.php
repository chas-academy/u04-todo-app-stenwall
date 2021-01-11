<?php
include_once (__DIR__ . '/../models/todo.php');

function createTodo($text, $user_id) {
    $text = $_POST['text'];
    $user_id = $_SESSION['user_id'];

    // anropa funktioen från user.php i models
	createTodo($user_id, $text);
	
    // skicka tillbaka html för att visa att det gick bra från views mappen
    showTodoCreatedView();
}


 if (submitForm($_POST)) {
	 $availableString = "";
	 if ($_POST["available"]) {
		$availableString = "yes";
	 } else {
		 $availableString = "no";
	 } 
	echo "
	
	<h1>You have added the following todo:</h1>
	   <ul>
			<li><b>Title:</b> {$_POST["title"]}</li>
			<li><b>Author:</b> {$_POST["author"]}</li>
			<li><b>Number of pages:</b> {$_POST["pages"]}</li>
			<li><b>ISBN:</b> {$_POST["isbn"]}</li>
			<li><b>Available:</b> {$availableString}</li>
		</ul>
		<a href='bookform.php' class='button'>Go back</a>";
	 updateBooks($books);
 } else {
	 echo "<a href='bookform.php' class='button'>Go back</a>";
 }
 ?> 

?>