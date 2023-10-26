<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavéis e constantes</title>
</head>
<body>
  <h1> Variáveis e Constantes - PHP</h1>
  <hr> 

  <?php
  // Variáveis 
  $curso = "programador Web";
  $ano = 2023;
  $area = "Back-End";
  
//  Saída interpolada
  echo "<p>Estamos no $curso em $ano</p>";
  
  // Não dá certo, as variavéis são tratadas como texto
  echo '<p>Estamos no $curso em $ano</p>';
  
  // Saída com CONCATENAÇÃO
  echo '<p>Estamos no ' .$curso. ' em ' .$ano.'</p>';
  echo "<p>Estamos no " .$curso. " em " .$ano. "</p>";
  ?>

</body>
</html>