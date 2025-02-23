<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hellooo() {
        return 'Hello WORLD';
        }

    public function greeting(){
        return view('blog.hello')
            ->with('name','Agung')
            ->with('occupation','Astronaut');
    }
}
