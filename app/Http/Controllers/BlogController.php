<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function mostrarBlog()
    {
        $blogs = Blog::all();
        return view('blogs', ['blogs' => $blogs]);
    }
    
}