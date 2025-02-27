<?php
/* Null */
// variable with no value

// null constant - echo returns nothing (empty string)
$x = null;
// is_null($x) boolean
// $x === null boolean
// if $x is undefined it's also technically null but throws error
// casting converts to null of each type


/* Arrays */
//List of values, can contain multiple data types

$programmingLanguages = ['PHP', 'Java', 'Python'];
//index starting at 0
//access using bracket notation $programmingLanguages[0]
//can't use [-] though
//use isset() to try and see if an index point exists
//count()

$programmingLanguages[] = 'C++';
//pushes elements to end of array
//array_push($exampe, 'Item1', 'Item2')

//can give arrays custom keys instead of index
// // $programmingLangues = [
//     'php' => '8.0',
//     'python' => '3.9'
// ]

//pring_r prints key and value
//Can have multi-dimensional arrays with different data types
//can access through multi-bracket $programmingLanguages['php']['versions'][3]['releasteDate']
//echo array_pop($array) removes last, array_shift removes first
//unset($array[3]) can remove and destroy specified variable (can do multiple separated with ,)
//Can cast to arrays

// fun array_key_exists() checks to see in a key exists in an array