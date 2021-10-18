<?php

$start = 0;
$end = 20;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>khorshed </title>
</head>
<body>
<p>Even Number</p>
<?php
for ($index = $start; $index <= $end; $index++) {
    if ($index % 2 == 0) {
        printf('<li>%s</li>', $index);
    }
}
?>
<p>Odd Number</p>
<?php
for ($index = $start; $index <= $end; $index++) {
    if ($index % 2 == 1) {
        printf('<li>%s</li>', $index);
    }
}
?>
</body>
</html>