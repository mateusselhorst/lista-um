<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Verifique o número</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['verificar_numero'])) {
            $numero = $_POST['numero'];
        };
        if($numero < 0){
            echo 'Número é negativo';
        }else if($numero > 0){
            echo 'Número é positivo';
        }else{
            echo 'Número é zero';
        }
    };

    ?>