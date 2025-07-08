<?php
   echo "Digite um numero: ";
   $numero = trim(fgets(STDIN));
   $antecessor;
   $sucessor;

   if($numero >= 0){
   $antecessor = $numero - 1;
   $sucessor = $numero + 1;}
   else{
   $antecessor = $numero + 1;
   $sucessor = $numero - 1;
   }

   echo "O sucessor de $numero é $sucessor\n", "O antecessor de $numero é $antecessor";
?>