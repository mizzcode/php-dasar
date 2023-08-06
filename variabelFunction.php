<?php

function convertText(string $name, $convert) {
    $convertName = $convert($name);
    echo $convertName . PHP_EOL;
}

convertText("misbah", "strtoupper");
convertText("ANjANI", "strtolower");