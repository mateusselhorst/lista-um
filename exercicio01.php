<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par ou Ímpar</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero_impar">Verifica se é um número par ou ímpar</label>
        <input type="number" id="numero_impar" name="numero_impar" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>
<?php

function verificarImpar($numero)
{
    if ($numero % 2 == 0) {
        return "O número $numero é par";
    } else {
        return "O número $numero é ímpar";
    }
};


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['verificar_numero'])) {
        $numero = $_POST['numero_impar'];
        $ehImpar = true;
        echo verificarImpar($numero);
    };
};

?>

</body>

</html>