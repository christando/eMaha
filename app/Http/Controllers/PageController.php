<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function student()
    {
        return view('student');
    }

    public function contact()
    {
        return view('contact');
    }
}
