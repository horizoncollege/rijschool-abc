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
        $contacts = Contact::latest()->get();
        return view('pages.dashboard.dashboard-contact', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('dashboard-contact')->with('success', 'Contactformulier succesvol verwijderd.');
    }
}
