<?php
// Manage All Routs Here 
// (All URLs, Controllers, Controller(), Middleware);
use App\Services\Route;
use App\Middleware\{
    Auth,
    Guest
};

//          URL, Controller, Controller(), http(), Middleware 

Route::get('login','LoginController','index',[Guest::class]);
Route::get('register','RegisterController','index',[Guest::class]);
Route::post('submit-register','RegisterController','register',[Guest::class]);

Route::post('submit-login','LoginController','login',[Guest::class]);
Route::get('logout','DashboardController','logout', [Auth::class]);
Route::get('dashboard','DashboardController','index', [Auth::class]);

Route::get('','HomeController','index');

// Left Video at 3:40