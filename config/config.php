<?php
$host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "localhost_project";

try {
    // Create a new PDO connection
    $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $db_user, $db_pass);

    // Set the error mode to exceptions for better debugging
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;  // Stop execution if DB connection fails
}
?>

<!-- PDO: Supports multiple databases (MySQL, PostgreSQL, SQLite, etc.), 
 so if you plan to switch databases in the future, PDO is more flexible. -->