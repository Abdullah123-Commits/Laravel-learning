<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;


// // hello route
// Route::get('/hello', function () {
//     return ('<h1>hello World</h1>');
// });

/*
// to handle get req for user withspecific id (passing dynamic value(s) into URL)
Route::get('/user/{id}', function($id) {
    return 'This is user with id '.$id;
});
*/

// Route::get('/', [PagesController::class, 'index]']);
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::resource('posts', PostsController::class);