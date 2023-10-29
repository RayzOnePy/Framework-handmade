<?php
return [
    'auth' => \Src\Auth\Auth::class,
    'identity'=>\Models\User::class,
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
    ],
];
