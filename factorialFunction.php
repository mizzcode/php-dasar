<?php

function factorialFunction(int $value): int 
{
    $total = 1;

    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
}

var_dump(factorialFunction(5));

function loop(int $value) {
    if ($value == 0) {
        echo "End Loop" . PHP_EOL;
    } else {
        echo "Loop ke-$value" . PHP_EOL;
        loop($value - 1);
    }
}

var_dump(loop(3000000));