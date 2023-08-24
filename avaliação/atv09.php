<?php
    $vetor = array(21, 42, 71, 102, 13, 16, 19, 35, 765, 46465, 567, 344, 54, 66, 60);

    foreach ($vetor as $numero) {
        if ($numero % 2 == 0) {
            echo $numero . " é par" . "<br>";
        } else {
            echo $numero . " é ímpar" . "<br>";
        }
    }
?>