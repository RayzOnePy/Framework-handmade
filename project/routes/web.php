<?php

use Src\Route;

Route::add('GET', '/hello', [Controllers\SiteController::class, 'hello'])
    ->middleware('auth');
Route::add('GET', '/', [Controllers\SiteController::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controllers\SiteController::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controllers\SiteController::class, 'login']);
Route::add('GET', '/logout', [Controllers\SiteController::class, 'logout']);
