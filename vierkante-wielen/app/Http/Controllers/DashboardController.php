<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:admin-dashboard-view|admin-dashboard-create|admin-dashboard-edit|admin-dashboard-delete'], ['only' => ['index', 'show']]);
    }

    public function index()
    {
        // Retrieve the list of registered users
        $users = User::all();

        // Haal de evenementen op uit de database
        $events = array();
        $bookings = Booking::all();

        foreach ($bookings as $booking) {
            $color = null;
            if ($booking->auto_type == 'Schakel' || $booking->auto_type == 'schakel') {
                $color =  'purple';
            } elseif ($booking->auto_type == 'Automaat' || $booking->auto_type == 'automaat') {
                $color =  'darkblue';
            } elseif ($booking->auto_type == 'Handicapt' || $booking->auto_type == 'handicapt') {
                $color =  'red';
            }

            $events[] = [
                'id' => $booking->id,
                'title' => $booking->title,
                'auto_type' => $booking->auto_type,
                'start' => $booking->start_date,
                'end' => $booking->end_date,
                'color' => $color,
                'textColor' => '#CBD5D4',
                'border' => 'green',
            ];
        }

        // Stuur de evenementen naar de view
        return view('dashboard', compact('events', 'users'));
    }

    // Opslaan van een nieuw evenement
    public function store(Request $request)
    {
        // Valideer de invoer
        $request->validate([
            'title' => 'required|string',
            'auto_type' => 'required|string', // Valideer de geselecteerde waarde van de pulldown
            'start_date' => 'required|date_format:Y-m-d H:i',
            'end_date' => 'required|date_format:Y-m-d H:i',
        ]);

        // Maak een nieuwe boeking aan
        $booking = Booking::create([
            'title' => $request->input('title'),
            'auto_type' => $request->input('auto_type'), // Sla de geselecteerde waarde van de pulldown op in de database
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);

        // Geef een succesreactie terug
        return response()->json([
            'id' => $booking->id,
            'start' => $booking->start_date,
            'end' => $booking->end_date,
            'title' => $booking->title,
            'autoType' => $booking->auto_type,
        ]);
    }

    public function update(Request $request, $id)
    {
        // Valideer de invoer
        $request->validate([
            'start_date' => 'required|date_format:Y-m-d H:i',
            'end_date' => 'required|date_format:Y-m-d H:i',
        ]);

        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $booking->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json('Event updated');
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json([
                'error' => 'Unable to locate the booking'
            ], 404);
        }
        $booking->delete();
        return redirect()->back()->with('success', 'Booking deleted successfully');
    }

    public function showOpmerkingen()
    {
        $bookings = Booking::all();

        return view('pages.dashboard.dashboard-opmerkingen', compact('bookings'));
    }
}
