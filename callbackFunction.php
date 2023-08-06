<?php

function sayGreeting($names, callable $greeting) {
    $saysGreeting = $greeting($names);
    echo $saysGreeting . " " . $names;
}

sayGreeting("Misbah", fn() => "Bonjour!");