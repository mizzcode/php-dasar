<?php

function multiply(int $a, int $b): int {
    $c = $a * $b;
    return $c;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Person</title>
</head>

<body>
    <h1>Call Variable Local</h1>
    <h1> <?= multiply(10, 20) ?> </h1>
</body>

</html>