<?php
    $a = 123456789;
    $sum = 0;
    while ($a > 0) {
    $getDigit = $a % 10;
    $a = $a / 10;
    $sum = $sum + $getDigit;
    }
    echo $sum
?>