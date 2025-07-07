<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>

<body>

    <form method="POST" action="">
        <label for="fatorial">Informe um número para descobrir o seu fatorial</label>
        <input type="number" id="fatorial" name="fatorial" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_numero'])) {
        $numero = $_POST['fatorial'];
    };
    function loopFatorial($numero) {
        $fatorial = 1;

        for($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }

        return $fatorial;

    };
    
         echo "Fatorial do $numero é: " . loopFatorial($numero) . "\n";
};
?>

</body>
</html>