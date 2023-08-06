<?php

// parameter default
function sayGreeting($greeting = "Bonjour!") {
    echo $greeting;
}

sayGreeting();

// menggunakan Argument
function sayHello($name) {
    echo $name;
}

sayHello("Misbah \n");

//tpe declaration yaitu jika kita ingin parameter nya punya type data tertentu
function multiply(int $first, int $second) {
    $total = $first * $second;
    echo "$first kali $second = $total \n";
}
multiply("9", "9");
multiply(true, false);
multiply(10, 10);

// variabel argument list
function sumAll(...$value) {
    $total = 0;
    foreach($value as $values) {
        $total += $values;
    }
    echo "total : " . implode(",", $value) . " = $total \n"; 
}

$value = [1,2,3,4,5];

sumAll(1,2,3,4,5);

sumAll(...$value);