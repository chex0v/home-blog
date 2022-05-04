<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pagination extends Component
{

    public $page;
    public $count;
    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page = 0, $count = 0, $route = '')
    {
        $this->page = $page;
        $this->count = $count;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pagination');
    }
}
