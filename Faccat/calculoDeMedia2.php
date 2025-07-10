<?php
  echo "Digite a primeira nota: ";
  $nota1 = trim(fgets(STDIN));
  
  echo "Digite a segunda nota: ";
  $nota2 = trim(fgets(STDIN));

  $media = ($nota1 + $nota2) / 2;

  if($media >= 6){
    echo "Você foi aprovado!\n";  
  }
  else{
    echo "Você foi reprovado!\n";
  }

  echo "Sua media foi $media";
?>