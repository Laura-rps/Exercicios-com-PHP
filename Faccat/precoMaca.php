<?php
   echo "Quantas maças você comprou?\n";
   $quantidade = trim(fgets(STDIN));

   $valorMaca;

   if($quantidade < 12){
    $valorMaca = 1.30;
   }
   else{
    $valorMaca = 1;
   }

   $resultado = $quantidade * $valorMaca;

   echo "O valor total das suas compras é $resultado";
?>