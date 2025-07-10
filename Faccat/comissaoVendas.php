<?php
 echo "Qual foi o valor total das suas vendas esse mês?: ";
 $valorVendas = trim(fgets(STDIN));

 echo "Qual é o seu salario atual?: ";
 $salarioInicial = trim(fgets(STDIN)); 
 
 if($valorVendas <= 1500){
    $comissao = $valorVendas * 0.03;
    
 }
 else{
    $comissao = $valorVendas * 0.05;
 }

 $salarioTotal = $salarioInicial + $comissao;
  
 echo "O seu salario final é $salarioTotal";
?>