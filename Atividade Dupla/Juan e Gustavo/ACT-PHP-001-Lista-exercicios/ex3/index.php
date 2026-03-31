 <!--
Data: 30/03/2026
Autor: Gustavo Assis Calligaris e Juan Conceição de Souza
Objetivo:

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>EX3</title>
</head>
<body>

  <h1>Calculadora Aritmetica</h1>

  <form action="calcula.php" method="get">
    <label>Primeiro Número:</label>
    <input type="number" name="n1" step="any" required>
    <br><br>

   <label>Escolha a sua operação:</label>
   <select name ="op">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="/">/</option>
      <option value="*">*</option>
   </select> 
    <br></br>

    <label>Segundo Número:</label>
    <input type="number" name="n2" step="any" required>
    <br><br>

    <input type="submit" value="Calcular">
  </form>

</body>
</html>