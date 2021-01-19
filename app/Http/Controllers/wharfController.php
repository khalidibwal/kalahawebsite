<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mail\WharfMail;
use App\Mail\WharfReserve;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;

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
    $data = array(
        'names'      =>  $request->names,
        'message'   =>   $request->message,
        'email' => $request->email
    );
    //Send Email
    Mail::to("khalidblacklist@gmail.com")->send(new WharfMail($data));
	// alihkan halaman ke halaman awal
    return redirect('/wharf')->with(['success' => 'Message Sent Successfully']);
    }

    public function reservation(Request $request){
        // insert data ke table awal
        
	DB::table('wharfreservations')->insert([
		'first_name' => $request->first_name,
		'last_name' => $request->last_name,
		'email' => $request->email,
		'dates' => $request->dates,
		'phone' => $request->phone,
		'times' => $request->times,
		'message' => $request->message,
		'people' => $request->people
    ]);
    $data = array(
        'first_name' => $request->first_name,
		'last_name' => $request->last_name,
		'email' => $request->email,
		'dates' => $request->dates,
		'phone' => $request->phone,
		'times' => $request->times,
        'message' => $request->message,
        'people' => $request->people
    );
    //Send Email
    Mail::to("khalidblacklist@gmail.com")->send(new WharfReserve($data));
	// alihkan halaman ke halaman pegawai
    return redirect('/wharf')->with(['success' => 'Reservation has been successfully sent']);
    }
}
