<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\StatsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Главная
Route::get('/', [HomeController::class, 'index'])->name('home');

// Просмотр категорий и постов
Route::get('/blog/category/{id?}', [BlogController::class, 'category'])->name('category');
Route::get('/blog/post/{id?}', [BlogController::class, 'post'])->name('post');

// Админка
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [StatsController::class, 'index'])->name('admin.index');
    Route::resource('/category', CategoryController::class, ['as' => 'admin']);
    Route::resource('/post', PostController::class, ['as' => 'admin']);

    // Роуты для очистки кэша прямо в админке
    Route::get('/clear-route', function() {
        Artisan::call('route:clear');
        return 'php artisan route:clear - OK';
    })->name('clear-route');

    Route::get('/clear-config', function() {
        Artisan::call('config:cache');
        return 'php artisan config:cache - OK';
    })->name('clear-config');

    Route::get('/clear-view', function() {
        Artisan::call('view:clear');
        return 'php artisan view:clear - OK';
    })->name('clear-view');
});

// Роуты для авторизации/регистрации/и т.д.
Auth::routes();

// Сюда переадресовывает после регистрации и/или авторизации
// При этом переадресация прописана в /vendor/laravel/framework/src/Illuminate/Foundation/Auth/RedirectsUsers.php
// И нет возможности её изменить. Печаль
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
