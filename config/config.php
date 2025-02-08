<?php
// Configuration for database connection
$host = "localhost"; // MySQL host (use "localhost:8888" if your MySQL server is running on port 8888)
$db_user = "root";   // MySQL username (usually "root" for local server)
$db_pass = "root";       // MySQL password (empty by default for "root" user on local server)
$db_name = "localhost_project";   // Database name

try {
    // Create a new PDO connection
    $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $db_user, $db_pass);

    // Set the error mode to exceptions for better debugging
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Catch and display error if connection fails
    echo "Connection failed: " . $e->getMessage();
    exit;  // Stop execution if DB connection fails
}
?>

<!-- PDO: Supports multiple databases (MySQL, PostgreSQL, SQLite, etc.), 
 so if you plan to switch databases in the future, PDO is more flexible. -->