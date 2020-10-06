<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactController extends Controller
{


    public function contact()
    {
        return view('frontend.emails.contact-us');
    }


    public function store(Request $request)
    {


    	$contact=new Contact();
    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->msg = $request->msg;
    	$contact->subject = $request->subject;
    	$contact->save();

    	$data=array(

    	'name' => $request->name,
    	'email' => $request->email,
    	'msg' => $request->msg,
    	'subject' => $request->subject

    	);



    	$mail=Mail::send('frontend.emails.contact',$data,function($message) use($data) {
    		$message->from('sazedur936@gmail.com','Sazedur-Porfolio');
    		$message->to($data['email']);
    		$message->subject('Thanks for Contact me, I will knock you very soon !!');
    	});

       

    	return back()->with('success','Your message Sent successfully !!');
    }
}
