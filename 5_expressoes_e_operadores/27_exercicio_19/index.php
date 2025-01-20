<?php

    $a = (int) "testando";
    $b = (int) 12.9;
    $c = (int) true;
    $d = (int) [1, 2, 3];

    echo "A: $a <br>";
    echo "B: $b <br>";
    echo "C: $c <br>";
    # array vira o numero 1, porque na conversao para int a verificacao que é feita é se o array esta vazio ou nao.
    # exemplo: [1] > true |||| [] > false
    echo "D: $d <br>";