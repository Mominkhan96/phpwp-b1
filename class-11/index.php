<?php
/**
 * Class -11
 */


$form_submitted = isset($_POST['form_submitted']) ? $_POST['form_submitted'] : '';

if ($form_submitted == 'yes') {

    $email_address = isset($_POST['email_address']) ? $_POST['email_address'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    echo 'Form submitted successfully!<br>';

    echo "EmailAddress: $email_address<br>";
    echo "Password: $password<br>";

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


            <!--            <form id="loginForm" method="post" action="form-handler.php">-->
            <form id="loginForm" method="post" action="">
                <div class="mb-3">
                    <label for="emailAddress" class="form-label">Email address</label>
                    <input name="email_address" type="email" class="form-control" id="emailAddress">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
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
<script src="assets/js/scripts.js"></script>
</body>
</html>
