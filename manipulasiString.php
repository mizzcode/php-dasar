<?php
$username = "MizzCode";
$moto = "berjuanglah walau masih menjadi beban";
// menggabungkan 1 atau 2 variabel
echo "user: " . $username . PHP_EOL;
echo "moto: " . $moto . "\n";
// convert tipe data
$valueString = (string)99;
var_dump($valueString);

$valueInt = (int)"99";
var_dump($valueInt);

$valueFloat = (float)99.99;
var_dump($valueFloat);
// mengakses string dengan berprilaku seperti array menggunakan index
$fullname = "Misbahudin";
echo $fullname[0];
echo $fullname[1];
echo $fullname[2];
echo $fullname[3];
echo $fullname[4];
echo $fullname[5] . PHP_EOL;

// curly brace
$moment = "moment";
echo "This is {$moment}os";