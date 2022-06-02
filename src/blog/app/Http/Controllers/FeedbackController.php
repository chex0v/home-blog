<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(FeedbackRequest $request)
    {
        $feedback = Feedback::create($request->validated());

        return back()->with("success", "Ваше сообщение получено.");
    }
}
