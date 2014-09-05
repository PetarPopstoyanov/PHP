<?php
    $variable = 5;
    
    if (is_numeric($variable)) {
        var_dump($variable);
    } else {
        echo gettype($variable);
    }
?>