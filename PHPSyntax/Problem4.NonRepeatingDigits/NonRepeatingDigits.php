<?php
    $N = 247;
    if ($N < 100) {
        echo "No";
    } elseif ($N > 1000) {
        $N = 999;
    }
    for ($i = 100; $i <= $N; $i++){
        $lastDigit = $i % 10;
        $middleDigit = ($i / 10) % 10;
        $firstDigit = ($i / 100) % 10;
        if ($firstDigit != $middleDigit && $firstDigit != $lastDigit && $middleDigit != $lastDigit) {
            echo $i . " ";
        }
    }
    
   
?>