<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebServerController extends Controller
{
    public function show(Request $request, $name) {
        $data = [
            'name' => $name,
            'seo' => [
                'metaTitle' => 'The most used redirects for ' . $name . ' web server | ' . env('APP_DOMAIN', null),
                'metaDescription' => 'Web server ' . $name . '.'
            ]
        ];

        return view("web_server.show", $data);
    }
}
