<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalathamController extends Controller
{
    public function view() {
        return view('kalatham.index');
    }
    public function about(){
        return view('kalatham.page.about');
    }
    public function gallery(){
        return view('kalatham.page.gallery');
    }
    public function contact(){
        return view('kalatham.page.contact');
    }
}
