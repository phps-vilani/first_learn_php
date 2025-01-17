<?php

    $n1 = 1;
    $n2 = 9;

    $soma = $n1 + $n2;

    echo "A soma de $n1 + $n2 é igual a $soma. <br>";

    // testando a soma direto no echo sem precisar de uma 3º variavel.
    // echo "A soma de $n1 + $n2 é igual a ", $n1 + $n2, '<br>';


    // testando a soma de numero mesmo que sejam strings
    $t1 = "5";
    $t2 = "5";

    echo $t1 + $t2; // mesmo que o numero seja string se tiver o mais o php converte para numero e faz a soma.
