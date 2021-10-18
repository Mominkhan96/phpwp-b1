<?php
/**
 * String Operation
 */


$str_names = "Jaed Mosharraf ,palash Chandro , Golap mondol , khorshed, alomgir hossain , Jahid Hasan";

$arr_names = explode(',', $str_names);

echo $str_names;

echo "<pre>";
var_dump($arr_names);
echo "</pre>";


$address = array(
    '14/5',
    'Road 2',
    'Masterpara',
    'Chartola Mor',
    'Rangpur',
    'Rangpur - 5405'
);

// echo "<pre>"; print_r( $address ); echo "</pre>";


$str = "jaed000";


echo md5($str);


$arr_url = array();
$str_url = 'q=sample&name=jaed&oq=sample&browser=chrome&key=719j0jsarwe45643tg7&sourceid=chrome&ie=UTF-8';

parse_str($str_url, $arr_url);

echo "<pre>";
print_r($str_url);
echo "</pre>";
echo "<pre>";
print_r($arr_url);
echo "</pre>";


?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Class 2</title>
    </head>
    <body>

    <h2>Candidate Names</h2>
    <ul>
        <?php foreach ($arr_names as $name) : ?>


            <li><?php

                // echo ucwords( $name );

                $name = trim($name);

                echo ucfirst($name);

                ?></li>


        <?php endforeach; ?>
    </ul>

    <h2>Address</h2>
    <p><?php echo implode(', ', $address); ?></p>

    </body>
    </html>


<?php

if (!function_exists('add_numbers')) {
    /**
     * Add 2 numbers and return result
     *
     * @param mixed $num_1
     * @param mixed $num_2
     *
     * @return mixed
     */
    function add_numbers($num_1, $num_2)
    {

        $result = $num_1 + $num_2;

        return $result;
    }
}


// echo add_numbers( 20, 30 );


// Golap mondol -> Golap Mondol

//echo ucfirst('Golap mondol');
//echo ucwords('Golap mondol');

/**
 *
 * Given: This is Bangladesh
 *
 * This
 * Is
 * Bangladesh
 */

$string = "This is Bangladesh";
$string = ucwords("This is Bangladesh");
$arr_parts = explode(' ', $string);

echo "<pre>";
print_r($arr_parts);
echo "</pre>";


// Target = This is Bangladesh
$given_arr = array('This', 'Is', 'Bangladesh');




