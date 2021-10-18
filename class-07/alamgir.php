
<?php
$student = array(
    'full_name' => 'Jaed Mosharraf',
    'address' => 'Lalbag, Rangpur, bangladesh',
    'phone' => '01727967674',
    'skills' => array('php', 'wordpress', 'html'),
    'email_address' => 'jaedm97@gmail.com',
);

?>

<html>
<head>
    <h2>PHP Table</h2>
</head>
<body>
<table border=1>
    <?php foreach($student as $list): ?>

    <thead>
    <tr>
        <td><?php echo $list ; ?></td>
    </tr>
    </thead>

    <tbody>
    <?php endforeach; ?>
    </tbody>

</table>
</body>
</html>