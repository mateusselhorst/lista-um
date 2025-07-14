<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius e Fahrenheit</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero_grau">Informe uma temperatura em graus Celsius e converta para Farenheit:</label>
        <input type="number" id="numero_grau" name="numero_grau" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>
    
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['verificar_numero'])) {
        $numero_grau = $_POST['numero_grau'];

        echo "Conversão:", (($numero_grau * 9/5) + 32);
    };
};

?>

</body>

</html>