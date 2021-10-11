<?php
/**
 * Homework
 */

/**
 * Problem 1
 */

$student = array(
    'name' => 'Jaed Mosharraf',
    'address' => 'Lalbag, Rangpur',
    'phone' => '01727967334',
    'skills' => array('php', 'wordpress', 'html'),
    'email_address' => 'jaedm97@gmail.com',
);
echo "<pre>"; print_r( $student ); echo "</pre>";





 //echo $student['full_name']


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
                  <td><?php  echo $student['full_name'] ?> </td>
                    <td><?php echo $student['address'] ?></td>
                    <td><?php echo $student['phone'] ?></td>
                    <td></td>
                    <td><?php echo $student['email_address'] ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>

</body>
</html>