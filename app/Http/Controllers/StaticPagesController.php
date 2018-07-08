<?php
namespace App\Http\Controllers;

class StaticPagesController
{
    public function about()
    {
        return view('static_pages/about');
    }
    public function help()
    {
        return view('static_pages/help');
    }
    public function index()
    {
        return view('static_pages/index');
    }
}

