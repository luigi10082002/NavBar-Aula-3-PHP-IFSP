<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Multiplicação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'multiplicacao';
include 'navbar.php';

function calcularMultiplicacao($numeros) {
    $resultado = 1;
    foreach ($numeros as $numero) {
        $resultado *= floatval($numero);
    }
    return $resultado;
}

$numeros = isset($_POST['numeros']) ? $_POST['numeros'] : [];
$resultadoMultiplicacao = calcularMultiplicacao($numeros);
?>

    <div class="container mt-4">
        <h1>Resultado da Multiplicação</h1>
            <p><?php echo implode(' * ', $numeros); ?> = <?php echo $resultadoMultiplicacao; ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
