<?php

    $pessoa = [
        'nome' => 'Guilherme',
        'idade' => 16,
        'sexo' => 'M'
    ];

    if ($pessoa['idade'] >= 18) {
        $nome = $pessoa['nome'];
        echo "$nome é maior de idade";
    } else {
        $nome = $pessoa['nome'];
        echo "$nome não é maior de idade";
    }