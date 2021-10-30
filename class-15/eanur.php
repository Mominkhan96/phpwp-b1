<?php
/**
 * Class -11
 */
$form_submitted = isset($_POST['form_submitted']) ? $_POST['form_submitted']: '';

if('form_submitted'){

    $full_name = isset($_POST['fullName']) ? $_POST['fullName'] : '';
    $email_address = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $phone_number = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';

    echo 'Form Submit Success';

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
    $sql = "CREATE DATABASE IF NOT EXISTS db_user";
    if (!mysqli_query($conn, $sql)) {
        die("Error creating database: " . mysqli_error($conn));
    }

    // Select Database
    if (!mysqli_select_db($conn, 'db_user')) {
        die("Error selecting database");
    }

    // Create table
    $sql = "CREATE TABLE IF NOT EXISTS user_table (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            full_name VARCHAR(255) NOT NULL,
            email_address VARCHAR(255) UNIQUE NOT NULL,
            password VARCHAR(255),
            phone VARCHAR(50),
            timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    if (!$conn->query($sql)) {
        die("Error creating table: " . $conn->error);
    }

    // Inserting data into Database
    $sql = "INSERT INTO user_table (full_name, email_address, password, phone)
            VALUES ('$full_name', '$email_address', '$password', '$phone_number')";


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
    <title>Form Submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-6">
            <!--<form id="loginForm" method="post" action="form-handler.php">-->
            <form id="loginForm" method="post" action="">
                <div class="mb-3">
                    <label for="fullName" class="fullName">Full Name</label>
                    <input name="fullName" type="text" class="form-control" id="fullName">
                    <div id="fullName" class="form-text">Enter your full name here.</div>
                </div>
                <div class="mb-3">
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
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="alert alert-danger form-notice" style="display:none;" role="alert"></div>
                <input type="hidden" name="form_submitted" value="yes">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>

