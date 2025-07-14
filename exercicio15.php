<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>

<body>
    <form method="POST" action="">
        <label for="altura">Informe sua altura em metros:</label>
        <input type="text" id="altura" name="altura" required><br><br>
        <label for="peso">Informe seu peso em kg:</label>
        <input type="number" id="peso" name="peso" required><br><br>
        <button type="submit" name="mostrar_imc">Verificar</button>
    </form>

    <?php

    function calcularImc($peso, $altura)
    {
        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            return number_format($imc, 2);
        } else {
            return ' A altura é inválida';
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        }
        echo "Seu IMC é ", calcularImc($peso, $altura);
    };


    ?>
</body>

</html>