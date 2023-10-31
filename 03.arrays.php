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

</body>
</html>