<?php
/**
 * Class - 5
 *
 * @date 4-10-21
 */

$arr = array(10, 20, 30);

//echo "<pre>";
//print_r($arr);
//echo "</pre>";


$students = array(
    1009041 => array(
        'name' => 'Jaed',
        'full_name' => 'aaa',
        'address' => 'Lalbag, Rangpur',
        'phone' => '01727967674',
        'skills' => array('php', 'wordpress'),
    ),
    1009022 => array(
        'name' => 'Palash',
        'full_name' => 'bbb',
        'address' => 'Rangpur',
        'phone' => '01727967632',
        'skills' => array('php', 'mysql'),
    ),
);

//echo "<pre>";
//print_r($students);
//echo "</pre>";


/*
array(
    'name' => 'Palash',
    'full_name' => 'bbb',
    'address' => 'Rangpur',
    'phone' => '01727967632',
)
*/

$given = 'name=Palash&full_name=bbb&address=Rangpur&phone=967632';

//$arr = array();
//$url = ($given, $arr);
//
//$parse = parse_str($url);
//
//echo "<pre>"; print_r($parse); echo "</pre>";

parse_str($given, $abul);

echo "<pre>";
print_r($abul);
echo "</pre>";


// key | index number