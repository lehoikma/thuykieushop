<?php

namespace App\Http\Controllers\Member;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member.contact_index');
    }

    public function saveContact(ContactRequest $request)
    {
        $contact = Contact::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'tel' => $request['tel'],
            'email'=> $request['email'],
            'content'=> $request['comments'],
            'status'=> 0
        ]);
       return redirect()->route('contact_done');
    }

    public function done()
    {
        return view('member.contact_done');
    }

}
