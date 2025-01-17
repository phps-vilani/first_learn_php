<?php

    echo true; // se eu fizer isso vai ser impresso na tela o valor 1
    echo '<br>';
    echo false;

    // normalmente nao imprimos o boolean, mas usamos ele para alguma condicao

    if (true) {
        echo "é verdadeiro! <br>";
    }
    
    if (5 > 2) { //true
        echo "é verdadeiro! <br>";
    }

    $podeEntrar = true;

    if ($podeEntrar) {
        echo 'O usuario pode entrar <br>';
    }