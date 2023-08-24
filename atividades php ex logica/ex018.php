<?php
    $anoAtu = 2023;
    $anoNas = 2002;
    $idade = $anoAtu -$anoNas;
    echo"O ano atual é " . $anoAtu . " e o seu ano de nascimento e " . $anoNas . " e sua idade é " . $idade;
    if($idade >= 18){
        echo"<br>Voto obrigatorio";
    }else if($idade >= 65 || $idade >= 16){
        echo"<br>Voto opcional";
    }else{
        echo"<br>Não pode votar";
    }
?>