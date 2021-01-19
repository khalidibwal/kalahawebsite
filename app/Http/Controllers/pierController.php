<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PierReserve;
use Illuminate\Support\Facades\Mail;
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

    public function reservation(Request $request){
        // insert data ke table awal
        
	DB::table('pierreservations')->insert([
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
    Mail::to("khalidblacklist@gmail.com")->send(new PierReserve($data));
	// alihkan halaman ke halaman pegawai
    return redirect('/thepierbykalaha')->with(['success' => 'Reservation has been successfully sent']);
    }
}
