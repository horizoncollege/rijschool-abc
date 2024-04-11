<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return back()->with('success', 'Bedankt voor uw bericht! We zullen spoedig contact met u opnemen.');
    }

    public function index()
{
    $contacts = Contact::all();
    return view('dashboard.contact.index', compact('contacts'));
}

}
