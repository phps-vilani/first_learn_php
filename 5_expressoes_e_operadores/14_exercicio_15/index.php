<?php

    $senhaCadastrada = 123456;
    $senhaDigitada = 123456;
    $emailCadastrado = "guilherme@gmail.com";
    $emailDigitado = "guilherme@gmai.com";

    if ($senhaCadastrada == $senhaDigitada) {
        echo "A senha está correta <br>";
    }

    if ($emailCadastrado == $emailDigitado) {
        echo "O e-mail está cadastrado <br>";
    }


