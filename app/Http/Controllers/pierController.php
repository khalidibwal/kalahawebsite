<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class pierController extends Controller
{
    public function view() {
        return view('page.pier');
    }
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('pieremail')->insert([
		'names' => $request->names,
		'email' => $request->email,
		'message' => $request->message,
	]);
	// alihkan halaman ke halaman pegawai
    return redirect('/thepierbykalaha')->with(['success' => 'Message Sent Successfully']);
    }
}
