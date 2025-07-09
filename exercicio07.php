<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Perfeito</title>
</head>

<body>
    <form method="POST" action="">
        <label for="perfeito">Informe um número para descobrir se é um número perfeito</label>
        <input type="number" id="perfeito" name="perfeito" required>
        <button type="submit" name="verificar_perfeito">Verificar</button>
    </form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_perfeito'])) {
        $numero = $_POST['perfeito'];
    };
    function perfeitoNumero($numero)
    {
        if ($numero <= 1) {
            return false;
        };

        $divisor = 1;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $divisor += $i;
                if ($i != $numero / $i) {
                    $divisor += $numero / $i;
                };
            };
        };
        return $divisor == $numero;
    };

    if (perfeitoNumero($numero)) {
        echo "$numero é um número perfeito.";
    } else {
        echo "$numero não é um número perfeito.";
    }
};
?>

</body>
</html>