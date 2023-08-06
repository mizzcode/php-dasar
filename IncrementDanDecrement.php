<?php

// Increment dengan menaikkan dulu nilai nya baru di simpan di variabel $y
$x = 10;
$y = ++$x;
var_dump($y);

// Decrement dengan mengurangi nilai nya baru di simpan di variabel $b
$a = 100;
$b = --$a;
var_dump($b);

// Increment dengan menyimpan dulu nilai awal $a ke $b baru si $a di naikkan nilai nya +1
$a = 10;
$b = $a++;
var_dump($b);
var_dump($a);

// Decrement dengan menyimpan dulu nilai awal $c ke $d baru si $c di kurangi nilai nya +1
$c = 100;
$d = $c--;
var_dump($d);
var_dump($c);