<?php
require_once 'config.php';

if (isset($_POST['add'])) {
    if ($_POST['task'] != "") {
        $task = $_POST['task'];

        // Insert task into PostgreSQL database using pg_query
        $addtasks = pg_query($db, "INSERT INTO task (task, status) VALUES ('$task', 'Pending')");

        if (!$addtasks) {
            die("Error in SQL query: " . pg_last_error($db));
        }

        // Redirect after adding the task
        header('Location: index.php');
    }
}
?>
