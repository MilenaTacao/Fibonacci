<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sequência de Fibonacci</title>
        <style>
            body{
                border : 4px solid green;
                margin-top: 100px;
                margin-bottom: 100px;
                margin-right: 150px;
                margin-left: 80px;
                text-align:center;   
            }
        </style>
    </head>
    <body>
        </br>
        <?php
            $posicao = $_POST["posicao"];
            $f1 = 0;
            $f2 = 1;
            $i = 0;

            while ($i < $posicao) {
                $f = $f1 + $f2;
                echo"$f</br>";
                $f2 = $f1;
                $f1 = $f;
                $i++; 
            }
        ?>
        </br>
        </br>
    </body>
</html>