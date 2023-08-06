<?php

$nama_depan = [
    "first_name" => "mizz"
];

$nama_belakang = [
    "last_name" => "code"
];

$fullname = $nama_depan + $nama_belakang;
var_dump($fullname);

var_dump($nama_depan == $nama_belakang);

$makanan_favorit = [
    "nasi" => "nasi_uduk",
    "kentang" => "perkedel"
];

$makanan_orang = [
    "kentang" => "perkedel",
    "nasi" => "nasi_uduk"
];
var_dump($makanan_favorit == $makanan_orang);
var_dump($makanan_favorit != $makanan_orang);