<?php

include 'db-connection.php';

if (!isset($conn)) {
    die('Database connection could not establish!');
}

$current_url = sprintf('%s://%s%s', $_SERVER['REQUEST_SCHEME'], $_SERVER['HTTP_HOST'], $_SERVER['REQUEST_URI']);
$current_url = explode('?', $current_url);
$current_url = isset($current_url[0]) ? $current_url[0] : '';

// Form Submission Handling
$form_submitted = isset($_POST['form_submitted']) ? $_POST['form_submitted'] : '';
if ($form_submitted == 'yes') {

    $fullName = isset($_POST['fullName']) ? $_POST['fullName'] : '';
    $emailAddress = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '';
    $password = md5(isset($_POST['password']) ? $_POST['password'] : '');
    $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';
    $formAction = isset($_POST['form_action']) ? $_POST['form_action'] : 'new';
    $rowID = isset($_POST['row_id']) ? $_POST['row_id'] : '';

    // New form submission
    if ($formAction == 'new') {

        echo 'Form submitted successfully!<br>';

        $sql_insert = "INSERT INTO students (full_name, email_address, password, phone_number, status) VALUES ('$fullName', '$emailAddress', '$password', '$phoneNumber', 'active')";

        if (!$conn->query($sql_insert)) {
            echo "Error: {$conn->error}";
        }
    }


    // Update form submission
    if ($formAction == 'edit') {

        echo 'Data updated successfully!<br>';

        $sql_update = "UPDATE students 
                        SET full_name='$fullName',
                            email_address='$emailAddress',
                            password='$password',
                            phone_number='$phoneNumber'
                        WHERE id=$rowID";

        if (!$conn->query($sql_update)) {
            echo "Error: {$conn->error}";
        } else {
            header("LOCATION: $current_url");
        }
    }
}

$user_id = isset($_GET['id']) ? $_GET['id'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : 'new';
$current_user = array();

if (!empty($user_id)) {
    $result = $conn->query("SELECT * FROM students WHERE `id` = $user_id");
    $current_user = $result->fetch_assoc();
}

$full_name = isset($current_user['full_name']) ? $current_user['full_name'] : '';
$email_address = isset($current_user['email_address']) ? $current_user['email_address'] : '';
$phone_number = isset($current_user['phone_number']) ? $current_user['phone_number'] : '';
$row_id = isset($current_user['id']) ? $current_user['id'] : '';


// Delete
if ($action == 'delete') {

    echo "Do you really want to delete {$current_user['full_name']}?<br>";
    echo "<a href='$current_url?id=$row_id&action=confirm_delete'>Yes</a>&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href='$current_url'>No</a>";

    die();
}

// Delete Confirmation
if ($action == 'confirm_delete') {

    if ($conn->query("DELETE FROM students WHERE `id`=$row_id")) {
        header("LOCATION: $current_url");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    die();
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php if (!empty($user_id) && empty($current_user)) : ?>
                    <div class="alert alert-danger" role="alert">Invalid User ID</div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4">
                <h4 class="mb-3 text-underline">
                    <?php if ($current_user) : ?>
                        <span>Edit - <?php echo $current_user['full_name']; ?></span>
                    <?php else : ?>
                        <span>Student Registration</span>
                    <?php endif; ?>
                </h4>
                <form id="loginForm" method="post">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="fullName" class="fullName">Full Name</label>
                            <input name="fullName" value="<?php echo $full_name; ?>" type="text" class="form-control" id="fullName">
                            <div id="fullName" class="form-text" aria-autocomplete="none">Enter your full name here.</div>
                        </div>
                        <div>
                            <label for="emailAddress" class="form-label">Email address</label>
                            <input name="emailAddress" value="<?php echo $email_address; ?>" type="email" class="form-control" id="emailAddress">
                            <div id="emailHelp" class="form-text" aria-autocomplete="none">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password" aria-autocomplete="none">
                        </div>
                        <div>
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input value="<?php echo $phone_number; ?>" name="phoneNumber" type="text" class="form-control" id="phoneNumber">
                            <div id="emailHelp" class="form-text" aria-autocomplete="none">Enter your phone number here.</div>
                        </div>
                        <div class="alert alert-danger form-notice" style="display:none;" role="alert"></div>

                        <div class="mt-3">
                            <input type="hidden" name="form_submitted" value="yes">
                            <input type="hidden" name="form_action" value="<?php echo $action; ?>">
                            <input type="hidden" name="row_id" value="<?php echo $row_id; ?>">
                            <button type="submit" class="btn btn-primary">
                                <?php if ($current_user) : ?>
                                    <span>Update</span>
                                <?php else : ?>
                                    <span>Add Student</span>
                                <?php endif; ?>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-8">
                <h4 class="mb-3 text-underline">Students</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    $sql_select = "SELECT * FROM students WHERE `status` ='active'";
                    $index = 0;

                    if (!$result = $conn->query($sql_select)) {
                        echo "Error: {$conn->error}";
                    }

                    while ($row = $result->fetch_assoc()) : $index++; ?>
                        <tr>
                            <td><?php echo $index; ?></td>
                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['email_address']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td>
                                <a type="button" href="<?php echo sprintf('%s?id=%s&action=edit', $current_url, $row['id']); ?>" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                <a type="button" href="<?php echo sprintf('%s?id=%s&action=delete', $current_url, $row['id']); ?>" class="btn btn-danger"><i class="bi bi-archive"></i></a>
                            </td>
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