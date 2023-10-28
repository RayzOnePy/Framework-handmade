<?php

use Src\Route;

Route::add('go', [Controllers\SiteController::class, 'index']);
Route::add('hello', [Controllers\SiteController::class, 'hello']);