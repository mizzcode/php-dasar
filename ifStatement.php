<?php

$nilai = 81;
$absen = 88;

if ($nilai >= 90 && $absen >= 90) {
    echo "Selamat! anda mendapatkan nilai A.";
} else if ($nilai >= 80 && $absen >= 80) {
    echo "Selamat! anda mendapatkan Nilai B.";
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Selamat! anda mendapatkan nilai C.";
} else {
    echo "anda mendapatkan nilai C.";
}