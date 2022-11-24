<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //

    public function index()
    {
        return inertia('Index');
    }

    public function register()
    {
        return inertia('Auth/Register');
    }

    public function login()
    {
        return inertia('Auth/Login');
    }

    public function passwordAuth(Request $request)
    {
        sleep(3);
        $request->validate([
            "email" => "required|exists:users,email",
            "password" => "required|string|min:6|in:p2892deu089uwd,89wydhlhedg89w"
        ]);
        return redirect(route('dashboard.index'))->withSuccess("Login successful");
    }

    public function googleAuth(Request $request)
    {
        return redirect(route('dashboard.index'))->withSuccess("Login successful");
    }
}
