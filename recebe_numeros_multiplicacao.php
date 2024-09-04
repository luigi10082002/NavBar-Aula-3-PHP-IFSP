<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Multiplicação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'multiplicacao';
include 'navbar.php';
?>
    <div class='container-fluid'>
        <h1>Calculadora de Multiplicação</h1>
        <form action="multiplicacao.php" method="post">
            <div class="mb-3">
                <label for="num1" class="form-label">Número 1:</label>
                <input type="number" id="num1" name="numeros[]" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Número 2:</label>
                <input type="number" id="num2" name="numeros[]" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="num3" class="form-label">Número 3:</label>
                <input type="number" id="num3" name="numeros[]" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
