<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('home', ['title' => 'Home Page']);
    }

    public function about()
    {
        return view('about', ['title' => 'About Page']);
    }

    public function blog()
    {
        return view('blog', ['title' => 'Blog']);
    }

    public function contact()
    {
        return view('contact',
        [
            'nama' => 'Rest',
            'title' => 'Contact'
        ]);
    }
}
