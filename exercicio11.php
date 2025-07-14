<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>

<body>

    <form method="POST" action="">
        <label for="palavra">Informe uma palavra:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar_palavra">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['verificar_palavra'])) {
            $palavra = $_POST['palavra'];
            $palavraInvertida = strrev($palavra);
        };

        if ($palavra == $palavraInvertida) {
            echo "<p>A palavra '$palavra' é um palíndromo.</p>";
        } else {
            echo "<p>A palavra '$palavra' não é um palíndromo.</p>";
        }
    }

    ?>


</body>

</html>