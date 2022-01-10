<?php

$a = 5;
$baux = 1;
$b = 1;
$valor = 0;

while ($a > $b) {
    $b++;
    $valor++;
}

$sumaA = 3;
$sumaB = 1;
$sumaRespladoA = 3;
$resultado = 0;

while ($sumaRespladoA >= 0) {

    $sumaRespladoA--;
    $resultado++;
}
// Multiplicación
$multiA = 2;
$multiB = 3;
$multiAmostrarB = 3;
$multiResult = 0;

while ($multiB > 0) {

    $multiB--;
    $multiResult += $multiA;
}

//División
$dividendoAMostrar = 7;
$dividendo = 7;
$divisor = 2;
$resta = $contador = 0;

//$dividendo >0 -> mi forma
while ($dividendo >= $divisor) {
    $contador++;
    $dividendo -= $divisor;
    //0
    //5 = 7 - 2
    //3 = 5 - 2
    //1 = 3 - 2
    //-1 = 1 - 2
    // $resta = $dividendo - $divisor;
    // if($resta < 0){
    //     //-1
    //     $sobrante = $resta;
    // }
    // //7
    // //5 = 7-2
    // //3 = 5- 2
    // //1 = 3-2
    // //-1 = 1-2
    // $dividendo = $dividendo - $divisor;
    // $contador++;
}

//Potencia
$numero = 3;
$potencia = 4;
$potenciaAMostrar = 4;
$resultadoPotencia = 1;

while ($potencia > 0) {

    $resultadoPotencia *= $numero;
    $potencia--;
}

//Factorial
$numeroFactoMostrar = 7;
$numeroFacto = $numeroFactoDisminuir = 7;

while ($numeroFactoDisminuir > 0) {

    $numeroFactoDisminuir--;
    if ($numeroFactoDisminuir == 0) {
    } else {
        $numeroFacto *= $numeroFactoDisminuir;
    }
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
    <h1 style="text-align: center;">Operaciones basicas</h1>
    <h3><?php echo "La diferencia entre: " . $a . "-" . $baux . "= " . $valor; ?></h3>
    <h3><?php echo "La suma es: " . $sumaA . "+" . $sumaB . "= " . $resultado; ?></h3>
    <h3><?php echo "Multiplicación: " . $multiA . " * " . $multiAmostrarB . " = " . $multiResult; ?></h3>
    <h3><?php echo "División: " . $dividendoAMostrar . " / " . $divisor . " = " . $contador . "($dividendo)"; ?></h3>
    <h3><?php echo "La potencia de " . $numero . " a la " . $potenciaAMostrar . " es: " . $resultadoPotencia; ?></h3>
    <h3><?php echo "Factorial de " . $numeroFactoMostrar . " es: " . $numeroFacto; ?></h3>

</body>

</html>