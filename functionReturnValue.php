<?php   
    function sum(int $first, int $second):int {
        $total = $first * $second;
        return $total;
    }

    $result = sum(10,10);
    var_dump($result);   

    function getFinalValue(int $value):string {
        if ($value >= 90) {
            return "A";
        } else if ($value >= 80) {
            return "B";
        } else if ($value >= 70) {
            return "C";
        } else {
            return "D";
        }
        echo "Upsss \n";
    }

    $score = getFinalValue(1);
    var_dump($score);
    