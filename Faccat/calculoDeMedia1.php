<?php
   echo "Digite a primeira nota: ";
   $nota1 = trim(fgets(STDIN));
   
   echo "Digite a segunda nota: ";
   $nota2 = trim(fgets(STDIN));

   echo "Digite a terceira nota: ";
   $nota3 = trim(fgets(STDIN));

   if(!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3)){
    echo "Entrada invalida! Digite apenas numeros.";
   }
   else{
    $notaFinal = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;
    echo "A nota final é $notaFinal";
   }
?>