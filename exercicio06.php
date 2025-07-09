<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>

<body>
    <form method="POST" action="">
        <label for="divisor">Informe um número para descobrir os seus divisores existentes </label>
        <input type="number" id="divisor" name="divisor" required>
        <button type="submit" name="verificar_divisor">Verificar</button>
    </form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_divisor'])) {
        $numero = $_POST['divisor'];
    };
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo "<br>";
            echo $i . "";
        };
    };
};

?>

</body>
</html>