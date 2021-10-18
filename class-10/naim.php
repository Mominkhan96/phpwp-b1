<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naeem</title>
</head>
<body>

<h2>Even Number</h2>
<ol>
    <?php
    for ( $index = 1; $index <= 10; $index++) {
        if($index%2 == 0){
            echo '<li>' . $index++ . '</li>';
        }
    }
    ?>
</ol>


<h2>Odd Number</h2>
<ol>
    <?php
    for ( $index = 0; $index <= 10; $index++) {
        if($index%2 == 1){
            echo '<li>' . $index++ . '</li>';
        }
    }
    ?>
</ol>
</body>

</html>










