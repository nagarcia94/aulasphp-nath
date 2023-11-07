<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Loops</h1>
    <hr>
    <h2>Tradicionais: for, while, do/while</h2>

    <h3>while</h3>
    <?php
    $i = 1;
    while ($i <= 3){
        ?>

         <p>Senac Penha - i vale<?=$i?> </p>
    
    <?php $i++; /* i++ é para nao virar loop infinito. */
    }
    ?>
</body>
</html>