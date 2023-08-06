<?php

// reference by variabel menggunakan karakter and (&) di depan variabel nya 

$name = "mis";

$otherName = &$name;
$otherName = "mizzcode";
echo $name . PHP_EOL;

// reference by function
function Increment(int &$value) {
    $value++;
}
$count = 1;
Increment($count);
echo $count . PHP_EOL;

// reference by return function
function &getValue() {
    static $value = 100;
    return $value;
}
$a = &getValue();
$a = 200;

$b = &getValue();
echo $b;