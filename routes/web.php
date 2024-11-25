<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

// Главная страница
Route::get('/', function () {
    return view('welcome');
});

// Проверка локализации
Route::get('/check-locale', function () {
    return app()->getLocale();
});

// Информационные маршруты
Route::prefix('info')->group(function () {
    Route::get('/server', [InfoController::class, 'serverInfo']);
    Route::get('/client', [InfoController::class, 'clientInfo']);
    Route::get('/database', [InfoController::class, 'databaseInfo']);
});

