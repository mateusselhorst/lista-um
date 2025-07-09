<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantos números existem</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Verifique quantos números pares existem entre o número 1 e o número que você escolher:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="numero_um">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['numero_um'])) {
            $numero = $_POST['numero'];
        };
        if (($numero) && $numero > 0) {
            for ($i = 2; $i <= $numero; $i += 2) {
                echo $i . " ";
            }
        }
    }
    ?>

</body>

</html>