<?php
/**
 * Class - 5
 *
 * @date 4-10-21
 */

/*
 * array_key_exists() - done
 * array_keys() - done
 * array_map()
 * array_merge() - done
 * array_pop() - done
 * array_push() - done
 * array_rand() - done
 * array_reverse() - done
 * array_search() - done
 * array_shift() - done
 * array_unshift() - done
 * array_slice()
 * array_unique() - done
 * array_values() - done
 * arsort() - done
 * asort() - done
 * count() - done
 * in_array() - done
 * krsort()
 * ksort()
 * reset() - done
 * shuffle() - done
 * sizeof() - done
 * sort()
 * is_array() - done
 *
 */


$arr = array(
    'name' => 'Palash',
    'full_name' => 'bbb',
    'address' => 'Rangpur',
    'phone' => '01727967632',
);

//echo "<pre>";
//print_r($arr);
//echo "</pre>";

//echo "<pre>";
//print_r(array_keys($arr));
//echo "</pre>";
//
//echo "<pre>";
//print_r(array_values($arr));
//echo "</pre>";

//$omitted = array_pop($arr);
//
//echo "<pre>"; print_r( $arr ); echo "</pre>";
//echo "<pre>"; print_r( $omitted ); echo "</pre>";

//$arr = array( 10, 20, 30 );
//array_push($arr, 50);

//array_push($arr, 'test');


$arr = array_merge($arr, array('id' => 1009045, 'email' => 'jaedm97@gmail.com'));

echo "<pre>";
print_r($arr);
echo "</pre>";

//echo "<pre>";
//print_r($arr);
//echo "</pre>";
//
//echo "<pre>";
//print_r(array_rand($arr));
//echo "</pre>";


//echo "<pre>";
//print_r(rand(1000, 9999));
//echo "</pre>";


//$new_arr = array( 10, 20, 30, 25);
//
//echo "<pre>"; print_r( $new_arr ); echo "</pre>";
//
//$ret = arsort( $new_arr );
//$ret = asort( $new_arr );
//
//echo "<pre>"; var_dump( $ret ); echo "</pre>";
//echo "<pre>"; print_r( $new_arr ); echo "</pre>";

//echo "<pre>";
//print_r(sizeof($arr));
//echo "</pre>";

//shuffle($arr);
//
//echo "<pre>";
//print_r($arr);
//echo "</pre>";


