<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormulierController extends Controller
{
    public function createFormulier()
    {
        return view('formulier');
    }

    public function opslaanGegevens(Request $request)
    {
        $user = $request->validate([
            'voornaam' => 'required|string|max:255',
            'achternaam' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobiel' => 'required|string|max:255',
            'plaats' => 'required|string|max:255',
            'postcode' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            'opmerkingen' => 'nullable|string|max:255',
        ]);

        User::create($user);

        return redirect('/gegevens');
    }

    public function gegevensTonen()
    {
        $gebruikers = User::all();
        return view('gegevens', ['gebruikers' => $gebruikers]);
    }
}
