<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalathamController extends Controller
{
    public function view() {
        return view('kalatham.index');
    }
}
