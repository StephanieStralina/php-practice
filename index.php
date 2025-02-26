<!-- PHP is weakly typed (dynamically)
 type of variable can change 
 type checking happens at run time
 supports strict types
 
 10 primitive types:

 // 4 Scalar types
 # bool - true/false
 # int - whole nums
 # float - decimals
 # string - chars in quotes

// 4 Compound Types
# array - list of items, can be mixed types
# object - future vid
# callable - future vid
# iterable - future vid

// 2 Special Types
# resource - future vid
# null - no value
 -->
<?php

$completed = true;
$score = 75;
$price = 0.99;
$greeting = 'Hello Stephanie';

echo $completed . '<br />';
echo $score . '<br />';
echo $price . '<br />';
echo $greeting . '<br />';

var_dump($completed);
// ^ tells us everything it knows about the variable
echo gettype($price);
// ^ tells the type

// $companies = [1, 2, 3, 0.5. -9.2, 'A'];
//Array

//Can have type coercion so return 2 + '4' will still get 6
//due to context
//to override use strict_types= to avoid unexpected bugs

//typecasting
$x = (int) '5';
var_dump($x);
