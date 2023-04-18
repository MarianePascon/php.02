<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Valor total</h1>

    <form action="ex01.php">

<p>Digite o nome:
    <input type="text" name="nome" required>
</p>
<p>Quantidade:
    <input type="text" name="quantia" required>
</p>
<p> Preço unitario:
    <input type="text" name="uni" required>
</p>
<p>Frete:
    <input type="text" name="frete" required>
</p>
<p>Desconto:
    <input type="text" name="desc">
<p>
    <input value="Calcular" type="submit"/>
</p>
</form>
<?php 
if (isset($_REQUEST["nome"]) and (isset($_REQUEST["quantia"])) and (isset($_REQUEST["uni"])) and (isset($_REQUEST["frete"])) and (isset($_REQUEST["desc"]))) {
    $nome = $_REQUEST["nome"];
    $quantia = $_REQUEST["quantia"];
    $uni = $_REQUEST["uni"];
    $frete = $_REQUEST["frete"];
    $desc = $_REQUEST["desc"];

    $total = (($quantia * $uni)- $desc) + $frete;

    echo "<p>Voce comprou ". $nome. " por ". $total. " reais</p>";
}
?>

</body>
</html>