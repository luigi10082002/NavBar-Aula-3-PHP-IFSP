<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegação com Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    $pg_atual = 'home';
    ?>

    <nav class="navbar navbar-expand-sm bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Matemática</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?php if ($pg_atual == 'home'): ?>
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <?php else: ?>
                            <a class="nav-link" href="#">Home</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <?php if ($pg_atual == 'soma'): ?>
                            <a class="nav-link active" aria-current="page" href="#">Soma</a>
                        <?php else: ?>
                            <a class="nav-link" href="recebe_numeros_soma.php">Soma</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <?php if ($pg_atual == 'subtracao'): ?>
                            <a class="nav-link active" aria-current="page" href="#">Subtração</a>
                        <?php else: ?>
                            <a class="nav-link" href="recebe_numeros_subtracao.php">Subtração</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <?php if ($pg_atual == 'multiplicacao'): ?>
                            <a class="nav-link active" aria-current="page" href="#">Multiplicação</a>
                        <?php else: ?>
                            <a class="nav-link" href="recebe_numeros_multiplicacao.php">Multiplicação</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <?php if ($pg_atual == 'divisao'): ?>
                            <a class="nav-link active" aria-current="page" href="#">Divisão</a>
                        <?php else: ?>
                            <a class="nav-link" href="recebe_numeros_divisao.php">Divisão</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <?php if ($pg_atual == 'resultado'): ?>
                            <a class="nav-link active" aria-current="page" href="#">Resultado</a>
                        <?php else: ?>
                            <a class="nav-link" href="#">Resultado</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
