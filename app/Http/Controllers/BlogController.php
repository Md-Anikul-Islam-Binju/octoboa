<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('frontend.pages.blog.blog');
    }

    public function blogDetails()
    {
        return view('frontend.pages.blog.blogDetails');
    }
}
