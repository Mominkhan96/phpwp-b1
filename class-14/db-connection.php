<?php

// Create connection
$conn = new mysqli('localhost', 'root', '');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
if (!mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS db_school")) {
    die("Error creating database: " . mysqli_error($conn));
}

// Select Database
if (!mysqli_select_db($conn, 'db_school')) {
    die("Error selecting database");
}


//Create table
$sql_create_tbl = "CREATE TABLE IF NOT EXISTS students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(255) NOT NULL,
        email_address VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        phone_number VARCHAR(50) NOT NULL,
        timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if (!$conn->query($sql_create_tbl)) {
    die("Error creating table: " . $conn->error);
}

