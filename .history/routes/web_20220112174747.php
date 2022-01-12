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
Route::get('/day7', App\Http\Livewire\Day7::class);
Route::get('/day8', App\Http\Livewire\Day8::class);
Route::get('/day9', App\Http\Livewire\Day9::class);
Route::get('/day10', App\Http\Livewire\Day10::class);
Route::get('/day11', App\Http\Livewire\Day11::class);
Route::get('/day12', App\Http\Livewire\Day12::class);
// Route::get('/post/{post_id}', ShowPost::class);

// Route::get('/', ShowPosts::class);
// Route::get('/post', [ShowPosts::class, 'render']);
