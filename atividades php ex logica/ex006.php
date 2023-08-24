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
            <h1> Retangulo: </h1>
            <p>
                <?php
                    $base = 10;
                    $altura = 5;
                    $area = $base * $altura;
                    echo "O valor da base é: $base";
                    echo "<br>O valor da altura é: $altura"
                ?>
            </p>
            <br>
            <h1> A area do retangulo é: </h1>
            <p>
                <?php
                    $area = $base * $altura ;
                    echo "A area é: $area";
                ?>
            </p>
        </main>
    </body>
</html>