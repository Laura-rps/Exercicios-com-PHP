<?php
  echo "Digite o primeiro numero: ";
  $numero1 = trim(fgets(STDIN));
  
  echo "Digite o segundo numero: ";
  $numero2 = trim(fgets(STDIN));
  
  if($numero1 == $numero2){
    echo "Numeros iguais.";
  }
  else if($numero1 > $numero2){
    echo "$numero1 é maior que $numero2.";
  }
  else{
    echo "$numero2 é maior que $numero1";
  }
?>