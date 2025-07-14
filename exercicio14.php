<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bissexto</title>
</head>

<body>
    <form method="POST" action="">
        <label for="ano">Informe um ano e descubra se ele é bissexto:</label>
        <input type="number" id="ano" name="ano" required>
        <button type="submit" name="ano_bissexto">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['ano_bissexto'])) {
            $numero = $_POST['ano'];

            if(($numero % 4 == 0) || ($numero % 400 == 0)) {
                echo "<p> $numero é um ano bissexto. </p>";
            } else {
                echo "<p> $numero não é um ano bissexto. </p>";
            }

        }

    }

    ?>
</body>

</html>