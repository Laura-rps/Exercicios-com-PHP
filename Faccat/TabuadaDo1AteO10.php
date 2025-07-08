<?php
  echo "Digite um numero: ";
  $numero = trim(fgets(STDIN));

  for($multiplicador = 1; $multiplicador <= 10; $multiplicador++){
    $resultado = $numero * $multiplicador;
    echo "$numero * $multiplicador = $resultado\n";
  }
  
?>