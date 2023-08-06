<?php

// function greeting() {
//     echo "Bonjour!";
// }

// function halo($name, $greeting) {
//     echo $greeting . " " . $name . PHP_EOL;
// }

// halo("MizzCode", greeting());

// function sayGoodBye($name, $filter) {
//     $goodbye = $filter($name);
//     echo "Semoga hari anda menyenangkan $goodbye ! \n";
// }

// sayGoodBye("Mizz", function(string $name):string {
//     return strtoupper($name);
// });

function greeting() {
    echo "Bonjour!";
}

function halo($name, $greeting) {
    echo $greeting . " " . $name . PHP_EOL;
}
halo('Galih!', greeting());

function sayGoodBye($name, $filter) {
    $goodbye = $filter($name);
    echo "Sampai Jumpa $goodbye semoga kita bisa ketemu lagi~";
}
sayGoodBye('Galih', function(string $name)  {return strtoupper($name);
});