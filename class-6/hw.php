<?php
/**
 * Homework
 */

/**
 * Problem 1
 */

$student = array(
    'full_name' => 'Jaed Mosharraf',
    'address' => 'Lalbag, Rangpur',
    'phone' => '01727967674',
    'skills' => array('php', 'wordpress', 'html'),
    'email_address' => 'jaedm97@gmail.com',
);
echo "<pre>"; print_r( $student ); echo "</pre>";

?>
<html>
    <head>
        <title>Home Work</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Skills</th>
                    <th>Email Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jaed</td>
                    <td>Lalbag, Rangpur</td>
                    <td>01727967674</td>
                    <td>PHP, WORDPRESS, HTML</td>
                    <td>jaedm97@gmail.com</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
