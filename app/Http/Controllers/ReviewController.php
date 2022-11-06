<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //

    public function create(Request $request)
    {
        $client_data = [
            'request_ip' => $request->ip(),
            'request_origin' => $request->header('host'),
        ];
    }
}
