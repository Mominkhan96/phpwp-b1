<?php

$results = array(
    'Bangla' => '79',
    'English' => '65',
    'Mathmatics' => '56',
    'Physics' => '45',
    'Chemistry' => '75',
    'Social_Science' => '85',
    'Agricultural' => 10,
);
// all values is here
$res_values = array_values($results);


$bangla_val = $res_values[0];
$english_val = $res_values[1];
$math_val = $res_values[2];
$physics_val = $res_values[3];
$cemistry_val = $res_values[4];
$social_science_val = $res_values[5];
$agricultural_val = $res_values[6];

// all keys is here

$res_keys = array_keys($results);

$bangla = $res_keys[0];
$english = $res_keys[1];
$math = $res_keys[2];
$physics = $res_keys[3];
$cemistry = $res_keys[4];
$social_science = $res_keys[5];
$agricultural = $res_keys[6];

echo "<pre>";
print_r($results);
echo "</pre>";


$all_val = $bangla_val + $english_val + $math_val + $physics_val + $social_science_val + $cemistry_val;


print_r($all_val);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>

<table border=1 cellpadding=10>
    <thead>
    <th>Subject</th>
    <th>Grade</th>
    <th>GPA</th>
    <th>Comment</th>
    </thead>
    <tbody>
    <tr>
        <td><?php print_r($bangla); ?></td>
        <td><?php

            if ($bangla_val >= 80 && $bangla_val <= 100) {
                print_r('A+');
            }

            if ($bangla_val >= 70 && $bangla_val <= 79) {
                print_r('A');

            }
            if ($bangla_val >= 60 && $bangla_val <= 69) {
                print_r('A-');
            }
            if ($bangla_val >= 50 && $bangla_val <= 59) {
                print_r('B');
            }
            if ($bangla_val >= 40 && $bangla_val <= 49) {
                print_r('C');
            }
            if ($bangla_val >= 33 && $bangla_val <= 39) {
                print_r('D');
            }
            if ($bangla_val >= 0 && $bangla_val <= 32) {
                print_r('F');
            }


            ?></td>
        <td rowspan="7"><?php

            if ($all_val >= 600 && $all_val <= 700) {
                print_r('4.00');
            }
            if ($all_val >= 550 && $all_val <= 599) {
                print_r('3.75');
            }
            if ($all_val >= 500 && $all_val <= 549) {
                print_r('3.50');
            }
            if ($all_val >= 450 && $all_val <= 499) {
                print_r('3.25');
            }
            if ($all_val >= 400 && $all_val <= 449) {
                print_r('3.00');
            }
            if ($all_val >= 350 && $all_val <= 399) {
                print_r('2.75');
            }
            if ($all_val >= 300 && $all_val <= 349) {
                print_r('2.50');
            }
            if ($all_val >= 0 && $all_val <= 299) {
                print_r('0.00');
            }

            ?></td>
        <td rowspan="7"><?php

            if ($all_val >= 600 && $all_val <= 700) {
                print_r('Excellent');
            }
            if ($all_val >= 550 && $all_val <= 599) {
                print_r('Better');
            }
            if ($all_val >= 500 && $all_val <= 549) {
                print_r('Best');
            }
            if ($all_val >= 450 && $all_val <= 499) {
                print_r('Good');
            }
            if ($all_val >= 400 && $all_val <= 449) {
                print_r('Try to Best');
            }
            if ($all_val >= 350 && $all_val <= 399) {
                print_r('Bad');
            }
            if ($all_val >= 300 && $all_val <= 349) {
                print_r('Worst');
            }
            if ($all_val >= 0 && $all_val <= 299) {
                print_r('Failed');
            }

            ?></td>
    </tr>
    <tr>
        <td><?php print_r($english); ?></td>
        <td><?php

            if ($english_val >= 80 && $english_val <= 100) {
                print_r('A+');
            }
            if ($english_val >= 70 && $english_val <= 79) {
                print_r('A');
            }
            if ($english_val >= 60 && $english_val <= 69) {
                print_r('A-');
            }
            if ($english_val >= 50 && $english_val <= 59) {
                print_r('B');
            }
            if ($english_val >= 40 && $english_val <= 49) {
                print_r('C');
            }
            if ($english_val >= 33 && $english_val <= 39) {
                print_r('D');
            }
            if ($english_val >= 0 && $english_val <= 32) {
                print_r('F');
            }


            ?></td>

    </tr>
    <tr>
        <td><?php print_r($math); ?></td>
        <td><?php

            if ($math_val >= 80 && $math_val <= 100) {
                print_r('A+');
            }
            if ($math_val >= 70 && $math_val <= 79) {
                print_r('A');
            }
            if ($math_val >= 60 && $math_val <= 69) {
                print_r('A-');
            }
            if ($math_val >= 50 && $math_val <= 59) {
                print_r('B');
            }
            if ($math_val >= 40 && $math_val <= 49) {
                print_r('C');
            }
            if ($math_val >= 33 && $math_val <= 39) {
                print_r('D');
            }
            if ($math_val >= 0 && $math_val <= 32) {
                print_r('F');
            }

            ?></td>

    </tr>
    <tr>
        <td><?php print_r($physics); ?></td>
        <td><?php

            if ($physics_val >= 80 && $physics_val <= 100) {
                print_r('A+');
            }
            if ($physics_val >= 70 && $physics_val <= 79) {
                print_r('A');
            }
            if ($physics_val >= 60 && $physics_val <= 69) {
                print_r('A-');
            }
            if ($physics_val >= 50 && $physics_val <= 59) {
                print_r('B');
            }
            if ($physics_val >= 40 && $physics_val <= 49) {
                print_r('C');
            }
            if ($physics_val >= 33 && $physics_val <= 39) {
                print_r('D');
            }
            if ($physics_val >= 0 && $physics_val <= 32) {
                print_r('F');
            }

            ?></td>

    </tr>
    <tr>
        <td><?php print_r($cemistry); ?></td>
        <td><?php

            if ($cemistry_val >= 80 && $cemistry_val <= 100) {
                print_r('A+');
            }
            if ($cemistry_val >= 70 && $cemistry_val <= 79) {
                print_r('A');
            }
            if ($cemistry_val >= 60 && $cemistry_val <= 69) {
                print_r('A-');
            }
            if ($cemistry_val >= 50 && $cemistry_val <= 59) {
                print_r('B');
            }
            if ($cemistry_val >= 40 && $cemistry_val <= 49) {
                print_r('C');
            }
            if ($cemistry_val >= 33 && $cemistry_val <= 39) {
                print_r('D');
            }
            if ($cemistry_val >= 0 && $cemistry_val <= 32) {
                print_r('F');
            }

            ?></td>

    </tr>
    <tr>
        <td><?php print_r($social_science); ?></td>
        <td><?php

            if ($social_science_val >= 80 && $social_science_val <= 100) {
                print_r('A+');
            }
            if ($social_science_val >= 70 && $social_science_val <= 79) {
                print_r('A');
            }
            if ($social_science_val >= 60 && $social_science_val <= 69) {
                print_r('A-');
            }
            if ($social_science_val >= 50 && $social_science_val <= 59) {
                print_r('B');
            }
            if ($social_science_val >= 40 && $social_science_val <= 49) {
                print_r('C');
            }
            if ($social_science_val >= 33 && $social_science_val <= 39) {
                print_r('D');
            }
            if ($social_science_val >= 0 && $social_science_val <= 32) {
                print_r('F');
            }

            ?></td>

    </tr>
    <tr>
        <td><?php print_r($agricultural); ?></td>
        <td><?php

            if ($agricultural_val >= 80 && $agricultural_val <= 100) {
                print_r('A+');
            }
            if ($agricultural_val >= 70 && $agricultural_val <= 79) {
                print_r('A');
            }
            if ($agricultural_val >= 60 && $agricultural_val <= 69) {
                print_r('A-');
            }
            if ($agricultural_val >= 50 && $agricultural_val <= 59) {
                print_r('B');
            }
            if ($agricultural_val >= 40 && $agricultural_val <= 49) {
                print_r('C');
            }
            if ($agricultural_val >= 33 && $agricultural_val <= 39) {
                print_r('D');
            }
            if ($agricultural_val >= 0 && $agricultural_val <= 32) {
                print_r('F');
            }

            ?></td>

    </tr>
    </tbody>
</table>


</body>
</html>