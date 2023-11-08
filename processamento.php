<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando os dados</title>
</head>
<body>
    <h1>Processamento dos dados vindo do formulário</h1>
    <hr>
    <?php
    // Recebendo os dados via metodo do formulario post
    // usando o array superglobal $_POST[]
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
    $mensagem = $_POST["mensagem"];
    
    if( empty($nome) || empty ($email)){
        ?> 
        <p> Preencha os campos vazios!! </p>
        <?php

    }else {
    ?>

   <h2>Dados recebidos:</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>Email <?=$email?></li>
    <li>Data de Nascimento: <?=$nascimento?></li>
    <li>Mensagem: <?=$mensagem?></li>
</ul>
<?php } ?>






</body>
</html>