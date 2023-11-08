<?php include "recurso.php";?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>


    <style>
        ol li:nth-child(odd){ color: green;}
        ol li:nth-child(even){ color: red;}
        </style>
</head>

<body>
    <!-- Usando foreach para acessar os dados do array criado em outro arquivo (acessivel devido ao include) -->
<?php foreach ($linguagens as $linguagem){?> 
<p><i><?=$linguagem?></i></p>
<?php}?>


<p> <?= ESCOLA ?> - <?= $anoLetivo?></p>
    <h1>Loops</h1>
    <hr>
    <h2>Tradicionais: for, while, do/while</h2>

    <h3>while</h3>
    <?php
    $i = 1;
    while ($i <= 3) {
    ?>

        <p>Senac Penha - i vale<?= $i ?> </p>

    <?php $i++; /* i++ é para não virar loop infinito. */
    }
    ?>


<h3> do/while</h3>
<ul>
    <?php
    $j = 1;
    do { ?>

    <li> Item: <?= $j?></li>
    
    <?php 
    $j++;
} while ($j <= 5) 
?>
</ul>

<h3>for</h3>
<?php 
$alunos = ["Jean", "Giuseppe", "Arthur", "Paola"];

$quantidade = count($alunos);

for ($i = 0; $i < $quantidade; $i++ ){ ?>
   
   <p> Aluno: <?=$alunos[$i]?> </p>
    
<?php
}
?>

<h3>foreach</h3>

<?php foreach ( $alunos as $alunos){ ?>
    <p> <?=$alunos?> </p>
<?php } ?>
<br><hr>
<!-- EXERCICIO 03 

- Crie um array contendo o nome dos 12 meses do ano. 
- Monte uma lista ordenada exibindo o nome de cada mês em um item.
- Formate a lista de uma forma que os meses apareçam com cores alternadas. 
Exemplo: janeiro/fevereiro azul
março/abril verde ... -->

<?php
$meses = [ 
"Janeiro", 
"Fevereiro", 
"Marco", 
"Abril", 
"Maio", 
"Junho", 
"Julho", 
"Agosto", 
"Setembro", 
"Outubro", 
"Novembro",
"Dezembro" ]; ?>

<h2>Meses do Ano 2023</h2>
<ol>
    <?php foreach ($meses as $mes){ ?>
        
        <li><?=$mes?></li> <?php } ?>
</ol>


</body>
</html>