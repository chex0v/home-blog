<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;

class PostListPreview extends Component
{
    private $post = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view("components.admin.post-list-preview", ["post" => $this->post]);
    }
}