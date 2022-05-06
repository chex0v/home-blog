<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pagination extends Component
{

    public $page;
    public $perPage;
    public $total;
    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page = 0, $perPage = 0, $total = 0, $route = '')
    {
        $this->page = (int)$page;
        $this->perPage = (int)$perPage;
        $this->total = (int)$total;
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
