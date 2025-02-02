<?php
// Set database connection parameters
$host = 'ungexternaldatabseurlmo.oregon-postgres.render.com'; #ex 'dpg.xxxx.oregon-postgres.render.com'
$port = '5432';
$dbname = 'database';
$user = 'username';
$password = 'password';

// Connect to PostgreSQL database
$db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$db) {
    die("Error in connection: " . pg_last_error());
}
?>
