<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
  public function index()
  {
    return view('pages/blog/list');   
  }
}