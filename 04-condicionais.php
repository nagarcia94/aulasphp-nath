<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conicionais</title>
</head>
<body>
    <h1>Condicionais (if, else, elseif)</h1>
    <hr>


    <h2>Simples</h2>
    <?php
    $numero = 121;

    if($numero > 20){
        echo "<p>$numero é maior que 20. </p>";
    }
    ?>
<!-- if(se), else(senão) -->

   <h2> Composta (if/else)</h2>
   <?php
//    Controle de Estoque
$produto = "Ultrabook Dell";
$qtdEmEstoque = 5; // o que temos no momento 
$qtdCritica = 2; // minimo necessário
?>
<h3>Produto: <?=$produto?></h3>
<h4>Estoque: <?= $qtdEmEstoque?></h4>





</body>
</html>