<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('hello', [HelloController::class, 'index']);
// Route::get('world', [HelloController::class, 'world']);
// Route::get('hello', 'App\Http\Controllers\HelloController@index');
// Route::get('hello/{name}', 'HelloController@show');
// Route::post('hello', 'HelloController@store');
// Route::put('hello/{id}', 'HelloController@update');
// Route::delete('hello/{id}', 'HelloController@destroy');

// Route::resource('posts', PostController::class);
Route::get("posts", [PostController::class, 'index']);
Route::get("posts/create", [PostController::class, "create"]);
Route::get("posts/{id}", [PostController::class, 'show']);
Route::post("posts", [PostController::class, 'store']);
