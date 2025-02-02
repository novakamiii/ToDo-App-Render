<?php
require_once 'config.php';

if (isset($_GET['task_id'])) {
    $task_id = $_GET['task_id'];

    // Ensure task_id is an integer to prevent SQL injection
    $task_id = (int) $task_id;

    // Delete task from PostgreSQL database using pg_query
    $deletingtasks = pg_query($db, "DELETE FROM task WHERE task_id = $task_id");

    if (!$deletingtasks) {
        die("Error in SQL query: " . pg_last_error($db));
    }

    // Redirect to the index page after deletion
    header("Location: index.php");
}
?>
