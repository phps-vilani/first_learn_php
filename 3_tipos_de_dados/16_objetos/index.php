<?php

    class Pessoa {
        function falar(){
            echo 'olá pessoal';
        }
    }

    $pessoa = new Pessoa();
    
    $pessoa->nome = 'Guilherme';

    echo $pessoa->nome;
    echo '<br>';

    $pessoa->falar();