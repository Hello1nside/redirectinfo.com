<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dbfx\LaravelStrapi\LaravelStrapi;

class IndexController extends Controller
{
    public function index(LaravelStrapi $laravelStrapi) {
        // Template: https://jamstackthemes.dev/demo/theme/nextjs-landing-page-template/
//        $articles = $laravelStrapi->collection('articles');
//        $redirects = $laravelStrapi->entriesByField('articles', '_locale', 'en');
//        $home = $laravelStrapi->single('homepage');
//        dd(['redirects' => $redirects, 'home' => $home]);

        return view('pages.index');
    }
}
