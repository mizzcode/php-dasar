<?php

function factorialRecursive($value) {
    if ($value === 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));

var_dump(5 * 4 * 3 * 2 * 1); 