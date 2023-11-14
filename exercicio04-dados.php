<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04 (Dados)</title>
</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->
  
<?php 
$produto = $_POST["produto"];
$fabricante = $_POST["fabricante"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"]; ?>

<!-- SAIDA -->
<ul>
<li>Produto: <?=$produto?></li>
<li>Fabricante: <?=$fabricante?></li>
<li>Preço: <?=$preco?></li>
<li>Descrição: <?=$descricao?></li>
</ul>

<!-- Exercício 4 


Etapa 02
Abra o arquivo exercicio04-dados.php e faça a programação de processamento do formulário considerando o envio/recebimento via POST.

Mostre os dados recebidos usando tags HTML.

DESAFIO PREÇO
Faça o preço aparecer formatado em Reais.

Exemplo: se o preço digitado no formulário for 4500.75, deverá aparecer no HTML como R$ 4.500,00. -->



</body>
</html>