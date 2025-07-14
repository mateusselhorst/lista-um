<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogais</title>
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
            $vogais = ['a', 'e', 'i', 'o', 'u'];
            $contador = 0;
        };

    for ($i = 0; $i < strlen($palavra); $i++) {
        if (in_array($palavra[$i], $vogais)) {
            $contador++;
        }
    }
    echo "A palavra possui $contador vogais";
    }

    ?>


</body>

</html>