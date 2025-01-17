<?php

    $a = "teste";
    $b = 12.5;

    if(is_float($a)){
        echo 'Não é float <br>';
    }

    if (is_float($b)) {
        echo 'É float <br>';
    }
    
    // hard code quando eu insiro um dado manualmente ao inves de obter ele de forma externa
    if (is_float(6565.63)) {
        echo 'É float 2 <br>';
    }
    
    if (is_float("teste")) {
        echo 'não é float 2 <br>';
    }