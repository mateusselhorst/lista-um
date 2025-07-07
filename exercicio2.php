<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <form method="POST" action="">
        <label for="tabuada">Verifique a tabuada</label>
        <input type="number" id="tabuada" name="tabuada" required>
        <button type="submit" name="mostrar_tabuada">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['mostrar_tabuada'])) {
            $numero = $_POST['tabuada'];
            for ($i = 1; $i <= 10; $i++) {
                $resultadotabuada = $numero * $i;
                echo "$numero *$i = $resultadotabuada <br>";
            }
        };
    };
    ?>
</body>

</html>