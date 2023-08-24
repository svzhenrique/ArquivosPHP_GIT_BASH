<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Declarando Variaveis</h1>
        <p>
        <?php
            $numa = 10;
            $numb = 20;
            $numc = $numa + $numb;     
            echo"<br>O número de C é: $numc"; 
        ?>
        </p>
        <h1>Resolução do exercicio part1</h1>
        <p>
            <?php
                $numb -= 10;
                echo"<br>O número de B é: $numb";     
                echo"<br>O número de C é: $numc"; 
            ?>
        </p>
        <h1>Resolução do exercicio part2</h1>
        <p>
            <?php
                $numc = $numa + $numb;
                echo"O número de A é: $numa";
                echo"<br>O número de B é: $numb";     
                echo"<br>O número de C é: $numc"; 
            ?>
        </p>

    </main>
</body>
</html>