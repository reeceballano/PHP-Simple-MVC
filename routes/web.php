<?php

use App\Controllers\HomeController;
use App\Controllers\AboutController;

$routes = [
    '/' => [HomeController::class, 'index'],
    '/search' => [HomeController::class, 'searchTodo'],
    '/about' => [AboutController::class, 'index'],
];