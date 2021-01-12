<?php
include_once (__DIR__ . '/src/views/header.php');
include (__DIR__ . '/src/controllers/todo.php');
use App\controllers;

?>
<div class="message-container">
<?php
controllers\handleCreateTodo();
?>
</div>

<?php
include_once (__DIR__ . '/src/views/footer.php');
?>