<?php

namespace App\Http\Controllers;
use DB;
use App\Mail\kalathamContact;
use Illuminate\Support\Facades\Mail;
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
    public function store(Request $request){
        DB::table('kalathamcontact')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        $data = array(
            'name' => $request->name, 
            'email' => $request->email,
            'message' => $request->message,
        );
        Mail::to("khalidblacklist@gmail.com")->send(new kalathamContact($data));
        return redirect('/contactuskalatham')->with(['kalatham_success' => 'Message Successfully sent']);
    }
}
