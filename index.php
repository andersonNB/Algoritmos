<?php

$a = 5;
$baux = 1;
$b = 1;
$valor = 0;

while ($a > $b) {
    $b++;
    $valor++;
}

$sumaA = 5;
$sumaB = 1;
$sumaRespladoB = 1;
$sumaAMostrar = 1;
$resultado = 0;

while ($sumaRespladoB < $sumaA) {

    $sumaRespladoB++;
    $resultado++;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmos</title>
</head>

<body>
    <h3><?php echo "La diferencia entre: " . $a . "-" . $baux . "= " . $valor; ?></h3>
    <h3><?php echo "La suma es: " . $sumaA . "+" . $sumaAMostrar . "= " . $resultado; ?></h3>
</body>

</html>