<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    private $count = 10;

    public function index()
    {
        $articles = Post::orderBy("id", "desc")->paginate($this->count);
        return view("pages/admin/blog", compact("articles"));
    }
}