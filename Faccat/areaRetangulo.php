<?php
    echo "Digite a base do retangulo: ";
    $base = trim(fgets(STDIN));

    echo "Digite a altura do retangulo: ";
    $altura = trim(fgets(STDIN));

    if(!is_numeric($base) || !is_numeric($altura)){
        echo "Valor invalido inserido!";
    }
    else{
    $area = $base * $altura;

    $areaResultado = round($area, 2);

    echo "A area do retangulo é: $areaResultado";
}
?>