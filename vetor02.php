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
    $produto=array();
    $produto["codigo"]=11;
    $produto["descricao"]="Televisor";
    $produto["preco"]=1990;

    echo "Codigo " . $produto["codigo"] . "<br> Descrição: " . $produto["descricao"]. "<br> Preço: " . $produto["preco"];
    ?>
</body>
</html>