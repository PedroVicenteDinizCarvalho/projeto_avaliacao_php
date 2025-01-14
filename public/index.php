<?php

// Define as constantes de diretórios
define('BASE_DIR', dirname(__DIR__));
define('VIEW_PATH', BASE_DIR . '/views/');

// Autoload das classes
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/../core/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    } else {
        die("Arquivo para a classe $class não encontrado em: $file");
    }
});

// Configurações iniciais
require_once BASE_DIR . '/core/database.php';
require_once BASE_DIR . '/core/router.php';

// Inicializa o roteamento
$router = new Router();
$router->handleRequest();
