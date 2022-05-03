<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResourceCollection;
use App\Models\Post;

class BlogController extends Controller
{
  public function index()
  {
    $posts = Post::paginate(5);
    return view('pages/blog/list', compact('posts'));   
  }

  public function show(Post $post)
  {
    return view('pages/blog/show', compact('post')); 
  }
}