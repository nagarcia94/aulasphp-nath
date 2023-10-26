<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavéis e constantes</title>

<style>

  p {font-family: Verdana;}

.destaque {
  background-color: yellow;
  color: red;
}

</style>



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

/* foi usado dois tipos de classe, um com aspas simples ('...') e outro com aspas dupla e barra (\"...\") pois ja existe aspas dupla no codigo php nesse exemplo */
  echo "<p>Estamos no <span class='destaque'>$curso</span> em 
  <span class=\"destaque\"> $ano</span></p>";
  
  // Não dá certo, as variavéis são tratadas como texto
  echo '<p>Estamos no $curso em $ano</p>';
  
  // Saída com CONCATENAÇÃO
  echo '<p>Estamos no ' .$curso. ' em ' .$ano.'</p>';
  echo "<p>Estamos no " .$curso. " em " .$ano. "</p>";
  ?>
<hr>
<!-- Forma de saída abreviada/simplificada -->

<!-- Nesse caso foi usado aspas dupla na class pois nao tinha aspas no codigo php -->
<p>Estamos no <span class="destaque" > <?=$curso?> </span> em <?=$ano?> </p>
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