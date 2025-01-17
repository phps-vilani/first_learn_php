<?php

    // var declarada com a instrucao static tem o valor mantido mesmo após o fim da funcao

    function teste(){
        $a = 0;
        $a++;

        echo "$a <br>";
    }

    teste(); // 1
    teste(); // 1
    teste(); // 1

    function testeStatic(){
        static $a = 0;
        $a++;

        echo "$a <br>";
    }

    testeStatic(); // 1
    testeStatic(); // 2
    testeStatic(); // 3