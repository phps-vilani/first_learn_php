<?php

    $arr_carro = ['Jetta', 'Preto', '2.0'];
    $arr_associativo_carro = ['modelo' => 'Golf', 'cor' => 'Preto', 'potencia' => '1.4'];

    echo 'CARROS DISPONIVEIS <br><br>';

    echo 'Carro: ', $arr_carro[0], '<br>';
    echo 'Cor: ', $arr_carro[1], '<br>';
    echo 'Motor: ', $arr_carro[2], '<br>';

    echo '<br><br>';

    echo 'Carro: ', $arr_associativo_carro['modelo'], '<br>';
    echo 'Cor: ', $arr_associativo_carro['cor'], '<br>';
    echo 'Motor: ', $arr_associativo_carro['potencia'], '<br>';

    echo '<br><br>';

    $modelo = $arr_associativo_carro['modelo'];
    $potencia = $arr_associativo_carro['potencia'];

    echo "O carro $modelo tem o motor do tipo $potencia TSI.";