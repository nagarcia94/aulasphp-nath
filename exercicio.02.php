<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>

<body>
<?php
$dados= [ 
    "usuario" => "Nathalia",
    "senha" => "xxx0123",
    "idade" => 29,
    "cidade" => "São Paulo",
    "telefone" => ["11-99121-3760", "11-94756-0040"]
]
?>
<ol>
    <li>Nome do usuario:<?=$dados["usuario"]?></li>
    <li>Idade:<?=$dados["idade"]?> anos</li>
    <li>Cidade:<?=$dados["cidade"]?></li>
    <li>Telefone:<?=$dados["telefone"][0]?></li>
</ol>

    
</body>
</html>



<!-- 31/10/2023 
Exercício 2
Crie um novo arquivo chamado exercicio02.php e nele faça um array (numérico OU associativo) chamado (dados) contendo as seguintes informações:

Nome de usuário (exemplo: chapolin.colorado)
Senha (exemplo: 123teste)
Idade (exemplo: 30)
Cidade (exemplo: São Paulo)
Telefones (exemplo: 11-2135-0300 e 11-91234-5678)
Em seguida, mostre somente os valores de nome de usuário, idade, cidade e um dos telefones em uma lista ordenada HTML.-->