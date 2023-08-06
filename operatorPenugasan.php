<?php

$total = null;

echo <<<warteg
"Terima kasih telah makan di warteg barokah
ini total yang harus anda bayar \n"
warteg;

$ayam = 10000;
$perkedel = 2000;
$ikan = 7000;
$gorengan = 2000;

$total += $ayam;
$total += $perkedel;
$total += $ikan;
$total += $gorengan;
var_dump("$total rupiah.");

echo "semoga anda puas dengan masakan kami >.<";