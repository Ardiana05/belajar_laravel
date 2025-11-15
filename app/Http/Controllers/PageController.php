<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('beranda');
    }

    public function about(): \Illuminate\Contracts\View\View
    {
        return view('about');
    }
}