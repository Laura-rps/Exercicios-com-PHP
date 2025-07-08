<?php
  echo "Digite um numero: ";
  $numero = trim(fgets(STDIN));

  if(!is_numeric($numero)){
    echo "Entrada invalida! Digite apenas numeros.";
  }
  else{
    if($numero > 10){
        echo "O numero digitado é maior que 10.";
    }
    else if($numero < 10){
        echo "O numero digitado é menor que 10";
    }
    else{
        echo "O numero digitado é 10";
    }
  }
?>