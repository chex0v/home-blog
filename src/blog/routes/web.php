<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FeedbackController;

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

Route::get('/about', function() {
    return view('pages/about');
})->name('about');
Route::get('/contact', function() {
    return view('pages/contacts');
})->name('contact');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback');

Route
    ::controller(BlogController::class)
    ->name('blog.')
    ->group(function () {
    Route::get('/blog', 'index')->name('list');
    Route::get('/blog/{post:slug}', 'show')->name('detail');
});

Route::name('admin.')->prefix('admin')->group(function() {
    Route::get('/', function() {
        return view('pages/admin/main');
    });
    Route::get('/login', function() {
        return view('pages/admin/login');
    });
});