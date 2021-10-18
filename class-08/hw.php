<?php
/**
 * Homework
 */

$data = array(
    'bangla' => 70,
    'english' => 70,
    'physics' => 70,
    'chemistry' => 70,
    'math' => 70,
    'biology' => 70,
    'social_science' => 70,
);

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
        <td>Bangla</td>
        <td>70</td>
        <td>4</td>
        <td rowspan="3">4</td>
    </tr>
    <tr>
        <td>English</td>
        <td>70</td>
        <td>4</td>
    </tr>
    <tr>
        <td>Physics</td>
        <td>70</td>
        <td>4</td>
    </tr>
    </tbody>
</table>
</body>
</html>
