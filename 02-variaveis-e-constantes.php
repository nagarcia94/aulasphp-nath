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
  // Variáveis usa $
  $curso = "programador Web";
  $ano = 2023;
  $area = "Back-End";
  /* Formas de saída COMPLETAS VIA PHP */

//  Saída interpolada
  echo "<p>Estamos no $curso em $ano</p>";
  
  // Não dá certo, as variavéis são tratadas como texto
  echo '<p>Estamos no $curso em $ano</p>';
  
  // Saída com CONCATENAÇÃO
  echo '<p>Estamos no ' .$curso. ' em ' .$ano.'</p>';
  echo "<p>Estamos no " .$curso. " em " .$ano. "</p>";
  ?>
<hr>
<!-- Forma de saída abreviada/simplificada -->
<p>Estamos no <?=$curso?> em <?=$ano?> </p>
<hr>

<?php
// Constante nao usa $ 
// (foi usado DEFINE para demonstrar um modo antigo, mas é o mesmo que usar a const)
define("AUTOR", "Nathalia Garcia");

// Modo mais atual usando CONST
const EMPRESA = "ABC Tecnologia";
const ANO_FUNDACAO = 2000;
?>
<!-- SAIDAS -->
<p>Autor do site: <?=AUTOR?> </p>
<p>Nome da empresa: <?=EMPRESA?> </p>
<p>Fundada em: <?=ANO_FUNDACAO?> </P>

</body>
</html>