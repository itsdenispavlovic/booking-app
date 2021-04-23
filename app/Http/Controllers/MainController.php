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

    public function showNode($page)
    {
        $nodeSlug = str_replace(array(".php", ".html"), "", $page);

        if(view()->exists('main.' . $nodeSlug))
        {
            return view('main.' . $nodeSlug);
        }
        else
        {
            abort(404);
        }
    }
}
