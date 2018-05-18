<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class InicioController extends Controller
{
	//
	public function index()
	{
		return view('inicio');
	}
	
	public function store(Request $request)
	{
		Mail::send('emails.new', ['data'=>$request], function($message) use ($request){
			$message->from('ventas@contapp.com.co', 'Contapp')
					->to('mauroziux@gmail.com', $request->name)
					->subject('From SparkPost with ❤');
		});
		
		return redirect('/');
	}
}
