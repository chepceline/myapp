<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function blog()
    {
        return view('blog');
    }
    public function team()
    {
        return view('team');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function blog_details()
    {
        return view('blog_details');
    }
}
