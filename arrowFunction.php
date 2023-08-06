<?php


$firstName = "Mizz"; 
$lastName = "Code"; 

$anonymousFunction = function() use ($firstName, $lastName) {
    return "halo $firstName $lastName \n";
};

$arrowFunction = fn() => "halo $firstName $lastName";

echo $anonymousFunction();
echo $arrowFunction();