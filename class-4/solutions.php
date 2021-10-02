<?php
/**
 * Solutions for questions
 */

$data = "Bangladesh: বাংলাদেশ, romanized: Bānlādēśa; pronounced [ˈbaŋlaˌdeʃ] (About this soundlisten)), officially the People's Republic of Bangladesh, is a country in South Asia.
It is the eighth-most populous country in the world, with a population exceeding 163 million people, in an area of 148,560 square kilometres (57,360 sq mi),[8] making it one of the most densely populated countries in the world.
Bangladesh shares land borders with India to the west, north, and east, Myanmar to the southeast, and the Bay of Bengal to the south. It is narrowly separated from Nepal and Bhutan by the Siliguri Corridor, and from China by the Indian state of Sikkim in the north, respectively.
Dhaka, the capital and largest city, is the nation's economic, political, and cultural hub. Chittagong, the largest seaport, is the second-largest city.";


echo "<pre>";
print_r($data);
echo "</pre>";

$searched_items = count( explode('Bangladesh', $data) ) - 1;

echo "<pre>";
print_r($searched_items);
echo "</pre>";


$given_str = "I'm good at English";
$rep_str = str_replace("Good", "Better", $given_str);
$rep_str = str_replace("English", "ENGLISH", $rep_str);
$rep_str = ucwords($rep_str);
$rep_arr = explode(' ', $rep_str);

//echo "<pre>";
//print_r($rep_arr);
//echo "</pre>";

if (!function_exists('get_string_length')) {
    /**
     * Return length of any string
     *
     * @param $str
     *
     * @return int
     */
    function get_string_length($str)
    {
        return strlen($str);
    }
}

//echo get_string_length('ok');


/**
 * Hello Bangladesh.
 * I am okay. How are you?
 */


//$new_lines = substr_count($data, "\n") + 1;
//echo "<pre>"; print_r( $new_lines ); echo "</pre>";

//$new_lines = explode("\n", $data);
//
//
//echo "<pre>";
//print_r($new_lines);
//echo "</pre>";
//
//echo "<pre>";
//print_r(count($new_lines));
//echo "</pre>";


