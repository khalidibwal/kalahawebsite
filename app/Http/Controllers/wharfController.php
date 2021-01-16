<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class wharfController extends Controller
{
    public function view() {
        return view('page.wharf');
    }
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('wharfemail')->insert([
		'names' => $request->names,
		'email' => $request->email,
		'message' => $request->message,
	]);
	// alihkan halaman ke halaman pegawai
    return redirect('/wharf')->with(['success' => 'Message Sent Successfully']);
    }
}
