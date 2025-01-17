<?php

    $str = 'Guilherme';

    $num = 18;

    if (is_string($str)) {
        echo "$str é uma string <br>";
    }
    
    if (is_string($num)) {
        echo "$num não é uma string <br>";
    }
    
    if (is_string("asd")) {
        echo "o valor checado é uma string <br>";
    }