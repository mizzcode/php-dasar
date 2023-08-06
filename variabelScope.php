<?php

$name = "Mizz"; // global scope

function sayHello()
{
    echo $name ?? ''; // ketika kita memanggil sebuah variabel global scope, maka akan muncul warning / eror bahwa variabel $name itu global scope
}
sayHello();

function localScope()
{
    $name = "MizzCode"; // local scope
    echo "Bonjour $name! \n"; // ini berhasil karena memanggil variabel local scope
}
localScope();

// atau kita ingin echo variabel local scope tapi kita manggilnya di luar function maka akan eror
function localScope2()
{
    $names = "Mizz";
}
// kita memanggil sebuah variabel dari function localScope2 yang mana variabel $names itu bersifat local scope jadi tidak akan bisa dipanggil di luar function.
var_dump($names ?? '');


// kita bisa memanggil variabel global scope dengan menggunakan keyword global
function panggilGlobalScope()
{
    global $name;
    echo "halo $name \n";
}
panggilGlobalScope();


// Variabel Static. Digunakan untuk mempertahankan sebuah local scope agar tidak hanya sekali pakai, tapi bisa digunakan berulang kali ketika sebuah function dipanggil
// kita coba perbedaan tidak menggunakan static dan menggunakan static
function noVariabelStatic()
{
    $count = 1;
    echo "count : $count \n";
    $count++;
}
noVariabelStatic();
noVariabelStatic();
noVariabelStatic();

echo PHP_EOL;
// jika menggunakan static maka variabel akan terus terjaga nilai nya jika di panggil berulang kali
function VariabelStatic()
{
    static $count = 1;
    echo "count : $count \n";
    $count++;
}
VariabelStatic();
VariabelStatic();
VariabelStatic();