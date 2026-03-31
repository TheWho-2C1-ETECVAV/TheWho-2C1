<!--
Data: 30/03/2026
Autor: Gustavo Assis Calligaris e Juan Conceição de Souza
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

Fórmula: C = 5/9 × (F − 32)
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>EX2</title>
</head>
<body>

  <h1>Conversor de Temperatura</h1>

  <form action="calcula.php" method="get">
    <label>Numero da temperatura:</label>
    <input type="number" name="n1" step="any" required>
    <br><br>

    <label>F ou C:</label>
    <input type="text" name="a" step="any" required>
    <br><br>

    <input type="submit" value="Calcular Soma">
  </form>

</body>
</html>