<?php
  echo "Quantas horas você trabalhou nesse mês?";
  $horasTrabalhadas = trim(fgets(STDIN));
  
  echo "Quanto é o seu salario por hora?";
  $salarioHora = trim(fgets(STDIN));

  if($horasTrabalhadas > 120){
     $horasExtras = $horasTrabalhadas - 120;
    $pagamentoHorasExtras = $horasExtras * $salarioHora * 1.5;
    $salarioBase = 120 * $salarioHora;
    $salarioFinal = $salarioBase + $pagamentoHorasExtras;
  }
  else{
    $salarioFinal = $horasTrabalhadas * $salarioHora;
  }

  echo "Seu salario desse mês é: R$ $salarioFinal";
  ?> 

