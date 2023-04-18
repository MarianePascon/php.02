<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversor</h1>

    <form action="ex03.php">

<p>Valor em real:
    <input type="text" name="real" required>
</p>
<p>Valor do euro:
    <input type="text" name="euro" required>
</p>
<p>Valor do dolar:
    <input type="text" name="dolar" required>
</p>
<p>
    <input value="Enviar" type="submit"/>
</p>
</form>

<?php
if ((isset($_REQUEST["real"])) and (isset($_REQUEST["euro"])) and (isset($_REQUEST["dolar"]))) {
    $real = $_REQUEST["real"];
    $euro = $_REQUEST["euro"];
    $dolar = $_REQUEST["dolar"];
    $cal_e = number_format(($real / $euro), 2);
    $cal_d = number_format(($real / $dolar), 2);

    echo "<p> R$". $real. " em euro é €". $cal_e. " e em dolar é U$". $cal_d. "</p>";
}
?>

</body>                                                
</html>