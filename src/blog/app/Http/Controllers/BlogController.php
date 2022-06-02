<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResourceCollection;
use App\Models\Post;

class BlogController extends Controller
{
    private $postCount = 7;

    public function index()
    {
        $posts = Post::orderBy("id", "desc")->paginate($this->postCount);
        return view("pages/blog/list", compact("posts"));
    }

    public function show(Post $post)
    {
        return view("pages/blog/show", compact("post"));
    }
}
