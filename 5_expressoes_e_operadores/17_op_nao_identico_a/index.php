<?php

    // nao identico a comparacao é sobre o valor e o tipo da variavel

    $a = 1;
    $b = "1";

    if ($a != $b) {
        echo "A diferente de B <br>";
    }
    
    if ($a !== $b) {
        echo "A diferente de B 2 <br>";
    }

    if (1 !== "1") {
        echo "1 é nao identico a '1' <br>";
    }