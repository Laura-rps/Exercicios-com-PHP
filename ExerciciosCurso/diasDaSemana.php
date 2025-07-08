<?php
 echo "Digite um dia da semana: ";
 $dia = trim(fgets(STDIN));
 
 $dia = strtoupper($dia);

 switch($dia){
    case "SEGUNDA":
        echo "Primeiro dia util!";
        break;
    case "TERÇA":
    case "TERCA":
         echo "Segundo dia util!";
         break;
    case "QUARTA":
        echo "Meio da semana!";
        break;
    case "QUINTA":
        echo "Quase sexta!";
        break;
    case "SEXTA":
        echo "Último dia útil da semana!";
        break;
    case "SÁBADO":
    case "SABADO":
        echo "Sábado, dia de descanso!"; 
        break;
    case "DOMINGO":
        echo "Domingo, prepare-se para a semana!";
        break;
    default:
        echo "Dia invalido!";
        break;                      
 }
?>