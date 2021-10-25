<?php

include 'db-connection.php';

if (!isset($conn)) {
    die('Database connection could not establish!');
}

// Form Submission Handling
$form_submitted = isset($_POST['form_submitted']) ? $_POST['form_submitted'] : '';
if ($form_submitted == 'yes') {

    $fullName = isset($_POST['fullName']) ? $_POST['fullName'] : '';
    $emailAddress = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '';
    $password = md5(isset($_POST['password']) ? $_POST['password'] : '');
    $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';


    echo 'Form submitted successfully!<br>';

    $sql_insert = "INSERT INTO students (full_name, email_address, password, phone_number)
    VALUES ('$fullName', '$emailAddress', '$password', '$phoneNumber')";

    if (!$conn->query($sql_insert)) {
        echo "Error: {$conn->error}";
    }
}


$sql_select = "SELECT * FROM students WHERE `full_name` LIKE '%ed%'";

if (!$result = $conn->query($sql_select)) {
    echo "Error: {$conn->error}";
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
                <h3>Student Registration</h3>
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
                            <input name="phoneNumber" type="text" class="form-control" id="phoneNumber">
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

        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <h3>Students</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Phone Number</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $index = 0;
                    while ($row = $result->fetch_assoc()) : $index++; ?>
                        <tr>
                            <td><?php echo $index; ?></td>
                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['email_address']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                        </tr>
                    <?php endwhile; ?>

                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    </body>
    </html>


<?php
mysqli_close($conn);