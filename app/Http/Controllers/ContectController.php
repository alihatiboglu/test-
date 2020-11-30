<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class ContectController extends Controller
{
    
	public function __construct() {
		$this->middleware('auth');
	}

	public function contact() {
		return view('contact');
	}

	public function mail(Request $request) {

		$user = Auth::user();
		
		$data = [
			'name' => $user->name,
			'subject' => $request->subject,
			'msg' => $request->message,
		];

		Mail::send('emails.contact', $data, function($message) {
			$message->to('Soltan_algaram41@yahoo.com', 'Ebrahem Samer')->subject('User Contact');
		});	

	}

}
