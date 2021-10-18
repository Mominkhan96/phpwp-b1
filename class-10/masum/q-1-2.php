<?php

$start =5;
$end = 15;


?>
<html lang="en_US">
<head>
    <title>Students</title>
</head>
<body>
<h2>Even Number</h2>
<ol>
    <?php
    for ( $index = $start; $index<= $end; $index++) {

        if ($index % 2 == 0) {
            printf('<li>%s</li>',$index);
        }
    }
    ?>
</ol>
<h2>Odd Number</h2>
<ol>
    <?php
    for ( $index = $start; $index<= $end; $index++) {

        if ($index % 2 != 0 ) {
            printf('<li>%s</li>',$index);
        }
    }
    ?>
</ol>
</body>
</html>
