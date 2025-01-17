<?php

    $x = 10;

    $y =& $x;

    echo $x;
    echo '<br>';
    echo $y;
    echo '<br>';

    $y = 15;
    
    echo '<br>';
    echo 'Apos a ref';
    echo '<br>';
    echo $x;
    echo '<br>';
    echo $y;
    echo '<br>';
    
    $y = 20;
    
    echo '<br>';
    echo 'Apos a ref 2';
    echo '<br>';
    echo $x;
    echo '<br>';
    echo $y;

    // nao importa se eu mudar a referencia ou referenciada, elas sempre terao os mesmo valores