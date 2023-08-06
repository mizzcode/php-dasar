<?php

// perulangan while loop
$counter = 0;
while($counter <= 10) {
    $counter++;
    if ($counter % 2 == 0) {
        echo "Nilai counter dengan bilangan genap: $counter" . PHP_EOL;
    }
}

echo "PERULANGAN SUDAH SELESAI, DAN ini DILUAR WHILE \n";

// perulangan for loop
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Nilai counter dengan bilangan genap: $i" . PHP_EOL;
    }
}
// if-else
$MyScore = 75;

if ($MyScore > 90) {
    echo "Woaaah, Selamat! anda mendapatkan rangking A \n";
} else if ($MyScore > 80) {
    echo "Selamat! anda mendapatkan rangking B \n";
} else if ($MyScore > 70) {
    echo "Selamat! anda mendapatkan rangking C \n";
} else {
    echo "Maaf, anda mendapatkan rangking D \n";
}

// if-else  dan operator && and || or
$TotalBelanja = 250000;
$JenisMember = "Silver";

if ($TotalBelanja > 200000 && $JenisMember == "Gold") {
    echo "Selamat! Voucher 10% kamu otomatis terpasang dan siap digunakan";
} else if ($TotalBelanja > 230000 || $JenisMember == "Platinum") {
    echo "Selamat! Voucher 15% kamu otomatis terpasang dan siap digunakan";
} else {
    echo "Maaf, anda belum memenuhi syarat untuk menggunakan voucher";
}

// for loop
for ($hukuman = 0; $hukuman <= 10; $hukuman++) {
    echo "Saya tidak akan mengulangi lagi perbuatan saya $hukuman \n";
}