<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function aboutUs()
    {
        return view('main.about-us');
    }

    public function contact()
    {
        return view('main.contact');
    }
}
