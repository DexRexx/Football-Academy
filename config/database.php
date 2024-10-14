<?php
// Database credentials
$host = 'localhost'; // Change if using a different host
$username = 'root';   // Default MySQL username
$password = '';       // Default MySQL password for root (empty if not set)

try {
    // Create a new PDO instance without specifying a database yet
    $pdo = new PDO("mysql:host=$host", $username, $password);

    // Set the PDO error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to create the database
    $sql = "CREATE DATABASE IF NOT EXISTS academy";

    // Execute the query
    $pdo->exec($sql);

    echo "Database 'academy' created successfully!";
} catch (PDOException $e) {
    // Handle any errors during the database creation
    echo "Error creating database: " . $e->getMessage();
}

// Close the PDO connection
$pdo = null;
?>
