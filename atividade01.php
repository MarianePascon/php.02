<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Calcular média</h1>

    <form action="atividade01.php">

    <p>Digite o nome do aluno:
        <input type="text" name="nome" required/>

    <p>Digite um numero:
        <input type="text" name="pri" required />
    </p>

    <p>Digite um numero:
        <input type="text" name="seg" required />
    </p>

    <p><input value="Calcular" type="submit"/>
</p>
</form>

<?php

if ((isset($_REQUEST["nome"])) and (isset($_REQUEST["pri"])) and (isset($_REQUEST["seg"]))) {

$nome = $_REQUEST["nome"];
$pri = $_REQUEST["pri"];
$seg = $_REQUEST["seg"];

$media = number_format((($pri + $seg) / 2),1);

$mediaformatada = str_replace(".",",",$media);

echo $nome. " a media final é ". $mediaformatada; 
}
?>

<p><input type="button" value="Voltar"
onclick="javascript:history.back();">
</p>

</body>
</html>