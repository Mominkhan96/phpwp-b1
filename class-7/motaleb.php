<?php

//<?php echo "<pre>"; print_r(implode( " |  " , array_values($student))); echo "</pre>";

//<?php echo implode( " | ",array_keys($student[0]));
// arrayOfArrays = array(
//     array('header1',"header2","header3"),
//     array('1.1','1.2','1.3'),
//     array('2.1','2.2','2.3'),
// );


// array_to_table($arrayOfArrays);


$student = array(
    'full_name' => 'Jaed Mosharraf',
    'address' => 'Lalbag, Rangpur',
    'phone' => '01727967674',
    'skills' => array('php', 'wordpress', 'html'),
    'email_address' => 'jaedm97@gmail.com',
);
echo "<pre>"; print_r(  $student ); echo "</pre>";











// echo "<pre>";
// print_r (array_keys($student), '</br>');
//  echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array table</title>
</head>
<body>
<table border="2">
    <thead>
    <tr>
        <th>  <?php echo "<pre>"; print_r(implode( "</th><th>" , array_keys($student))); echo "</pre>"; ?></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td> <?php echo "<pre>"; print_r(implode( "</th><th>" , array_values($student))); ; echo "</pre>"; ?> </td>

    </tr>
    </tbody>

</table>



</body>
</html>

