<?php

    $a = true;

    if (is_bool($a)) {
        echo 'é um bool <br>';
    }
    
    if (is_bool(0)) {
        echo 'nao é um bool';
    }
    
    if (is_bool(false)) {
        echo 'false <br>';
    }
    
    if (is_bool(0 == false)) {
        echo '0 é considerado falso!';
    }