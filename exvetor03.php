<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $valor = array();

     for ($i = 0; $i < 200; $i++) {
        $valor[$i] = rand(1, 1000);

        if (($valor[$i] % 2 == 0) and ($valor[$i] % 3 == 0)) {
            echo $valor[$i]. "<strong> Numero multiplo de 2 e 3 </strong><br>";
        } else {
            echo $valor[$i]. "<br>";
        }

     }
     ?>
</body>
</html>