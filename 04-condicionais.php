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
$qtdEmEstoque = 0; // o que temos no momento 
$qtdCritica = 1; // minimo necessário
?>
<h3>Produto: <?=$produto?></h3>
<h4>Estoque: <?= $qtdEmEstoque?></h4>


<?php
/*  Se a quantidade em estoque for abaixo da quantidade crítica, então o sistema deve avisar e pedir para repor.*/
if ($qtdEmEstoque < $qtdCritica) {
    echo "<p> È necessário comprar/ repor!</p>";  

    // Condicional Simples/ANINHADA
    if ($qtdEmEstoque === 0){
        echo "<p>URGENTE</p>";
    }


} else{
/*  Caso contrario, simplesmente mostrar que o estoque está normal. */
echo "<p> Estoque normal </p>";

}?>


</body>
</html>