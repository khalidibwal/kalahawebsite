<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class denController extends Controller
{
    public  function view() {
        return view('page.den');
    }
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('denemail')->insert([
		'names' => $request->names,
		'email' => $request->email,
		'message' => $request->message,
	]);
	// alihkan halaman ke halaman pegawai
    return redirect('/Denofkalaha')->with(['success' => 'Message Sent Successfully']);
    }
}
