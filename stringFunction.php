<?php

/* dokumen lebih lengkap nya di php.net/manual/en/ref.strings.php */
$array = ['hai', 'guys', 'welcome', 'back'];

var_dump(implode(" ",$array));
var_dump(explode(",", "mizz,code"));
var_dump(strtolower("MIZZCODE"));
var_dump(strtoupper("mizzcode"));
var_dump(trim("       mizzcode    "));
var_dump(substr("MizzCode", 0, 6));