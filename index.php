<?php

echo "hey";

require_once __DIR__ . '/routes/web.php';

spl_autoload_register(function($class) {
    // Handle App namespace
    if (strpos($class, 'App\\') === 0) {
        $class = str_replace('App\\', '', $class);
        require_once __DIR__ . '/app/' . str_replace('\\', '/', $class) . '.php';
    }
    // Handle DB namespace
    elseif (strpos($class, 'DB\\') === 0) {
        $class = str_replace('DB\\', '', $class);
        require_once __DIR__ . '/Db/' . str_replace('\\', '/', $class) . '.php';
    }
});

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if(!isset($routes[$uri])) {
    http_response_code(404);
    echo "404 Page not found";
    exit;
}

[$controller, $method] = $routes[$uri];

$controllerInstance = new $controller();
$controllerInstance->$method();
