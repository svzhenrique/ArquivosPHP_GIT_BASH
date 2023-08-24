<?php
$macas = 9;
$resultado = 0;

 if($macas < 12){
    $resultado = 1.30 * $macas ;     
 }else{
    $resultado = 1.00 * $macas ;     
    } 
    echo"Valor da compra R$"  . number_format($resultado,2,",",".");
?>