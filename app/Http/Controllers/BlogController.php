<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = [
            ['title' => '5 Makeup Trends for 2024', 'content' => 'Discover the latest makeup trends.'],
            ['title' => 'How to Choose the Right Lipstick', 'content' => 'Tips for finding your perfect lipstick shade.']
        ];

        return view('blog', ['blogs' => $blogs]);
    }
}
