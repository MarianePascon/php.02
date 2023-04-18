<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Perimetro</h1>

    <form action="ex05.php">

<p>Raio:
    <input type="text" name="raio" required>
</p>

<p>
    <input value="Enviar" type="submit"/>
</p>
</form>

<?php
if (isset($_REQUEST["raio"])) {
    $raio = $_REQUEST["raio"];
    $perimetro = number_format((2 * pi() * $raio), 3.);

    echo "<p> O perimetro é ". $perimetro. "</p>";
}
?>
</body>
</html>