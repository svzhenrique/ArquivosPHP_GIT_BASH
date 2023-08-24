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
        <h1>Resolução do exercicio part1:</h1>
        <p>
            <?php
                $numx = 1;
                $numy = 2;
                $numz = $numy - $numx;
                echo"O número de Z é: $numz";
            ?>
        </p>
        <h1>Resolução do exercicio part2:</h1>
        <p>
            <?php
                $numx += 4;
                $numy = $numx + $numz;
                echo"O número de X é: $numx";
                echo"<br>O número de Y é: $numy";
                echo"<br>O número de Z é: $numz";
            ?>
        </p>
    </main>
    
</body>
</html>