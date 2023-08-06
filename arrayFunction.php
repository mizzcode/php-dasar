<?php

$data = [1,2,3,4,5];

$result = array_map(fn(int $value) => $value * 10, $data);
var_dump($result);

rsort($data);
var_dump($data);

sort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "first_name" => "mizz",
    "last_name" => "code"
];

var_dump(array_keys($person));
var_dump(array_values($person));