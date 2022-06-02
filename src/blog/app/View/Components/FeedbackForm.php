<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FeedbackForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $request = request();
        $success = $request->has("success");
        return view("components.feedback-form", compact("success"));
    }
}
