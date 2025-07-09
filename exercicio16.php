<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
</head>

<body>
    <form method="POST" action="">
        <label for="nome">Insira seu nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
                <label for="idade">Insira sua idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>
        <button type="submit" name="verificar_idade">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['verificar_idade'])) {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
        };
        if($idade <= 15){
            echo 'Não pode votar';
        }else if($idade >= 16){
            echo 'Pode votar';
        }
    };

    ?>