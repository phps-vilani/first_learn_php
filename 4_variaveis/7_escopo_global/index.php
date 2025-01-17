<?php
    // por padrao nao podemos acessar uma variavel global dentro de uma funcao

    $teste = 'asd';

    echo "$teste global 1 <br>";

    if (5 > 2) {
        $teste = 'dsa';

        echo "$teste if <br>";
    }


    echo "$teste global 2 <br>";

    function funcao(){
        $teste = 'xsxs';

        echo "$teste local <br>";
    }

    funcao();

    function testandoGlobal(){
        global $teste; // a partir do momento que eu declaro global a var que estou me referindo é a que esta fora da funcao

        $teste = 2;

        echo "$teste global funcao <br>";
    }

    testandoGlobal();

    echo "$teste global 3 <br>";