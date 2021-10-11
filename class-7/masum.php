<?php
/**
 * Homework
 */

/**
 * Problem 1
 */

$student = array(
    'name' => 'Masum billah',
    'address' => 'parkmore, rangpur.',
    'phone-number' => '01726864358,01997579733',
    'skills' => array('PHP', 'Wordpress', 'html', 'css'),
    'email' => 'masumbilla@outlook.com',
);

echo "<pre>";
print_r($student);
echo "</pre>";

// for table head

$key = array_keys($student);
//    $str_key = implode(' ',$key);
$full_name = ucwords(str_replace(['_', '-', '~',], ' ', $key[0]));
$address = ucwords(str_replace(['_', '-', '~',], ' ', $key[1]));
$phone = ucwords(str_replace(['_', '-', '~',], ' ', $key[2]));
$skills = ucwords(str_replace(['_', '-', '~',], ' ', $key[3]));
$email_address = ucwords(str_replace(['_', '-', '~',], ' ', $key[4]));


//for table body

$values = array_values($student);
$name = ucwords($values[0]);
$full_address = ucwords($values[1]);
$number = $values[2];
$skills_field = strtoupper(implode(', ', $values[3]));
//  echo $skills_field = strtoupper(str_replace(',',' ',$skills_field));
$email = $values[4];


//echo "<pre>";
//print_r( $values[0] );
//echo "</pre>";

?>


<html>
<head>
    <title>Home Work</title>
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th> <?php echo $full_name; ?> </th>
        <th> <?php echo $address; ?> </th>
        <th> <?php echo $phone; ?></th>
        <th> <?php echo $skills; ?> </th>
        <th> <?php echo $email_address; ?> </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $full_address; ?></td>
        <td><?php echo $number; ?></td>
        <td><?php echo $skills_field; ?></td>
        <td><?php echo $email; ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>
