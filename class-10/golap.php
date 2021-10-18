<?php
$start = 6;
$end = 20;

?>


<html lang="en_US">
<head>
    <title>odd and even number</title>
</head>
<body>
<h2></h2>
<ol>
    <?php
    for($index=$start; $index <=$end; $index+=2){
        echo '<li>'.($index) . '</li>';
    }

    echo "<pre>";
    echo "</pre>";

    for($index=2; $index <=10; $index+=2){
        echo '<li>'.($index) . '</li>';
    }
    ?>
</ol>
</body>
</html>