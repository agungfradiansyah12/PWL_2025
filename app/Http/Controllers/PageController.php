<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang di Halaman Utama';
    }

    public function aboutt()
    {
        return 'Selamat Datang di Halaman About';
    }

    public function articles($id){
        return "Halaman artikel dengan ID $id";
    }
}