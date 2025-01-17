<?php

    $x = 10;

    echo "$x global <br>";

    function teste(){

        $x = 5; // var local (variavel criada dentro de functions)

        echo "$x local <br>";
    }

    teste();

    function testando(){

        $x = 12;

        echo "$x local 2 <br>";
    }

    echo "$x global <br>";
    teste();

    $x = 99;

    echo "$x global <br>";
    
    testando();