<?php

/* BOOLEANS */

$isComplete = -0;



if($isComplete) {
    echo 'success';
} else {
    echo 'fail';
}

//Integers 0 and -0 = false
//Floats the same
//'' is false
//'0' is false
//[] is false
// null = false

is_bool($isComplete);
//evaluates if boolean value
//No longer boolean if you do something like $isComplete = (string) 0;

/* INTEGERS */

$x = 5;
//can do base 10 numbers, octonumbers, binary numbers, etc.
//can run PHP_INT_MAX to see absolute max number PHP can work with
//$x = (int) 5.98 it will drop the int (not round)

/* FLOATS */

$y = 13.5;
//can use e3/e-3 
//PHP_FLOAT_MAX/_MIN upper limits of float
//floor rounds down, ceil rounds up
//don't compare floats directly x == y
// is_nan(log(-1)) == false

echo $y;
