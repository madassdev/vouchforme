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

    public function passwordAuth()
    {
        return redirect(route('users.index'))->withSuccess("Login successful");
    }
}
