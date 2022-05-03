<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return view('pages/main');
})->name('home');


Route
    ::controller(BlogController::class)
    ->name('blog.')
    ->group(function () {
    Route::get('/blog', 'index')->name('list');
    Route::get('/blog/{post:slug}', 'show')->name('detail');
});