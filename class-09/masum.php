<?php
/**
 * Homework
 */

$data = array(
    'bangla_1st' => 25,
    'english' => 75,
    'physics' => 65,
    'chemistry' => 31,
    'math' => 69,
    'biology' => 33,
    'social_science' => 57,
);

//for subject name

$subjects = array_keys($data);

echo '<pre>';
print_r($data);
echo '</pre>';

$sub_1 = ucwords(str_replace('_', ' ', $subjects[0]));
$sub_2 = ucwords(str_replace('_', ' ', $subjects[1]));
$sub_3 = ucwords(str_replace('_', ' ', $subjects[2]));
$sub_4 = ucwords(str_replace('_', ' ', $subjects[3]));
$sub_5 = ucwords(str_replace('_', ' ', $subjects[4]));
$sub_6 = ucwords(str_replace('_', ' ', $subjects[5]));
$sub_7 = ucwords(str_replace('_', ' ', $subjects[6]));


//for subject marks

$subject_marks = array_values($data);

//valid and invalid mark checking

$subject_1_mark = '';
if ($subject_marks[0] <= 100) {
    $subject_1_mark = $subject_marks[0];
} else {
    $subject_1_mark = 'Invalid Mark';
}

$subject_2_mark = '';
if ($subject_marks[1] <= 100) {
    $subject_2_mark = $subject_marks[1];
} else {
    $subject_2_mark = 'Invalid Mark';
}

$subject_3_mark = '';
if ($subject_marks[2] <= 100) {
    $subject_3_mark = $subject_marks[2];
} else {
    $subject_3_mark = 'Invalid Mark';
}

$subject_4_mark = '';
if ($subject_marks[3] <= 100) {
    $subject_4_mark = $subject_marks[3];
} else {
    $subject_4_mark = 'Invalid Mark';
}

$subject_5_mark = '';
if ($subject_marks[4] <= 100) {
    $subject_5_mark = $subject_marks[4];
} else {
    $subject_5_mark = 'Invalid Mark';
}

$subject_6_mark = '';
if ($subject_marks[5] <= 100) {
    $subject_6_mark = $subject_marks[5];
} else {
    $subject_6_mark = 'Invalid Mark';
}

$subject_7_mark = '';
if ($subject_marks[6] <= 100) {
    $subject_7_mark = $subject_marks[6];
} else {
    $subject_7_mark = 'Invalid Mark';
}

/*
 * function for grade point
 * param-mark
 *
 */


function for_grade_point($mark)
{

    if ($mark >= 80 && $mark <= 100) {
        return 5.00;

    } elseif ($mark >= 70 && $mark <= 79) {
        return 4.00;
    } elseif ($mark >= 60 && $mark <= 69) {
        return 3.50;
    } elseif ($mark >= 50 && $mark <= 59) {
        return 3.00;
    } elseif ($mark >= 40 && $mark <= 49) {
        return 2.00;
    } elseif ($mark >= 33 && $mark <= 39) {
        return 1.00;
    } elseif ($mark >= 0 && $mark <= 32) {
        return 0;
    } else {
        echo 'Invalid Mark!';
    }

}

//function valid_gpa($grade){if($grade>0){
//    return $grade;
//}elseif($grade=0) {
//    return 'invalid';
//
//
//}}


$grade_sub_1 = for_grade_point($subject_1_mark);
$grade_sub_2 = for_grade_point($subject_2_mark);
$grade_sub_3 = for_grade_point($subject_3_mark);
$grade_sub_4 = for_grade_point($subject_4_mark);
$grade_sub_5 = for_grade_point($subject_5_mark);
$grade_sub_6 = for_grade_point($subject_6_mark);
$grade_sub_7 = for_grade_point($subject_7_mark);

//    $grade_sub_1 = valid_gpa($grade_sub_1);
//    $grade_sub_2 = valid_gpa($grade_sub_2);
//    $grade_sub_3 = valid_gpa($grade_sub_3);
//    $grade_sub_4 = valid_gpa($grade_sub_4);
//    $grade_sub_5 = valid_gpa($grade_sub_5);
//    $grade_sub_6 = valid_gpa($grade_sub_6);
//    $grade_sub_7 = valid_gpa($grade_sub_7);

$is_failed = false;

if ($grade_sub_1 < 1 ||
    $grade_sub_2 < 1 ||
    $grade_sub_3 < 1 ||
    $grade_sub_4 < 1 ||
    $grade_sub_5 < 1 ||
    $grade_sub_6 < 1 ||
    $grade_sub_7 < 1
) {
    $is_failed = true;
}


$avareage_gpa = round((($grade_sub_1 + $grade_sub_2 + $grade_sub_3 + $grade_sub_4 + $grade_sub_5 + $grade_sub_6 + $grade_sub_7) / 7), 2);

if ($avareage_gpa >= 5.00) {
    $result = 'Excellent!';
} elseif ($avareage_gpa >= 4.00 && $avareage_gpa < 5) {
    $result = 'Better';
} elseif ($avareage_gpa >= 3.50 && $avareage_gpa <= 3.99) {
    $result = 'Good';
} elseif ($avareage_gpa >= 3.00 && $avareage_gpa <= 3.49) {
    $result = 'Bad';
} elseif ($avareage_gpa >= 2.00 && $avareage_gpa <= 2.99) {
    $result = 'Very Bad';
} elseif ($avareage_gpa >= 1.00 && $avareage_gpa <= 1.99) {
    $result = 'Worst';
} elseif ($avareage_gpa >= 0 && $avareage_gpa <= .99) {
    $result = 'Failed!';
} else {
    $result = 'Invalid Mark!';
}


?>


<html>
<head>
    <title>Result Sheet</title>
</head>
<body>
<table border="1" cellpadding="10">
    <thead>
    <tr>
        <th>Subjects</th>
        <th>Mark</th>
        <th>Grade Point</th>
        <th>GPA</th>
        <th>Comment</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td> <?php echo $sub_1 ?> </td>
        <td> <?php echo $subject_1_mark ?> </td>
        <td> <?php echo $grade_sub_1 ?> </td>
        <td rowspan="7"> <?php echo $is_failed ? '0' : $avareage_gpa; ?> </td>
        <td rowspan="7"> <?php echo $result ?> </td>
    </tr>
    <tr>
        <td> <?php echo $sub_2 ?> </td>
        <td> <?php echo $subject_2_mark ?> </td>
        <td> <?php echo $grade_sub_2 ?> </td>
    </tr>
    <tr>
        <td> <?php echo $sub_3 ?> </td>
        <td> <?php echo $subject_3_mark ?> </td>
        <td> <?php echo $grade_sub_3 ?> </td>
    </tr>
    <tr>
        <td> <?php echo $sub_4 ?> </td>
        <td> <?php echo $subject_4_mark ?> </td>
        <td> <?php echo $grade_sub_4 ?> </td>
    </tr>
    <tr>
        <td> <?php echo $sub_5 ?> </td>
        <td> <?php echo $subject_5_mark ?> </td>
        <td> <?php echo $grade_sub_5 ?> </td>
    </tr>
    <tr>
        <td> <?php echo $sub_6 ?> </td>
        <td> <?php echo $subject_6_mark ?> </td>
        <td> <?php echo $grade_sub_6 ?> </td>
    </tr>
    <tr>
        <td> <?php echo $sub_7 ?> </td>
        <td> <?php echo $subject_7_mark ?> </td>
        <td> <?php echo $grade_sub_7 ?> </td>
    </tbody>
</table>
</body>
</html>


