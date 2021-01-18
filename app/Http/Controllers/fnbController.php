<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class fnbController extends Controller
{
    public function view(){
        return view('index');
    }
    public function store(Request $request)
    {
	// insert data ke table web
	DB::table('fnbemail')->insert([
		'names' => $request->names,
		'email' => $request->email,
		'message' => $request->message,
    ]);
    $data = array(
        'names'      =>  $request->names,
        'message'   =>   $request->message,
        'email' => $request->email
    );
    //Send Email
    Mail::to("khalidblacklist@gmail.com")->send(new SendMail($data));
	// alihkan halaman ke halaman awal
    return redirect('/fnb')->with(['success' => 'Message Sent Successfully']);
    }
}
