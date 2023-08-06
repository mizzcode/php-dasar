<?php

$name = ["Misbah",18, "code"];
$person = [
    "name" => "mizz",
    "age" => 18,
    "address" => "blubuk"
];

// tidak perlu menggunakan ini jika hanya ingin mengakses semua data array
for ($i = 0; $i < count($name); $i++) {
    echo "halo $name[$i]" . PHP_EOL;
}

// tapi pakai FOREACH aja 
foreach($name as $names) {
    echo "halo $names" . PHP_EOL;
}

// ini ke $person mengambil key dan value
foreach($person as $key => $orang ) {
    echo "$key => $orang" . PHP_EOL;
}