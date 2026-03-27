<!--
Data: 20/03/2026
Autor: Murilo Dias da Silva e Nickolas Lins de Lemos
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Conversão de Temperatura</title>
</head>
<body>

  <h1>Conversão de Temperatura</h1>

  <form action="converte.php" method="get">
    <label for="n1">Digite uma temperatura em Fahrenheit para receber o valor em Celsius</label>
    <input id="F" type="number" name="F" step="any">
    <br>
    <br>
    <label for="n1">Digite uma temperatura em celcius para receber o valor em Fahrenheit </label>
    <input id="C" type="number" name="C" step="any">

    <input type="submit" value="Converter">
  </form>

  

</body>
</html>