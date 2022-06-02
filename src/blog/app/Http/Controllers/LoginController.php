<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("pages.admin.login");
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  App\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->route("admin.index");
        }

        return back()
            ->withErrors([
                "email" => "The provided credentials do not match our records."
            ])
            ->onlyInput("email");
    }
}