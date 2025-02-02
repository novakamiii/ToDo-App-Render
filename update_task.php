<?php
require_once 'config.php';

if (isset($_GET['task_id']) && $_GET['task_id'] != "") {
    $task_id = $_GET['task_id'];

    // Ensure task_id is an integer to prevent SQL injection
    $task_id = (int) $task_id;

    // Update task status to 'Done' using pg_query
    $updatingtasks = pg_query($db, 
        "UPDATE task SET status = 'Done' WHERE task_id = $task_id");

    if (!$updatingtasks) {
        die("Error in SQL query: " . pg_last_error($db));
    }

    // Redirect to index.php after updating
    header('Location: index.php');
}
?>
