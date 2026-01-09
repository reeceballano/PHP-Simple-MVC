<?php

use App\Controllers\HomeController;
use App\Controllers\AboutController;

$routes = [
    '/' => [HomeController::class, 'index'],
    '/about' => [AboutController::class, 'index'],
];