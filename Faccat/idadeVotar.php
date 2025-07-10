<?php
   echo "Qual é o ano atual?";
   $anoAtual = trim(fgets(STDIN));
   
   echo "Qual ano você nasceu?";
   $anoNascimento = trim(fgets(STDIN));

   $idade = $anoAtual - $anoNascimento;

   if($idade < 16){
    echo "Você não pode votar.";
   }
   else if($idade >= 16 && $idade < 18){
    echo "Você pode votar, mas não é obrigatorio.";
   }
   else{
    echo "Você deve votar.";
   }
?>