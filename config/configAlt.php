<?php
// Configuration for database connection
$host = "localhost"; // MySQL host
$db_user = "root";   // MySQL username (usually "root" for local server)
$db_pass = "root";   // MySQL password (empty by default for "root" user on local server)
$db_name = "localhost_project"; // Database name

// Create a new mysqli connection
$conn = new mysqli($host, $db_user, $db_pass, $db_name);

// Check if the connection was successful
if ($conn->connect_error) {
    // If there's a connection error, display it
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set the character set to UTF-8 (similar to PDO's charset=utf8)
$conn->set_charset("utf8");

// Now you can use $conn to execute queries and interact with the database
?>

<!-- mysqli: Only supports MySQL databases. If you're certain you'll always be using MySQL, 
 this may not be a limitation, but it is something to consider for long-term flexibility. -->