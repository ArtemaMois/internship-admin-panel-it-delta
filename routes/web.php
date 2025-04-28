<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::controller(UsersController::class)->group(function () {
    Route::get('/users/new', 'create')->name('users.new');
    Route::get('/', 'index')->name('users.index');
    Route::get('/users/{user}', 'show')->name('users.show');
    Route::get('/users/{user}/edit', 'update')->name('users.update');
    Route::post('/users', 'store')->name('users.store');
    Route::patch('/users/{user}', 'edit')->name('users.edit');
    Route::delete('/users/{user}', 'delete')->name('users.delete');
});
