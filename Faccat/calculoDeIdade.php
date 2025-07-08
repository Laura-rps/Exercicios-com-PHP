<?php
  echo "Digite a sua idade em anos: ";
  $anos = trim(fgets(STDIN));

  echo "Digite quantos meses se passaram desde o seu ultimo aniversario: ";
  $meses = trim(fgets(STDIN));

  echo "Digite quantos dias se passaram desse mês: ";
  $dias = trim(fgets(STDIN));

  if(!is_numeric($anos) || !is_numeric($meses) || !is_numeric($dias)){
    echo "Entrada inválida! Por favor, insira apenas números.";
  }
  else{
  $idade = ($anos * 365) + ($meses * 30) + $dias;

  echo "Sua idade em dias é: $idade";
  }
?>