<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <!-- Arrays são listas nao manipuladas, indice começa em 0  -->
    <h1>Arrays (vetores e matrizes) </h1>
    
    <hr>

    <h2>Arrays numéricos/indexados </h2>

    <?php
    // Declarando arrays 
    $bandas= ["Rush", "Slayer","Iron Maiden"];
    $cursos = array ("HTML5", "PHP", "DESIGN", "JS");
    
    // Declarando como constante (quando nao ira mudar as info)
    define("UNIDADES_SESC", ["Belenzinho", " Bertioga"]);
    const UNIDADES_SENAC = ["Penha", "Tatuapé ", "São Miguel"]; 
    ?>
    <h3>Saída de dados de arrays </h3>
    <ul>
        <li>Banda que mais gosto:<?=$bandas[0]?> </li>
        <li>Assunto estudado: <?=$cursos[1] ?> </li>
        <!-- Mini-exercícios 
         -Mostre em que unidade do Senac estamos 
         -Mostre o Sesc que fica no litoral -->

         <li>Unidade do Senac em que eu estudo: <b><?= UNIDADES_SENAC [0]?></b> </li>

         <li> Unidade do Sesc litoral:<b> <?= UNIDADES_SESC [1]?></b> </li>

    </ul>

<!-- Para constante usa o nome da const que declarei para a saida. ex:(UNIDADE_SESC)
para variavel usa-se $ para declarar a saida. EX:$banda -->
<hr>

<h2>Array associativo</h2>
<?php 
$livro = [
    "titulo" => "senhor dos Anéis", 
    "autor" => "J.R.R. tolkien",
    "ano" => 1954,
    "personagens" => ["Frodo", "Legolas"]
];


$filme = array (
    "titulo" => "Velozes e Furiosos",
    "genero" => "Ação"   
);
?>

<h3>Saida de dados (array associativo)</h3>
<p>Livro: <?=$livro["titulo"]?></p>
<p>O cara que usa flechinhas: <?=$livro["personagens"][1]?></p>

<hr>
<h3>Comandos para analisar a estrutura : print_r () e var_dump ()</h3>
<!-- Saídas sem formatação -->
<?=print_r($bandas)?>
<br><br>
<?= var_dump($bandas)?>
<br><br>
<!-- Saída com formatação usando a tag <pre> -->
    <pre><?=print_r($bandas)?></pre>
    <br>
    <pre><?= var_dump($bandas)?></pre>
    <br>
    <pre><?= var_dump($livro)?></pre>

</body>
</html>