<?php
  $sorteio = rand(0,5);

  echo "Valor sorteado: $sorteio\n";

  switch($sorteio){
    case 0:
        echo "Você ganhou 1 ponto!";
        break;
    case 1:
        echo "Você não ganhou nada!";
        break;
    case 2:
        echo "Você ganhou 3 pontos!";
        break;   
    default:
        echo "Jogue novamente";
        break;         
  }
?>