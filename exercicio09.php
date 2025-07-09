<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma entre dois números</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero1">Adicione o primeiro numero</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Adicione o segundo numero</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['verificar_numero'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
        };
        if(($numero1) && ($numero2)){
            $soma = $numero1 + $numero2;
            echo "<p> A soma dos números entre $numero1 e $numero2 é: $soma</p>";
        }
    };

    ?>