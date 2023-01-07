<?php

use Illuminate\Support\Facades\Route;
use App\Models\Posts;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AppusersController;
use App\Http\Controllers\ChannelsController;
use App\Http\Controllers\CTRController;
use App\Http\Controllers\RecLikesController;
use App\Http\Controllers\CommentsController;



Route::get('/main', function () {

    return view('welcome');

})->name('home');

Route::resource('posts',PostsController::class);

Route::get('posts',  [PostsController::class, 'index'])->name('allposts');

Route::resource('channels',ChannelsController::class);

Route::get('channels',  [ChannelsController::class, 'index'])->name('allchannels');

Route::resource('app_users',AppUsersController::class);

Route::get('app_users',  [AppUsersController::class, 'index'])->name('allusers');

Route::get('/features', function () {

    return view('Features.featurespage');

})->name('features');

Route::get('/features/userfinder', function () {

    return view('Features.findusers');

})->name('userfinder');

Route::resource('/features/ctr',CTRController::class);

Route::get('/features/ctr',  [CTRController::class, 'index'])->name('ctr');

Route::resource('/features/reclikes',RecLikesController::class);

Route::get('/features/reclikes',  [RecLikesController::class, 'index'])->name('reclikes');

Route::post('/comments', [CommentsController::class ,'store'])->name('comments.store');

Route::get('/comments/create', [CommentsController::class ,'create'])->name('comments.create');



