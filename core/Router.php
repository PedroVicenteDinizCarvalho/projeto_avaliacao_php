<?php

class Router
{
    public function handleRequest()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : 'usuario/login';
        $url = explode('/', $url);

        $controllerName = ucfirst($url[0]) . 'Controller';
        $methodName = isset($url[1]) ? $url[1] : 'index';

        $controllerPath = __DIR__ . '/../controllers/' . $controllerName . '.php';

        if (file_exists($controllerPath)) {
            require $controllerPath;

            if (class_exists($controllerName)) {
                $controller = new $controllerName();
                if (method_exists($controller, $methodName)) {
                    call_user_func_array([$controller, $methodName], array_slice($url, 2));
                } else {
                    die("Método $methodName não encontrado no controlador $controllerName.");
                }
            } else {
                die("Classe $controllerName não encontrada.");
            }
        } else {
            die("Controlador $controllerName não encontrado em: $controllerPath");
        }
    }
}
