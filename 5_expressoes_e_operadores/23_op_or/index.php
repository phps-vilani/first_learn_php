<?php

    # true/true
    if (5 > 2 || 3 < 4) {
        echo "A operacao 1 é verdadeira <br>";
    }
    
    # true/false
    if (5 > 2 || 30 < 4) {
        echo "A operacao 2 é verdadeira <br>";
    }
    
    # false/true
    if (5 > 20 || 3 < 4) {
        echo "A operacao 3 é verdadeira <br>";
    }
    
    # false/false
    if (5 > 20 || 30 < 4) {
        echo "A operacao 4 é verdadeira <br>";
    }