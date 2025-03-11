<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;


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
        return view('blog', ['title' => 'Blog', 'posts' => Post::all()]);
    }

    public function contact()
    {
        return view('contact',
        [
            'nama' => 'Rest',
            'title' => 'Contact'
        ]);
    }

    public function SinglePost($id)
    {
        $post = Post::find($id);

        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
