<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{

    
    public function create()
    {
        return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    {

    \Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('admin@sunstone.my');
        $message->to('admin@sunstone.my', 'Admin')->subject('Feedback ?');
    });

  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

}
}
