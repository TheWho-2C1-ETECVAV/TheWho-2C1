
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    
    <?php 
     $n = $_GET["n"];

    if ($n>=100 && $n<=200) {
          echo "O número está entre 100 e 200.";
   } else {
      echo "O número NÃO está entre 100 e 200.";
   }
    ?>

    <br><br>
    <a href="index.php">Voltar</a>
</body>
</html>