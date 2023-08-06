<?php

echo 'Name: Misbahudin' . PHP_EOL;
echo "Age: 18 y.o \n";

echo <<<mizz
selamat ini adalah string panjang dengan memanfaatkan 'heredoc',
yang mana tidak perlu manual membuat enter atau tab.  "anjayani whehwehw"

mizz;

echo <<<'mizz'
selamat ini adalah string panjang dengan memanfaatkan 'heredoc',
yang mana tidak perlu manual membuat enter atau tab.
"yahaubsduabsd"
mizz;

//created at 2022