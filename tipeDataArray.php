<?php

$values = array(1,2,3);
var_dump($values);

$names = ["mizzcode", "janicode", "julcode"];

unset($names[2]);

$names[] = "dadocode";
var_dump($names);

$ident = [
    "name" => "Misbahudin",
    "age" => 18,
    "address" => [
        "city" => "Blubuk",
        "postal_code" => 52451
    ]
];
var_dump($ident);
var_dump($ident["name"]);
var_dump($ident["address"]["city"]);