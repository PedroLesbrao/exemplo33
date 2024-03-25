<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <?php
        echo "Estrutura de Repetição FOR ENCADEADO<br><br>";
        for($x = 1;$x <= 2;$x++){
             for($y = 1; $y <= 3; $y++){
                 for($z = 1;$z <= 2;$z++){
                     echo "x = $x  /  y = $y  / z = $z<br>";

                 }
             }
        }
    ?>
    </div>
</body>
</html>