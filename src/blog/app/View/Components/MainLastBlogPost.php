<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;

class MainLastBlogPost extends Component
{
    public $count = 3;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($count = 3)
    {
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $posts = Post::orderBy("id", "desc")
            ->take($this->count)
            ->get();
        $linkAll = route("blog.list");
        return view("components.main-last-blog-post", compact("posts", "linkAll"));
    }
}
