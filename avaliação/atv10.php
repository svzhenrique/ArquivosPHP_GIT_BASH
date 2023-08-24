<?php
    function ordemDescrescente($num1, $num2, $num3) {
        $numeros = [$num1, $num2, $num3];
        rsort($numeros);
        foreach ($numeros as $numero) {
            echo $numero . "<br>";
        }
    }
    $num1 = 120;
    $num2 = 100;
    $num3 = 10;
    ordemDescrescente($num1, $num2, $num3);
?>