<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Admin;

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
Route::name("admin.")
    ->prefix("admin")
    ->middleware(["auth"])
    ->group(function () {
        Route::get("/", function () {
            return view("pages/admin/main");
        })->name("index");

        Route::get("/logout", function () {
            Auth::logout();
            return redirect()->route("admin.login.index");
        })->name("logout");

        Route::name("blog.")
            ->prefix("blog")
            ->controller(BlogController::class)
            ->group(function () {
                Route::get("/", "index")->name("index");
            });

        Route::name("login.")
            ->prefix("login")
            ->withoutMiddleware(["auth"])
            ->controller(LoginController::class)
            ->group(function () {
                Route::get("/", "index")->name("index");
                Route::post("/", "authenticate")->name("authenticate");
            });
    });

Route::get("/", function () {
    return view("pages/main");
})->name("home");

Route::get("/about", function () {
    return view("pages/about");
})->name("about");
Route::get("/contact", function () {
    return view("pages/contacts");
})->name("contact");

Route::post("/feedback", [FeedbackController::class, "store"])->name("feedback");

Route::controller(BlogController::class)
    ->name("blog.")
    ->group(function () {
        Route::get("/blog", "index")->name("list");
        Route::get("/blog/{post:slug}", "show")->name("detail");
    });