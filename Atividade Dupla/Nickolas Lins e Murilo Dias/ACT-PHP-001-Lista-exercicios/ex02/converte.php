<?php

$C = $_GET["C"];

$F = $_GET["F"];

$Fahreiheit = null;
$Celcius = null;

if($C != null){
    $Fahreiheit = ($C *  9/5) + 32;
}

if($C != null){
    $Celcius = ($F - 32) * 5/9;
}
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Conversao</title>

</head>

<body>

<h1>Conversao:</h1>

<p>Celsius: <?php echo $Celcius; ?></p>

<p>Fahrenheit: <?php echo $Fahreiheit; ?></p>

<a href="index.php">Voltar</a>

</body>

</html>