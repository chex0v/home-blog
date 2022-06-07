<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminTop extends Component
{
    public $title;
    public $records;
    public $linkAll;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $records, $linkAll)
    {
        $this->title = $title;
        $this->records = $records;
        $this->linkAll = $linkAll;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view("components.admin-top");
    }
}