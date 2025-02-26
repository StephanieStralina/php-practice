<?php

// Constants

$firstName = 'Stephanie';

$firstName = 'Ellie';

define('name', 'value');
//no longer use third variable for uppercase, now use uppercase
define('STATUS_PAID', 'paid');

//php reads top to bottom
// echo $firstName;
// echo STATUS_PAID;
//const don't need $ before
// const can't be directly changed by using top down method
// echo defined('STATUS_PAID')
//boolean - if true returns 1 or nothing

//can also use const
// const STATUS_PAID = 'paid';
// echo STATUS_PAID;
//const created with define are set at run time
//const keyword defined at compiled time

//can give dynamic names
$paid = 'PAID';
define('STATUS_' . $paid, $paid);
echo STATUS_PAID;

//predefined constants
echo PHP_VERSION;

$foo = 'bar';

$$foo = 'baz';
//Variable variables
//This is telling the code to take the value of the varaible and create a new one
//equivalent of $bar = 'baz'
echo $foo , $bar;
echo $$foo;
echo "$foo , ${$foo}";
//all 3 work