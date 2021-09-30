<?php
$name = 'Jaed';
$amount = 50;


// Concat
//echo '<p>I have ' . $amount . ' Tk in my pocket.</p>';
//echo "<p>I have $amount Tk in my pocket.</p>";


// printf();
//printf('<p>My name is %s and I have %s Tk in my pocket.</p>', $name, $amount);


//printf('<p>My name is %1$s. And I have %2$s Tk in my pocket. This %2$s tk will be using to buy somme food. I don\'t know this %2$s will enough or not!</p>', $name, $amount);


// sprintf

$string = sprintf('<p>My name is %1$s. And I have %2$s Tk in my pocket. This %2$s tk will be using to buy somme food. I don\'t know this %2$s will enough or not!</p>', $name, $amount);

//echo $string;


// str_replace()

// This is Bangladesh.
// This is India.

//$string = 'This is Bangladesh. Bangladesh is a beautiful country.';
//$replace_string = str_replace('Bangladesh', 'India', $string);

$string = 'Rahim_ Jashim~ Hasan@ Kamal- are good friends.';
// Rahim, Jashim, Hasan, Kamal are good friends

$string = str_replace(array('_', '~', '@', '-'), ',', $string);

// strlen()

$str_for_len = 'Im good';

//echo "<pre>"; print_r( $str_for_len ); echo "</pre>";
//
//echo "<pre>";
//print_r(strlen($str_for_len));
//echo "</pre>";


// stripos()

/**
 * String: He is an Indian but good at PHP.
 */

$string = 'He is a Bangladeshi but good at PHP.';
//
//echo "<pre>";
//print_r($string);
//echo "</pre>";
//
//echo "<pre>";
//var_dump(stripos($string, 'goods'));
//echo "</pre>";

if (stripos($string, 'Indian') !== false) {
    echo 'Yes, He is an Indian!';
} else {
    echo 'No, He is not an Indian!';
}

