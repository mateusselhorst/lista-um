<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisor</title>
</head>

<body>
    <form method="POST" action="">
        <label for="divisor">Informe um número para descobrir qual o número perfeito</label>
        <input type="number" id="divisor" name="divisor" required>
        <button type="submit" name="verificar_divisor">Verificar</button>
    </form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_divisor'])) {
        $numero = $_POST['divisor'];
    };
    function numeroPerfeito($numero)
    {
        if ($numero <= 1) {
            return false;
        };

        $divisores = 1;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $divisores += $i;
                if ($i != $numero / $i) {
                    $divisores += $numero / $i;
                };
            };
        };
        return $divisores == $numero;
    };

    if (numeroPerfeito($numero)) {
        echo "$numero é um número perfeito.";
    } else {
        echo "$numero não é um número perfeito.";
    }
};
?>

</body>
</html>