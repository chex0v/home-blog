<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminIndex;
use App\Models\Post;

/** admin pages */
Route::name("admin.")
    ->prefix("admin")
    ->middleware(["auth"])
    ->group(function () {
        // admin.index /admin
        Route::get("/", AdminIndex::class)->name("index");
        // admin.logout /admin/logout
        Route::get("/logout", function () {
            Auth::logout();
            return redirect()->route("admin.login.index");
        })->name("logout");

        Route::name("blog.")
            ->prefix("blog")
            ->controller(AdminBlogController::class)
            ->group(function () {
                // admin.blog.index /admin/blog
                Route::get("/", "index")->name("index");
                // admin.blog.detail /admin/blog/post/{post}
                Route::get("/post/{post:slug}", function (Post $post) {
                    dd($post);
                })->name("detail");
                // admin.blog.list /admin/blog/posts
                Route::get("/posts", function () {
                    dd("posts");
                })->name("list");
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

/** default pages */
// home
Route::get("/", function () {
    return view("pages/main");
})->name("home");

// about
Route::get("/about", function () {
    return view("pages/about");
})->name("about");

// contract
Route::get("/contact", function () {
    return view("pages/contacts");
})->name("contact");

// feedback
Route::post("/feedback", [FeedbackController::class, "store"])->name("feedback");

Route::controller(BlogController::class)
    ->name("blog.")
    ->group(function () {
        // blog.list
        Route::get("/blog", "index")->name("list");
        // blog.detail
        Route::get("/blog/{post:slug}", "show")->name("detail");
    });