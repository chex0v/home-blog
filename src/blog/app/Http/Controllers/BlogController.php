<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResourceCollection;
use App\Models\Post;

class BlogController extends Controller
{
  public function index()
  {
    $posts = new PostResourceCollection(Post::paginate());
    return view('pages/blog/list', compact('posts'));   
  }
}