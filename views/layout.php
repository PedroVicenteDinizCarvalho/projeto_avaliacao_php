<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Sistema de Funcionários' ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/empresa/listar">Empresas</a></li>
                <li><a href="/funcionario/listar">Funcionários</a></li>
                <li><a href="/usuario/logout">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?= $content ?? '' ?>
    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> - Sistema de Funcionários</p>
    </footer>
</body>
</html>
