<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/day5', App\Http\Livewire\Day5::class);
Route::get('/day6', App\Http\Livewire\Day6::class);
// Route::get('/post/{post_id}', ShowPost::class);

// Route::get('/', ShowPosts::class);
// Route::get('/post', [ShowPosts::class, 'render']);
