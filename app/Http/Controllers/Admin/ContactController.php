<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::where('status', 0)->get();
        return view('admin.contact_index', ['contact' => $contact]);
    }

    public function updateStatus(Request $request)
    {
        $contact = Contact::find($request['id']);

        $contact->status = 1;

        $contact->save();
        return redirect()->route('contact_index');
    }
}
