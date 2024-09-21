<?php

use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/email', function () {
    return new NewUserWelcomeMail();
});

Route::get('/', [App\Http\Controllers\PostsController::class, 'index']);

Route::post('follow/{user}', [App\Http\Controllers\FollowsController::class, 'store']);

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');

Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');

Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);

Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);
