<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectSingleController extends Controller
{
    public function index(Request $request, $server, $redirect) {
        $data = [
            'server' => $request->server
        ];
        return view('redirect.single', $data);
    }
}
