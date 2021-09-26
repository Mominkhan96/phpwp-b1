<?php 
/**
 * Variable Naming
 * 
 * Not allowed
 * - space 
 * - hyphen 
 * - only number
 * - $this (reserved keyword)
 * - very first character as number
 * - special character
 */

$variable_1 = 20;
$variable_2 = array( 
    20, 
    30, 
    50 
);

echo $variable_1; 

echo "<pre>"; print_r( $variable_2 ); echo "</pre>";

$is_okay = sample_function('oassdk');

echo "<pre>"; var_dump( $is_okay ); echo "</pre>";


/**
 * this is a sample function
 * 
 * @param string $param_1
 * 
 * @return bool
 */
function sample_function( string $param_1 ) : bool {

    if( $param_1 == 'ok' ) {
        return true;
    }

    return false;
}



$today = date("jS M Y, g:i a D");

?>


<html>
    <head>
        <title>Class 1</title>
    </head>
    <body>
        <header>
            <p>Today is: <?php echo $today; ?></p>    
        </header>

        <strong>This is a p tag</strong>

        <footer>
            <p>Today is: <?php echo $today; ?></p>    
        </footer>
    </body>
</html>