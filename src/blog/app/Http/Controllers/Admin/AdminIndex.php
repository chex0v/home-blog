<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResourceCollection;
use App\Models\Post;

class AdminIndex extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $records = new PostResourceCollection(
            Post::orderBy("id", "desc")
                ->limit(10)
                ->get()
        );
        return view("pages/admin/main", compact("records"));
    }
}