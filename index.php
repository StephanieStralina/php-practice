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