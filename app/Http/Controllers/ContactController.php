<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller {

    public function create()
    {
        return view('home');
    }

    public function store(Request $request){

    $contact = [];

    $contact['name'] = $request->get('name');
    $contact['email'] = $request->get('email');
    $contact['msg'] = $request->get('msg');

    // Mail delivery logic goes here

    flash('Your message has been sent!')->success();

    return redirect()->route('home');

  }

}
