<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gebruiker;

class FormulierController extends Controller
{
    public function createFormulier()
    {
        return view('formulier');
    }

    public function opslaanGegevens(Request $request)
    {
        $request->validate([
            'voornaam' => 'required|string|max:255',
            'achternaam' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobiel' => 'required|string|max:255',
            'plaats' => 'required|string|max:255',
            'postcode' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            'opmerkingen' => 'nullable|string|max:255',
        ]);

        Gebruiker::create([
            'voornaam' => $request->voornaam,
            'achternaam' => $request->achternaam,
            'email' => $request->email,
            'mobiel' => $request->mobiel,
            'plaats' => $request->plaats,
            'postcode' => $request->postcode,
            'adres' => $request->adres,
            'opmerkingen' => $request->opmerkingen,
        ]);

        return redirect('/gegevens');
    }

    public function gegevensTonen()
    {
        $gebruikers = Gebruiker::all();
        return view('gegevens', ['gebruikers' => $gebruikers]);
    }
}
