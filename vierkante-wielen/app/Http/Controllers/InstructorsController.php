<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Zorg ervoor dat je het juiste model importeert

class InstructorsController extends Controller
{
    public function index()
    {
        // $contacts = Contact::latest()->get();
        // return view('pages.dashboard.dashboard-contact', compact('contacts'));
    }

    public function store(Request $request)
    {


        // Valideer de gegevens van het formulier
        $request->validate([
            'name' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'password' => 'required|min:8|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:255',
            'zip_code' => 'required|string|max:7',
            'city' => 'required|string|max:255',
        ]);
        // Maak een nieuwe instructeur instantie
        $instructor = new User();
        $instructor->name = $request->input('name');
        $instructor->email = $request->input('email');
        $instructor->password = bcrypt($request->input('password'));
        $instructor->adres = $request->input('adres');
        $instructor->phone = $request->input('phone');
        $instructor->date_of_birth = $request->input('date_of_birth');
        $instructor->gender = $request->input('gender');
        $instructor->zip_code = $request->input('zip_code');
        $instructor->city = $request->input('city');

        // Sla de instructeur op in de database
        $instructor->save();
        $instructor->assignRole('Rijinstructeur');

    }

    public function destroy($id)
    {
        // Zoek de instructeur op basis van de id
        $instructor = User::findOrFail($id);

        // Verwijder de instructeur
        $instructor->delete();

        // Redirect naar een andere pagina (bijvoorbeeld de lijst met instructeurs)
        return redirect()->route('instructors.index')->with('success', 'Instructeur succesvol verwijderd.');
    }

    public function create()
    {
        return view('pages.dashboard.instructors-create');
    }

}
