<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{


      public function index() {

    	return view('portfolio.contact');
    }


    public function contact(Request $request) {

    	$this -> validate($request, [

    		'name' => 'required',
            'email' => 'required|email',
    		'subject' => 'required',
    		'message' => 'required'
    	]);

    	$data = array(
    		'name'      => $request -> name,
            'email'     => $request -> email,
            'subject'   => $request -> subject,
    		'bodyMessage' => $request -> message
    	);

        Mail::send('dynamic_email_template', $data, function($message) use ($data) {

            $message -> from($data['email']);
            $message -> to('majumdertimber1@gmail.com');
            $message -> subject($data['subject']);
        });

    	return back() -> with('success', 'Thanks for contacting us!');
	}

}
