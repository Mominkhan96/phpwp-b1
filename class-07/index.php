<?php
/**
 * Class 7
 */


$arr = array(
    'name' => 'Palash',
    'name_2' => 'Palash',
    'full_name' => 'bbb',
    'address' => 'Rangpur',
    'phone' => '01727967632',
    'nid' => 1992464566575641,
);

echo "<pre>";
print_r($arr);
echo "</pre>";

// array_key_exists()
//echo "<pre>"; var_dump( array_key_exists('nid', $arr ) ); echo "</pre>";

// in_array()
//echo "<pre>"; var_dump( in_array('bassbb', $arr ) ); echo "</pre>";

// reset()
//$ret = reset($arr);
//echo "<pre>"; print_r( $ret ); echo "</pre>";

//$_arr = array(10, 20, 20, 50, 100, 50, 120, 50, 20);
//
//echo "<pre>";
//print_r($_arr);
//echo "</pre>";
//
//$new_arr = array_unique($_arr);
//
//echo "<pre>";
//print_r($new_arr);
//echo "</pre>";


// array_search()


//$result = array_search('Palash', $arr);
//
//echo "<pre>";
//print_r($result);
//echo "</pre>";


//echo "<pre>";
//print_r(array_reverse($arr));
//echo "</pre>";


//array_shift($arr);
//
//echo "<pre>";
//print_r($arr);
//echo "</pre>";

//$arr['new_key'] = 'New Value';
//
//array_unshift($arr, 20);
//
//echo "<pre>";
//print_r($arr);
//echo "</pre>";


$hello = 'test';

echo "<pre>";
var_dump(is_array($arr));
echo "</pre>";