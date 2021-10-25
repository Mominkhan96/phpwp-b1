<?php

$form_submitted = isset($_POST['form_submitted']) ? $_POST['form_submitted'] : '';

if ($form_submitted == 'yes') {

    $fullName = isset($_POST['fullName']) ? $_POST['fullName'] : '';
    $emailAddress = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '';
    $password = md5(isset($_POST['password']) ? $_POST['password'] : '');
    $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';


    echo 'Form submitted successfully!<br>';

    //connect to mysql
    $servername = "localhost";
    $username = "root";
    $my_password = "";

// Create connection
    $conn = new mysqli($servername, $username, $my_password);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// Create database
    $sql = "CREATE DATABASE IF NOT EXISTS db_school";
    if (!mysqli_query($conn, $sql)) {
        die("Error creating database: " . mysqli_error($conn));
    }

    // Select Database
    if (!mysqli_select_db($conn, 'db_school')) {
        die("Error selecting database");
    }

    //Create table
    $sql = "CREATE TABLE IF NOT EXISTS students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(255) NOT NULL,
        email_address VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        phone_number VARCHAR(50) NOT NULL,
        timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (!$conn->query($sql)) {
        die("Error creating table: " . $conn->error);
    }

    $sql = "INSERT INTO students (full_name, email_address, password, phone_number)
    VALUES ('$fullName', '$emailAddress', '$password', '$phoneNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form id="loginForm" method="post">
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="fullName" class="fullName">Full Name</label>
                        <input name="fullName" type="text" class="form-control" id="fullName">
                        <div id="fullName" class="form-text">Enter your full name here.</div>
                    </div>
                    <div>
                        <label for="emailAddress" class="form-label">Email address</label>
                        <input name="emailAddress" type="email" class="form-control" id="emailAddress">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div>
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input name="phoneNumber" type="text" class="form-control" id="phoneNumber" >
                        <div id="emailHelp" class="form-text">Enter your phone number here.</div>
                    </div>
                    <div class="alert alert-danger form-notice" style="display:none;" role="alert"></div>

                    <input type="hidden" name="form_submitted" value="yes">
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="scripts.js"></script>
</body>
</html>
