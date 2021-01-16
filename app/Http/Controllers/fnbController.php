<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class fnbController extends Controller
{
    public function view(){
        return view('index');
    }
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('fnbemail')->insert([
		'names' => $request->names,
		'email' => $request->email,
		'message' => $request->message,
	]);
	// alihkan halaman ke halaman pegawai
    return redirect('/fnb')->with(['success' => 'Message Sent Successfully']);
    }
}
