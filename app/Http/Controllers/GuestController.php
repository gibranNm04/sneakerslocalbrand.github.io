<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function informasi()
    {
        return view('informasi');
    }
    public function pertanyaan()
    {
        return view('pertanyaan');
    }
    public function about()
    {
        return view('aboutme');
    }
}
