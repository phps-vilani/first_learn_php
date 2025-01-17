<?php
    $n1Float = 1.5;
    $n2Float = 4.5;
    $n3Float = 3.5;
    
    echo $n1Float, '<br>';
    echo $n2Float, '<br>';
    echo $n2Float, '<br>';

    $n4FloatNegativo = -12.5;

    if (is_float($n2Float)) {
        echo 'é float <br>';
    }
    
    if (is_float($n4FloatNegativo)) {
        echo 'sim, posso ter float negativo!';
    }