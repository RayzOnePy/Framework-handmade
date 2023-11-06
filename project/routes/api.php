<?php

use Src\Route;

Route::add('GET', '/', [Controllers\ApiController::class, 'index']);
Route::add('POST', '/echo', [Controllers\ApiController::class, 'echo']);
Route::add('GET', '/products', [Controllers\ProductController::class, 'index']);