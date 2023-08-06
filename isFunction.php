<?php

$data = fn(int $value) => $value - 11;

var_dump(is_string($data));
var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_null($data));
var_dump(is_array($data));
var_dump(is_callable($data));



// #OOT
$var = 1;
// Evaluates to true because $var is empty
if (empty($var)) {
    echo '$var is either 0, empty, or not set at all ' . PHP_EOL;
}

// Evaluates as true because $var is set
if (isset($var)) {
    echo '$var is set even though it is empty';
}