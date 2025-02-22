<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang di Halaman Utama';
    }

    public function about()
    {
        return 'Selamat Datang di Halaman About';
    }

    public function contact(){
        return 'f';
    }
}