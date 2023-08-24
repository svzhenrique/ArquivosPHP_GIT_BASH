<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <main>
           
            <h1> Declarando as variaveis </h1>
            <p>
                <?php
                    $numa =10;
                    $numb = 20;
                    echo"O Numero escolhido na variavel A: $numa";
                    echo"<br>O Numero escolhido na variavel B: $numb";
                ?>
            </p>
            
            <br>
            
            <h2> Trocando o valor das variaveis entre si </h2>
            <p>
                <?php
                    $numa = $numa + $numb;
                    $numb = $numa - $numb;
                    $numa = $numa - $numb;
                    echo"O Numero escolhido na variavel A, foi trocado: $numa";
                    echo"<br>O Numero escolhido na variavel B, foi trocado: $numb";
                ?>
            </p>

        </main>
    </body>
</html>