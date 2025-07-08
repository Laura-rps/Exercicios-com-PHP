<?php
  echo "Digite um numero: ";
  $numero = trim(fgets(STDIN));

  if(!is_numeric($numero)){
    echo "Entrada invalida! Digite apenas numeros.";
  }
  else{
    if($numero >= 0){
        echo "O numero digitado é positivo.";
    }
    else{
        echo "O numero digitado é negativo.";
    }
  }
?>