<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $page = 'home';
        return view('visitors.home', compact('page'));
    }

    public function activities()
    {
        $page = 'activities';
        return view('visitors.activity', compact('page'));
    }

    public function realisations()
    {
        $page = 'realisations';
        return view('visitors.realisation', compact('page'));
    }

    public function contact()
    {
        $page = 'contact';
        return view('visitors.contact', compact('page'));
    }
}
